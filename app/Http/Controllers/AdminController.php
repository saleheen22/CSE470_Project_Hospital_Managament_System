<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Cabin;
use App\Models\Reports;


class AdminController extends Controller
{
    public function addview(){

    return view('admin.add_doctor');
    }
    public function upload(Request $request){
        $doctor = new doctor;
        $image = $request->file;

        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage', $imagename);
        $doctor->image=$imagename;

        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->speciality=$request->speciality;
        $doctor->room=$request->room;

        $doctor->save();
        return redirect()->back()->with('message', 'Doctor added successfully');
        

    }
    public function showappointment(){

        $data = appointment::all();

        return view('admin.showappointment', compact('data'));//As we need to send this data to our view so it is compact
    }
    public function approved($id){
        $data = appointment::find($id);// it will find the specific appointment with the specific id
        $data->status = 'Approved';
        $data->save();
        return redirect()->back();
    }
    public function cancelled($id){
        $data = appointment::find($id);// it will find the specific appointment with the specific id
        $data->status = 'Cancelled';
        $data->save();
        return redirect()->back();
    }

    public function report(){
        $data = appointment::all();
        return view('admin.report', compact('data'));

    }
    public function rupload(Request $request){
        $data = new reports;
        $pdf = $request->file1;
        if(!empty($pdf)){
        $pdfname1 = time().'.'.$pdf->getClientOriginalExtension();
        $request->file1->move('reports', $pdfname1);
        $data->treport = $pdfname1;
        }
        
        $pdf2 = $request->file2;
        if(!empty($pdf2)){
        $pdfname2 = time().'.'.$pdf2->getClientOriginalExtension();
        $request->file2->move('reports', $pdfname2);
        $data->prescription = $pdfname2;
        }
        $data->complain = $request->message;
        $data->user_id = $request->id;
        $data->name = $request->email;

        $data->save();
        return redirect()->back();
       
    }
    public function addreport($id){
        $data = appointment::find($id);
        return view('admin.add_report', compact('data'));
    }
    public function addcabin(){
        return view('admin.add_cabin_view');
    }
    public function add_cabin(Request $request){
        $cabin = new cabin;
        $image = $request->file;

        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('cabinimage', $imagename);
        $cabin->name=$imagename;

        $cabin->cabin=$request->type;
        $cabin->email=$request->price;
      

        $cabin->save();
        return redirect()->back()->with('message', 'Cabin added successfully');
        
     

    }
    }




