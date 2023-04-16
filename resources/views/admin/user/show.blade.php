@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div>
            <div class="col-12">
                <div class="card">

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <td><a href="{{route('user.edit',$user->id)}}">update</a></td>
                                <td >
                                    <form action="{{ route('user.delete', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                                <tr>
                                    <th>ID</th>
                                    <th>name</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                   <td>{{$user->id}}</td>
                                   <td>{{$user->name}}</td>
                                   <td>{{$user->created_at}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
