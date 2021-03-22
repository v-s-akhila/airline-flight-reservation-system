<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookings;
use App\Http\Controllers\BookControl;
use App\Http\Controllers\register;
use App\Http\Controllers\AdminControl;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\Login_con;
use App\Http\Controllers\Auth;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\Flight;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/****
*@function:route for Viewing first page 
*@Arya K Raj
*@date:10/03/2021
****/
Route::view('img','img');
Route::get('/',"App\Http\Controllers\Login_con@index");

Route::view('index','index');
Route::view('index','index');
Route::view('about','about');
Route::view('protocol','protocol');
Route::view('services','services');
Route::view('contact','contact');

/****
*@function:route for Registration 
*@Arya K Raj
*@date:10/03/2021
****/
Route::view('reg','reg');
Route::get('create',"App\Http\Controllers\Login_con@create");
/****
*@function:route for Login 
*@Arya K Raj
*@date:10/03/2021
****/
Route::view('log','log');
Route::get('create',"App\Http\Controllers\Login_con@create");

Route::view('log','log');
Route::get('login',"App\Http\Controllers\Login_con@login");
/****
*@function:route for dashboard 
*@Arya K Raj
*@date:10/03/2021
****/
Route::view('dash','dash');
Route::get('login',"App\Http\Controllers\Login_con@login");
Route::get('dash',"App\Http\Controllers\Login_con@dash");
 
/****
*@function:route for view user details 
*@Arya K Raj
*@date:10/03/2021
****/
Route::view('web','web');
Route::get('shows',"App\Http\Controllers\Login_con@shows");

/****
*@function:route for update and edit view user details 
*@Arya K Raj
*@date:10/03/2021
****/
Route::view('edits','edits');
Route::get('edit',"App\Http\Controllers\BookControl@edit");
Route::get('edits',"App\Http\Controllers\BookControl@edits");
Route::get('update/{$id}',"App\Http\Controllers\BookControl@update");

/****
*@function:route for view user details 
*@Sunu Sukeshan
*@date:12/03/2021
****/
Route::view('search','search');
Route::post('search',"App\Http\Controllers\BookControl@search");

//Admin
/****
*@function:route for Admin login 
*@Arya K Raj
*@date:12/03/2021
****/
Route::view('admdash','admdash');
Route::get('login',"App\Http\Controllers\Login_Con@login");
/****
*@function:route for view user details  by admin
*@Arya K Raj
*@date:12/03/2021
****/
Route::view('adminviews','adminviews');
Route::get('adminviews',"App\Http\Controllers\AdminControl@adminviews");

/****
*@function:route for loading flight page 
*@Sunu Sukesan
*@date:09/03/2021
****/
Route::view('flight','flight');
/****
*@function:route for inserting flight details 
*@author:Sunu Sukesan
*@date:09/03/2021
****/
Route::post("regist",[FlightController::class,'addFlight']);

/****
*@function:route for inserting flight details
*@author:Sunu Sukesan
*@date:09/03/2021
****/
Route::get('records',[FlightController::class,'viewflight']);
/****
*@function:route for inserting flight details
*@author:Sunu Sukesan
*@date:09/03/2021
****/
Route::get('flightrecord',[FlightController::class,'viewflightt']);

/****
*@function:route for loading search page
*@author:Sunu Sukesan
*@date:10/03/2021
****/
Route::view('/search','search');
/****
*@function:route for searching flight details
*@author:Sunu Sukesan
*@date:10/03/2021
****/
Route::post('searchf',[FlightController::class,'searchaction']);
/****
*@function:route for deleting flight details
*@author:Sunu Sukesan
*@date:10/03/2021
****/
Route::get("delete/{id}" ,[FlightController:: class,"delete"]);
/****
*@function:route for updating flight details
*@author:Sunu Sukesan
*@date:11/03/2021
****/
Route::get("update" ,[FlightController:: class,"update"]);
/****
*@function:route for loading update page for particular user
*@author:Sunu Sukesan
*@date:11/03/2021
****/
Route::get("edit/{id}" ,[FlightController:: class,"edit"]);

/****
*@function:route for check seat
*@Joice
*@date:13/03/2021
****/
//booking Started
Route::get('web/{id}',"App\Http\Controllers\Login_con@web");
Route::get('check',[Login_con::class,'checkseats']);
/*Route::get('/', function () {
    return view('f');
});*/

//Route::view('paymentdet','paymentdet');
//Paymentstarted
/****
*@function:route for Ayment action
*@joice
*@date:13/03/2021
****/
Route::get('pay',"App\Http\Controllers\Login_con@paymentdet");
Route::get('paymentAction',[Login_con::class,'paymentAction']);
Route::get('paypal',[Login_con::class,'paypal']);

/****
*@function:route for Payment paypal
*@Arya K Raj
*@date:10/03/2021
****/
Route::view('paypal','paypal');
Route::view('success','success');
Route::view('singleuser','singleuser');
Route::get('singleuser',"App\Http\Controllers\Login_con@singleuser");
Route::view('ticket','ticket');
Route::get('ticket',"App\Http\Controllers\Login_con@ticketgen");

/****
*@function:route for logout
*@Arya K Raj
*@date:10/03/2021
****/
Route::get('logout',"App\Http\Controllers\Login_con@logout");



 ////////AIRLINE FLIGHT RESERVATION SYSTEM//////////

/* 
    @AIRPORT WORK:DATA VIEWING FORM
    @AUTHER:AKHILA.V.S
    @DATE:09/03/2021
    @TIME:
*/
Route::view("air",'airport');//view form
/* 
    @AIRPORT WORK: DATA INSERTING 
    @AUTHER:AKHILA.V.S
    @DATE:09/03/2021
    @TIME:
*/
Route::post("insertdata",[AirportController::class,'insertdata']);//route for insert data
/* 
    @AIRPORT WORK: ALL DATA VIEW IN TABLE 
    @AUTHER:AKHILA.V.S
    @DATE:10/03/2021
    @TIME:
*/
Route::get("show",[AirportController::class,'show']);//to view data  table
/* 
    @AIRPORT WORK:  SELECTED DATA DELETING 
    @AUTHER:AKHILA.V.S
    @DATE:10/03/2021
    @TIME:
*/
Route::get('delete/{id}',[AirportController::class,'delete']);//route for delete
/* 
    @AIRPORT WORK: UPDATING TABLE VIEWING
    @AUTHER:AKHILA.V.S
    @DATE:10/03/2021
    @TIME:
*/
Route::get('update/{id}',[AirportController::class,'update_view']);//route for update view
/* 
    @AIRPORT WORK: VIEW UPDATED DATA TABLE 
    @AUTHER:AKHILA.V.S
    @DATE:11/03/2021
    @TIME:
*/
Route::post("/edit",[AirportController::class,'update']);//updated table view

//FLIGHT NOTIFICATION ADDING

/* 
    @NOTIFICATION WORK:NOTIFICATION VIEWING FORM
    @AUTHER:AKHILA.V.S
    @DATE:11/03/2021
    @TIME:
*/
Route::get("noti",[FlightController::class,'notification']);//view form
/* 
    @NOTIFICATION WORK: NOTICATION INSERTING 
    @AUTHER:AKHILA.V.S
    @DATE:11/03/2021
    @TIME:
*/
Route::post("insertnoti",[FlightController::class,'insertnoti']);//route for insert data
/* 
    @NOTIFICATION WORK: ALL NOTIFICATION VIEW IN TABLE 
    @AUTHER:AKHILA.V.S
    @DATE:12/03/2021
    @TIME:
*/
Route::get("shownoti",[FlightController::class,'shownoti']);//to view data  table
/* 
    @NOTIFICATION WORK:  SELECTED NOTIFICATION DELETING 
    @AUTHER:AKHILA.V.S
    @DATE:12/03/2021
    @TIME:
*/
Route::get('deletenoti/{id}',[FlightController::class,'deletenoti']);//route for delete
/* 
    @NOTIFICATION WORK: UPDATING NOTIFICATION TABLE VIEWING
    @AUTHER:AKHILA.V.S
    @DATE:12/03/2021
    @TIME:
*/
Route::get('updatenoti/{id}',[FlightController::class,'updatenoti_view']);//route for update view
/* 
    @NOTIFICATION WORK: VIEW UPDATED NOTIFICATION TABLE 
    @AUTHER:AKHILA.V.S
    @DATE:12/03/2021
    @TIME:
*/
Route::post("/edit_noti",[FlightController::class,'update_noti']);//updated table view


Route::get("viewnoti",[FlightController::class,'usernoti']);