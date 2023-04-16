@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="col-12">
            Edit post
            <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="mb-3 col-5">
                    <input type="text" class="form-control" name="title" placeholder="" value="{{ $post->title }}">
                    @error('title')
                        <div class="text-danger">Fild not be empty. System: {{ $message }}</div>
                    @enderror
                </div>
                <textarea id="summernote" name="content">{{ $post->content }}</textarea>
                @error('content')
                    <div class="text-danger">Fild not be empty. System: {{ $message }}</div>
                @enderror
                <div class="col-1">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="w-50">
                      <img src="{{asset('storage/' . $post->prev_image)}}" alt="prev_image">
                    </div>
                    <div class="input-group w-50">
                        <div class="custom-file w-50">
                            <input type="file" class="custom-file-input w-50" id="exampleInputFile" name="prev_image">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="w-50">
                      <img src="{{url('storage/' . $post->main_image)}}" alt="main_image">
                    </div>
                    <div class="input-group w-50">
                        <div class="custom-file w-50">
                            <input type="file" class="custom-file-input w-50" id="exampleInputFile" name="main_image">
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
                                <option value="{{ $c->id }}" {{ $c->id == $post->category_id ? 'selected' : '' }}>
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
                                <option {{ is_array($post->tags->pluck('id')->toArray()) &&   is_array($t->id == $post->tags->pluck('id')->toArray()) ? 'selected' : '' }} 
                                  value="{{ $t->id }}">
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
