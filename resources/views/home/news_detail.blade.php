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
                <br><br>
                <h1>See the other news...</h1>
                <img src="https://media.giphy.com/media/W6LvJ3rgpb68b2EA11/giphy.gif"/>
                @foreach($picked as $rs)

                        <div class="brand_box">
                            <img src="{{ asset("storage/$rs->image") }}" alt="img" />
                            <h3><strong class="red">{{$rs->title}}</strong></h3>
                            <a href="{{route('news',['id' => $rs->id,'slug' => $rs->slug])}}"><button class="send">Read</button></a>
                        </div>
                    <br><br>

                @endforeach
            </div>
            <div class="col-md-8">{!! $data->detail !!}<br><br></div>

        </div>
    </div>
@endsection
