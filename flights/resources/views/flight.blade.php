<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
	form
	{
		border:2px solid;
		margin-left:400px;
		width:400px;
		text-align:center;

	}
	input
	{
		padding:5px;
		margin:15px;
	}
	
</style>
</head>
<body>
@include('admdash')
<br><br><br>
	<a href="">GO HOME</a>
	<form name="myform" action="regist" method="post">
	@csrf
		<table>
			<h1>FLIGHT DETAILS</h1>
			<tr><td>
				FLIGHT NAME:</td><td><input type="text" name="fno" placeholder="FLIGHT NO" pattern=".{3,}"   required title="3 characters minimum" maxlength="25">
                @error('fno'){{$message}} @enderror</span></td></tr>
			<tr><td>
				FLIGHT NO:</td><td><input type="text" name="fname"  placeholder="FLIGHT NAME" pattern=".{3,}"   required title="3 characters minimum"  maxlength="10">
                @error('fname'){{$message}} @enderror</span></td></tr>
			<tr><td>
				DEPARTURE:</td><td><select name="departure">
					<option>TRIVANDRUM</option> 
					<option>KOCHI</option> 
					<option>KOZHIKODE</option> 
					<option>KANNUR</option> 
				</select>
				</td></tr>
				<tr><td>
				DEPARTURE DATE:</td><td><input type="date" name="depdate">
					</td></tr>
			<tr><td>
				DEPARTURE TIME:</td><td><input type="time" name="deptime">
					</td></tr>
			<tr><td>
				DESTINATION:</td><td><select name="dest">
					<option>TRIVANDRUM</option> 
					<option>KOCHI</option> 
					<option>KOZHIKODE</option> 
					<option>KANNUR</option> 
				</select>
				</td></tr>
			<tr><td>
				DESTINATION DATE:</td><td><input type="date" name="desdate">
				@error('desdate'){{$message}} @enderror</span></tr></td></tr>
			    <tr><td>
				DESTINATION TIME:</td><td><input type="time" name="destime">
				@error('destime'){{$message}} @enderror</span></tr></td></tr>
			    <tr><td>
				 BUSSINESS CLASS TOTAL SEATS:</td><td><input type="text" name="bseat" required></td>
                 @error('bseat'){{$message}} @enderror</span></tr>
				<tr><td>	
				FIRST CLASS TOTAL SEATS:</td><td><input type="text" name="fseat" required>
                @error('fseat'){{$message}} @enderror</span></td></tr>
				<tr><td>	
				ECONOMIC CLASS TOTAL SEATS:</td><td><input type="text" name="eseat" required>
                @error('eseat'){{$message}} @enderror</span></td></tr>
                <tr><td>
				COST FOR FIRST CLASS:</td><td><input type="text" name="fcost" required>
                @error('fcost'){{$message}} @enderror</span></td></tr>
				<tr><td>	
				COST FOR BUSSINESS CLASS:</td><td><input type="text" name="bcost" required>
                @error('bcost'){{$message}} @enderror</span></td></tr>
				<tr><td>	
                COST FOR ECONOMIC CLASS:</td><td><input type="text" name="ecost" required>
                @error('ecost'){{$message}} @enderror</span></td></tr>
				</table>
				<input type="submit" name="submit" align="center">
	</form>
				>

</body>
</html>