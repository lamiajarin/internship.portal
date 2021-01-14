<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
    nav-item:last-child {
        margin-right: 15px !important;
    }</style>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light"
     id="ftco-navbar"

     @if(!request()->routeIs('home'))
     style="background: rebeccapurple !important;"
     @endif

>
    <div class="container-fluid px-md-4	">
        <a class="navbar-brand" href="{{route('home')}}">Internship Portal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                @guest
                <li class="nav-item active"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{route('job.want')}}" class="nav-link">Browse Jobs</a></li>
{{--                <li class="nav-item"><a href="candidates.html" class="nav-link">CareerAdvice</a></li>--}}

                <li class="nav-item cta mr-md-1"><a href="{{route('user_login')}}" class="nav-link">Login</a></li>
                <li class="nav-item cta mr-md-1"><a href="{{route('user_registration')}}" class="nav-link">Registration</a></li>
                    @endguest
                        @auth
                    @if(auth()->user()->role=='candidate')
                            <li class="nav-item active"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="{{route('job.want')}}" class="nav-link">Browse Jobs</a></li>
{{--                            <li class="nav-item"><a href="candidates.html" class="nav-link">CareerAdvice</a></li>--}}

                            <div class="dropdown show nav-item" >
                        <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class='fas fa-user-circle' style='font-size:24px'></i>
                            {{auth()->user()->fname}}     {{auth()->user()->lname}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{route('edit')}}"><i class="far fa-edit"></i>&nbsp &nbsp &nbsp Create Resume</a>
                            <a class="dropdown-item" href="{{route('view_resume','id')}}"><i class="far fa-file"></i>&nbsp &nbsp &nbsp View Resume</a>
                            <a class="dropdown-item" href="{{route('job_short_list_view')}}"><i class="far fa-bookmark"></i>&nbsp &nbsp &nbsp Shortisted Internships</a>
                            <a class="dropdown-item" href="{{route('applied_job',auth()->user()->id)}}"><i class="far fa-paper-plane"></i>&nbsp &nbsp &nbsp Applied Internships</a>
<hr>
                            <a class="dropdown-item" href="{{route('user_logout')}}"><i class="	fas fa-user-slash"></i>&nbsp &nbsp &nbsp Logout</a>
                        </div>
                    </div>

                    @endif
                    @endauth
@auth
                        @if(auth()->user()->role=='employee')
                        <div class="dropdown show nav-item" >
                            <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Internships
                            </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{route('PostJob')}}"> Post Internship</a>
                            <a class="dropdown-item" href="{{route('manage_internship')}}"> Manage Internship</a>
                        </div>
                        </div>

                            <div class="dropdown show nav-item" >
                                <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Candidates                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a href="{{route('JobApplyCandidate')}}" class="dropdown-item">Candidate Lists</a>
                                    <a class="dropdown-item" href="{{route('short_list')}}"> Candidate Shortlists</a>
                                </div>
                            </div>
                            <div class="dropdown show nav-item" >
                                <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='fas fa-user-circle' style='font-size:24px'></i>
                                    {{auth()->user()->fname}}     {{auth()->user()->lname}}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{route('employee_profile')}}"><i class="far fa-edit"></i>&nbsp &nbsp &nbsp Profile</a>
                                    <a class="dropdown-item" href="{{route('company')}}"><i class="far fa-file"></i>&nbsp &nbsp &nbsp Company</a>
                                    <hr>
                                    <a class="dropdown-item" href="{{route('user_logout')}}"><i class="	fas fa-user-slash"></i>&nbsp &nbsp &nbsp Logout</a>
                                </div>
                            </div>

                    @endif
                        @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
    import Button from "@/Jetstream/Button";
    export default {
        components: {Button}
    }
</script>



