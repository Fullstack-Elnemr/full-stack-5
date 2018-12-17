@extends('backend.layouts.app')

@section('wrapper')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Menu</h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    <div class="page-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#add-new-user">
                            <i class="glyphicon glyphicon-plus"></i> Add New Link
                        </button>
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
                                @foreach($menu as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->slug }}</td>
                                        <td>{{ $item->path }}</td>
                                        @if($item->parent)
                                        <td>{{ $item->linkParent->title }}</td>
                                        @else
                                        <td><p class="bg-dark white">No Parent</p></td>
                                        @endif
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