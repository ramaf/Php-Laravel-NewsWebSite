@extends('layouts.home')

@section('title', 'About Us '.$setting->title)
@include('home._header')
@section('content')
<br><br><br>
<h1 style="text-align:center;">ABOUT US</h1>
    <div class="col-sm-12" style="text-align:center;">
        {!! $setting->aboutus !!}
    </div>
@endsection
