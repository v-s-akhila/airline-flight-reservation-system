<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
background-image:url('../img/s.jpg');
background-size:cover;
    
}

.container {
  position: relative;
  width: 30%;
  display:flex;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #008CBA;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>
</head>
<body>
@include('nav')
<br><br><br><br><br><br><br><br>
<div class="container">
  <img src="img/as.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Travels And Exports</div>
  </div>
</div>


</body>
</html>
