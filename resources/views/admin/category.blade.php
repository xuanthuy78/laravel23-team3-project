@extends('admin.master')
@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Category Management</h3>
        </div>
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Category ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                                Detail
                            </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
                                Delete
                            </button>
                        </td>
                    </tr>
                    <div class="modal modal-info fade" id="modal-info">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Detail</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Show detail bill</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-outline">Save changes</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->

                    <div class="modal modal-danger fade" id="modal-danger">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Delete</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure to detele this record?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-outline">OK</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                @endforeach
                </tbody>
            </table>
            <div class="pull-right">{{$categories->links()}}</div>
        </div>
    </div>


@endsection
@section('script')
    <script>
        $(function () {
            $('#example1').DataTable({
                'paginate':false,
                'lengthChange': false,
                'ordering'    : true,
                'info':false,
            })
        })
    </script>
@endsection