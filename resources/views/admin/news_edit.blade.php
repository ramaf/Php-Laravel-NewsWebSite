@extends('layouts.admin')

@section('title','Add News')



@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Edit News</h4>
                            <p class="card-category"> Here is <b>Edit News</b> page</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="{{route('admin_news_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <table>

                                        <tr><h4>Category:</h4> <select name="category_id" id="category_id" style="width: 600px">
                                                <option value="0" selected="selected">Main Category</option>
                                                @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}" @if ($rs->id==$data->Category_id) selected="selected" @endif>{{$rs->title}}</option>
                                                @endforeach


                                            </select></tr>
                                        <tr><h4>Title:</h4> <input style="width: 600px" id="title" value="{{$data->title}}" type="text" name="title" placeholder="Title"/></tr>
                                        <tr><h4>Keywords: </h4><input style="width: 600px" id="keywords" value="{{$data->keywords}}" type="text" name="keywords" placeholder="Keywords"/></tr>
                                        <tr><h4>Description: </h4><input style="width: 600px" id="description" value="{{$data->description}}" type="text" name="description" placeholder="Description"/></tr>
                                        <tr><h4>Detail: </h4><input style="width: 600px" id="detail" value="{{$data->detail}}" type="text" name="detail" placeholder="Detail"/></tr>
                                        <tr><h4>Slug: </h4><input style="width: 600px" id="slug" value="{{$data->slug}}" type="text" name="slug" placeholder="Slug"/></tr><br>
                                        <tr><label for="image"><h4>Image:</h4></label><input type="file" name="image" id="image" value="{{$data->image}}" class="form-control">
                                            <br>
                                            @if($data->image)
                                                <img src="{{Storage::url($data->image)}}" height="100" alt=""/>
                                            @endif <br>
                                        <tr><label for="status"><h4>Status:</h4></label>

                                            <select name="status" id="status" style="width: 600px">
                                                <option selected="selected">{{$data->status}}</option>
                                                <option value="true">True</option>
                                                <option value="false">False</option>

                                            </select></tr><br><br>
                                        <tr><button type="submit" style="color:#1d643b; background-color: #9acffa; width: 150px;">Edit</button></tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
