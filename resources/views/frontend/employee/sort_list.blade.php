@extends('frontend.master')
@section('main')

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 mb-5">


                    <h1>ShortListed Candidate</h1>

                    @foreach($shortLists as $candidate)

                        {{--            @dd($candidate->user->fname)--}}
                        <div class="row">
                            <div class="col-md-12 ftco-animate">
                                <div class="job-post-item p-4 d-block d-lg-flex align-items-center">
                                    <div class="one-third mb-4 mb-md-0">
                                        <div class="job-post-item-header align-items-center">
                                            <h2 class="mr-3 text-black">{{$candidate->user->fname}}     {{$candidate->user->fname}}</h2>
                                            <h6 class="mr-3 text-primary">Applied Date: {{$candidate->created_at}}</h6>
                                            <h6 class="mr-3 text-dark">Applied For
                                                Internship: {{$candidate->internship->internship_title}}
                                                ({{$candidate->internship->status}})</h6>
                                            <div class="row">
                                                <div class="col-md-4 col-lg-4 mb-3">
                                                    <p><i class="fas fa-phone" style="
    margin-right: 10px;
    color: dodgerblue;
"></i>{{$candidate->user->phone}}</p>
                                                </div>
                                                <div class="col-md-8 col-lg-8 mb-3">
                                                    <p><i class="fas fa-envelope" style="
    margin-right: 10px;
    color: dodgerblue;
"></i>{{$candidate->user->email}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 col-lg-4 mb-3">
                                                    <button type="button" class="btn btn-primary">Resume</button>
                                                </div>
                                                <div class="col-md-4 col-lg-4 mb-3">
                                                    <a type="button" href="{{route('view_resume',$candidate->user_id)}}" class="btn btn-success">View Details</a>
                                                </div>
                                                <div class="col-md-4 col-lg-4 mb-3">
                                                    <a type="button" href="{{route('application_details',$candidate->internship)}}" class="btn btn-success">Application Details</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    @endforeach

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


@stop
<script>
    import Dropdown from "@/Jetstream/Dropdown";
    import Input from "@/Jetstream/Input";

    export default {
        components: {Input, Dropdown}
    }
</script>
