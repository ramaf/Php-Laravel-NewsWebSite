@extends('layouts.home')

@section('title', 'References '.$setting->title)
@include('home._header')
@section('content')
    <br><br><br>
    <h1 style="text-align:center;">REFERENCES</h1>
    <div class="col-sm-12" style="text-align:center;">
        {!! $setting->references !!}
    </div>
@endsection
