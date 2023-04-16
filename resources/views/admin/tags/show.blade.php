@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div>
            <div class="col-12">
                <div class="card">

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <td><a href="{{route('tag.edit',$tag->id)}}">update</a></td>
                                <td >
                                    <form action="{{ route('tag.delete', $tag->id) }}" method="POST">
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
                                   <td>{{$tag->id}}</td>
                                   <td>{{$tag->title}}</td>
                                   <td>{{$tag->created_at}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
