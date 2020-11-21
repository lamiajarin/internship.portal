@extends('backend.masterfile1')
@section('main')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>

                            <tr>
            <th scope="col">SI</th>
            <th scope="col">Category Name</th>
            <th scope="col">Address</th>
            <th scope="col">Contact</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list as $data)
            <tr>
          <th scope="row">{{$data->id}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->contact_no}}</td>

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
