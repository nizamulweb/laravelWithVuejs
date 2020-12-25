<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Service;
use App\CustomerService;

class CustomerServiceController extends Controller
{
     public function addCustomerService($customerId){
     	$customerId=$customerId;
     	$customer=Customer::where('id',$customerId)->first();
    	$alldata=Service::all();
    	return view('customer_service',compact('alldata','customer'));
    }

    public function createCustomerService(Request $request,$customerId){

    	$customerId=$customerId;
     	$customer=Customer::where('id',$customerId)->first();
            $data_insert=0;
            foreach($request->service_name as $key=>$v)
            {
                $data=array(
                    'customer_id'=>$customer->id,
                    'service_id'=>$request->service_id[$key],

                    'customer_service_date'=>$request->customer_service_date[$key],
                    'comments'=>$request->comments[$key],
                    
                );
                $datainsert=CustomerService::insert($data);
                $data_insert=$datainsert;

                   if($data_insert>0){
                      return redirect()->back()->with('message','Successfully Data Inserted');
                    }

            }
  
		  	$customerservicedata=new CustomerService();
		  	$mytag->product_id=$product->id;
		  	$mytag->tag_name=$tag;
		  	$mytag->save();
  
        return redirect('/service');
        //dd($service);
       
    }

    
}
