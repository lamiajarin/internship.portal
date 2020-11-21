
@extends('backend.masterfile1')
@section('main')

    <div class="col-lg-10">
<div class="card">
    <div class="card-header">

    <form action="{{route('companypost')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="company_name">Name</label>
            <input name="name" required placeholder="Enter Company name" type="text" class="form-control" id="company_name" aria-describedby="emailHelp">

        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea placeholder="Enter Comapny Description" class="form-control" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="company_logo">Logo</label>
            <input name="logo" required placeholder="Enter Company logo" type="text" class="form-control" id="company_logo" aria-describedby="emailHelp">

        </div>
        <div class="form-group">
            <label for="company_address">Address</label>
            <input name="address" required placeholder="Enter Company address" type="text" class="form-control" id="company_address" aria-describedby="emailHelp">

        </div>
        <div class="form-group">
            <label for="company_contact">Contact No</label>
            <input name="contact_no" required placeholder="Enter Company contact" type="text" class="form-control" id="company_contact" aria-describedby="emailHelp">

        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</div>
    </div>

@stop
