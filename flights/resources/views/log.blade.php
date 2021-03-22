<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body 
  {
     font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  font-family: Arial;
  font-size: 17px;
  background-image:url('../img/l1.jpg');
  background-repeat: no-repeat;
  background-size:cover;
}


a{
  text-decoration:none;
  color:white;
}
.psw{
  width:100px;
}
/* Full-width input fields */
input[type=email], input[type=password] {
  width: 100%;
  padding: 12px 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 0px;
  height:5px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 5% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 40%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>  
</head>
<body>
@include('nav')
<div class="container">
  @if(session()->get('msg'))
    <div class="alert alert-sucess alert-dismissible fade show" role="alert">
    {{ session()->get('msg') }}
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
</div>
  @endif
<h2 align="center">Login  Here</h2>
  
  <form class="modal-content" action="/login" enctype="multipart/form-data">
  <div class="container">
  <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/n.jpg" alt="Avatar" class="avatar">
    </div>
    <div class="container">
    @csrf
    
    @csrf
    
    <label for="email"><b>Email Address</b></label>
    <input type="email" placeholder="Enter your Valid Emai Address" name="email">
    <span style="color:red">@error('email'){{$message}}@enderror</span><br<br>

    <label for="pass"><b>Your Password</b></label>
    <input type="password" placeholder="Enter your Password" name="pass">
    <span style="color:red">@error('pass'){{$message}}@enderror</span><br<br>
    <button type="submit" name="submit" value="submit">Login</button>
      
    </div>  </form>
    <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><a href="http://127.0.0.1:8000/" align="center"> Back</a></button>    
      <span class="psw"><button>Forgot Password?</button></span>
      </div>
    </div>
  </form>
</div>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
