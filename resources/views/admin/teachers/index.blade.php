@extends('admin.layouts.layout')
@section('pageContent')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>All Teachers</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">All Teachers</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">


                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Teachers</h3>
                            <a href="{!! url('teacher/create') !!}" title="Add Teacher" style="float: right"
                               class="btn btn-success">Create New</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Qualification</th>
                                    <th>Department</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($teachers) > 0)
                                    @foreach($teachers as $teacher)
                                        <tr>
                                            <td>{{ $teacher->id }}</td>
                                            <td>{{ $teacher->name }}</td>
                                            <td>{{ $teacher->age }}</td>
                                            <td>{{ $teacher->qualification }}</td>
                                            <td>{{ $teacher->department }}</td>
                                            <td>
                                                <a href="{!! url('teacher', $teacher->id) !!}/edit" title="Edit"><i
                                                        class="fa fa-edit"></i></a>
                                                <a href="javascript:void(0)" title="Delete">
                                                    <i class="fa fa-trash"
                                                       onclick="event.preventDefault();
                                                       confirm('Are you sure?') ? document.getElementById('delete-form{!! $teacher->id !!}').submit() : false;"
                                                    ></i></a>
                                                <form id="delete-form{!!$teacher->id!!}"
                                                      action="{!! url('teacher', $teacher->id) !!}" method="POST"
                                                      style="display: none;">
                                                    @csrf
                                                    @method("DELETE")
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                            {{ $teachers->links() }}
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

