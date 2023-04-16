@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="col-12">
            Add user
            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 col-5">
                    <input type="text" class="form-control" name="name" placeholder="" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-5">
                    <input type="email" class="form-control" name="email" placeholder="" value="{{ old('email') }}">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{-- <div class="mb-3 col-5">
                    <input type="password" class="form-control" name="password" placeholder="" value="{{ old('password') }}">
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div> --}}
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Select role</label>
                        <select name="role" class="form-control">
                            @foreach ($role as $id=>$r)
                                <option value="{{ $id }}" {{ $id == old('role') ? 'selected' : '' }}>
                                    {{ $r }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
@endsection
