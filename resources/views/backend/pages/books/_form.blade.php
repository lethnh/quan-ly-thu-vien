@csrf
<div class="row">
    <div class="form-group col-md-6">
        <label class="form-control-label" for="namebook">Name</label>
        <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="namebook" name="name"
            placeholder="Name" value="{{ old('name', $book->name) }}">
        @if ($errors->has('name'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('name') }}</strong>
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        <label class="form-control-label" for="author">Author</label>
        <input type="text" class="form-control {{ $errors->has('author') ? 'is-invalid' : '' }}" id="author"
            name="author" placeholder="Author" value="{{ old('name', $book->author) }}">
        @if ($errors->has('author'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('author') }}</strong>
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        <label class="form-control-label" for="price">Giá</label>
        <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="price" name="price"
            placeholder="Price" value="{{ old('price', $book->price) }}">
        @if ($errors->has('price'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('price') }}</strong>
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        <label class="form-control-label" for="namebook">Category</label>
        <select name="category" id="" class="form-control">
            <option selected disabled>-- select --</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $book->category_id === $category->id ? 'selected' : '' }}>
                {{ $category->name }}</option>
            @endforeach
        </select>
        @if ($errors->has('category'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('category') }}</strong>
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        <label class="form-control-label" for="amount">Amount</label>
        <input type="text" class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" id="amount"
            name="amount" placeholder="amount" value="{{ old('amount', $book->amount) }}">
        @if ($errors->has('amount'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('amount') }}</strong>
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        <label class="form-control-label" for="isbn">ISBN</label>
        <input type="text" class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" id="isbn" name="isbn"
            placeholder="isbn" value="{{ old('isbn', $book->isbn) }}">
        @if ($errors->has('isbn'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('isbn') }}</strong>
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        <label class="form-control-label" for="nameBook">Image</label>
        <input type="file" class="form-control {{ $errors->has('images') ? 'is-invalid' : '' }}" id="nameBook"
            name="images" placeholder="Name" value="{{ old('images', $book->images) }}">
        @if ($errors->has('images'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('images') }}</strong>
        </div>
        @endif
    </div>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $buttonTitle }}</button>
</div>