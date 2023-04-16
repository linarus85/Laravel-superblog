@extends('admin.layouts.main')

@section('content')
<div class="content-wrapper">
  <div class="col-12">
    Add tag
    <form action="{{route('tag.store')}}" method="POST">
      @csrf
      <div class="mb-3 col-5">
        <input type="text" class="form-control" name="title" placeholder="">
        @error('title')
            <div class="text-danger">Fild not be empty. System: {{$message}}</div>

        @enderror
      </div>
      <div class="col-1">
        <button type="submit" class="btn btn-primary">Add</button>
       </div>
    </form>
  </div>
</div>
@endsection