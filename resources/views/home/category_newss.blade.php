@extends('layouts.home')

@section('title', 'Categories '.$setting->title)
@include('home._header')
@section('content')
    <<div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>{{$data->title}}</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- contact -->
    <div class="brand-bg">
        @foreach($datalist as $rs)
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                    <div class="brand_box">
                        <img src="{{ asset("storage/$rs->image") }}" alt="img" />
                        <h3><strong class="red">{{$rs->title}}</strong></h3>
                        <span><a href="{{route('news',['id' => $rs->id,'slug' => $rs->slug])}}">See News</a></span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
