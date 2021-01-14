@extends('frontend.master')
@section('main')

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 mb-3">

                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive table--no-card m-b-30">
                                <table class="table table-bordered table-striped table-earning">
                                    <h2>Job Details</h2>
                                    @foreach($appliedJobs as $appliedJob)

                                        {{--                            <thead>--}}
                                        <tbody>
                                        <tr>

                                            <th scope="col-2">Internship Title:</th>
                                            <td scope="col-3">{{$appliedJob->internship->internship_title}}</td>
                                            <th scope="col-2">Salary:</th>
                                            <td scope="col-3">{{$appliedJob->internship->salary}}</td>


                                        </tr>
                                        <tr>
                                            <th scope="col-2">Job Location:</th>
                                            <td scope="col-3">{{$appliedJob->internship->location}}</td>
                                            <th scope="col-2">Last Date</th>
                                            <td scope="col-3" colspan="3">{{$appliedJob->internship->dateline}}</td>

                                        </tr>
                                        <tr>
                                            <th scope="col-2">Skills Required:</th>
                                            <td scope="col-3" colspan="3">{{$appliedJob->internship->requirements}}</td>


                                        </tr>




                                        </tbody>

                                    @endforeach
                                </table>
                            </div>
                            <h2>Internship Result</h2>
                            <div class="table-responsive table--no-card m-b-30">
                                <table class="table table-bordered table-striped table-earning">

                                    @foreach($appliedJobs as $appliedJob)

                                        {{--                            <thead>--}}

                                        <tbody>

                                        <tr>
                                            <th scope="col-2">Message:</th>
                                            <td scope="col-3" colspan="3">{{$appliedJob->message}}</td>


                                        </tr>

                                        <tr>
                                            <th scope="col-2">Status:</th>
                                            <td scope="col-10" colspan="3">{{$appliedJob->status}}</td>
                                        </tr>


                                        </tbody>
                                    @endforeach
                                </table>
                            </div>

                        </div>


                    </div>
                </div>
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

    </section>
