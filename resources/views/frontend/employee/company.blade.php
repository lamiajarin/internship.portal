@extends('frontend.master')
@section('main')

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 mb-5">


<h1>Organizational Details</h1>
                    @if(session()->has('message'))
                        <p class="p-3 mb-2 bg-success text-white">{{session()->get('message')}}</p>
                    @endif
                    <form action="{{route('companypost')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="from-row">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label for="validationCustom02">Company Name </label>
                                <input type="text" class="form-control" name="name" id="validationCustom02"
                                       placeholder="Company Name" required>
                            </div>

                            <div class="col-md-12 mb-3 mb-md-0">
                                <label for="validationCustom03">Description</label>
                                <textarea type="text" class="form-control " name="description"
                                          id="validationCustom03" placeholder="Description" rows="3"
                                          required></textarea>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                        </div>


                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="validationCustom03">Website</label>

                            <input type="text" class="form-control" name="website" placeholder="Website"
                                   id="validationCustom05" required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>

                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="file">Logo</label>
                            <input type="file"   name="logo" class="form-control-file"
                                   id="file">
                        </div>



                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="exampleFormControlFile1">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Address"
                                   id="validationCustom05" required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>


                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="validationCustom03">Mobile</label>
                            <div class="form-row">

                                <div class="col-md-10 mb-4">
                                    <input type="text" class="form-control" name="phone" placeholder="xxxxxxxxxx"
                                           id="validationCustom05" required>
                                </div>

                            </div>

                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>




                      <center> <button class="btn btn-primary " type="submit">Submit</button></center>
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
    import Input from "@/Jetstream/Input";

    export default {
        components: {Input, Dropdown}
    }
</script>

