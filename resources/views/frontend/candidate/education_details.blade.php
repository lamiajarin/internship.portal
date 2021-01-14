@extends('frontend.master')
@section('main')
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 mb-5">
                    <a class=" previous" href="{{route('edit')}}" role="button">&laquo; Back</a><br>
                    <a class=" previous" href="{{route('view_resume','id')}}" role="button">&laquo; Back to view</a>

                    <h2>Educational Details</h2>
                    @foreach($educations as $educations)
                        <div class="container">
                            <h2 class="mb-5">Academic  <a href="{{route('candidate_education_edit','id')}}">&nbsp&nbsp&nbsp<i class="fas fa-edit" style="
                                                    font-size: 21px;
                                                    "></i>Edit</a>
                            </h2>
                            <div class="row">
 <span class="badge badge-dark py-8 px-10c mb-4 col-8 position-relative">
                                <div class="col-md-6 mb-3 mb-md-0">

<p>Qualification:{{$educations->qualification}}</p>
                                    <p>Institute:{{$educations->institute_name}}</p>
                                    <p>Year:{{$educations->passing_year}}</p>

                                </div>
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <p>Stream:{{$educations->stream}}</p>
                                    <p>CGPA:{{$educations->percentage}}</p>
                                </div>
                                <a href="{{route('candidate_education_delete',$educations->id)}}"
                                   class="position-absolute mb-4 " style="
                                top: -8px;
                                right: -8px;
                                color:orange;
                            ">
                                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </a>
                                </span>
                            </div>
                        </div>

                    @endforeach
                    @if(session()->has('message'))
                        <p class="p-3 mb-2 bg-success text-white">{{session()->get('message')}}</p>
                    @endif
                    <form action="{{route('candidate_education_post')}}" method="post">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label for="validationCustom03">Qualification</label>
                                    <input type="text" class="form-control" name="qualification" placeholder="e.g B.SC">
                                </div>

                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label for="validationCustom03">Stream</label>
                                    <input type="text" class="form-control" name="stream" placeholder="e.g Science ">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="validationCustom03">Name of Institute</label>
                            <input type="text" class="form-control" name="institute_name"
                                   placeholder="e.g Islamic University of Bangladesh">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label for="validationCustom03">Year of Passing</label>
                                    <input type="text" class="form-control" name="passing_year"
                                           placeholder="e.g 2017-2022">
                                </div>


                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label for="validationCustom03">Percentage</label>
                                    <input type="text" class="form-control" name="percentage" placeholder="e.g 0.00">
                                </div>
                            </div>
                        </div>

                        <br>
                        <center>
                            <button class="btn btn-primary " type="submit">Save</button>
                        </center>
                    </form>

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


    </main>
@stop
<script>
    import Dropdown from "@/Jetstream/Dropdown";

    export default {
        components: {Dropdown}
    }
</script>
