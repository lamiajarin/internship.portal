@extends('frontend.master')
@section('main')
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 mb-5">


                    <h2 class="mb-5">Post Job</h2>
                    @if(session()->has('message'))
                        <p class="p-3 mb-2 bg-success text-white">{{session()->get('message')}}</p>
                    @endif
                    <form class="needs-validation"  action="{{route('manage_internship_update',$manage->id)}}"  method="post" novalidate>
                        @method('put')
                        @csrf
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="validationCustom02">Category</label>
                            <input type="text" class="form-control" value="{{$manage->category}}" name="category" id="validationCustom02" placeholder="Category" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="validationCustom03">Internship Title</label>
                            <input type="text" class="form-control" value="{{$manage->internship_title}}" name="internship_title" id="validationCustom03" placeholder=" " required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="validationCustom03">Vacancy</label>
                            <input type="text" class="form-control" value="{{$manage->Vacancy}}" name="Vacancy" id="validationCustom03" placeholder=" " required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="validationCustom02">Internship Context</label>
                            <textarea type="text" class="form-control" name="context" id="validationCustom02" placeholder="" >
                                    {{$manage->context}}   </textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="validationCustom03">Internship Responsibility</label>
                            <input type="text" class="form-control" value="{{$manage->responsibility}}" name="responsibility" id="validationCustom03" placeholder="" >
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="validationCustom02">Status</label>
                            <input type="text" class="form-control" value="{{$manage->status}}" name="status" id="validationCustom02" placeholder="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="validationCustom03">Workplace</label>
                            <input type="text" class="form-control" value="{{$manage->workplace}}" name="workplace" id="validationCustom03" placeholder="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>


                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="validationCustom02"> Educational Requirements</label>
                            <textarea type="text" class="form-control"  name="requirements" id="validationCustom02" placeholder="" >{{$manage->requirements}}</textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="validationCustom03">Additional Requirements </label>
                            <textarea type="text" class="form-control"  name="arequirements" id="validationCustom03" placeholder="" >{{$manage->arequirements}}</textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>


                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="validationCustom03">Location </label>
                            <input type="text" class="form-control" value="{{$manage->location}}" name="location" id="validationCustom03" placeholder="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="validationCustom03">Salary</label>
                            <input type="text" class="form-control" value="{{$manage->salary}}" name="salary" id="validationCustom03" placeholder="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="date"> Expiration Date</label>
                            <input type="date" class="form-control" value="{{$manage->dateline}}" name="dateline" id="validationCustom02" placeholder="MM/DD/YYY" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>


                        <br>
                        <button class="btn btn-primary" type="submit">Submit </button>
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
