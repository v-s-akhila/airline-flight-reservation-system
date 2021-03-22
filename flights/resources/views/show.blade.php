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

  </style>
</head>
<body>
@include('dash')
<br><br><br><br><br><br>
    <h1>Check Your Details</h1><br><br>
<div class="container"><form action="{{ url('check') }}" method="get">
<table align="center">
<tr><th>Personal Information</th></tr>
       <tr>
       <td>Name</td><td><input type="text" name="name" value="{{ $fname }}"  readonly></td></tr>
       <tr>
       <td>Aadhar Number</td> <td><input type="text" name="adno" value="{{ $adno }}"></td></tr>
       <tr>
       <td>Phone Number</td> <td><input type="text" name="phno" value="{{ $phno }}" readonly></td></tr>
       <tr>
       <td>Email Id</td> <td><input type="email" name="email" value="{{ $email }}" readonly></td></tr>
     <tr><th>Trip Information</th></tr>

     @foreach($flights as $data=>$value)
     
        <tr>
            <!-- <input type="hidden" name="fid" value="{{ $value->id }}"> -->
            <td>Flight no:</td><td><input type="text" name="fno" value="{{ $value->fno }}"></td>
            <td>Flight Name:</td><td><input type="text" name="fname" value="{{ $value->fname }}"></td>
        </tr>
        <tr>
            <td>departure place:</td><td><input type="text" name="depp" value="{{$value->departure}}"></td>
            <td>arrival place:</td><td><input type="text" name="arvv" value="{{$value->dest}}"></td>
        </tr>
        <tr>
            <td>departure time:</td><td><input type="time" name="deptime" value="{{$value->deptime}}"></td>
            <td>arrival time:</td><td><input type="time" name="arvtime" value="{{$value->destime}}"></td>
        </tr>
        <tr>
            <td>departure date:</td><td><input type="date" name="depdat" value="{{$value->depdate}}"></td>
            <td>arrival date:</td><td><input type="date" name="arvdate" value="{{$value->desdate}}"></td>
        </tr>
      
         @endforeach
       <td><input type="submit" name="sub" value="Check seats"></td></tr>       
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





