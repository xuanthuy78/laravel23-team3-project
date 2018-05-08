@extends('master')
@section('content')
<br>
<div class="container mixcontainer">
    <div class="col-sm-4">
	 <div class="css-treeview">
                <h4>Profile</h4>
                <ul class="tree-list-pad">
                    <li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Cập nhật thông tin</label>
                    </li>
                    <li><input type="checkbox" id="item-1" checked="checked" /><label for="item-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Xem lại đơn hàng</label>
                    </li>
                   
                </ul>
            </div>
    </div>
    <div class=" container col-md-8">
      <table class="table table-bordered table-hover">
        <tr> 
          <th>STT</th>
          <th>Ngày Đặt Hàng</th>
          <th>Trạng Thái</th>
          <th>Chi Tiết</th>
          <th>Delete</th>
        </tr>
        @for($i=1;$i<=1;$i++)
        <tr class="content">
          <td>{{$i}}</td>
          <td>........</td>
          <td>........</td>
          <td><a href="" class="btn btn-primary">View</a> </td>
          <td><button class="btn btn-danger" data-catid="" data-toggle="modal" data-target="#delete">Delete</button></td>
        </tr>
        @endfor
      </table>
        
    </div>
    <div class="clearfix"></div>
</div>
<br>
<br>
<br>
<br>
@endsection