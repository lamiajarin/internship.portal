@extends('frontend.master')
@section('main')

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-8 mb-5">
                    <a class=" previous" href="{{route('edit')}}" role="button">&laquo; Back to edit</a>
                    <h2 class="mb-5">Personal Details</h2>
                    @if(session()->has('message'))
                        <p class="p-3 mb-2 bg-success text-white">{{session()->get('message')}}</p>
                    @endif
                    @if($errors->any())
                        @foreach($errors->all() as $er)
                            <p class="alert alert-danger">{{$er}}</p>
                        @endforeach
                    @endif
                    <form class="needs-validation" novalidate action="{{route('candidate_profile_update',$profile->user_id)}}"
                          enctype="multipart/form-data"  method="post">
                        @method('put')
                        @csrf
                        <div class="form-row">
                            <div class="col-md-5 mb-3 mb-md-0">
                                <label for="validationCustom02">First name</label>
                                <input type="text" class="form-control" name="fname" id="validationCustom02"
                                       placeholder="First name" value="{{$profile->fname}}" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-5 mb-3 mb-md-0">
                                <label for="validationCustom03">Last name</label>
                                <input type="text" class="form-control" name="lname" value="{{$profile->lname}} "
                                       id="validationCustom03" placeholder="Last name" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-6 mb-md-0">
                                <label id="validationCustom03">Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{$profile->phone}}"
                                       id="validationCustom03" required>
                            </div>

                            <div class="col-md-6 mb-6 mb-md-0">
                                <label id="validationCustom05">Email</label>
                                <input type="text" class="form-control" name="email" value="{{$profile->email}}"
                                       id="validationCustom05" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label for="file">Resume</label>
                                <input type="file"    name="resume" class="form-control-file"
                                       id="file">
                            </div>
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label for="validationCustom03">Current City</label>
                                <input type="text" class="form-control" value="{{$profile->ccity}}" name="ccity" placeholder="Current City"
                                       id="validationCustom03" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>

                            <div class="col-md-12 mb-3 mb-md-0">
                                <label for="validationCustom05">
                                    Permanent City
                                </label>
                                <input type="text" class="form-control" value="{{$profile->pcity}}" name="pcity" placeholder="Permanent City"
                                       id="validationCustom05" required>
                                <div class="invalid-feedback">
                                    Please provide a valid City.
                                </div>
                            </div>

                        </div>
                        <br>
                        <div>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
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



@stop
<script>
    import Dropdown from "@/Jetstream/Dropdown";
    import Label from "@/Jetstream/Label";
    import Button from "@/Jetstream/Button";

    export default {
        components: {Button, Label, Dropdown}
    }
</script>
