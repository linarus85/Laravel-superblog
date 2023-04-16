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
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>title</th>
                      <th>Date</th>
                      <th>Action</th>
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
                          <td >
                              <form action="{{ route('liked.delete', $p->id) }}" method="POST">
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
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection