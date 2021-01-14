@extends('frontend.master')
@section('main')

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

                            <li><a href="{{route('category_view',$category->id)}}">{{$category->category}} <br><span
                                        class="number">{{$category->internship_post->count()}}</span> <span>Open position</span><i
                                        class="ion-ios-arrow-forward"></i></a></li>


                        </ul>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section class="ftco-section ftco-no-pb bg-light">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Browse Jobs</span>
                    <h2 class="mb-4">Advance Search</h2>
                </div>
            </div>
            <div class="row">
                <div class="ftco-search">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap">
                            <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist"
                                 aria-orientation="vertical">
                                <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
                                   aria-controls="v-pills-2" aria-selected="false">Find a Internship</a>
                            </div>
                        </div>
                        <div class="col-md-12 tab-wrap">
                            <div class="tab-content p-4" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                     aria-labelledby="v-pills-nextgen-tab">
                                    <form action="{{route('job.want')}}" class="search-job">
                                        <div class="row no-gutters">
                                            <div class="col-md mr-md-2">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <div class="icon"><span class="icon-briefcase"></span></div>
                                                        <input type="text" name="title" class="form-control"
                                                               placeholder="eg. Garphic. Web Developer">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md mr-md-2">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <div class="select-wrap">
                                                            <div class="icon"><span class="ion-ios-arrow-down"></span>
                                                            </div>
                                                            <select name="category_id" id="" class="form-control">
                                                                <option value="">Category</option>
                                                                @foreach($categories as $data)

                                                                    <option
                                                                        value="{{$data->id}}">{{$data->category}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md mr-md-2">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <div class="icon"><span class="icon-map-marker"></span></div>
                                                        <input type="text" name="location" class="form-control"
                                                               placeholder="Location">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <button type="submit" class="form-control btn btn-primary">
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
                                    <form action="#" class="search-job">
                                        <div class="row">
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <div class="icon"><span class="icon-user"></span></div>
                                                        <input type="text" class="form-control"
                                                               placeholder="eg. Adam Scott">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <div class="select-wrap">
                                                            <div class="icon"><span class="ion-ios-arrow-down"></span>
                                                            </div>
                                                            <select name="" id="" class="form-control">
                                                                <option value="">Category</option>
                                                                @foreach($categories as $data)

                                                                    <option
                                                                        value="{{$data->id}}">{{$data->category}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <div class="icon"><span class="icon-map-marker"></span></div>
                                                        <input type="text" class="form-control" placeholder="Location">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <div class="form-field border">
                                                        <button type="submit" class="form-control btn btn-primary">
                                                            Search
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 pr-lg-4">
                    <div class="row">
                        <div class="col-lg-9 pr-lg-5">
                            @foreach($interns as $post)
                                <div class="row">
                                    <div class="col-md-12 ftco-animate">
                                        <div class="job-post-item p-4 d-block d-lg-flex align-items-center">
                                            <div class="one-third mb-4 mb-md-0">
                                                <div class="job-post-item-header align-items-center">
                                                    {{--                                        @dd(auth()->user()->post_internship);--}}


                                                    <h2 class="mr-3 text-black"><a
                                                            href="{{route('view_internship_post',$post->id)}}">{{$post->internship_title}}</a>
                                                    </h2>
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
                <div class="col-lg-3 sidebar">
                    <div class="sidebar-box bg-white p-4 ftco-animate">
                        <h3 class="heading-sidebar">Browse Category</h3>

                        <form action="{{route('job.want')}}" class="browse-form">
                            <button class="btn btn-secondary">Apply Filter</button>
                            @foreach($categories as $data)
                                <div class="form-group">
                                    <input type="checkbox" id="category" name="category_ids[]"
                                           value="{{$data->id}}"> &nbsp &nbsp &nbsp {{$data->category}}
                                </div>
                            @endforeach
                        </form>

                        <div class="sidebar-box bg-white p-4 ftco-animate">
                            <h3 class="heading-sidebar">Select Location</h3>
                            <form action="{{route('job.want')}}" class="browse-form">
                                <button class="btn btn-secondary">Apply Filter</button>
                                @foreach($location as $data)

                                    <div class="form-group">
                                        <input type="checkbox" id="category" name="location_check_search[]"
                                               value="{{$data->location}}"> &nbsp &nbsp &nbsp {{$data->location}}
                                    </div>
                                @endforeach
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<script>
    import Button from "@/Jetstream/Button";

    export default {
        components: {Button}
    }
</script>
