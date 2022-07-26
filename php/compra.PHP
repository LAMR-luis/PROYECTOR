<!Doctype   html>
<htmal lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="../css/style1.css">
        <link rel="stylesheet" href="../css/styles.css">
        <title>Pago en linea</title>
        <script src="https://www.paypal.com/sdk/js?client-id=Adxz_Ju6-UpTFJjYz9VDm7ievbFDAc3YYbFlrsrMbXeIutQ5Gtjg4t6bTMOhlPqemzp5ZOawSZE9gi3R&currency=MXN"></script>
    <!-- Set up a container element for the button -->
   
    

            </head>
            <header class="container-fluid bg-dark position-sticky top-0">
		<script src="https://kit.fontawesome.com/7541ec7306.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/7541ec7306.js" crossorigin="anonymous"></script>
        
            <!-- Header -->
                <div class="header-options full-box">
                    <nav class="header-navbar full-box poppins-regular font-weight-bold">
                        <ul class="list-unstyled full-box">
                            <li>
                                <a href="../html/index.html">Inicio<span class="full-box"></span></a>
                            </li>
                            <li>
                                <a href="../html/menu.html">Continua comprando<span class="full-box"></span></a>
                            </li>
                            
                        </ul>
                    </nav>
                    
                </div>
            </header>
            <body><center><br><br><br><br>
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
 window.location.href="../php/completado.php"
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