@extends('backend.masterfile1')
@section('main')
    <style>
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #ddd;}

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
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
                                <th scope="col">Internship Title</th>
                                <th scope="col">Workplace</th>
                                <th scope="col">Location</th>
                                <th scope="col">Vacancy</th>
                                <th scope="col">Job Status</th>
                                <th scope="col">Dateline</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Updated At</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
   @foreach($list as $lists)
<tbody>
<td>{{$lists->id}}</td>
<td>{{$lists->internship_title}}</td>
<td>{{$lists->workplace}}</td>
<td>{{$lists->location}}</td>
<td>{{$lists->Vacancy}}</td>
<td>{{$lists->status}}</td>
<td>{{$lists->dateline}}</td>
<td>{{$lists->created_at}}</td>
<td>{{$lists->updated_at}}</td>
<td>{{$lists->change_status}}</td>
<td><div class="dropdown">
        <button class="dropbtn">Pending</button>
        <div class="dropdown-content">
            <a href="{{route('changeStatus',['id'=> $lists->id, 'status'=>'Approve'])}}">Approve</a>
            <a href="{{route('changeStatus',['id'=> $lists->id, 'status'=>'Not Approve'])}}">Not Approve</a>
        </div>
    </div></td>


</tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
