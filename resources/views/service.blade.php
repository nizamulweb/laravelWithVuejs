@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{url('/servce')}}" class="btn btn-primary">New Service</a>
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
                       <form action="{{url('/createservice')}}" method="post">
                            {!! csrf_field() !!}
                          <div class="form-group">
                            <label for="exampleInputEmail1">Service Name</label>
                            <input type="text" name="service_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Name">
                         
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Date</label>
                            <input type="date" name="service_date" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                         
                          <input type="submit" class="btn btn-primary" value="Save">
                        </form>
                      </div>
                      <div class="col-md-8 bg-warning">
                       
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Service Name</th>
                              <th scope="col">Service Date</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @if(!empty($alldata))
                              @php($i=1)
                               @foreach($alldata as $data)
                             
                            <tr>
                              <th scope="row">{{$i++}}</th>
                              <td>{{$data->service_name}}</td>
                              <td>{{$data->service_date}}</td>
                              <td>
                                <a href="" class="btn btn-info btn-xs">Edit</a>
                                  <a href="" class="btn btn-primary btn-xs">View</a>
                                <a href="" class="btn btn-danger btn-xs">Delete</a>

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
