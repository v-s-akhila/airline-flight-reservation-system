
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE AIRPORT</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
<h1>UPDATE AIRPORT</h1>
    <form method="post" action="/edit">
    @csrf
        <table>
            
                <td><input type="hidden" name="id" value="{{$data->id}}"></td>
            
            <tr>
                <th>AIRPORT NAME:</th>
                <td><input type="text" name="name" value="{{$data->name}}" ></td>
            </tr>
            <tr>
                <th>ABREVIATION:</th>
                <td><input type="text" name="abreviation" value="{{$data->abreviation}}" ></td>
            </tr>
            <tr>
                <th>CITY:</th>
                <td><input type="text" name="city" value="{{$data->city}}" ></td>
            </tr>
            <tr>
                <th>STATE:</th>
                <td><input type="text" name="state" value="{{$data->state}}" ></td>
            </tr>
            <tr>
                <th>ZIP CODE:</th>
                <td><input type="text" name="zipcode" value="{{$data->zipcode}}" ></td>
            </tr>
            <tr>
                <th>TIMEZONE:</th>
                <td><input type="text" name="timezone" value="{{$data->timezone}}" ></td>
            </tr>
            <tr>
                <td><input type="submit" value="update"></td>
            </tr>
        </table>
    </form>    
</body>
</html>






