@extends('frontend.master')
@section('main')
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 mb-5">
                    <a class=" previous" href="{{route('edit')}}" role="button">&laquo; Back</a>
                    <br>
                    <a class=" previous" href="{{route('view_resume','id')}}" role="button">&laquo; Back to view</a>
<h2>Training Details</h2>
                    @foreach($trainings as $training)

                        <div class="container">
                            <h2 class="mb-5">Training
                            </h2>
                            <div class="row">
 <span class="badge badge-dark py-8 px-10c mb-4 col-8 position-relative">
                                <div class="col-md-6 mb-3 mb-md-0">

                                    <p>Training_Program:{{$training->training_program}}</p>
                                    <p>Start Month:{{$training->start_month}}</p>
                                    <p>End Month:{{$training->end_month}}</p>


                                </div>
                                <div class="col-md-6 mb-3 mb-md-0" >
                                    <p>Location:{{$training->location}}</p>
                                    <p>Organization:{{$training->organization}}</p>
                                </div>
                                <div>
                                    <p>Description:{{$training->description}}</p>
                                </div>
      <a href="{{route('candidate_training_delete',$training->id)}}" class="position-absolute mb-4 " style="
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
                    <form action="{{route('candidate_training_post')}}" method="post">
                        @csrf

                        <div class="col-md-6 mb-3 mb-md-0">
                            <label for="validationCustom03">Training program</label>
                            <input type="text" class="form-control" name="training_program" placeholder="e.g Training program">
                        </div>


                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label for="date">Start month
                                    </label>
                                    <input type="date" class="form-control" name="start_month" placeholder="e.g Choose month">
                                </div>


                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label for="date">End month
                                    </label>
                                    <input type="date" class="form-control" name="end_month" placeholder="e.g Choose month">
                                </div>
                                <div class="col-md-12 mb-3 mb-md-0">
                                    <label for="validationCustom03">Location</label>
                                    <input type="text" class="form-control" name="location" placeholder="e.g Location">
                                </div>
                                <div class="col-md-12 mb-3 mb-md-0">
                                    <label for="validationCustom03">Organization</label>
                                    <input type="text" class="form-control" name="organization" placeholder="e.g Organization">
                                </div>

                                <div class="col-md-12 mb-3 mb-md-0">
                                    <label for="validationCustom03">Description (Optional)</label>
                                    <textarea type="text" class="form-control" name="description" placeholder="e.g Description">
                                    </textarea>
                                </div>



                            </div>
                        </div>

                        <br>
                        <center> <button class="btn btn-primary " type="submit">Save</button></center>
                    </form>

                    <script>
                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                        (function() {
                            'use strict';
                            window.addEventListener('load', function() {
                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                var forms = document.getElementsByClassName('needs-validation');
                                // Loop over them and prevent submission
                                var validation = Array.prototype.filter.call(forms, function(form) {
                                    form.addEventListener('submit', function(event) {
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
