@extends('backend.masterfile1')
@section('main')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-md-12 col-lg-8 mb-4">
                        <section class="ftco-section bg-light">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-lg-8 mb-5">
                                        @if(session()->has('message'))
                                            <p class="p-3 mb-2 bg-success text-white">{{session()->get('message')}}</p>
                                        @endif
                                        <form class="needs-validation" novalidate action="{{route('category_post')}}"
                                              method="post">
                                            @csrf
                                                <div class="col-md-12 mb-3 mb-md-0">
                                                    <label for="validationCustom03">Category</label>
                                                    <input type="text" class="form-control" name="category" placeholder="Category"
                                                           id="validationCustom03" required>
                                                    <div class="invalid-feedback">
                                                        Please provide a valid city.
                                                    </div>
                                                </div>

                                            <br>
                                            <div>
                                                <button class="btn btn-primary" type="submit">Add</button>
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

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
@stop
