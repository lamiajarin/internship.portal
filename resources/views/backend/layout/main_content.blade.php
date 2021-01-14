@extends('backend.masterfile1')
@section('main')

    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">overview</h2>
                        <button class="au-btn au-btn-icon au-btn--blue">
{{--                            <i class="zmdi zmdi-plus"></i>add item</button>--}}
                    </div>
                </div>
            </div>
            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c1">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">

                                <div class="text">
                                    <h2>{{$company}}</h2>
                                    <span>Companies</span>
                                </div>
                            </div>
{{--                            <div class="overview-chart">--}}
{{--                                <canvas id="widgetChart1"></canvas>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c3">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
{{--                                <div class="icon">--}}
{{--                                    <i class="zmdi zmdi-calendar-note"></i>--}}
{{--                                </div>--}}
                                <div class="text">
                                    <h2>{{$candidate}}</h2>
                                    <span>Active Candidate</span>
                                </div>
                            </div>
{{--                            <div class="overview-chart">--}}
{{--                                <canvas id="widgetChart3"></canvas>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c4">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
{{--                                <div class="icon">--}}
{{--                                    <i class="zmdi zmdi-money"></i>--}}
{{--                                </div>--}}
                                <div class="text">
                                    <h2>{{$post_internship}}</h2>
                                    <span>Post Job</span>
                                </div>
                            </div>
{{--                            <div class="overview-chart">--}}
{{--                                <canvas id="widgetChart4"></canvas>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="copyright">--}}
{{--                        <p>Copyright © 2020 Lamia Akthar</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>


@stop
