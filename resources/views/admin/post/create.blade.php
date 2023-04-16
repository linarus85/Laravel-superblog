@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="col-12">
            Add post
            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 col-5">
                    <input type="text" class="form-control" name="title" placeholder="" value="{{ old('title') }}">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <textarea id="summernote" name="content">{{ old('content') }}</textarea>
                @error('content')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="col-1">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group w-50">
                        <div class="custom-file w-50">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="prev_image">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group w-50">
                        <div class="custom-file w-50">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="main_image">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload image</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Select category</label>
                        <select name="category_id" class="form-control">
                            @foreach ($categories as $c)
                                <option value="{{ $c->id }}" {{ $c->id == old('category_id') ? 'selected' : '' }}>
                                    {{ $c->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Select tag</label>
                        <select name="tag_id[]" class="form-control" multiple='multiple'>
                            @foreach ($tags as $t)
                                <option value="{{ $t->id }}" {{ $t->id == old('tag_id') ? 'selected' : '' }}>
                                    {{ $t->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
