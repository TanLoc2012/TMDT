<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Restaurent</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Modernizr js -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
<div class="row" style="margin-top: 20px;">
	<div class="col-md-12">
		<h3>Chi Tiết Đơn Hàng</h3>
	</div>
	<div class="col-md-8 table-responsive">
		<table class="table table-bordered table-hover" style="margin-top: 20px;">
			<thead>
				<tr>
					<th>STT</th>
					<th>Thumbnail</th>
					<th>Tên Sản Phẩm</th>
					<th>Giá</th>
					<th>Số Lượng</th>
					<th>Tổng Giá</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td><img src="data:image/jpeg;base64,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" alt="" style="height: 120px"></td>
					<td>Bộ gia dụng nhà bếp</td>
					<td>500.000 đ</td>
                    <td>1</td>
					<th>500.000 đ</th>
				</tr>
                <tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<th>Tổng Tiền</th>
					<th>500.000 đ</th>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="col-md-12">
		<h3>Thanh toán</h3>
	</div>
    
  <button style="margin-left: 50px;height: 38px;" class="btn btn-danger"><a style="color:white" href="http://localhost/TMDT/vnpay.php">VNPAY</a></button>
  <form style="margin: 0 25px" class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                          action="momo-qrcode.php">
    <input type='submit' name="momo" value="Thanh toan momo QRcode" class="btn btn-danger"/>
</form>
      
  <div id="paypal-button-container"></div>

    <script src="https://www.paypal.com/sdk/js?client-id=Ae0hsMHQSEQ4MnjdNVjWUZ_j_GXRGX7EOe1ILeS5qP6f6nw1zBfJwW1vGS22w-HKAkFLi3gJ85Yu1m2y&currency=USD"></script>
    <!-- Set up a container element for the button -->
    <script>
      paypal.Buttons({
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: '20.90' // Can also reference a variable or function
              }
            }]
          });
        },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // const element = document.getElementById('paypal-button-container');
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
          });
        }
      }).render('#paypal-button-container');
    </script>
</div>
    </body>

