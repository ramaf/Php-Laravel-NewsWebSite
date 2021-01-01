@extends('layouts.admin')

@section('title','Category List')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <a href="{{route('admin_category_add')}}" style="position: absolute; right: 25px;font-style: italic; background-color:#9acffa;">Add Category</a>
                <h4 class="card-title ">Categories</h4>
                <p class="card-category"> Here is Categories table</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <th>Id</th>
                        <th>Parent</th>
                        <th>Title</th>
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
                                    {{$rs->parent_id}}
                                </td>
                                <td>
                                    {{$rs->title}}
                                </td>
                                <td>
                                    {{$rs->status}}
                                </td>
                                <td>
                                    <a href="{{route('admin_category_edit',['id'=>$rs->id])}}">Edit</a>
                                </td>
                                <td>
                                    <a href="{{route('admin_category_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
