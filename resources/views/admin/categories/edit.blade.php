@extends('admin.layouts.main')

@section('content')
<div class="content-wrapper">
  <div class="col-12">
    Edit category
    <form action="{{route('category.update',$category->id)}}" method="POST">
      @csrf
      @method('PATCH')
      <div class="mb-3 col-5">
        <input type="text" class="form-control" name="title" placeholder=""
        value="{{$category->title}}">
        @error('title')
            <div class="text-danger">Fild not be empty. System: {{$message}}</div>

        @enderror
      </div>
      <div class="col-1">
        <button type="submit" class="btn btn-primary">Edit</button>
       </div>
    </form>
  </div>
</div>
@endsection