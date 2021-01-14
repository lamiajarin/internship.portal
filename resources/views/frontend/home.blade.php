@extends('frontend/master')
@section('main')
    <div class="hero-wrap img" style="background-image: url('{{asset('images/bg_1.jpg')}}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-10 d-flex align-items-center ftco-animate">
                    <div class="text text-center pt-5 mt-md-5">
                        <p class="mb-4">Find Internship, Employment, and Career Opportunities</p>
                        <h1 class="mb-5">The Eassiest Way to Get Your New Internship</h1>
                        <div class="ftco-counter ftco-no-pt ftco-no-pb">
                            <div class="row">
                                <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                                    <div class="block-18">
                                        <div class="text d-flex">
                                            <div class="icon mr-2">
                                                <span class="flaticon-visitor"></span>
                                            </div>
                                            <div class="desc text-left">
                                                <strong class="number" data-number="{{$company}}">0</strong>
                                                <span>Companies</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                                    <div class="block-18 text-center">
                                        <div class="text d-flex">
                                            <div class="icon mr-2">
                                                <span class="flaticon-resume"></span>
                                            </div>
                                            <div class="desc text-left">
                                                <strong class="number" data-number="{{$post_internship}}">0</strong>
                                                <span>Active Internship Post</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                                    <div class="block-18 text-center">
                                        <div class="text d-flex">
                                            <div class="icon mr-2">
                                                <span class="flaticon-resume"></span>
                                            </div>
                                            <div class="desc text-left">
                                                <strong class="number" data-number="{{$candidate}}">0</strong>
                                                <span>Active Candidate</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ftco-search my-md-5">
                            <div class="row">
                                <div class="col-md-12 nav-link-wrap">
                                    <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist"
                                         aria-orientation="vertical">
                                        <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill"
                                           href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Find
                                            a Internship</a>
                                    </div>
                                </div>
                                <div class="col-md-12 tab-wrap">
                                    <div class="tab-content p-4" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                             aria-labelledby="v-pills-nextgen-tab">
                                            <form action="{{route('job.search')}}" class="search-job">
                                                <div class="row no-gutters">
                                                    <div class="col-md mr-md-2">
                                                        <div class="form-group">
                                                            <div class="form-field">
                                                                <div class="icon"><span class="icon-briefcase"></span>
                                                                </div>
                                                                <input type="text" name="title" class="form-control"
                                                                       placeholder="eg. Garphic. Web Developer">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md mr-md-2">
                                                        <div class="form-group">
                                                            <div class="form-field">
                                                                <div class="select-wrap">
                                                                    <div class="icon"><span
                                                                            class="ion-ios-arrow-down"></span></div>
                                                                    <select class="form-control" name="category_id" id="category">

                                                                        @foreach($categories as $data)
                                                                            <option value="{{$data->id}}">{{$data->category}}</option>
                                                                        @endforeach

                                                                    </select>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md mr-md-2">
                                                        <div class="form-group">
                                                            <div class="form-field">
                                                                <div class="icon"><span class="icon-map-marker"></span>
                                                                </div>
                                                                <input type="text" name="location" class="form-control"
                                                                       placeholder="Location">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <div class="form-field">
                                                                <button type="submit"
                                                                        class="form-control btn btn-primary">
                                                                    Search
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                             aria-labelledby="v-pills-performance-tab">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <section class="ftco-section ftco-no-pt ftco-no-pb">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="category-wrap">--}}
{{--                        <div class="row no-gutters">--}}
{{--                            <div class="col-md-2">--}}
{{--                                <div class="top-category text-center no-border-left">--}}
{{--                                    <h3><a href="#">Website &amp; Software</a></h3>--}}
{{--                                    <span class="icon flaticon-contact"></span>--}}
{{--                                    <p><span class="number">143</span> <span>Open position</span></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2">--}}
{{--                                <div class="top-category text-center active">--}}
{{--                                    <h3><a href="#">Education &amp; Training</a></h3>--}}
{{--                                    <span class="icon flaticon-mortarboard"></span>--}}
{{--                                    <p><span class="number">143</span> <span>Open position</span></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2">--}}
{{--                                <div class="top-category text-center">--}}
{{--                                    <h3><a href="#">Graphic &amp; UI/UX Design</a></h3>--}}
{{--                                    <span class="icon flaticon-idea"></span>--}}
{{--                                    <p><span class="number">143</span> <span>Open position</span></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2">--}}
{{--                                <div class="top-category text-center">--}}
{{--                                    <h3><a href="#">Accounting &amp; Finance</a></h3>--}}
{{--                                    <span class="icon flaticon-accounting"></span>--}}
{{--                                    <p><span class="number">143</span> <span>Open position</span></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2">--}}
{{--                                <div class="top-category text-center">--}}
{{--                                    <h3><a href="#">Restaurant &amp; Food</a></h3>--}}
{{--                                    <span class="icon flaticon-dish"></span>--}}
{{--                                    <p><span class="number">143</span> <span>Open position</span></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2">--}}
{{--                                <div class="top-category text-center">--}}
{{--                                    <h3><a href="#">Health &amp; Hospital</a></h3>--}}
{{--                                    <span class="icon flaticon-stethoscope"></span>--}}
{{--                                    <p><span class="number">143</span> <span>Open position</span></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Job Categories</span>
                    <h2 class="mb-0">Top Categories</h2>
                </div>
            </div>
            <div class="row">
                @foreach($categories as $category)
                <div class="col-md-3 ftco-animate">
                    <ul class="category text-center">

                            <li><a href="{{route('category_view',$category->id)}}">{{$category->category}} <br><span class="number">{{$category->internship_post->count()}}</span> <span>Open position</span><i
                                    class="ion-ios-arrow-forward"></i></a></li>

                    </ul>
                </div>
                @endforeach


            </div>
        </div>
    </section>
    <section class="ftco-section services-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-resume"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Search   Internships</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-team"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Easy To Manage Internships</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-career"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Top Careers</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-employees"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Make Your Career</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="row justify-content-center pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">Recently Added Jobs</span>
                        <h2 class="mb-4">Featured Jobs Posts For This Week</h2>
                    </div>
                </div>

                <div class="col-lg-9 pr-lg-5">
                    @foreach($interns as $post)
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
                                            <a href="{{route('job_short_list',$post->id)}}"
                                               class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                                <span class="icon-heart"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                        {{$interns->links()}}
                </div>


            </div>
        </div>
    </section>

@endsection
