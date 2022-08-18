<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Stroage;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Cabin;
use App\Models\Reports;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if (Auth::user()->usertype=='0')
            {   $doctor = doctor::all();
                return view('user.home', compact('doctor'));
            }
            else{
                return view('admin.home');
            }
        }
        else {
            return redirect()->back();
        }
    }
    public function index()

    {
        // $search =  request()->query('search');
        // if ($search){
        //    $posts = Post::where('title'. 'LIKE'."%{$search}%")->simplePaginate(3);
        // }
        // else{
        //     $posts = Post::simplePaginate(3);
        // }
        
        
        if(Auth::id()){
        return redirect('home');
  
    }

    
    else{
        $doctor = doctor::all();
    

        return view('user.home', compact('doctor'));

    }
}
    public function appointment(Request $request){
            $data = new appointment;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->date = $request->date;
            $data->doctor = $request->doctor;
            $data->phone = $request->phone;
            $data->message = $request->message;
            $data->status ='In progress';
            if(Auth::id()){
                $data->user_id = Auth::user()->id;
            }
            
            $data->save();

            return redirect()->back();
            

            


    }
    public function cabin(Request $request){
        $data = new cabin;
        $data->name = $request->name;
        $data->email = $request->email;

        $data->date = $request->date;
        $data->cabin = $request->cabin;

        $data->phone = $request->number;

       if(Auth::id()){
        $data->user_id=Auth::user()->id;
       }
       $data->save();




    }
  
    public function showreport(){
        if(Auth::id()){
            $userid = Auth::user()->id;
            $report = reports::where('user_id', $userid)->get();
        return view('user.my_reports', compact('report'));
        }
        else{
            return redirect()->back();
        }
    }
    public function myappointment(){
        if(Auth::id()){
            $userid = Auth::user()->id;
            $appoint = appointment::where('user_id', $userid)->get();
        return view('user.my_appointment', compact('appoint'));
        }
        else{
            return redirect()->back();
        }
    }
    public function search(){
        return view('user.doctor');
    }
    public function updateappointment($id){
        $data = appointment::find($id);
        
        return view('user.update_appointment', compact('data'));
    }

    public function edituser(Request $request, $id){
        $user = appointment::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->doctor = $request->doctor;
        $user->date = $request->date;
        $user->save();
        return redirect()->back();

    }
    public function download(Request $request, $file){
        return response()->download(public_path('reports/'.$file));


    }
    public function cancelappointment($id){
        $data = appointment::find($id);
        $data->delete();
        $data->redirect()->back();

    }
    public function complain(){
        return view('user.complain');
    }
  public function adcomplain(Request $request){
    $data = new appointment;
    $data->message = $request->message;
    $data->save();

    
  }

}
