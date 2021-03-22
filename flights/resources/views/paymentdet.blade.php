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
<form class="py-5" action="paymentAction" method="get">
<h1>Your Fee</h1>
<center>
		<table>
			
			<tr><td>
				Name:</td><td><input type="text" name="name"   value="{{ $fname }}" readonly></td></tr>
             
			<tr><td>
            @foreach($flights as $data=>$value)
            <tr><td>
                           <!-- <input type="hidden" name="flid" value="{{ $value->id }}"> -->
				FLIGHT Name:</td><td><input type="text" name="flightname"   value="{{ $value->fname }}" readonly></td></tr>
            <tr><td>
                           
				Departure:</td><td><input type="text" name="departure"   value="{{ $value->departure }}" readonly></td></tr>
           
            <tr><td>            
				Arrival:</td><td><input type="text" name="arrival"   value="{{ $value->dest }}" readonly></td></tr>
            <tr><td>           
			Class:</td><td><input type="text" name="class"   value="{{ $class }} " readonly></td></tr>
            @if($class=='ecnomic')
                @if($age >= 60)
                    <tr><td>           
                    Amount :</td><td><input type="text" name="cost"   value="{{ $value->ecost -100 }}" readonly></td></tr>
                @else
                    <tr><td>           
                    Amount :</td><td><input type="text" name="cost"   value="{{ $value->ecost }} " readonly></td></tr>
                @endif
            @elseif($class=='business')
                @if($age >= 60)
                    <tr><td>           
                    Amount :</td><td><input type="text" name="cost"   value="{{ $value->bcost -100 }}" readonly></td></tr>
                @else
                    <tr><td>           
                    Amount :</td><td><input type="text" name="cost"   value="{{ $value->bcost }} " readonly></td></tr>
                @endif
            @else
                @if($age >= 60)
                    <tr><td>           
                    Amount :</td><td><input type="text" name="cost"   value="{{ $value->fcost -100 }}" readonly></td></tr>
                @else
                    <tr><td>           
                    Amount :</td><td><input type="text" name="cost"   value="{{ $value->fcost }} " readonly></td></tr>
                @endif
            @endif
			@endforeach	

			<!---<tr><td>
				SELECT CLASS:</td><td><input type="radio" name="class" value="ecnomic">Ecnomic
                                     <input type="radio" name="class" value="business">Business
                                     <input type="radio" name="class" value="first">First</td></tr>

				</tr>--->

				
				 <tr><td colspan="2" ><input type="submit" value="click to view your cost" align="center"></td></tr>


				
					
		</table>
    </center>
		</form>
    
</body>
</html>