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
    td
    {
      border-radius: 12px;
      height:10px;
      width:20px;
    }
  </style>
</head>
<body>
@include('dash')
<div class="container"><form action="/update">
<br><br><br>
<h2>Update Here!!</h2>
<table align="center">
    @csrf
       <tr>
       <td>First Name</td><td><input type="text" name="fname" value="{{ $fname }}"  required></td></tr>
       <tr>
       <td>Last Name</td> <td><input type="text" name="lname" value="{{ $lname }}"></td></tr>
       <tr>
       <td>Age</td> <td><input type="text" name="age" value="{{ $age }}"></td></tr>
       <tr>
       <td>Gender</td>  <td><input type="text" name="gender" value="{{ $gender }}"></td></tr>
       <tr>
       <td>Address</td> <td><input type="text" name="address" value="{{ $address }}"></td></tr>
       <tr>
       <td>Phone Number</td> <td><input type="text" name="phno" value="{{ $phno }}"></td></tr>
       <tr>
       <td>Aadhar Number</td> <td><input type="text" name="adno" value="{{ $adno }}"></td></tr>

       <tr>
       <td>Email Id</td> <td><input type="email" name="email" value="{{ $email }}"></td></tr>
       <tr>
      <td><button type="submit">Update</button></td></tr>       
</div>
</table>
</form>
</div>


</script>

</body>
</html>