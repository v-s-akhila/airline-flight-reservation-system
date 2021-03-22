@include('admdash')
<br><br><br>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIRPORT NOTIFICATION VIEW</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/.min.css')}}">
    
</head>
<center><body>
    <h1>FLIGHT NOTIFICATION</h1>
    <table border="2">
        <tr>
            <th>id</th>
            <th>FLIGHT NUMBER</th>
            <th>FLIGHT NAME</th>
            <th>DEPARTURE DATE</th>
            <th>NOTIFICATION</th>
            
        </tr>
        @foreach($user as $value)
        <tr>
            <td>{{$value['id']}}</td>
            <td>{{$value['number']}}</td>
            <td>{{$value['name']}}</td>
            <td>{{$value['date']}}</td>           
            <td>{{$value['notification']}}</td> 
            <td><a href={{"deletenoti/".$value['id']}}>DELETE</a>|<a href={{"updatenoti/".$value['id']}}>UPDATE</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
