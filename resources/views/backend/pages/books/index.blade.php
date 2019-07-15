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
                        <a href="{!! url('admin/book/create')!!}" class="btn btn-outline btn-default">
                            <i class="icon wb-plus" aria-hidden="true"></i> New
                        </a>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Price</th>
                            <th>Amount</th>
                            <th>ISBN</th>
                            <th width="300px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($books) && $books->count())
                        @foreach($books as $key => $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->name }}</td>
                            <td>{{ $book->category->name }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->price }}</td>
                            <td>{{ $book->amount }}</td>
                            <td>{{ $book->isbn }}</td>
                            <td>
                                <div class="form-inline">
                                    <a href="{{ route('book.edit',$book->id) }}" class="btn btn-outline-info mr-2"><i
                                            class="icon wb-pencil" aria-hidden="true"></i> Edit</a>
                                    <form action="{{ route('book.delete',$book->id) }}" method="POST">
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

                {!! $books->render() !!}
            </div>
        </div>
    </div>
</div>
@endsection