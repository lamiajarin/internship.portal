@extends('backend.masterfile1')
@section('main')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-md-4 col-lg-4 mb-3">

                        <form class="form-header" action="" method="POST">
                            <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas " />
                            <button class="au-btn--submit" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form><br><br>

                    </div>
                </div>

            </div>
        </div>
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>

                <tr>
                    <th scope="col">SI</th>
                    <th scope="col"> Category</th>
                    <th scope="col">Action</th>
                </tr>
                @foreach($data as $list)
                    <tr>
                        <td scope="row">{{$list->id}}</td>
                        <td>{{$list->category}}</td>
                        <td>
                            <a type="button" href="{{route('category_edit',$list->id)}}" class="btn btn-success"> Edit</a>
                            <a type="button" href="{{route('category_delete',$list->id)}}" class="btn btn-danger"> Delete</a>

                        </td>

                    </tr>
                @endforeach
                </thead>

            </table>
        </div>
    </div>
    </div>
@stop
