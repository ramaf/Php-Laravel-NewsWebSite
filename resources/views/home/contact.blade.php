@extends('layouts.home')

@section('title', 'Contact Us '.$setting->title)
@include('home._header')
@section('content')
    <<div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {!! $setting->contact !!}
                    <br><br>

                    <form action="{{route('sendmessage')}}" method="post" class="main_form">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Your name" id="name" type="text" name="name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Email" id="email" type="text" name="email">
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Phone" id="phone" type="text" name="phone">
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Subject" id="subject" type="text" name="subject">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message" name="message"></textarea>
                            </div>
                            <div class=" col-md-12">
                                <button class="send">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
