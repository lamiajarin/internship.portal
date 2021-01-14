@extends('backend.masterfile1')
@section('main')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive table--no-card m-b-30">
                        <form class="form-header" action="" method="POST">
                            <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas " />
                            <button class="au-btn--submit" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form><br><br>
                        <table class="table table-borderless table-striped table-earning">
                            <thead>

                            <tr>
            <th scope="col">SI</th>
            <th scope="col">Company Name</th>
            <th scope="col">Website</th>
            <th scope="col">Contact</th>
                                <th scope="col">Logo</th>

            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list as $data)
            <tr>
          <th scope="row">{{$data->id}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->website}}</td>
                <td>{{$data->phone }}</td>
                <td><img src="{{asset('uploads/users/'.$data->logo)}}" width="75px" height="75px" ></td>
<td>
        <a type="button" href="{{route('company_view',$data->id)}}" class="btn btn-success"> Details</a>
    <a type="button" href="{{route('company_delete',$data->id)}}" class="btn btn-danger"> Delete</a>

   </td>
            </tr>
        @endforeach
        </tbody>
    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
