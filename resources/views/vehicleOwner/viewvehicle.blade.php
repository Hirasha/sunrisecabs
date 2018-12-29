@extends('layouts.vowner')
@include('vehicleOwner.normalnav')
@section('content')
<h1 class="d-flex justify-content-center">My Vehicles</h1>
@if(count($vehicles)>0)
                                @foreach ($vehicles as $vehicles)
                            <div class= "card">
                                            
                            <div class= "card-body">
                                    <h2>Vehicle</h2>
                                <div class="row">
                                        <div class="col-md-6">
                                        <h5 class="card-title"> Vehicle Reg No: {{$vehicles->regno}}</h5>
                                        <h5 class="card-title"> Plate No :{{$vehicles->plateno}}</h5>
                                        <h5 class="card-title">Vehicle Type:{{$vehicles->type}}</h5>
                                        <h5 class="card-title">Vehicle Price: {{$vehicles->price}}</h5>
                                        <h5 class="card-title">AC or Non A/C:{{$vehicles->category}}</h5>                                    
                                      </div>
                                    <div class="col-md-6">
                                    <img src="/storage/cover_images/{{$vehicles->cover_image}}" alt="..." class="img-thumbnail" width="250" height="150"> <br>
                                      <a href=" ">
                                        <button type="button" class="btn btn-primary "> 
                                         View Details</button>
                                      </a>
                                            <button type="button" class="btn btn-primary ">Remove Vehicle</button>

                                        </div>
                                </div>

                                
                            </div>
                                
                                
                                @endforeach
                                @else
                                <h3 class="section-heading text-uppercase">You have no registered vehicles yet! Want to list your car?</h3>
                                @endif
         @endsection