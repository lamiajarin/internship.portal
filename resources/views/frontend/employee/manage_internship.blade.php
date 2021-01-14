@extends('frontend.master')
@section('main')

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-8 mb-5">


                    @if(session()->has('message'))
                        <p class="alert alert-success text-black-50">{{session()->get('message')}}</p>
                    @endif

                    @foreach(auth()->user()->manage_internship as $post)
                        <div class="row">
                            <div class="col-md-12 ftco-animate">
                                <div class="job-post-item p-4 d-block d-lg-flex align-items-center">
                                    <div class="one-third mb-4 mb-md-0">
                                        <div class="job-post-item-header align-items-center">
                                            {{--                                        @dd(auth()->user()->post_internship);--}}


                                            <h2 class="mr-3 text-black"><a href="{{route('view_internship_post',$post->id)}}">{{$post->internship_title}}</a></h2>
                                            <span class="subadge">{{$post->status}}</span>
                                            <div class="job-post-item-body d-block d-md-flex">
                                                <div><span class="icon-my_location"></span>
                                                    <span>{{$post->location}} </span> &nbsp&nbsp <span
                                                        class="fa fa-calendar"></span>&nbsp<span>{{$post->dateline}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                                        <div>
                                            <a href="{{route('manage_internship_edit',$post->id)}}"
                                               class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                                <span class="icon-edit"></span>
                                            </a>
                                            <br>
                                            <a href="{{route('manage_internship_delete',$post->id)}}"
                                               class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                                <span class="icon-delete"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                    {{$manage->links()}}



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
