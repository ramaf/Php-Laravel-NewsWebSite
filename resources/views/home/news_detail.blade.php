@extends('layouts.home')

@section('title', 'News'.$setting->title)
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
<br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-4"><img src="{{ asset("storage/$data->image") }}" /> <br>{{$data->title}}
                <br><br>
                {{$data->keywords}}
            </div>
            <div class="col-md-8"><p>{!! $data->detail !!}</p></div>
        </div>
    </div>
@endsection
