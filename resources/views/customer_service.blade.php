@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{url('/service')}}" class="btn btn-primary">New Service</a>
                    <a href="{{url('/customer')}}" class="btn btn-primary">New Customer</a>
                   
                    
                </div>

                <div class="card-body ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                  



                  <div class="row">

                      <div class="col-md-8 bg-success">
                         @if(Session::has('message'))
                     <h1 class="badge badge-success btn-lg"> {{Session::get('message')}}</h1>
                    @endif
                         @foreach($alldata as $data)
                       <form action="{{url('/createcustomerservice')}}/{{$customer->id}}" method="post">
                            {!! csrf_field() !!}

                           
                          <div class="form-group">
                            <h1 for="exampleInputEmail1">{{$data->service_name}}</h1>
                             <input type="hidden" name="service_name[]" value="{{$data->service_name}}">
                            <input type="hidden" name="service_id[]" value="{{$data->id}}">
                           
                         
                          </div>

                           <div class="form-group">
                            <label for="exampleInputEmail1">Input Date</label>
                            <input type="date" name="customer_service_date[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                         
                          </div>

                           <div class="form-group">
                            <label for="exampleInputEmail1">Comments</label>
                            <textarea class="form-control" name="comments[]" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Comments"></textarea>
                         
                          </div>
                             <input type="submit" class="btn btn-primary" value="Save">
                        </form>
                        @endforeach
                      </div>
                      <div class="col-md-4">
                       
                         <h2 class="badge-danger badge">Customer Information</h2>
                         <dd>Name: {{$customer->name}}</dd>
                          <dd>Email: {{$customer->email}}</dd>
                         <dd>Mobile: {{$customer->mobile}}</dd>
                         <dd>Address: {{$customer->address}}</dd>
                                        
                      </div>
                    </div>

                
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
