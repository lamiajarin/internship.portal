@extends('frontend.master')
@section('main')
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 mb-5">
                    <a class=" previous" href="{{route('edit')}}" role="button">&laquo; Back</a>
                    <br>
                    <a class=" previous" href="{{route('view_resume','id')}}" role="button">&laquo; Back to view</a>
                    <h2 class="mb-5">Experience Details</h2>

                            @if(session()->has('message'))
                                <p class="p-3 mb-2 bg-success text-white">{{session()->get('message')}}</p>
                            @endif
                            <form  action="{{route('candidate_experience_post')}}" method="post">
                                @csrf

                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label for="validationCustom03">Employer Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Employer Name">
                                    </div>

                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label for="validationCustom03">Type of Employment</label>
                                        <input type="text" class="form-control" name="type" placeholder="Type of Employment ">
                                    </div>

                                <div class="col-md-12 mb-3 mb-md-0">
                                    <label for="validationCustom03">Designation</label>
                                    <input type="text" class="form-control" name="designation" placeholder="Designation">
                                </div>

                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label for="date">From Date</label>
                                        <input type="date" class="form-control" name="from_date" placeholder="From Date">
                                    </div>


                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label for="date">To Date</label>
                                        <input type="date" class="form-control" name="to_date" placeholder="To Date">
                                    </div>
<br>
                                <button class="btn btn-primary" type="submit">Submit</button>
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
