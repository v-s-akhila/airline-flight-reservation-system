@include('admdash')
<br><br><br>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airport Details</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">

</head>
<body>

   <center> <Form action ="insertdata" method="post">
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
   
        <h1>AIRPORT REGISTRATION</h1>
        <table>
                <div class="form-groop">
                    <tr>
                        <th>AIRPORT NAME:</th>
                        <td><select  name="name" placeholder="AIRPORT NAME">
                                <option>--SELECT--</option>
                                <option>Trivandrum International Airport</option>
                                <option>Cochin International Airport</option>
                                <option>Calicut International Airport</option>
                                <option>Kannur International Airport</option>
                            </select></td>
                        <span class="err"> @error('name'){{$message}}@enderror</span>
                    </tr> 
                </div> 
                <div class="form-groop">     
                    <tr>
                        <th>ABREVIATION:</th>
                        <td><input type="text" name="abreviation" placeholder="ABREVIATION"></td>
                        <span class="err"> @error('abreviation'){{$message}}@enderror</span>
                    </tr>
                </div>    
                <div class="form-groop">    
                    <tr>
                        <th>CITY:</th>
                        <td><select  name="city" placeholder="CITY">
                                <option>--SELECT--</option>
                                <option>THIRUVANANTHAPURAM</option>
                                <option>ERNAKULAM</option>
                                <option>KANNUR</option>
                                <option>KOZHIKODE</option>
                            </select>
                            <span class="err"> @error('city'){{$message}}@enderror</span>
                        </td>
                    </tr>
                </div>         
                <div class="form-groop">    
                    <tr>
                        <th>STATE:</th>
                        <td><select name="state" placeholder="STATE">
                                <option>--SELECT--</option>
                                <option>KERALA</option>
                                <option>NEWDELHI</option>
                                <option>MAHARASHTRA</option>
                                <option>KARNATAKA</option>
                            </select>
                            <span class="err"> @error('state'){{$message}}@enderror</span>
                        </td>
                    </tr>
                </div>     
                <div class="form-groop">
                    <tr>
                        <th>ZIP CODE:</th>
                        <td><input type="text" name="zipcode" placeholder="ZIP CODE" ></td>
                        <span class="err"> @error('zipcode'){{$message}}@enderror</span>
                    </tr>
                </div>     
                <div class="form-groop">    
                    <tr>
                        <th>TIMEZONE:</th>
                        <td><input type="time" name="timezone" ></td>
                    </tr>
                </div>     
                <div class="form-groop">    
                    <tr>    
                        <td></td><td><input type="submit" value="Register"></td>
                    </tr>
                </div>     

        </table>

    </Form>
	
</body>
</html>
