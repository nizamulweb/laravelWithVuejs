<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function addCustomer(){
    	$alldata=Customer::all();
    	return view('customer',compact('alldata'));
    }

    public function createCustomer(Request $request){

    	$customer=new Customer();
        $customer->name=$request->name;
        $customer->email=$request->email;
        $customer->mobile=$request->mobile;
        $customer->address=$request->address;
        $customer->save();
        return redirect('/customer');
     
    }

    public function manageCustomer(){
    	$alldata=Customer::all();
    	return view('customer',compact('alldata'));
    }
}
