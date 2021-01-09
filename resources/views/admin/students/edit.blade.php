@extends('admin.layouts.layout')
@section('pageContent')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Student Manage</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Student</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Student</h3>
                        </div>
                        <!-- /.card-header -->


                        <!-- form start -->
                        <form role="form" method="post" enctype="multipart/form-data"
                              action="{!! url('student', $student->id) !!}">
                            @method('PUT')
                            @csrf

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="courseTitle">Name</label>
                                    <input type="text" name="name" class="form-control" id="courseTitle"
                                           placeholder="Enter Name" value="{!! $student->name !!}" required>
                                </div>
                                <div class="form-group">
                                    <label for="courseTitle">Age</label>
                                    <input type="text" name="age" class="form-control" id="courseTitle"
                                           placeholder="Enter Age" value="{!! $student->age !!}" required>
                                </div>
                                <div class="form-group">
                                    <label for="courseTitle">Class</label>
                                    <input type="text" name="class" class="form-control" id="courseTitle"
                                           placeholder="Enter Class" value="{!! $student->class !!}"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="courseTitle">Roll</label>
                                    <input type="text" name="roll" class="form-control" id="courseTitle"
                                           placeholder="Enter Roll" value="{!! $student->roll !!}"
                                           required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Picture</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="thumb" accept="image/*"
                                                   class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose a
                                                Picture</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <a href="{!! url('student') !!}" class="btn btn-warning">Back</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
