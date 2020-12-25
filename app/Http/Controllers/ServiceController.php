<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function addService(){
        
    	$alldata=Service::all();
    	return view('service',compact('alldata'));
    }

    public function createService(Request $request){

    	$service=new Service();
        $service->service_name=$request->service_name;
        $service->service_date=$request->service_date;
        $service->service_code=rand();
        $service->save();
        return redirect('/service');
        //dd($service);
       
    }

    public function manageService(){
    	$alldata=Service::all();
    	return view('service',compact('alldata'));
    }
}
