<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password], input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus , input[type=email]:focus {
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
  width: 80%; /* Could be more or less, depending on screen size */
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
<div>
@if(session()->get('msg'))
    <div class="alert alert-sucess alert-dismissible fade show" role="alert">
    {{ session()->get('msg') }}
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
</div>
  @endif
<div><form action="/booked">
<table align="center">
    @csrf
       <tr>
       <td>Name</td> <td><input type="text" name="name" value="{{ $lname }}" placeholder="Enter the function" required></td></tr>
       <tr>
       <td>Address</td> <td><input type="text" name="addr" value="{{ $fname }}"></td></tr>
       <tr>
       <td>Age</td> <td><input type="text" name="city" value="{{ $age }}"></td></tr>
       <tr>
       <td>Gender</td>  <td><input type="text" name="pin" value="{{ $gender }}"></td></tr>
       <tr>
       <td>Address</td>  <td><input type="text" name="pin" value="{{ $address }}"></td></tr>
       <tr>
       <td>Phone Number</td> <td><input type="text" name="phno" value="{{ $phno }}"></td></tr>
       <tr>
       <td>Aadhar Number</td> <td><input type="text" name="phno" value="{{ $adno }}"></td></tr>
       <tr>
       <td>Email Id</td> <td><input type="text" name="email" value="{{ $email }}"></td></tr>
      <tr>
       <td>Function For</td> <td><input type="text" name="fun" placeholder="Enter the function" required></td></tr>       
       <tr>
       <td>Date For</td> <td><input type="date" name="dat" placeholder="Enter the date" required></td></tr>       
 
       <tr>
       <td><button type="submit">Next Phase</button></td></tr>       

<div><a href="/dash">Back</a></div>
</div>
</table>
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





