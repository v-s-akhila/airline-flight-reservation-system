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
			<center><form class="py-5" action="pay" method="get">

			@foreach($flights as $data=>$value)
		<table>
    <br><br>
			<h1>CHECK SEAT AVAILABILITY</h1><br><br>
			<tr><td>
				<!-- FLIGHT ID:</td><td><input type="text" name="flid"   value="{{ $value->id }}" disabled="true"> --></td></tr>
			<tr><td>
				AVAILABLE BUSINESS SEAT:</td><td><input type="text" name="baseat"   value="{{ $value->bseat }}" readonly></td></tr>
			<tr><td>
				AVAILABLE ECONOMIC SEAT:</td><td><input type="text" name="easeat"value="{{ $value->eseat }}" readonly></td></tr>
				<tr><td>
				AVAILABLE FIRSTCLASS SEAT:</td><td><input type="text" name="faseat" value="{{ $value->fseat }}" readonly></td></tr>

			@endforeach	
			<tr><td>
				SELECT CLASS:</td><td><input type="radio" name="class" value="ecnomic">Ecnomic
                                     <input type="radio" name="class" value="business">Business
                                     <input type="radio" name="class" value="first">First</td></tr>

				</tr>

				
				<tr><td colspan="2" ><input type="submit" value="click to view your cost" align="center"></td></tr>


				
					
		</table>
		</form>
		</section>

</body>
</html>