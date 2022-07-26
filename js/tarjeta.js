const express = require("express");
const bodyParser = require("body-parser");
const repository = require("./repository");
const mercadopago = require("mercadopago");
const stripe = require('stripe')('sk_test_51INv9DGMtDPScriX4ycnLpFf8HoE5KmHby031VZOUM4FxNnThA9xEa7SMxGAJCCoCcMYC38MzN58rLkgFuw6CF46003VKBooS3');
const app = express();
const port = process.env.PORT || 3000;

mercadopago.configure({
  access_token:
    "TEST-8840939573547467-020707-248077b0607d89f9d2b67ee11a4f9e27-705632138",
});

app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

app.get("/api/products", async (req, res) => {
  res.send(await repository.read());
});

app.post("/api/pay", async (req, res) => {
  const ids = req.body;
  const productsCopy = await repository.read();

  let preference = {
    items: [],
    back_urls: {
      success: "http://localhost:8080/feedback",
      failure: "http://localhost:8080/feedback",
      pending: "http://localhost:8080/feedback",
    },
    auto_return: "approved",
  };

  let preferenceStripe = {
    payment_method_types: ['card'],
    line_items: [],
    mode: 'payment',
    success_url: "http://localhost:8080/feedback",
    cancel_url: "http://localhost:8080/feedback",
  }

  let error = false;
  ids.forEach((id) => {
    const product = productsCopy.find((p) => p.id === id);
    if (product.stock > 0) {
      product.stock--;
      preference.items.push({
        title: product.name,
        unit_price: product.price,
        quantity: 1,
      });

      preferenceStripe.line_items.push({
        price_data: {
          currency: 'usd',
          product_data: {
            name: product.name,
            images: [`http://localhost:8080/${product.image}`],
          },
          unit_amount: product.price * 100,
        },
        quantity: 1,
      });
    } else {
      error = true;
    }
  });

  if (error) {
    res.send("Sin stock").statusCode(400);
  } else {
    const response = await mercadopago.preferences.create(preference);
    const session = await stripe.checkout.sessions.create(preferenceStripe);

    const preferenceId = response.body.id;
    await repository.write(productsCopy);
    res.send({ preferenceId: preferenceId, sessionId: session.id });
  }
});

app.get('/feedback', function(request, response) {
  
  response.json({
   Payment: request.query.payment_id,
   Status: request.query.status,
   MerchantOrder: request.query.merchant_order_id
 });
});

app.use("/", express.static("fe"));

app.listen(port, () => {
  console.log(`Example app listening at http://localhost:${port}`);
});cd