<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, 

initial-scale=1">
  <link rel="stylesheet" 

href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/

bootstrap.min.css">
  <script 

src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquer

y.min.js"></script>
  <script 

src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bo

otstrap.min.js"></script>
  <style>
 #paypal-payment-button
 {
   width:200px;
 }
  </style>
</head>
<body>
@include('dash')
<br><br><br><br><br><br>
<center>
    <div class="col-sm-8 text-center">
    <h1>Are You Sure To Make Payment??</h1>
        <div id="paypal-payment-button"></div>
<script src="https://www.paypal.com/sdk/js?client-id=AQ1JWZTcrkoex1BOK7MTbG-FBIB93H5LrtEFTeNscQQMYIk0maWBNL5s8y8DyOe6NeRNhPQfG_qwlVc4"></script>
<script>paypal.Buttons({
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details)
            window.location.replace("/success")
        })
    },
    onCancel: function (data) {
        window.location.replace("/ticket")
    }
}).render('#paypal-payment-button');</script>
</center>
</body>
</html>