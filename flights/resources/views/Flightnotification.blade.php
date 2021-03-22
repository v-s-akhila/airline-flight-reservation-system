@include('admdash')
<br><br><br>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FLIGHT NOTIFICAION</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">

</head>
<body>
    
   <center> <form action ="insertnoti" method="post">
    @csrf

    <div class="result">
        @if(Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
        @endif

        @if(Session::get('fail'))
                <div class="alert alert-fail">
                    {{ Session::get('fail') }}
                </div>
        @endif

    </div>
   
        <h1>FLIGHT NOTIFICATION </h1>
        <table>
                <div class="form-groop">
                    <tr>
                        <th>Select Flight Number:</th>
                        <td><select  name="number" >
                                <option>--SELECT--</option>
                                @foreach($user as $value)
                                <option value="{{ $value->fno }}">{{ $value->fno }}</option>
                                @endforeach
                            </select></td>
                    </tr> 
                </div> 
                    
                <div class="form-groop">
                    <tr>
                        <th>Select Flight Name:</th>
                        <td><select  name="name" >
                        
                                <option>--SELECT--</option>
                                @foreach ($user as $value)
                                <option value="{{$value->fname}}">{{$value->fname}}</option>
                                @endforeach
                            </select></td>
                           
                    </tr> 
                </div>     
                <div class="form-groop">    
                    <tr>
                        <th>Departure Date:</th>
                        <td><select name="datew" >
                                <option>--SELECT--</option>
                                @foreach ($user as $value)
                                <option value="{{$value->depdate}}">{{$value->depdate}}</option>
                                @endforeach
                               
                            </select>
                            <span class="err"> @error('date'){{$message}}@enderror</span>
                        </td>
                    </tr>
                </div>     
                <div class="form-groop">
                    <tr>
                        <th>Notification:</th>
                        <td><textarea name="notification" placeholder="Add notification" ></textarea></td>
                        <span class="err"> @error('notification'){{$message}}@enderror</span>
                    </tr>
                </div>     
                
                <div class="form-groop">    
                    <tr>    
                        <td></td><td><input type="submit" value="SUBMIT"></td>
                    </tr>
                </div>     

        </table>

    </form>
	
</body>
</html>
