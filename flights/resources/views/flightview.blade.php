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

<table border = "1">
<tr>
<!--/****
*@code for table heading inside table
*@author :Sunu Sukesan
*@date:11/03/2021
****/-->
			<th>FLIGHT ID</th>
			<th>FLIGHT NAME</th>
			<th>FLIGHT NUMBER</th>
			<th>DEPARTURE</th>
			<th>DEPARTURE DATE</th>
			<th>DEPARTURE TIME</th>
			<th>DESTINATION</th>
			<th>DESTINATION DATE</th>
			<th>DESTINATION TIME</th>
			<th>TOTAL BUSSINESS CLASS SEATS</th>
			<th>TOTAL FIRST CLASS SEATS</th>
            <th>TOTAL ECONOMIC CLASS SEATS</th>
			<th>COST FOR FIRST CLASS</th>
            <th>COST FOR BUSINESS CLASS</th>
            <th>COST FOR ECONOMIC CLASS</th>
			<th>CLICK</th>

</tr>
<!--/****
*@code for fetching values from table
*@author :Sunu Sukesan
*@date:11/03/2021
****/-->
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->fno }}</td>
<td>{{ $user->fname }}</td>
<td>{{ $user->departure }}</td>
<td>{{ $user->depdate }}</td>
<td>{{ $user->deptime }}</td>
<td>{{ $user->dest }}</td>
<td>{{ $user->desdate }}</td>
<td>{{ $user->destime }}</td>
<td>{{ $user->bseat }}</td>
<td>{{ $user->fseat }}</td>
<td>{{ $user->eseat }}</td>
<td>{{ $user->fcost}}</td>
<td>{{ $user->bcost}}</td>
<td>{{ $user->ecost}}</td>
<td><a href={{"web/".$user->id}}>Book now</a></td>
</tr>
@endforeach
</table>

</body>
</html>