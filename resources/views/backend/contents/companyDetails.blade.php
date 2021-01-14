@extends('backend.masterfile1')
@section('main')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-12 mb-5">
                    <div class="d-flex justify-content-center">
                        <div class="card">
                            <div class="card-body">

                                <div class="d-flex justify-content-center">
                                    <img src="{{asset('uploads/users/'.$company->logo)}}" style="margin-left: 20px; border-radius: 50%;"  width="25%" height="75px" >
                              <hr><hr>

                                </div>
                                <hr><hr><hr>
                                <div class="col-md-12 col-lg-12 mb-5"  style="
    margin: 35px;
    padding-left: 90px;
">
<h2>Company Details</h2><br>
                                   <p>Company Name:   {{$company->name}}</p>
                                   <p>Website: <a href="{{$company->website}}">{{$company->website}}</a></p>
                                    <p>Phone:{{$company->phone}}</p>
                                    <p>Address:{{$company->address}}</p>


                                    <hr>
                                    <h2>By</h2><br>
                                    <p>Name:{{$company->profile->fname}}     {{$company->profile->lname}}</p>
                                    <p>Phone:{{$company->profile->phone}}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
