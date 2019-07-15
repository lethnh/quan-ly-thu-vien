@extends('backend.layouts.app')

@section('content')
<div class="page">
    <div class="page-content container-fluid">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">New Book
                </h3>
            </div>
            <div class="panel-body">
                <form method="POST" enctype="multipart/form-data">
                    @include('backend.pages.books._form', ['buttonTitle'=>'Create'])
                </form>
            </div>
        </div>
    </div>
</div>
@endsection