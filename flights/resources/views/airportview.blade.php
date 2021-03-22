@include('admdash')
<br><br><br>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airport Details VIEW</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">

</head>
<center><body>
        <h1>AIRPORT DETAILS</h1>
    <table border="">
        <tr>
            <th>id</th>
            <th>AIRPORT NAME</th>
            <th>ABREVIATION</th>
            <th>CITY</th>
            <th>STATE</th>
            <th>ZIPCODE</th>
            <th>TIMEZONE</th>
            <th>ACTION</th>
        </tr>
        @foreach($user as $value)
        <tr>
            <td>{{$value['id']}}</td>
            <td>{{$value['name']}}</td>
            <td>{{$value['abreviation']}}</td>
            <td>{{$value['city']}}</td>           
            <td>{{$value['state']}}</td> 
            <td>{{$value['zipcode']}}</td>
            <td>{{$value['timezone']}}</td> 
            <td><a href={{"delete/".$value['id']}}>DELETE</a>|<a href={{"update/".$value['id']}}>UPDATE</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
