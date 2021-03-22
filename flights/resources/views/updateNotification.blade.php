@include('admdash')
<br><br><br>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE FLIGHT NOTIFICATION</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
</head>
<body>

   <center> <form method="post" action="/edit_noti">
   <h1>UPDATE NOTIFICATION</h1>
    @csrf
        <table>
            
                <td><input type="hidden" name="id" value="{{$data->id}}"></td>
            
            <tr>
                <th>FLIGHT NUMBER:</th>
                <td><input type="text" name="number" value="{{$data->number}}" ></td>
            </tr>
            <tr>
                <th>FLIGHT NAME:</th>
                <td><input type="text" name="name" value="{{$data->name}}" ></td>
            </tr>
            <tr>
                <th>DEPARTURE DATE:</th>
                <td><input type="text" name="date" value="{{$data->date}}" ></td>
            </tr>
            <tr>
                <th>NOTIFICATION:</th>
                <td><input type="text" name="notification" value="{{$data->notification}}" ></td>
            </tr>
            <tr>
                <td><input type="submit" value="update"></td>
            </tr>
        </table>
    </form>    
</body>
</html>






