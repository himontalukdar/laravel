@extends('admin.layouts.layout')
@section('pageContent')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>All Students</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">All Students</li>
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
                            <h3 class="card-title">All Students</h3>
                            <a href="{!! url('student/create') !!}" title="Add Teacher" style="float: right"
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
                                    <th>Class</th>
                                    <th>Roll</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($students) > 0)
                                    @foreach($students as $student)
                                        <tr>
                                            <td>{{ $student->id }}</td>
                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->age }}</td>
                                            <td>{{ $student->class }}</td>
                                            <td>{{ $student->roll }}</td>
                                            <td>
                                                <a href="{!! url('student', $student->id) !!}/edit" title="Edit"><i
                                                        class="fa fa-edit"></i></a>
                                                <a href="javascript:void(0)" title="Delete">
                                                    <i class="fa fa-trash"
                                                       onclick="event.preventDefault();
                                                       confirm('Are you sure?') ? document.getElementById('delete-form{!! $student->id !!}').submit() : false;"
                                                    ></i></a>
                                                <form id="delete-form{!!$student->id!!}"
                                                      action="{!! url('student', $student->id) !!}" method="POST"
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
                            {{ $students->links() }}
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

