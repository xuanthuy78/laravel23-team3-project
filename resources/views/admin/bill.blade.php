@extends('admin.master')
@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Bill Management</h3>
        </div>
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <input type="checkbox" id="myCheck" onclick="myFunction()"> Check to hide not ok bill
                <thead>
                <tr>
                    <th>Bill ID</th>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Date Order</th>
                    <th>Total</th>
                    <th>Payment</th>
                    <th>Note</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody class="tbody">
                @foreach ($bills as $bill)
                    <tr>
                        <td>{{$bill->id}}</td>
                        <td>{{$bill->user_id}}</td>
                        <td>{{$bill->name}}</td>
                        <td>{{$bill->phone}}</td>
                        <td>{{$bill->address}}</td>
                        <td>{{$bill->date_order}}</td>
                        <td>{{$bill->total}}</td>
                        <td>{{$bill->payment}}</td>
                        <td>{{$bill->note}}</td>
                        <td>{{$bill->status ? 'OK' : 'Not Ok' }}</td>
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
{{--                                    <a type="button" class="btn btn-outline" href="{{route('delete_bill')}}">OK</a>--}}
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
            <div class="pull-right">{{$bills->links()}}</div>
        </div>
    </div>
<script>
        function myFunction() {
            var checkBoxStatus;
            var checkBox = document.getElementById('myCheck');
            if (checkBox.checked == true){
                checkBoxStatus = true;
            } else checkBoxStatus =false;
            console.log(checkBoxStatus),

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                data: { status: checkBoxStatus },
                type: 'GET',
                url: '/admin/bill/ajax/' + checkBoxStatus,
            }).done(function (data) {
                var bills = data.data;
                var html = ''
                console.log(bills);
                $.each(bills, function( index, value ){
                    var status = (value.status ==1) ? "OK" : "Not Ok";
                    html+=
                        "<tr>"+
                            "<td>"+value.id+"</td>"+
                            "<td>"+value.user_id+"</td>"+
                            "<td>"+value.name+"</td>"+
                            "<td>"+value.phone+"</td>"+
                            "<td>"+value.address+"</td>"+
                            "<td>"+value.date_order+"</td>"+
                            "<td>"+value.total+"</td>"+
                            "<td>"+value.payment+"</td>"+
                            "<td>"+value.note+"</td>"+
                            "<td>"+ status  +"</td>"+
                            "<td>"+
                                "<button type='button' class='btn btn-info' data-toggle='modal' data-target='#modal-info'>"+
                                    "Detail"+
                                "</button>"+
                                "<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#modal-danger'>"+
                                "Delete"+
                                "</button>"+
                            "</td>"+
                        "</tr>"
                        "<div class='pull-right'>valueco-organizer->links()</div>"
                });
                $('.tbody').html(html);


            })
        }
</script>
@endsection