<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\booking;
use App\Models\register;
use App\Http\Controllers\registers;
use DB;

    class BookControl extends Controller
    {
   
        /*
*BookController
 * @function shows
 * @author  Arya K Raj
 * @Date    10/03/2021
 * @Description User View their Details
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
                    return redirect('/bokk');
                }
        }
    
 /*
*BookController
 * @function bokk
 * @author  Arya K Raj
 * @Date    10/03/2021
 * @Description User Booking
 * @link   http://127.0.0.1:8000 
    */
        
        public function bokk(Request $req)
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
        
                return view('/bokk')->with($capsule);
            }
        }

     /*
*BookController
 * @function booked
 * @author  Arya K Raj
 * @Date    10/03/2021
 * @Description Check user already booked
 * @link   http://127.0.0.1:8000 
    */
        public function booked(Request $request)
        {
            $userr = new booking();
            $name=$request->input('name');
            $addr=$request->input('addr');
            $city=$request->input('city');
            $pin=$request->input('pin');
            $phno=$request->input('phno');
            $email=$request->input('email');
            $fun=$request->input('fun');
            $dat=$request->input('dat');

            $email=$request->email;
            $checkmail= DB:: table('registers')->where('email',$email)->get();
            if(count($checkmail)>0)
            {
                return redirect('/bokk')->with('msg','You have Already Booked!!!!!! Now you can send Message');
            }
            else
            {
            $created=$userr->save();
            if($created)
            {
                return redirect('/bokk')->with('msg','Successfully Booked!!!');
            }
            }
        } 
        
    /*
*BookController
 * @function edit
 * @author  Arya K Raj
 * @Date    10/03/2021
 * @Description User Update Their details
 * @link   http://127.0.0.1:8000 
    */
    public function edit(Request $req)
    { 
        $email=$req->email;
        $pass=$req->pass;
        $session = DB:: table('registers')->where(['email'=>$email])->get();
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
                return redirect('/edits');
            }
    }
    public function edits(Request $req)
    {
        if($req->session()->get('id')=="")
        {
            return redirect('log');
        }
        else
        {
            $id=$req->session()->get('id');
            $fname=$req->session()->get('fname');
            $lname=$req->session()->get('lname');
            $age=$req->session()->get('age');
            $gender=$req->session()->get('gender');
            $address=$req->session()->get('address');
            $phno=$req->session()->get('phno');
            $adno=$req->session()->get('adno');
            $email=$req->session()->get('email');
            $pass=$req->session()->get('pass');
            $capsule= array('fname'=> $fname,'lname'=> $lname,'age'=> $age,'gender'=> $gender ,'address'=> $address,'phno'=> $phno,'adno'=> $adno,'email'=> $email,'pass'=> $pass);
            return view('/edits')->with($capsule);
        }
    }

    /*
*BookController
 * @function update
 * @author  Arya K Raj
 * @Date    10/03/2021
 * @Description Update Details
 * @link   http://127.0.0.1:8000 
    */
    public function update(Request $request)
    {
        $userr = new register();
        $fname=$request->input('fname');
        $lname=$request->input('lname');
        $age=$request->input('age');
        $gender=$request->input('gender');
        $address=$request->input('address');
        $phno=$request->input('phno');
        $adno=$request->input('adno');
        $email=$request->input('email');
        $pass=$request->input('pass');
        DB::update('update registers set fname = ?,lname = ?,age = ?,gender = ?,address = ?,phno = ?,adno = ?,email = ?,pass = ?',[$fname,$lname,$age,$gender,$address,$phno,$adno,$email,$pass])->where(['id'=>$id])->get();
        return redirect('/edits');
    }
    
}
