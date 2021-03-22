<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\FlightNotification;
use DB;


class FlightController extends Controller
{
/****
	 *@function:addFlight
	 *@function:for adding flight details
	 *@author:Sunu Sukesan
	 *@link:http:'http://127.0.0.1:8000'
	 *@date:09-03-2021
	****/
  function addFlight(Request $req)
    {
        $flight= new Flight;
        $flight->fno=$req->fno;
        $flight->fname=$req->fname;
        $flight->departure=$req->departure;
        $flight->depdate=$req->depdate;
        $flight->deptime=$req->deptime;
        $flight->dest=$req->dest;
        $flight->desdate=$req->desdate;
        $flight->destime=$req->destime;
        $flight->bseat=$req->bseat;
        $flight->fseat=$req->fseat;
        $flight->eseat=$req->eseat;
        $flight->fcost=$req->fcost;
        $flight->bcost=$req->bcost;
        $flight->ecost=$req->ecost;
        $flight->save();
        return redirect('flight');
       
    }
    /****
	 *@function:viewFlight
	 *@function:for viewing flight details
	 *@author:Sunu Sukesan
	 *@link:http:'http://127.0.0.1:8000'
	 *@date:09-03-2021
	****/
    public function viewflight(){
        $users = DB::select('select * from flights');
        return view('flightview',['users'=>$users]);
        }
    /****
	 *@function:viewFlightt
	 *@function:for viewing flight details by admin
	 *@author:Sunu Sukesan
	 *@link:http:'http://127.0.0.1:8000'
	 *@date:09-03-2021
	****/
        public function viewflightt(){
            $users = DB::select('select * from flights');
            return view('flightvieww',['users'=>$users]);
            }
        /****
	 *@function:delete
	 *@function:for deleting flight details
	 *@author:Sunu Sukesan
	 *@link:http:'http://127.0.0.1:8000'
	 *@date:10-03-2021
	****/
        function delete($id)
        {
            $users=Flight::find($id);
            $users->delete();
            return view('flightvieww',['users'=>$users]);

        }
        
    /****
	 *@function:searchaction
	 *@function:for searching flight details
	 *@author:Sunu Sukesan
	 *@link:http:'http://127.0.0.1:8000'
	 *@date:10-03-2021
	****/
    public function searchaction(Request $req)
    {
        $fname=$req->session()->get('fname');
        $lname=$req->session()->get('lname');
        $capsule= array('fname'=> $fname,'lname'=> $lname);
        $flight= new Flight;
        //$d=date('y-m-d');
        $dep=$req->dep;
        $dest=$req->dest;
        $depdate=$req->date;
        $users = DB::table('flights')
            ->where("departure",$dep)
            ->where("dest",$dest)
            ->where("depdate",$depdate)
            ->get();
        return view('flightview',['users'=>$users])->with($capsule);
    }
    /*public function deletedate()
        {
            $d=date('y-m-d');
            $users = DB::table('flights')  
                ->where('depdate','>=',$d)
                ->delete();  
     
        }*/

    /****
	 *@function:edit
	 *@function:for loading updation page for a particular user
	 *@author:Sunu Sukesan
	 *@link:http:'http://127.0.0.1:8000'
	 *@date:11-03-2021
	****/

    public function edit($id)
    {
        $users=Flight::find($id);
        return view('flightupdate',['user'=>$users]);
    }

    /****
	 *@function:update
	 *@function:for loading updating details
	 *@author:Sunu Sukesan
	 *@link:http:'http://127.0.0.1:8000'
	 *@date:11-03-2021
	****/
    public function update(Request $req)
    {
        $flight=Flight::find($req->id);
        $flight->fno=$req->fno;
        $flight->fname=$req->fname;
        $flight->departure=$req->departure;
        $flight->depdate=$req->depdate;
        $flight->deptime=$req->deptime;
        $flight->dest=$req->dest;
        $flight->desdate=$req->desdate;
        $flight->destime=$req->destime;
        $flight->bseat=$req->bseat;
        $flight->fseat=$req->fseat;
        $flight->eseat=$req->eseat;
        $flight->fcost=$req->fcost;
        $flight->bcost=$req->bcost;
        $flight->ecost=$req->ecost;
        $flight->save();
        return redirect('flightrecord'); 
    }


//
      //FLIGHT NOTIFICATION



    /* 
    @NOTIFICATION WORK:NOTIFICATION INSERTING
    @AUTHER:AKHILA.V.S
    @DATE:11/03/2021
    @TIME:
*/
public function notification()
{
    $user = Flight::all();
    return view('Flightnotification',['user'=>$user]);
}
 
/* 
    @NOTIFICATION WORK:NOTIFICATION INSERTING
    @AUTHER:AKHILA.V.S
    @DATE:11/03/2021
    @TIME:
*/
public function insertnoti(Request $req)
{

/* 
@NOTIFICATION WORK: NOTIFICATION VALIDATION
@AUTHER:AKHILA.V.S
@DATE:11/03/2021
@TIME:
*/

/*    
    $req->validate([
        'number'=>'required',
        'name'=>'required',
        'date'=>'required',
        'notification'=>'required',
        
    ]);
*/    
    
        $user=new FlightNotification;
        $user->number=$req->number;
        $user->name=$req->name;
        $user->date=$req->datew;
        $user->notification=$req->notification;
        $query=$user->save();
    
        if($query)
        {
            return back()->with('success','Succesfully done');
        }
        else
        {
            return back()->with('fail','something went wrong');
        }
  
}  
/* 
@NOTIFICATION WORK:ALL NOTIFICATION VIEW IN TABLE
@AUTHER:AKHILA.V.S
@DATE:12/03/2021
@TIME:
*/      

public function shownoti()
    {
        $data=FlightNotification::all();
        return view('Flightnotificationtable',['user'=>$data]);
    }
/* 
@NOTIFICATION WORK:SELECTED NOTIFICATION DELETING  
@AUTHER:AKHILA.V.S
@DATE:12/03/2021
@TIME:
*/    
public function deletenoti($id)
    {
        $data=FlightNotification::find($id);
        $data->delete();
        return redirect('shownoti');
    }
/* 
@NOTIFICATION WORK: VIEWING EDITED NOTIFICATION
@AUTHER:AKHILA.V.S
@DATE:12/03/2021
@TIME:
*/     
public function updatenoti_view($id)
    {
        $data=FlightNotification::find($id);
    
        return view('updateNotification',['data'=>$data]);
    }
/* 
@NOTIFICATION WORK: UPDATED TABLE VIEWING @EDITING
@AUTHER:AKHILA.V.S
@DATE:12/03/2021
@TIME:
*/      
public function update_noti(Request $req)
    {
        $data = FlightNotification::find($req->id);
        $data->number=$req->number;
        $data->name=$req->name;
        $data->date=$req->date;
        $data->notification=$req->notification;
        $data->save();
        return redirect('shownoti');
    }   
    public function usernoti()
    {
        $data=FlightNotification::all();
        return view('usernoti',['user'=>$data]);
    }







    
}
