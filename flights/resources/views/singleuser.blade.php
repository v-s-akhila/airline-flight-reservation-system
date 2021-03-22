
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
    body {font-family: Arial, Helvetica, sans-serif;
  background-image:url('../img/su.jpg');
   background-size:cover;
}
  </style>
</head>
<body>
@include('dash')
<br><br><br><br><br><br>
    <table align="center">
    <center>
			<h1>Booking Details</h1>
			<tr><td>
				First Name:</td><td><input type="text" name="name"   value="{{ $fname }}" readonly></td></tr>
            <tr><td>
				Last Name:</td><td><input type="text" name="name"   value="{{ $lname }}" readonly></td></tr>

                <tr><td>
				Address:</td><td><input type="text" name="name"   value="{{ $address }}" readonly></td></tr>
                <tr><td>
				Phone Number:</td><td><input type="text" name="name"   value="{{ $phno }}" readonly></td></tr>
                <tr><td>
				Email:</td><td><input type="text" name="name"   value="{{ $email }}" readonly></td></tr>
</tr>
</table>
<table align="center">
            <tr><td>
            @foreach($flights as $data=>$value)
            <tr><td>
                           <input type="hidden" name="flid" value="{{ $value->id }}">
				FLIGHT Name:</td><td><input type="text" name="flightname"   value="{{ $value->fname }}" readonly></td></tr>
            <tr><td>
                           
				Departure:</td><td><input type="text" name="departure"   value="{{ $value->departure }}" readonly></td></tr>
           
            <tr><td>            
				Arrival:</td><td><input type="text" name="arrival"   value="{{ $value->dest }}" readonly></td></tr>
        @endforeach	
        </form>
    
        </center>

    </div>
    
  </div>
</div>
</body>
</html>



