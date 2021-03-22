<?php

         ////////AIRLINE FLIGHT RESERVATION SYSTEM//////////

         
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Airport;


class AirportController extends Controller
{
/* 
    @AIRPORT WORK:DATA INSERTING
    @AUTHER:AKHILA.V.S
    @DATE:09/03/2021
    @TIME:
*/
    public function insertdata(Request $req)
    {

/* 
    @AIRPORT WORK: DATA VALIDATION
    @AUTHER:AKHILA.V.S
    @DATE:09/03/2021
    @TIME:
*/

    /*    
        $req->validate([
            'name'=>'required',
            'Abreviation'=>'required',
            'city'=>'required',
            'state'=>'required',
            'zipcode'=>'required',
            'timezone'=>'required',
        ]);
    */    
        
            $user=new Airport;
            $user->name=$req->name;
            $user->abreviation=$req->abreviation;
            $user->city=$req->city;
            $user->state=$req->state;
            $user->zipcode=$req->zipcode;
            $user->timezone=$req->timezone;
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
    @AIRPORT WORK:ALL DATA VIEW IN TABLE
    @AUTHER:AKHILA.V.S
    @DATE:10/03/2021
    @TIME:
*/      

    public function show()
        {
            $data=Airport::all();
            return view('Airportview',['user'=>$data]);
        }
/* 
    @AIRPORT WORK:SELECTED DATA DELETING  
    @AUTHER:AKHILA.V.S
    @DATE:10/03/2021
    @TIME:
*/    
    public function delete($id)
        {
            $data=Airport::find($id);
            $data->delete();
            return redirect('show');
        }
/* 
    @AIRPORT WORK: VIEWING EDITED DATA 
    @AUTHER:AKHILA.V.S
    @DATE:10/03/2021
    @TIME:
*/     
    public function update_view($id)
        {
            $data=Airport::find($id);
            return view('updateAirport',['data'=>$data]);
        }
/* 
    @AIRPORT WORK: UPDATED TABLE VIEWING @EDITING
    @AUTHER:AKHILA.V.S
    @DATE:11/03/2021
    @TIME:
*/      
    public function update(Request $req)
        {
            $data = Airport::find($req->id);
            $data->name=$req->name;
            $data->abreviation=$req->abreviation;
            $data->city=$req->city;
            $data->state=$req->state;
            $data->zipcode=$req->zipcode;
            $data->timezone=$req->timezone;
            $data->save();
            return redirect('show');
        }   

}
