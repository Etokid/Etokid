<?php 
include 'header.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>cart</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center border rounded bg-light my-5">
				<h1>My Cart</h1>
			</div>
			<!-- table -->

			<div class="col-lg-9">

				<table class="table">
					<thead class="text-center">
						
						<tr>
							<th scope="col">Serial No. </th>
							<th scope="col">Item Name </th>
							<th scope="col">Item Price </th>
							<th scope="col">Quantity</th>
							 
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody class="text-center">
						<?php
						$total=0;
						if (isset($_SESSION['cart'])) {
							
						
							foreach ($_SESSION['cart'] as $key => $value) 
							{
								$total=$total+$value['price'];
								$key=$key+1;
								echo "
									<tr>
										<td>$key</td>
										<td>$value[name]</td>
										<td>$value[price]</td>
										<td><input type='number' min='1' max='10' value='1' name='quantity'></td>
										
										<form action='manage_cart.php' method='post'>
											
											<td><button class='btn btn-sm btn-outline-danger' name='remove'>REMOVE</button></td>
											<input type='hidden' name='name' value='$value[name]'>

										</form>
									</tr>
								";	
							}
						}
						?>


						
					</tbody>
				</table>

			</div>

			
				

			</div>

		</div>
	</div>
</body>
</html>