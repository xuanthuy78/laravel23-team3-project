		
$(document).ready(function() {
	$('.submit-cart').click(function(){
		var productId = $(this).parent().find("input[name='ProductId']").val();
		// console.log('e');
			$.ajax ({
        		type: 'get',
        		dataType: 'html',
       			url: '<?php echo url('/cart/add');?>/'+productId, 
        		success: 
	        		function (data) {
	        			var result = ''; 
	        			var total =0;
	        			var totalQty=0;
	        			var cart ='';
	        			var obj = jQuery.parseJSON(data);
	        			var strText = "";
	        			$.each( obj, function( key, value ) {
	        				total+=(value.qty*value.price);
	        				totalQty+=parseInt(value.qty);
	        				console.log(value); 
						   	result += "<div class='cart-item'>" +
			                		"<div class='media'>" + 
			                		"<a class='pull-left' href='#''><img src='source/image/product/"+value.options.img+"' alt='' ></a>"+			             
			                		"<div class='media-body'>"+
			                    	"<input type='hidden' value='"+value.rowId+"' id='rowId'>"+
			                    	"<a ><button type='button' class='remove-cart-item deleteCart'>×</button></a>"+
			                    	"<span class='cart-item-title'>"+ value.name + "</span>"+
			                		"<span class='cart-item-amount'>"+value.qty+"*<span>"+numeral(value.price).format('0,0')+"</span></span>"+
		                			"</div>"+
		                		"</div>"+
		                		"</div>";

								});
						result+= "<div class='cart-caption' id='updateCart' >"+
								"<div class='cart-total text-right'>Tổng tiền: <span class='cart-total-value'>"+numeral(total).format('0,0')+"</span></div>"+
								"<div class='clearfix'></div>"+

								"<div class='center'>"+
									"<div class='space10'>&nbsp;</div>"+
									"<a href='{{url('cart')}}' class='beta-btn primary text-center'>Đặt hàng <i class='fa fa-chevron-right'></i></a>"+
								"</div>"+
							"</div>"
						
			              if(totalQty>0 ){
			                strText = totalQty;
			                $('div#block').css({'display':'block'});
			              }else{
			                strText = "Trống";
			              }
			              cart+= "<i class='fa fa-shopping-cart'></i> Giỏ hàng "+
											"( "+ strText +" )" +
											"<i class='fa fa-chevron-down'></i>"
		        		console.log(cart);
		        		$('.beta-select').html(cart);
	             		$('#add-cart-item').html(result);
	             		
					// $( "#updateCart" ).before(data);
	             	},
	             	error: function (request, status, error) {
				        // alert(request.responseText);
				    }
			});
	});
});