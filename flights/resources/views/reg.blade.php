<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;
  background-image:url('../img/r2.jpg');
   background-size:cover;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
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
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

.containers {
  padding: 0px;
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
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 40%; /* Could be more or less, depending on screen size */
  float:center;
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
@include('nav')
<div class="containers">
  @if(session()->get('msg'))
    <div class="alert alert-sucess alert-dismissible fade show" role="alert">
    {{ session()->get('msg') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
</div>
  @endif
  <h1>Register Here</h1>
  <form class="modal-content" action="/create" enctype="multipart/form-data">
  <div class="container">
  @csrf
  
  <label for="fname"><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="fname" value="{{ old('fname') }}">
      <span style="color:red">@error('fname'){{$message}}@enderror</span><br><br>

      <label for="lname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name="lname" value="{{ old('lname') }}">
      <span style="color:red">@error('lname'){{$message}}@enderror</span><br><br>

      <label for="age"><b>Age</b></label>
      <input type="text" placeholder="Enter your age" name="age" value="{{ old('age') }}" >
      <span style="color:red">@error('age'){{$message}}@enderror</span><br><br>

      <label for="gender"><b>Gender</b></label>
      <input type="text" placeholder="Enter your Gender" name="gender" value="{{ old('gender') }}" >
      <span style="color:red">@error('gender'){{$message}}@enderror</span><br><br>

      <label for="address"><b>Address</b></label>
      <input type="text" placeholder="Enter your Pincode" name="address" value="{{ old('address') }}">
      <span style="color:red">@error('address'){{$message}}@enderror</span><br><br>

      <label for="phno"><b>Contact Number</b></label>
      <input type="text" placeholder="Enter your Valid Phone nUmber" name="phno" value="{{ old('phno') }}" >
      <span style="color:red">@error('phno'){{$message}}@enderror</span><br><br>

      <label for="adno"><b>Aadhar Number</b></label>
      <input type="text" placeholder="Enter your Valid Aadhar nUmber" name="adno" value="{{ old('adno') }}" >
      <span style="color:red">@error('adno'){{$message}}@enderror</span><br><br>

      <label for="email"><b>Email Address</b></label>
      <input type="text" placeholder="Enter your Valid Emai Address" name="email" value="{{ old('email') }}">
      <span style="color:red">@error('email'){{$message}}@enderror</span><br><br>

      <label for="pass"><b>Password</b></label>
      <input type="password" placeholder="Enter your Password" name="pass" >
      <span style="color:red">@error('pass'){{$message}}@enderror</span><br><br>

      <button type="submit">Register Here</button>  
    </div>
    <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>  
  </form>
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