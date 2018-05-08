@extends('master')
@section('content')
<br>
<div class="container mixcontainer">
    <div class="col-sm-4">
	 <div class="css-treeview">
                <h4>Profile</h4>
                <ul class="tree-list-pad">
                    <li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="{{url('users/'.Auth::user()->id)}}">Cập nhật thông tin</a></label>
                    </li>
                    <li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="{{url('users/'.Auth::user()->id)}}">Đổi password</a></label>
                    </li>
                    <li><input type="checkbox" id="item-1" checked="checked" /><label for="item-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="{{url('previewcart')}}">Xem lại đơn hàng</a></label>
                    </li>
                   
                </ul>
            </div>
    </div>
    <div class="container col-md-8 tablecart">
      <table class="table table-bordered ">
        <tr> 
          <th>Mã đơn hàng</th>
          <th>Ngày Đặt Hàng</th>
          <th>Trạng Thái</th>
          <th>Chi Tiết</th>
          <th>Delete</th>
        </tr>
        @foreach ($bills as $bill)
        <tr class="content table-hover">
          <td>{{$bill->id}}</td>
          <td>{{ date('d.m.Y H:i:s', strtotime($bill->date_order)) }}</td>
          <td>@if(($bill->status) == 0) Đang xử lí @else Giao dịch thành công @endif</td>
          <td><a href="" class="btn btn-primary" role="dialog" data-toggle="modal" data-target="#myModal{{$bill->id}}"><i class="fa fa-star-o" style="color:white;"></i>&nbsp;View</a> </td>
          <td><button class="btn btn-danger" data-catid="" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o"></i> &nbsp;Delete</button></td>
        </tr>
        @endforeach
      </table>
        
    </div>
    <div class="clearfix"></div>
</div>
@foreach ($bills as $bill)
<div class="modal fade" id="myModal{{$bill->id}}" tabindex="-1" role="dialog" aria-labelledby="myModal{{$bill->id}}"
  aria-hidden="true">
  <div class="container">
    <div id="content">
      <div id="update">
        <div class="container">
      <div class="table-responsive">
        <!-- Shop Products Table -->
        
        <table class="shop_table beta-shopping-cart-table" cellspacing="0">
          <thead>
            <tr>
              <th class="product-quantity">STT</th>
              <th class="product-name">Tên bánh</th>
              <th class="product-quantity">Số lượng</th>
              <th class="product-price">Đơn giá</th>
            </tr>
          </thead>
          <?php $count=1;?>
          @foreach($billdetails as $billdetail)
          @if (($billdetail->bill_id) == ($bill->id))
          <tbody style="background-color: #ffffff!important">
          
            <tr class="cart_item">
              <td class="product-quantity">
                <span class="amount">{{$count}}</span>
              </td>
              <td class="product-name">
                <div class="media">
                  <img class="pull-left" src="source/image/product/{{$billdetail->product->image}}" width="100px" alt="">
                  <div class="media-body">
                    <p class="font-large table-title">{{$billdetail->product->name}}</p>
                  </div>
                </div>
              </td>

              <td class="product-quantity">
                <span class="amount">{{$billdetail->quantity}}</span>
              </td>
              
              <td class="product-price">
                <span class="amount">{{$billdetail->unit_price}}</span>
              </td>
            
            </tr>
          </tbody>
          <?php $count++; ?>
          @endif
          @endforeach

          <tfoot>
            <tr>
              <td colspan="6" class="actions" style="text-align: right;">
                <label>Total: </label>
                <a type="submit" class="beta-btn primary" name="proceed">${{$bill->total}} <i class="fa fa-chevron-right"></i></a>

            </tr>
          </tfoot>
        </table>
        <!-- End of Shop Table Products -->
        </div>
      </div>
    </div>

    </div> <!-- #content -->
    </div> <!-- .container -->
</div> 
@endforeach
<br>
<br>
<br>
<br>
@endsection