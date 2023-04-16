@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="col-12">
            Edit user
            <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="mb-3 col-5">
                    <input type="text" class="form-control" name="name" placeholder="" value="{{ $user->name }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-5">
                    <input type="text" class="form-control" name="email" placeholder="" value="{{ $user->email }}">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Select role</label>
                        <select name="role" class="form-control">
                            @foreach ($role as $id=>$r)
                                <option value="{{ $id }}" {{ $id == $user->role ? 'selected' : '' }}>
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
