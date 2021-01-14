@extends('frontend.master')
@section('main')

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-10 mb-5">
                    <section>
                        <h2 style="
    margin-top: 51px;
"><b style="
    margin: 446px;
">Resume</b></h2>
                        <div class="card">
                            <div class="card-body">
                                @if(auth()->user()->role=='employee')
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-9 col-lg-9 mb-3">

                                                <h2>{{$users->fname}}  {{$users->lname}} </h2>
                                                <p>{{$users->email}}</p>
                                                <p>{{$users->phone}}</p>
                                                {{--                                             @dd(auth()->user()->profile->ccity)--}}
                                                <p>{{$users->profile->ccity}}</p>
                                                <hr style="
    margin-right: -267px;
">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 col-lg-3 mb-2">
                                                <h6>EDUCATION</h6>
                                            </div>

                                            <div class="col-md-7 col-lg-7 mb-6">

                                                @foreach($users->education as $education)

                                                    <b> {{$education->qualification}}, {{$education->stream}}</b>  <br>
                                                    {{$education->institute_name}}<br>
                                                    {{$education->passing_year}}<br>
                                                    CGPA: {{$education->percentage}}<br>
                                                @endforeach

                                            </div>
                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-md-3 col-lg-3 mb-2">
                                                TRAININGS
                                            </div>

                                            <div class="col-md-7 col-lg-7 mb-6">
                                                @foreach($users->training as $training)
                                                    <b> {{$training->training_program}}</b>  <br>
                                                    {{$training->organization}}, {{$training->location}} <br>

                                                    {{$training->start_month}}-{{$training->end_month}}  <br>
                                                    {{$training->description}}<br>
                                                @endforeach
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3 col-lg-3 mb-2">
                                                PROJECTS
                                            </div>

                                            <div class="col-md-7 col-lg-7 mb-6">
                                                @foreach($users->project as $project)
                                                    <b> {{$project->title}}</b>  <br>
                                                    {{$project->start_month}}-{{$project->end_month}} <br>

                                                    {{$project->project_link}}  <br>
                                                    {{$project->description}}<br>
                                                @endforeach
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3 col-lg-3 mb-2">
                                                SKILLS
                                            </div>

                                            <div class="col-md-7 col-lg-7 mb-6">
                                                <ul>
                                                    @foreach($users->skill as $skill)

                                                        <li>{{$skill->skill}} </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3 col-lg-3 mb-2">
                                                WORK SAMPLES
                                            </div>

                                            <div class="col-md-7 col-lg-7 mb-6">
                                                <ul>
                                                    @foreach($users->work_sample as $work_sample)
                                                        <li>{{$work_sample->add_link}} </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if(auth()->user()->role=='candidate')
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-9 col-lg-9 mb-3">
                                                <h2>{{auth()->user()->fname}}  {{auth()->user()->lname}} <a href="{{route('candidate_profile_edit',auth()->user()->id)}}">&nbsp&nbsp&nbsp<i class="fas fa-edit" style="
                                                    font-size: 21px;
                                                    "></i>Edit</a></h2>
                                                <p>{{auth()->user()->email}}</p>
                                                <p>{{auth()->user()->phone}}</p>
                                                {{--                                             @dd(auth()->user()->profile->ccity)--}}
                                                <p>{{auth()->user()->profile->ccity}}</p>
                                                <hr style="
    margin-right: -267px;
">

                                            </div>
                                            <div class="col-md-3 col-lg-3 mb-2">
                                                <a href="{{route('pdf')}}"><i class="fas fa-download" style="
    font-size: 21px;
"></i>&nbsp &nbsp Download</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 col-lg-3 mb-2">
                                                <h6>EDUCATION</h6>
                                            </div>
                                            <div class="col-md-7 col-lg-7 mb-3">
                                            @foreach(auth()->user()->education as $education)

                                                    <b> {{$education->qualification}}, {{$education->stream}}</b> <br>
                                                    {{$education->institute_name}}<br>
                                                    {{$education->passing_year}}<br>
                                                    CGPA: {{$education->percentage}}<br>
                                                    @endforeach
                                                </div>



                                            <div class="col-md-12 col-lg-12 mb-6" style="
    margin-left: 264px;
">
                                                <a href="{{route('candidate_education')}}"><i
                                                        class="fas fa-plus">Add</i></a>

                                            </div>

                                        </div>

                                        <hr>

                                        <div class="row">
                                            <div class="col-md-3 col-lg-3 mb-2">
                                                TRAININGS
                                            </div>

                                            <div class="col-md-7 col-lg-7 mb-3">
                                                @foreach(auth()->user()->training as $training)
                                                    <b> {{$training->training_program}}</b>  <br>
                                                    {{$training->organization}}, {{$training->location}} <br>

                                                    {{$training->start_month}}-{{$training->end_month}}  <br>
                                                    {{$training->description}}<br>
                                                @endforeach
                                                <div class="col-md-12 col-lg-12 mb-2" style="

">
                                                    <a href="{{route('candidate_training')}}"><i
                                                            class="fas fa-plus">Add</i></a>

                                                </div>

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3 col-lg-3 mb-2">
                                                PROJECTS
                                            </div>

                                            <div class="col-md-7 col-lg-7 mb-6">
                                                @foreach(auth()->user()->project as $project)
                                                    <b> {{$project->title}}</b>  <br>
                                                    {{$project->start_month}}-{{$project->end_month}} <br>

                                                    {{$project->project_link}}  <br>
                                                    {{$project->description}}<br>
                                                @endforeach
                                                <div class="col-md-12 col-lg-12 mb-6" style="

">
                                                    <a href="{{route('candidate_project')}}"><i
                                                            class="fas fa-plus">Add</i></a>

                                                </div>

                                            </div>

                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3 col-lg-3 mb-2">
                                                SKILLS
                                            </div>

                                            <div class="col-md-7 col-lg-7 mb-6">
                                                <ul>
                                                    @foreach(auth()->user()->skill as $skill)

                                                        <li>{{$skill->skill}} </li>
                                                    @endforeach
                                                    <div class="col-md-12 col-lg-12 mb-6" style="

">
                                                        <a href="{{route('candidate_skill')}}"><i class="fas fa-plus">Add</i></a>

                                                    </div>

                                                </ul>
                                            </div>

                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3 col-lg-3 mb-2">
                                                WORK SAMPLES
                                            </div>

                                            <div class="col-md-7 col-lg-7 mb-6">
                                                <ul>
                                                    @foreach(auth()->user()->work_sample as $work_sample)
                                                        <li>{{$work_sample->add_link}} </li>
                                                    @endforeach
                                                    <div class="col-md-12 col-lg-12 mb-6" style="
">
                                                        <a href="{{route('candidate_sample')}}"><i class="fas fa-plus">Add</i></a>

                                                    </div>

                                                </ul>
                                            </div>

                                        </div>


                                    </div>
                                @endif
                            </div>
                        </div>
                    </section>
                    <script>
                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                        (function () {
                            'use strict';
                            window.addEventListener('load', function () {
                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                var forms = document.getElementsByClassName('needs-validation');
                                // Loop over them and prevent submission
                                var validation = Array.prototype.filter.call(forms, function (form) {
                                    form.addEventListener('submit', function (event) {
                                        if (form.checkValidity() === false) {
                                            event.preventDefault();
                                            event.stopPropagation();
                                        }
                                        form.classList.add('was-validated');
                                    }, false);
                                });
                            }, false);
                        })();
                    </script>
                </div>
            </div>
        </div>
    </section>


