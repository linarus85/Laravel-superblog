@extends('person.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <form action="{{ route('comment.update', $comment->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3 col-5">
                        <textarea name="message" >{{ $comment->message }}</textarea>

                        @error('message')
                            <div class="text-danger">Fild not be empty. System: {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-1">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
    </div><!-- /.container-fluid -->
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
