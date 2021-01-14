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
                    <form class="needs-validation" action="{{route('PostJob_post')}}" method="post" >
                        @csrf
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="category">Category</label>
                            <select class="form-control" name="category_id" id="category">
                                @foreach($categories as $data)
                                    <option value="{{$data->id}}">{{$data->category}}</option>
                                @endforeach
                            </select>
                            @error('category_id') <span class="btn-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="validationCustom03">Internship Title</label>
                            <input type="text" class="form-control" name="internship_title" id="validationCustom03"
                                   placeholder="" >
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            @error('internship_title') <span class="btn-danger">{{$message}}</span> @enderror

                        </div>

                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="validationCustom03">Vacancy</label>
                            <input type="text" class="form-control" name="Vacancy" id="validationCustom03"
                                   placeholder=" " >
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            @error('Vacancy') <span class="btn-danger">{{$message}}</span> @enderror

                        </div>

                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="validationCustom02">Internship Context</label>
                            <textarea type="text" class="form-control" name="context" id="validationCustom02"
                                      placeholder="" >
                                        </textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            @error('context') <span class="btn-danger">{{$message}}</span> @enderror

                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="validationCustom03">Internship Responsibility</label>
                            <textarea type="text" class="form-control" name="responsibility" id="validationCustom03"
                                      placeholder="" ></textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            @error('responsibility') <span class="btn-danger">{{$message}}</span> @enderror

                        </div>

                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="validationCustom02">Status</label>
                            <select class="form-control" name="status" id="category">
                                <option>Status</option>
                                <option>Full Time</option>
                                <option>Part Time</option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            @error('status') <span class="btn-danger">{{$message}}</span> @enderror

                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="validationCustom03">Workplace</label>
                            <select class="form-control" name="workplace" id="workplace">
                                <option>Workplace</option>
                                <option>At Home</option>
                                <option>At Office</option>
                                <option>Both</option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            @error('workplace') <span class="btn-danger">{{$message}}</span> @enderror

                        </div>


                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="validationCustom02"> Educational Requirements</label>
                            <textarea type="text" class="form-control" name="requirements" id="validationCustom02"
                                      placeholder="" ></textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            @error('requirements') <span class="btn-danger">{{$message}}</span> @enderror

                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="validationCustom03">Additional Requirements </label>
                            <textarea type="text" class="form-control" name="arequirements" id="validationCustom03"
                                      placeholder="" ></textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            @error('arequirements') <span class="btn-danger">{{$message}}</span> @enderror

                        </div>


                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="validationCustom03">Location </label>
                            <input type="text" class="form-control" name="location" id="validationCustom03"
                                   placeholder="" >
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            @error('location') <span class="btn-danger">{{$message}}</span> @enderror

                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="validationCustom03">Salary</label>
                            <input type="text" class="form-control" name="salary" id="validationCustom03" placeholder=""
                                   >
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            @error('salary') <span class="btn-danger">{{$message}}</span> @enderror

                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="date"> Expiration Date</label>
                            <input type="date" value="{{date('Y-m-d')}}" min="{{date('Y-m-d')}}" class="form-control"
                                   name="dateline" id="validationCustom02" >
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            @error('dateline') <span class="btn-danger">{{$message}}</span> @enderror

                        </div>
                        <br>
                        <button class="btn btn-primary" type="submit">Submit</button>
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

    </main>
@stop
<script>
    import Dropdown from "@/Jetstream/Dropdown";

    export default {
        components: {Dropdown}
    }
</script>
