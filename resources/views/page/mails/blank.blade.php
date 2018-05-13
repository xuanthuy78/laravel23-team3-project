<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
<div class="col-sm-12 badge badge-secondary" style="font-size: 17px; color:red">Thông tin đặt hàng của bạn</div>
<div class="col-sm-6">Tên người nhận:</div> <div class="col-sm-6" style="color:#15c;"> {{$name}}</div>
<div class="col-sm-6">Địa chỉ:</div> <div class="col-sm-6" style="color:#15c;"">{{$address}}</div>
<div class="col-sm-6">Số điện thoại:</div> <div class="col-sm-6" style="color:#15c;">{{$phone}}</div>
<div class="col-sm-6">Hình thức thanh toán:</div> <div class="col-sm-6" style="color:#15c;">{{$payment}}</div>
<div class="col-sm-6">Thời gian nhận:</div> <div class="col-sm-6" style="color:#15c;">{{$note}}</div>
<div class="col-sm-6">Tổng tiền đơn hàng:</div><div class="col-sm-6" style="color:#15c;"> {{$total}}</div>
	</div>
</body>
</html>

