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
  .t
  {
    background-color:pink;
   
    border-style: dashed;
    color:blue;
    text-align:center;
  }
  table
  {

    background-color:pink;
  }

  </style>
</head>
<body>
@include('dash')
<br><br><br><br><br><br>
<center><form class="py-5" action="#" method="get">
<br><br>
<h3> HI....{{ $fname }} {{ $lname }} YOUR TICKET GENERATED...</h3><br><br><br><br>

<div>
		<table class="t">
    
			<tr>
                <td><input type="text" name="name"   value="{{ $fname }}" readonly></td>
			     <td><input type="text" name="name"   value="{{ $lname }}" readonly></td></tr>
             <tr>
                <td><input type="text" name="name"   value="{{ $phno }}" readonly></td>
                <td><input type="text" name="name"   value="{{ $email }}" readonly></td>
            </tr>

            @foreach($flights as $data=>$value)
            
            <tr>
                <td><input type="text" name="flightname"   value="{{ $value->fname }}" readonly></td>
			    <td><input type="text" name="departure"   value="{{ $value->departure }}" readonly></td>
            </tr>
             <tr>
                <td><input type="text" name="arrival"   value="{{ $value->dest }}" readonly></td>
                <td><input type="text" name="name"   value="{{ $email }}" readonly></td>
            </tr>           
        
        @endforeach	
        </form>
        </table>
        </div><br><br><br>
        <h3>Thank You For Visit Again</h3>
</body>
</html>