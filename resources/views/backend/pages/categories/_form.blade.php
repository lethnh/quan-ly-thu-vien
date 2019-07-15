@csrf
<div class="row">
    <div class="form-group col-md-6">
        <label class="form-control-label" for="nameCategory">Name</label>
        <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="nameCategory"
            name="name" placeholder="Name" value="{{ old('name', $category->name) }}">
        @if ($errors->has('name'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('name') }}</strong>
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        <label class="form-control-label" for="nameCategory">Image</label>
        <input type="file" class="form-control {{ $errors->has('images') ? 'is-invalid' : '' }}" id="nameCategory"
            name="images" placeholder="Name" value="{{ old('images', $category->name) }}">
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