@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div>
            <div class="col-12">
                <div class="card">

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <td><a href="{{route('post.edit',$post->id)}}">update</a></td>
                                <td >
                                    <form action="{{ route('post.delete', $post->id) }}" method="POST">
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
                                   <td>{{$post->id}}</td>
                                   <td>{{$post->title}}</td>
                                   <td>{{$post->created_at}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
