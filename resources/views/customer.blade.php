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
                      <div class="col-md-4 bg-success">
                       <form action="{{url('/createcustomer')}}" method="post">
                            {!! csrf_field() !!}
                          <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                         
                          </div>

                           <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                         
                          </div>

                           <div class="form-group">
                            <label for="exampleInputEmail1">Mobile</label>
                            <input type="text" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mobile Number">
                         
                          </div>

                           <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <textarea class="form-control" name="address" aria-describedby="emailHelp" placeholder="Enter Address"></textarea>
                         
                          </div>
                         
                         
                          <input type="submit" class="btn btn-primary" value="Save">
                        </form>
                      </div>
                      <div class="col-md-8 bg-warning">
                       
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Name</th>
                              <th scope="col">Email</th>
                              <th scope="col">Mobile</th>
                              <th scope="col">Address</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @if(!empty($alldata))
                              @php($i=1)
                               @foreach($alldata as $data)
                             
                            <tr>
                              <th scope="row">{{$i++}}</th>
                              <td>{{$data->name}}</td>
                              <td>{{$data->email}}</td>
                               <td>{{$data->mobile}}</td>
                                <td>{{$data->address}}</td>
                              <td>
                                <a href="" class="btn btn-info btn-xs">Edit</a>
                                 
                                <a href="" class="btn btn-danger btn-xs">Delete</a>
                                 <a href="{{url('/customerservice')}}/{{$data->id}}" class="btn btn-primary btn-xs">AllService</a>


                              </td>
                            </tr>
                            @endforeach
                            @endif
                         
                          
                          </tbody>
                        </table>
                                        
                      </div>
                    </div>

                
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
