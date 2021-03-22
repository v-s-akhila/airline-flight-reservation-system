<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\register;
use App\Http\Controllers\registers;
use App\Models\Flight;

use App\Models\Booking;
use DB;
use App;
class Login_con extends Controller
{
  public function index()
  {
      return view('img');
  }
/*
*Login_con
 * @function create
 * @author  Joice
 * @Date    10/03/2021
 * @Description User registration
 * @link   http://127.0.0.1:8000 
    */
  public function create(Request $request)
  {
      $request->validate([
          'fname' => 'required|regex:/^[\pL\s\-]+$/u',
          'lname' => 'required|regex:/^[\pL\s\-]+$/u',
          'age'=>'required|numeric',
          'gender'=>'required',
          'address'=>'required',
          'phno'=>'required|regex:/(0)[0-9]{9}/',
          'adno'=>'required',
          'email'=>'required|email|unique:registers',
          'pass'=>'required|min:5|max:8'   
      ]);
      $userr = new register();
      $userr->fname=$request->input('fname');
      $userr->lname=$request->input('lname');
      $userr->age=$request->input('age');
      $userr->gender=$request->input('gender');
      $userr->address=$request->input('address');
      $userr->phno=$request->input('phno');
      $userr->adno=$request->input('adno');
      $userr->email=$request->input('email');
      $userr->pass=Hash::make($request->input('pass'));
      $userr->email=$request->email;
      $userr->user_type='1';
      $query=$userr->save();
      if($query)
      {
          return redirect('/log')->with('msg','Successfully created Then you Login!!!');
      }
    
  }
/*
*Login_con
 * @function login
 * @author  Joice
 * @Date    10/03/2021
 * @Description View Dashboard
 * @link   http://127.0.0.1:8000 
    */
  public function login(Request $req)
  {
    $req->validate([
        'email'=>'required|email',
       'pass'=>'required'
       ]);
    $email=$req->input('email');
    $pass=$req->input('pass');
    $userinfo=register::where('email',$email)->first();
    if(!$userinfo)
    {
        return back()->with('fail','We can"t recognize your mail');
    }
    else
    {
        if(Hash::check($req->pass,$userinfo->pass) && $userinfo->user_type=='1')
        {
            $req->Session()->put('id',$userinfo->id);
            $req->Session()->put('fname',$userinfo->fname);
            $req->Session()->put('lname',$userinfo->lname);
            $req->Session()->put('age',$userinfo->age);
            $req->Session()->put('gender',$userinfo->gender);
            $req->Session()->put('address',$userinfo->address);
            $req->Session()->put('phno',$userinfo->phno);
            $req->Session()->put('adno',$userinfo->adno);
            $req->Session()->put('email',$userinfo->email);
            return redirect('/dash');
        }
        elseif(Hash::check($req->pass,$userinfo->pass) && $userinfo->user_type=='0')
        {
             return redirect('admdash');
        }
        else
        {
            return back()->with('fail','Invalid Password');
        }
    }
    }

    /*
*Login_con
 * @function login
 * @author  Arya K Raj
 * @Date    10/03/2021
 * @Description View Dashboard
 * @link   http://127.0.0.1:8000 
    */
    public function dash(Request $req)
    {
        if($req->session()->get('id')=="")
        {
            return redirect('log');
        }
        else
        {
            $fname=$req->session()->get('fname');
            $lname=$req->session()->get('lname');
            $age=$req->session()->get('age');
            $gender=$req->session()->get('gender');
            $address=$req->session()->get('address');
            $phno=$req->session()->get('phno');
            $adno=$req->session()->get('adno');
            $email=$req->session()->get('email');
            $pass=$req->session()->get('pass');
            $capsule= array('fname'=> $fname,'lname'=> $lname,'age'=> $age,'gender'=> $gender,'address'=> $address,'phno'=> $phno,'adno'=> $adno,'email'=> $email,'pass'=> $pass);
            return view('dash')->with($capsule);
        }
    }
   
    /*
*Login_con
 * @function login
 * @author  Arya K Raj
 * @Date    10/03/2021
 * @Description View Dashboard
 * @link   http://127.0.0.1:8000 
    */
    public function shows(Request $req)
    { 
        $email=$req->email;
        $pass=$req->pass;
        $session = DB:: table('registers')->where(['email'=>$email,'pass'=>$pass])->get();
             if(count($session)>0)
            {
                $req->session()->put('id',$session[0]->id);
                $req->session()->put('fname',$session[0]->fname);
                $req->session()->put('lname',$session[0]->lname);
                $req->session()->put('age',$session[0]->age);
                $req->session()->put('gender',$session[0]->gender);
                $req->session()->put('address',$session[0]->address);
                $req->session()->put('phno',$session[0]->phno);
                $req->session()->put('adno',$session[0]->adno);
                $req->session()->put('email',$session[0]->email);
                $req->session()->put('pass',$session[0]->pass);
                return redirect('/web');
            }
    }

    /*
*Login_con
 * @function login
 * @author  Arya K Raj
 * @Date    10/03/2021
 * @Description View Dashboard
 * @link   http://127.0.0.1:8000 
    */
    public function web(Request $req,$id)
    {
        
        if($req->session()->get('id')=="")
        {
            return redirect('log');
        }
        else
        {
            $fname=$req->session()->get('fname');
            $lname=$req->session()->get('lname');
            $age=$req->session()->get('age');
            $gender=$req->session()->get('gender');
            $address=$req->session()->get('address');
            $phno=$req->session()->get('phno');
            $adno=$req->session()->get('adno');
            $email=$req->session()->get('email');
            $pass=$req->session()->get('pass');
            $capsule= array('fname'=> $fname,'lname'=> $lname,'age'=> $age,'gender'=> $gender,'address'=> $address,'phno'=> $phno,'adno'=> $adno,'email'=> $email,'pass'=> $pass);
            $flights=DB::table('flights')
                    ->where('id',$id)
                    ->get();
            /* session()->put('flight_id', $id); */
            $req->session()->put('flight_id',$id);
            return view('show',compact('flights'))->with($capsule);
        }
    }

        /*
*Login_con
 * @function checkseats
 * @author  Sunu Sukesan
 * @Date    12/03/2021
 * @Description Check Seat Available
 * @link   http://127.0.0.1:8000 
    */
    public function checkseats(Request $req)
    {
       /*  $fid=$req->fid; */
       $fid=$req->session()->get('flight_id');
        $flights=DB::table('flights')
                    ->where('id',$fid)
                    ->get();
        return view('seatavailable',compact('flights'));
    }

        /*
*Login_con
 * @function checking
 * @author  Arya K Raj
 * @Date    12/03/2021
 * @Description Select Flight Details
 * @link   http://127.0.0.1:8000 
    */
    public function checking(Request $req)
    {
       /*  $fid=$req->fid; */
       $fid=$req->session()->get('flight_id');
        $flights=DB::table('flights')
                    ->where('id',$fid)
                    ->get();

    }

            /*
*Login_con
 * @function paymentdet
 * @author  Joice
 * @Date    13/03/2021
 * @Description Fetch All details for payment
 * @link   http://127.0.0.1:8000 
    */

    public function paymentdet(Request $req)
    {
       /*  $fid=$req->flid; */
        $fid=$req->session()->get('flight_id');
        $class=$req->class;
        $id=$req->session()->get('id');
        $fname=$req->session()->get('fname');
        $lname=$req->session()->get('lname');
        $age=$req->session()->get('age');
        $capsule= array('uid'=> $id,'fname'=> $fname,'lname'=> $lname,'class'=>$class,'age'=>$age);
        $flights=DB::table('flights')
                    ->where('id',$fid)
                    ->get();
       return view('paymentdet',compact('flights'))->with($capsule);
    }

           /*
*Login_con
 * @function paymentAction
 * @author  Joice
 * @Date    13/03/2021
 * @Description Cost of seat
 * @link   http://127.0.0.1:8000 
    */
    public function paymentAction(Request $req)
    {
        $book=new Booking;
        $book->name=$req->name;
        $book->flightname=$req->flightname;
        $book->departure=$req->departure;
        $book->arrival=$req->arrival;
        $book->class=$req->class;
        $book->cost=$req->cost;
        /* $book->save(); */
        $fid=$req->session()->get('flight_id');
        /* $fid=$req->flid; */
        if($req->class == 'ecnomic')
           {
            Flight::where('id',$fid)->update(array(
                'eseat'=>DB::raw('eseat - 1')  
            ));
           }
        elseif($req->class == 'business')
           {
            Flight::where('id',$fid)->update(array(
                'bseat'=>DB::raw('bseat - 1') 
            ));
           }
        else
           {
            Flight::where('id',$fid)->update(array(
                'fseat'=>DB::raw('fseat - 1')
            ));
           }
        return redirect('paypal');
    }

    
           /*
*Login_con
 * @function singleuser
 * @author  Joice
 * @Date    13/03/2021
 * @Description Fetch user details
 * @link   http://127.0.0.1:8000 
    */
    public function singleuser(Request $req)
    {
        /* $fid=$req->flid; */
        $fid=$req->session()->get('flight_id');
        $class=$req->class;
        $id=$req->session()->get('id');
        $fname=$req->session()->get('fname');
        $lname=$req->session()->get('lname');
        $address=$req->session()->get('address');
        $phno=$req->session()->get('phno');
        $email=$req->session()->get('email');
        $capsule= array('uid'=> $id,'fname'=> $fname,'lname'=> $lname,'address'=> $address,'phno'=> $phno,'email'=> $email);
        $flights=DB::table('flights')
                    ->where('id',$fid)
                    ->get();
       return view('singleuser',compact('flights'))->with($capsule);
    }

    
           /*
*Login_con
 * @function ticketgen
 * @author  Joice
 * @Date    13/03/2021
 * @Description Generate Ticket
 * @link   http://127.0.0.1:8000 
    */
    public function ticketgen(Request $req)
    {
        //$fid=$req->flid;
        $fid=$req->session()->get('flight_id');
        $class=$req->class;
        $id=$req->session()->get('id');
        $fname=$req->session()->get('fname');
        $lname=$req->session()->get('lname');
        $phno=$req->session()->get('phno');
        $email=$req->session()->get('email');
        $capsule= array('uid'=> $id,'fname'=> $fname,'lname'=> $lname,'phno'=> $phno,'email'=> $email);
        /* var_dump(session); */
        $flights=DB::table('flights')
                   ->where('id',$fid)
                    ->get();
       return view('ticket',compact('flights'))->with($capsule);
    }

 /*
*Login_con
 * @function logout
 * @author  Arya k raj
 * @Date    14/03/2021
 * @Description Logout
 * @link   http://127.0.0.1:8000 
    */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('http://127.0.0.1:8000');
    }



}