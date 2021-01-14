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
                            <a href="#">{{route('user_newss')}}</a>
                            <a href="{{route('logout')}}">LOGOUT</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <a href="{{route('user_news_create')}}" style="position: absolute; right: 25px;font-style: italic; background-color:#9acffa;">Add news</a>
                            <h4 class="card-title ">News</h4>
                            <p class="card-category"> Here is News table</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>Id</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Image Gallery</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $rs)
                                        <tr>
                                            <td>
                                                {{$rs->id}}
                                            </td>
                                            <td>
                                                {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title) }}
                                            </td>
                                            <td>
                                                {{$rs->title}}
                                            </td>
                                            <td>
                                                @if($rs->image)
                                                    <img src="{{Storage::url($rs->image)}}" height="60" width="120" alt=""/>
                                                @endif

                                            </td>
                                            <td><a href="{{route('user_image_add',['news_id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><img src="{{asset('assets/user/images')}}/gallery.png" height="30"></a></td>

                                            <td>
                                                {{$rs->status}}
                                            </td>
                                            <td>
                                                <a href="{{route('user_news_edit',['id'=>$rs->id])}}"><img src="{{asset('assets/user/images')}}/edit.png" height="30"></a>
                                            </td>
                                            <td>
                                                <a href="{{route('user_news_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{asset('assets/user/images')}}/delete.png" height="30"></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>
@endsection

