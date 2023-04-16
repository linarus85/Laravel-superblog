@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div>
            <div class="col-12">
                <div class="card">

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <td><a href="{{route('category.edit',$category->id)}}">update</a></td>
                                <td >
                                    <form action="{{ route('category.delete', $category->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                                <tr>
                                    <th>ID</th>
                                    <th>title</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                   <td>{{$category->id}}</td>
                                   <td>{{$category->title}}</td>
                                   <td>{{$category->created_at}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
