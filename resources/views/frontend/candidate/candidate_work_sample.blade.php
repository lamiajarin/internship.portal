@extends('frontend.master')
@section('main')
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 mb-5">
                    <a class=" previous" href="{{route('edit')}}" role="button">&laquo; Back</a>
                    <br>
                    <a class=" previous" href="{{route('view_resume','id')}}" role="button">&laquo; Back to view</a>
                    <h2 class="mb-5">Work Sample</h2>

        @foreach($sample as $sample)
            <span class="badge badge-primary py-3 px-5c mb-4 col-6 position-relative">{{$sample->add_link}}
                            <a href="{{route('candidate_sample_delete',$sample->id)}}" class="position-absolute mb-4 " style="
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
        @endforeach

{{--                            @if(session()->has('message'))--}}
{{--                                <p class="p-3 mb-2 bg-success text-white">{{session()->get('message')}}</p>--}}
{{--                            @endif--}}
                            <form class="form-inline" action="{{route('candidate_sample_post')}}" method="post">
                           @csrf
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="inputPassword2" class="sr-only">Add Link</label>
                                    <input type="text" class="form-control" name="add_link" id="inputPassword2" placeholder="Add Link">
                                </div>
                                <button type="submit" class="btn btn-primary mb-2">Add</button>
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
@stop
<script>
    import Dropdown from "@/Jetstream/Dropdown";
    export default {
        components: {Dropdown}
    }
</script>

