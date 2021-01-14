@extends('frontend.master')
@section('main')

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 mb-3">
                    <h2>Job Details</h2>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive table--no-card m-b-30">
                                <table class="table table-bordered table-striped table-earning">
                                    {{--                            <thead>--}}
                                    <tbody>
                                    <tr>

                                        <th scope="col-2">Internship Title:</th>
                                        <td scope="col-3">{{$post_id->internship->internship_title}}</td>
                                        <th scope="col-2">Salary:</th>
                                        <td scope="col-3">{{$post_id->internship->salary}}</td>


                                    </tr>
                                    <tr>
                                        <th scope="col-2">Job Location:</th>
                                        <td scope="col-3">{{$post_id->internship->location}}</td>
                                        <th scope="col-2">Last Date</th>
                                        <td scope="col-3" colspan="3">{{$post_id->internship->dateline}}</td>

                                    </tr>
                                    <tr>
                                        <th scope="col-2">Skills Required:</th>
                                        <td scope="col-3" colspan="3">{{$post_id->internship->requirements}}</td>


                                    </tr>
                                    <tr>
                                        <th scope="col-2">Status:</th>
                                        <td scope="col-10" colspan="3">{{$post_id->status}}</td>
                                    {{--                                    </tr>--}}
                                </table>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                        data-target="#myModal">Take Action
                                </button>
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6>Take Action</h6>
                                                <button type="button" class="close" data-dismiss="modal">&times;
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('take_action')}}" method="post">
                                                    @csrf
                                                    <div class="form-group row">
                                                        <label for="message"
                                                               class="col-sm-3 col-form-label">Message</label>
                                                        <div class="col-sm-9">
                                                            <textarea  class="form-control" id="message"
                                                                      name="message" rows="3"
                                                                      placeholder="Message"></textarea>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" value="{{$post_id->id}}" name="id">
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-3 col-form-label">Status</label>
                                                        <div class="col-sm-9">
                                                            <select name="status" class="form-control">
                                                                <option value="Rejected">Rejected</option>
                                                                <option value="Short Listed">Short Listed</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <button type="submit" class="btn btn-primary"><a
                                                                href={{route('JobApplyCandidate')}}></a>Update</button>
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

    </section>


@stop
<script>
    import Dropdown from "@/Jetstream/Dropdown";
    import Input from "@/Jetstream/Input";
    import Button from "@/Jetstream/Button";

    export default {
        components: {Button, Input, Dropdown}
    }
</script>
