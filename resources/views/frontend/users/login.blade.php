@extends('frontend.master')
@section('main')
    <section class="ftco-section bg-light" style="background-image: url(https://images.unsplash.com/photo-1573497491208-6b1acb260507?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80) !important;
    background-size: cover !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 mb-5">

                    <style>.btnContactSubmit {
                            width: 50%;
                            border-radius: 1rem;
                            padding: 1.5%;
                            color: #fff;
                            background-color: #0062cc;
                            border: none;
                            cursor: pointer;
                            margin-right: 6%;
                            background-color: white;
                            color: blue;
                            margin-top: 4%;
                        }

                        .register .nav-tabs .nav-link:hover {
                            border: none;
                        }

                        .text-align {
                            margin-top: -3%;
                            margin-bottom: -9%;

                            padding: 10%;
                            margin-left: 30%;
                        }

                        .form-new {
                            margin-right: 22%;
                            margin-left: 20%;
                        }

                        .register-heading {
                            margin-left: 21%;
                            margin-bottom: 10%;
                            color: #e9ecef;
                        }

                        .register-heading h1 {
                            margin-left: 21%;
                            margin-bottom: 10%;
                            color: #e9ecef;
                        }

                        .btnLoginSubmit {
                            border: none;
                            padding: 2%;
                            width: 25%;
                            cursor: pointer;
                            background: #29abe2;
                            color: #fff;
                        }

                        .btnForgetPwd {
                            cursor: pointer;
                            margin-right: 5%;
                            color: #f8f9fa;
                        }

                        .register {
                            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
                            margin-top: 3%;
                            padding: 3%;
                            border-radius: 2.5rem;
                        }

                        .nav-tabs .nav-link {
                            border: 1px solid transparent;
                            border-top-left-radius: .25rem;
                            border-top-right-radius: .25rem;
                            color: white;
                        }</style>

                    <div>

                        <div class="container register" style="margin-left: 208px; ">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active text-align form-new" id="home"
                                             role="user"
                                             aria-labelledby="home-tab">
                                            <h3 class="register-heading"> Login</h3>

                                            <div class="row register-form">
                                                <div class="col-md-12">
                                                    <form method="post" action="{{route('user_login_post')}}">
                                                        @csrf
                                                        <div class="form-group">
                                                            <input type="text" name="email" class="form-control "
                                                                   placeholder="Your Email *" value="" required=""/>
                                                            @error('email') <span class="btn-danger">{{$message}}</span> @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <input type="password" name="password" class="form-control"
                                                                   placeholder="Your Password *" value="" required=""/>
                                                            @error('password') <span class="btn-danger">{{$message}}</span> @enderror

                                                        </div>
                                                        <div class="form-group">
                                                            <input type="submit" name="" class="btnContactSubmit"
                                                                   value="Login"/><br>

                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
        </div>
    </section>
@stop
<script>
    import Dropdown from "@/Jetstream/Dropdown";

    export default {
        components: {Dropdown}
    }
</script>
