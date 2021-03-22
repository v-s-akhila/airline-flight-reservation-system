<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\register;
use App\Http\Controllers\registers;
use DB;
use App;

class AdminControl extends Controller
{

  /*
*Admin Controller
 * @function adminviews
 * @author  Arya K Raj
 * @Date    10/03/2021
 * @Description View Registered Users
 * @link   http://127.0.0.1:8000 
    */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminviews()
    {
        $views = DB::select('select * from registers where user_type="1" ')/* ->where(['user_type'=>1])->get() */;
        return view('adminviews',['views'=>$views]);
    }

    /*
*Admin Controller
 * @function book
 * @author  Arya K Raj
 * @Date    10/03/2021
 * @Description Flight Booking
 * @link   http://127.0.0.1:8000 
    */
    public function book(Request $req)
    {
     $session = DB::select('select * from bookings');
         if(count($session))
            {
                
                $req->session()->put('id',$session[]->id);
                $req->session()->put('fname',$session[]->fname);
                $req->session()->put('lname',$session[]->lname);
                $req->session()->put('city',$session[]->city);
                $req->session()->put('pin',$session[]->pin);
                $req->session()->put('phno',$session[]->phno);
                $req->session()->put('email',$session[]->email);
                return redirect('/bookviews');
            }
    }

}
