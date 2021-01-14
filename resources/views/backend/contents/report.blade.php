@extends('backend.masterfile1')
@section('main')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form class="form-inline" action="{{route('admin_report')}}">

                        <div class="form-group" style="
                                        margin-right: 43px;">
                            <label for="date"></label>
                            <input type="date" class="form-control" name="start_date" id="exampleInputName2" placeholder="">
                        </div>
                        <div class="form-group" style="margin-right: 43px;">
                            <label for="date"></label>
                            <input type="date" name="end_date" class="form-control" id="exampleInputEmail2" placeholder="">
                        </div>
                        <div class="form-group"  style="margin-right: 43px;">
                            <select class="form-control" name="role">
                                <option>Select Role</option>
                                <option>employee</option>
                                <option>candidate</option>
                            </select>
                        </div>
                        <button type="submit"  class="btn btn-default"><i class="fas fa-search"></i></button>

                    <br><br>
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>

                            <tr>
                                <th scope="col">SI</th>
                                <th scope="col">Name</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $data)
                                <tr>
                                    <th scope="row">{{$data->id}}</th>

                                    <td> {{$data->fname}} {{$data->lname}}</td>
                                    <td>{{$data->phone}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->role}}</td>
{{--                                    <td>  <a type="button" href="{{route('employee_delete',$data->id)}}" class="btn btn-danger"> Delete</a></td>--}}

                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@stop
