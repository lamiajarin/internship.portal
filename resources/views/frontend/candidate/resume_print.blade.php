<div class="container">
    <div class="row">
        <div class="col-md-9 col-lg-9 mb-3">

            <h2>{{auth()->user()->fname}}  {{auth()->user()->lname}}</h2>
            <p>{{auth()->user()->email}}</p>
            <p>{{auth()->user()->phone}}</p>
            {{--                                             @dd(auth()->user()->profile->ccity)--}}
            <p>{{auth()->user()->profile->ccity}}</p>
            <hr>

        </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-lg-3 mb-2">
            <h3 style="color: blue">EDUCATION</h3>
        </div>

        <div class="col-md-7 col-lg-7 mb-3">
            @foreach(auth()->user()->education as $education)

                <b> {{$education->qualification}}, {{$education->stream}}</b> <br>
                {{$education->institute_name}}<br>
                {{$education->passing_year}}<br>
                CGPA: {{$education->percentage}}<br><br> <br>
            @endforeach
        </div>

    </div>



    <div class="row">
        <div class="col-md-3 col-lg-3 mb-2">
           <h3 style="color: blue">TRAININGS</h3>
        </div>

        <div class="col-md-7 col-lg-7 mb-3">
            @foreach(auth()->user()->training as $training)
                <b> {{$training->training_program}}</b>  <br>
                {{$training->organization}}, {{$training->location}} <br>

                {{$training->start_month}}-{{$training->end_month}}  <br>
                {{$training->description}}<br><br><br>
            @endforeach
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 col-lg-3 mb-2">
           <h3 style="color: blue">PROJECTS</h3>
        </div>

        <div class="col-md-7 col-lg-7 mb-6">
            @foreach(auth()->user()->project as $project)
                <b> {{$project->title}}</b>  <br>
                {{$project->start_month}}-{{$project->end_month}} <br>
                {{$project->project_link}}  <br>
                {{$project->description}}<br><br><br>
            @endforeach
        </div>

    </div>

    <div class="row">
        <div class="col-md-3 col-lg-3 mb-2">
           <h3 style="color: blue">SKILLS</h3>
        </div>

        <div class="col-md-7 col-lg-7 mb-6">
            <ul>
                @foreach(auth()->user()->skill as $skill)

                    <li>{{$skill->skill}} </li>
                @endforeach
            </ul>
        </div>

    </div>
    <div class="row">
        <div class="col-md-3 col-lg-3 mb-2">
           <h3 style="color: blue">WORK SAMPLES</h3>
        </div>

        <div class="col-md-7 col-lg-7 mb-6">
            <ul>
                @foreach(auth()->user()->work_sample as $work_sample)
                    <li>{{$work_sample->add_link}} </li>
                @endforeach

            </ul>
        </div>

    </div>



