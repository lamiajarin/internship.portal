@extends('frontend.master')
@section('main')
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 mb-5">


                <h2 class="mb-5">Personal Details</h2>
                            @if(session()->has('message'))
                                <p class="p-3 mb-2 bg-success text-white">{{session()->get('message')}}</p>
                            @endif
                            <form class="needs-validation" novalidate action="{{route('employee_profile_post')}}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-5 mb-3">
                                        <label for="validationCustom02">First name</label>
                                        <input type="text" class="form-control" name="fname" id="validationCustom02" value="{{auth()->user()->fname}}" placeholder="First name" required>
                                    </div>
                                    <div class="col-md-5 mb-3">
                                        <label for="validationCustom03">Last name</label>
                                        <input type="text" class="form-control" name="lname" id="validationCustom03" value="{{auth()->user()->lname}}"   placeholder="Last name" required>
                                    </div>
                                </div >
                                <div class="form-row">
                                    <div class="col-md-9 mb-6 mb-md-0">
                                        <label id="validationCustom03">Phone</label>
                                        <input type="text" class="form-control" name="phone" value="{{auth()->user()->phone}}"
                                               id="validationCustom03" required>
                                    </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label for="validationCustom03">Company Name</label>
                                        <input type="text" class="form-control" name="cname" placeholder="Company Name" id="validationCustom03" required>

                                    </div>
                                </div>
                                </div>

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
