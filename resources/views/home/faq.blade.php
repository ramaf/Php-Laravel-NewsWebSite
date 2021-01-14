@extends('layouts.home')

@section('title', 'References '.$setting->title)
@include('home._header')
@section('content')
    <br><br><br>
    <h1 style="text-align:center;">FAQ</h1>
    <div class="col-sm-12" style="text-align:center;">
        @foreach($datalist as $rs)
            <h2>{{$rs->question}}</h2>
            {!! $rs->answer !!}
            <hr>
        @endforeach
    </div>
@endsection
