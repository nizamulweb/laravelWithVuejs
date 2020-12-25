@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{url('/service')}}" class="btn btn-primary">New Service</a>
                    <a href="{{url('/manageservice')}}" class="btn btn-primary">Manage Service</a>
                    <a href="{{url('/customer')}}" class="btn btn-primary">New Customer</a>
                    <a href="{{url('/managecustomer')}}" class="btn btn-primary">Manage Customer</a>
                    
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
