@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div>
            <a class="col-1" href="{{ route('post.create') }}" class="btn btn-primary">Post</a>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Responsive Hover Table</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>title</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($post as $p)
                                    <tr>
                                        <td>{{ $p->id }}</td>
                                        <td>{{ $p->title }}</td>
                                        <td>{{ $p->created_at }}</td>
                                        <td><a href="{{ route('post.show', $p->id) }}">Action</a></td>
                                        <td><a href="{{ route('post.edit', $p->id) }}">Edit</a></td>
                                        <td >
                                            <form action="{{ route('post.delete', $p->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
