@extends('frontend.master')
@section('main')

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 mb-5"  style="
    margin-left: 163px;
    margin-top: 49px;
">
                    <h3 style="text-align: center">Create Your Resume</h3>
                    <div class="list-group">
                        @if(is_null($profileCheck))
                        <a  href="{{route('candidate_profile')}}" class="list-group-item list-group-item-action text-lg-center">
                            Profile
                        </a>@else
                            <p>Profile Update</p>
                             @endif
                            @if(is_null($educationCheck))
                                <a href="{{route('candidate_education')}}" class="list-group-item list-group-item-action text-lg-center">Education</a>
                            @else
                                <p>Eduction Update</p>
                            @endif
                            @if(is_null($trainingCheck))
                                <a href="{{route('candidate_training')}}" class="list-group-item list-group-item-action text-lg-center">Training</a>
                            @else
                                <p>Training Update</p>
                            @endif
                            @if(is_null($projectCheck))
                                <a href="{{route('candidate_project')}}" class="list-group-item list-group-item-action text-lg-center">Project</a>
                            @else
                                <p>Project Update</p>
                            @endif
                            @if(is_null($skillCheck))
                                <a href="{{route('candidate_skill')}}" class="list-group-item list-group-item-action  text-lg-center">Skill</a>
                            @else
                                <p>Skill Update</p>
                            @endif
                            @if(is_null($sampleCheck))
                                <a href="{{route('candidate_sample')}}" class="list-group-item list-group-item-action text-lg-center">Work sample</a>
                            @else
                                <p>Sample Update</p>
                            @endif
{{--                            @if(is_null($experienceCheck))--}}
{{--                                <a href="{{route('candidate_experience')}}" class="list-group-item list-group-item-action text-lg-center">Experience</a>--}}
{{--                            @else--}}
{{--                                <p>Experience Update</p>--}}
{{--                            @endif--}}


                <!------ Include the above in your HEAD tag ---------->

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
        </div>
    </section>
@stop
<script>
    import Dropdown from "@/Jetstream/Dropdown";

    export default {
        components: {Dropdown}
    }
</script>

