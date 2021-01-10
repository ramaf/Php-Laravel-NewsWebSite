@extends('layouts.home')

@section('title', 'Categories '.$setting->title)
@include('home._header')
@section('content')
    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-16">
                    <div class="titlepage">
                        <h1 style="text-align:center;">{{$data->title}}</h1>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="col-sm-12" style="text-align:center;">

            <p>{!! $data->detail !!}</p>
        <br><br>
    </div>
@endsection
