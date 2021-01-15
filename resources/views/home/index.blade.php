@extends('layouts.home')

@section('title', 'Home '.$setting->title)

@section('description'){{$setting->description}} @endsection

@section('keywords',$setting->description)
@include('home._header')
@include('home._slider')

@section('content')
    <!-- brand -->
    <div class="brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Latest News</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-bg">

                <div class="container">

                    <div class="row">
                        @foreach($last as $rs)
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                            <div class="brand_box">
                                <img src="{{ asset("storage/$rs->image") }}" alt="img" />
                                <h3><strong class="red">{{$rs->title}}</strong></h3>
                                <a href="{{route('news',['id' => $rs->id,'slug' => $rs->slug])}}"><button class="send">Read</button></a>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>

        </div>
    </div>

    <div class="brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Random News</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-bg">

            <div class="container">

                <div class="row">
                    @foreach($picked as $rs)
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                            <div class="brand_box">
                                <img src="{{ asset("storage/$rs->image") }}" alt="img" />
                                <h3><strong class="red">{{$rs->title}}</strong></h3>
                                <a href="{{route('news',['id' => $rs->id,'slug' => $rs->slug])}}"><button class="send">Read</button></a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>
    </div>

    <div class="brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Daily News</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-bg">

            <div class="container">

                <div class="row">
                    @foreach($daily as $rs)
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                            <div class="brand_box">
                                <img src="{{ asset("storage/$rs->image") }}" alt="img" />
                                <h3><strong class="red">{{$rs->title}}</strong></h3>
                                <a href="{{route('news',['id' => $rs->id,'slug' => $rs->slug])}}"><button class="send">Read</button></a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>
    </div>

@endsection


