<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Details</title>
</head>
<body>
@include('admdash')
<br><br><br>
<!--/****
*@code for getting values in the updation form
*@author :Sunu Sukesan
*@date:11/03/2021
****/-->
        
    <center><form action="/update" method="get">
    @csrf
    <h3> UPDATE FLIGHT DETAILS</h3>
   <table>
    <input type="hidden" name="id" value="{{ $user->id }}">
    <tr><td>
		FLIGHT NO:</td>  <td><input type="text" name="fno"  placeholder="flight no" value="{{ $user->fno  }}" readonly></td></tr>
        <tr><td>
		FLIGHT NAME:</td>  <td><input type="text" name="fname"  placeholder="flight name" value="{{ $user->fname }}" readonly></td></tr>
        <tr><td>
		DEPARTURE:</td>  <td><input type="text" name="departure"placeholder="departure" value="{{ $user->departure }}"></td></tr>
        <tr><td>
		DEPARTURE DATE:</td>  <td><input type="text" name="depdate" placeholder="departure  date" value="{{ $user->depdate }}"></td></tr>
        <tr><td>
		DEPARTURE TIME:</td>  <td><input type="text" name="deptime"  placeholder="departure time" value="{{ $user->deptime }}"></td></tr>
        <tr><td>
		DESTINATION:</td>  <td><input type="text" name="dest" placeholder="destination" value="{{ $user->dest }}"></td></tr>
        <tr><td>
		DESTINATION DATE:</td>  <td><input type="text" name="desdate"  placeholder="destination date" value="{{ $user->desdate}}"></td></tr>
        <tr><td>
	    DESTINATION TIME:</td>  <td><input type="text" name="destime"  placeholder="arrival time" value="{{ $user->destime }}"></td></tr>
        <tr><td>
		BUSSINESS CLASS SEAT:</td>  <td><input type="text" name="bseat"  placeholder="bussiness class seat" value="{{ $user->bseat }}"></td></tr>
        <tr><td>
		FIRST CLASS SEAT:</td>  <td><input type="text" name="fseat"  placeholder="first class seat" value="{{ $user->fseat }}"></td></tr>
        <tr><td>
        ECONOMIC SEAT:</td>  <td><input type="text" name="eseat"  placeholder="economic seat" value="{{ $user->eseat }}"></td></tr>
        <tr><td>
		FIRST CLASS COST:</td>  <td><input type="text" name="fcost"  placeholder="first class cost" value="{{ $user->fcost }}"></td></tr>
        <tr><td>
		BUSSINESS CLASS COST:</td>  <td><input type="text" name="bcost"  placeholder="bussiness class cost" value="{{ $user->bcost }}"></td></tr>
        <tr><td>
		ECONOMIC SEAT COST:</td>  <td><input type="text" name="ecost"  placeholder="economic class seat" value="{{ $user->ecost }}"></td></tr>
        <br>
       <tr><td></td> <td><input type="submit"  value="update" name ="update"></button></td></tr> 
    </form>
    </table>
</body>
</html>