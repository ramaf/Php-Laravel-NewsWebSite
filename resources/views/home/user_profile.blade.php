@extends('layouts.home')

@section('title', 'User Profile')
@include('home._header')
@section('content')

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .vertical-menu {
                width: 200px;
            }

            .vertical-menu a {
                background-color: #eee;
                color: black;
                display: block;
                padding: 12px;
                text-decoration: none;
            }

            .vertical-menu a:hover {
                background-color: #ccc;
            }

            .vertical-menu a.active {
                background-color: #4CAF50;
                color: white;
            }
        </style>
    </head>
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                <div class="about_img">
                    <h1>PROFILE DETAILS</h1>

                    <div class="vertical-menu">
                        <a href="#" class="active">{{Auth::user()->name}}</a>
                        <a href="{{route('myprofile')}}">MY PROFILE</a>
                        <a href="#">MY MESSAGES</a>
                        <a href="#">MY NEWS</a>
                        <a href="{{route('logout')}}">LOGOUT</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">

                    @include('profile.show')

            </div>

        </div>
    </div>
</div>
</div>
@endsection

