<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
  font-size: 17px;
  background-image:url('../img/');
  background-repeat: no-repeat;
  background-size:cover;
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

.content {
  position: fixed;
  bottom: 100;
  background: rgba(0, 0, 0, 0.2);
  color: white;
  width: 100%;
  padding: 0px;
  height:70px;
  text-align:right;
}

#myBtn {
  background: rgba(0, 0, 0, 0.2);
  font-size: 18px;
  padding: 10px;
  border: none;
  cursor: pointer;
  text-align:right;
 color:white;
}
a
{

  text-decoration:none;
}
#myBtn:hover {
  background: #ddd;
  
}
a
{
color:white;
}
img
{
  width:50px;
  height:50px;
  float:left;
}
</style>
</head>
<body>

<video autoplay muted loop id="myVideo">
  <source src="img/air.mp4" type="video/mp4">
  
</video>

<div class="content"><br>
<img src="img/log.jpg" alt="">
<a href="#">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="/log">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="/reg">Register</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="/protocol">Protocol</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="/services">Services</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="/about">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="/contact">Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;
 <br><br><br><br><br><br><h1 align="center">Airline Flight Reservation System</h1><br><br><br><br><br><br><br><br>
    <!-- <button id="myBtn" onclick="myFunction()" align="center"><a href="#">Home</a></button>
  <button id="myBtn" onclick="myFunction()" align="center"><a href="/log">Login</a></button>
  <button id="myBtn" onclick="myFunction()" align="center"><a href="/reg">Register</a></button> -->
@include('srch')
</div>

</script>

</body>
</html>
