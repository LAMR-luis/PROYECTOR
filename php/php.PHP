<!Doctype   html>
<htmal lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="../css/style1.css">
        <title>Pago en linea</title>
        <script src="https://www.paypal.com/sdk/js?client-id=Adxz_Ju6-UpTFJjYz9VDm7ievbFDAc3YYbFlrsrMbXeIutQ5Gtjg4t6bTMOhlPqemzp5ZOawSZE9gi3R&currency=MXN"></script>
    <!-- Set up a container element for the button -->
   
    

            </head>
            <body><center>
            <div id="paypal-button-container"></div>
    <script>
      paypal.Buttons({
        style:{
            color:'blue',
            shape:'pill',
            label: 'pay',

        },
        createOrder:function(data, actions){
            return actions.order.create({
                purchase_units:[{
                    amount:{
                        value:100
                    }
                }]
            });
        },
        onApprove:function(data,actions){
actions.order.capture().then(function(detalles){
 window.location.href="completado.html"
});
        },
        onCancel: function(data){
            alert("Pago Cancelado")
        }
      }).render('#paypal-button-container');
    </script>
    </center>

            </body>
            </html>