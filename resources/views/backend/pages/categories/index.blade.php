@extends('backend.layouts.app')

@section('content')
<div class="page">
    <div class="page-content container-fluid">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">New User
                </h3>
            </div>
            <div class="panel-body">
                <div class="bs-bars mb-2 float-right">
                    <div class="btn-group hidden-sm-down" id="exampleToolbar" role="group">
                        <a href="{!! url('admin/category/create')!!}" class="btn btn-outline btn-default">
                            <i class="icon wb-plus" aria-hidden="true"></i> New
                        </a>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Address</th>
                            <th width="300px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($categories) && $categories->count())
                        @foreach($categories as $key => $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <div class="form-inline">
                                    <a href="{{ route('category.edit',$category->id) }}" class="btn btn-outline-info"><i
                                            class="icon wb-pencil" aria-hidden="true"></i> Edit</a>
                                    <form action="{{ route('category.delete',$category->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-outline"> <i
                                                class="icon wb-trash" aria-hidden="true"></i>
                                            Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="10">There are no data.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>

                {!! $categories->render() !!}
            </div>
        </div>
    </div>
    @endsection