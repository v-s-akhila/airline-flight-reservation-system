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
       <br><br><br><br>
<h1>Search Flights</h1>
	<form method="post" action="searchf">
	@csrf
		<center><table class="h-10">
			<tr><td>
				DEPARTURE:</td><td><select name="dep">
					<option>TRIVANDRUM</option> 
					<option>KOCHI</option> 
					<option>KOZHIKODE</option> 
					<option>KANNUR</option> 
				</select>
				</td></tr>
			</tr>
			<tr><td>
				DESTINATION:</td><td><select name="dest">
					<option>TRIVANDRUM</option> 
					<option>KOCHI</option> 
					<option>KOZHIKODE</option> 
					<option>KANNUR</option> 
				</select>
				</td></tr>
		<tr>
				<td>DATE</td>
		<td><input type="date" name="date" placeholder="DATE OF JOURNEY"></td>
			</tr>
		<tr>
		<td><input type="submit" name="submit" value="ok"></td>
		</tr>
		</table>
	</form>
	</section>
	
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js">
</body>
</html>