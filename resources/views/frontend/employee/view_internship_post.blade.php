@extends('frontend.master')
@section('main')

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 mb-4">
                    @if(session()->has('message'))
                        <p class="p-3 mb-2 bg-success text-white">{{session()->get('message')}}</p>
                    @endif
                    <h3>{{ $interns->internship_title}}</h3>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div><span class="icon-my_location"></span>
                            <span>{{$interns->location}} </span> &nbsp&nbsp <span
                                class="fa fa-time"></span>&nbsp<span>{{$interns->status}}</span>

                        </div>
                    </div>
                </div>

            </div>
            <hr>
            <div class="row">
                <div class="col-md-12 col-lg-12 mb-4">
                    <b><h5>Job Context</h5></b>
                </div>
                <div class="col-md-12 col-lg-12 mb-4">
                    <p>{{$interns->context}}</p>
                </div>

            </div>
            <diV class="row">
                <div class="col-md-12 col-lg-12 mb-4">
                    <b><h5>Job Responsibilities</h5></b>
                </div>
                <div class="col-md-12 col-lg-12 mb-4">
                    <p>{{$interns->responsibility}}</p>
                </div>
            </diV>
            <diV class="row">
                <div class="col-md-12 col-lg-12 mb-4">
                    <b><h5>Employment Status</h5></b>
                </div>
                <div class="col-md-12 col-lg-12 mb-4">
                    <p>{{$interns->status}}</p>
                </div>
            </diV>
            <diV class="row">
                <div class="col-md-12 col-lg-12 mb-4">
                    <b><h5> Workplace</h5></b>
                </div>
                <div class="col-md-12 col-lg-12 mb-4">
                    <p>{{$interns->workplace}}</p>
                </div>
            </diV>
            <diV class="row">
                <div class="col-md-12 col-lg-12 mb-4">
                    <b><h5>Educational Requirements</h5></b>
                </div>
                <div class="col-md-12 col-lg-12 mb-4">
                    <p>{{$interns->requirements}}</p>
                </div>
            </diV>
            <diV class="row">
                <div class="col-md-12 col-lg-12 mb-4">
                    <b><h5>Additional Requirements</h5></b>
                </div>
                <div class="col-md-12 col-lg-12 mb-4">
                    <p>{{$interns->arequirements}}</p>
                </div>
            </diV>
            <diV class="row">
                <div class="col-md-12 col-lg-12 mb-4">
                    <b><h5>Job Location</h5></b>
                </div>
                <div class="col-md-12 col-lg-12 mb-4">
                    <p>{{$interns->location}}</p>
                </div>
            </diV>
            <diV class="row">
                <div class="col-md-12 col-lg-12 mb-4">
                    <b><h5>Salary</h5></b>
                </div>
                <div class="col-md-12 col-lg-12 mb-4">
                    <p>{{$interns->salary}}</p>
                </div>
            </diV>
            <diV class="row">
                <div class="col-md-12 col-lg-12 mb-4">
                    <b><h5>Dateline</h5></b>
                </div>
                <div class="col-md-12 col-lg-12 mb-4">
                    <p>{{$interns->dateline}}</p>
                </div>
                <a href="{{route('JobApply',['id'=>$interns->id,'user_id'=>$interns->user_id])}}" class="btn btn-primary py-2">Apply Job</a>

            </diV>
        </div>
    </section>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        import DialogModal from "@/Jetstream/DialogModal";

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
        export default {
            components: {DialogModal}
        }
    </script>

    </div>
    </div>
    </div>
    </section>


