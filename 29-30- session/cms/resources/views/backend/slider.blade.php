@extends('backend.layouts.app')

@section('wrapper')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Slider</h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    <div class="page-body">
                        <form action="{{ route('sliders.store') }}"
                              method="post"
                              enctype="multipart/form-data"
                              class="form">
                            @csrf
                            Title
                            <input type="text"
                                   class="form-control"
                                   name="title">
                            <br>
                            Link
                            <input type="text"
                                   name="link"
                                   class="form-control">
                            <br>
                            Description
                            <textarea name="description"
                                      cols="30"
                                      class="form-control"
                                      rows="10"></textarea>
                            <br>
                            Image
                            <input name="image" type="file" class="form-control">
                            <br>
                            <input type="submit" class="btn btn-success">
                        </form>
                        <br>
                        <table width="100%" class="table table-striped table-bordered table-hover" id="users-table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Path</th>
                                <th>Parent</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($sliders as $slider)
                                    <tr>
                                        <td>{{ $slider->id }}</td>
                                        <td>{{ $slider->title }}</td>
                                        <td>{{ $slider->description }}</td>
                                        <td>{{ $slider->link }}</td>
                                        <td>
                                            <img src="{{ Request::root() }}/sliders/{{ $slider->image }}"
                                                 alt="{{ $slider->image }}" style="max-height: 40px">
                                        </td>
                                        <td><a href="#" class="btn btn-warning">Edit</a></td>
                                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection