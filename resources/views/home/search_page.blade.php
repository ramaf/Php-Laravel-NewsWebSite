@extends('layouts.home')

@section('title', 'Search '.$setting->title)
@include('home._header')
@section('content')
    <br><br><br><br>
    <h1 style="text-align:center;">SEARCH PAGE</h1>
    <div class="col-sm-12" style="text-align:center;">
        <div class="search">
            <form action="{{route('getnews')}}" method="post" class="input-append">
                @csrf
                @livewire('search')
                <button class="btn btn-dark" type="submit">Search</button>
            </form>
            @section('footerjs')
                @livewireScripts
            @endsection
        </div>
    </div>
@endsection
