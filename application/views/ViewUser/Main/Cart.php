

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>

						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/two.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/three.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
								<input type="number" value="4.5" min="0" max="9" step="0.1" data-decimals="2" data-suffix="°C"/>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-6"></div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>$59</span></li>
							
							<li>Total <span>$61</span></li>
						</ul>
							
							<a class="btn btn-default check_out" data-toggle="modal" data-target="#myModal">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

<!------ Modal ------>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
									  <div class="modal-content">
										<div class="modal-header">
										  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										  <h4 class="modal-title" id="myModalLabel">Modal title</h4>
										</div>
										<div class="modal-body">
											<div class="container">
												<div class="row">
													<div class="col-sm-3" >
													<div class="col-sm-12" class="login-form" style="padding:0">
										<section ><!--form-->
											<div class="container">
												<div class="row">
													<div class="col-sm-3">
														<div class="login-form"><!--login form-->
															<h2>Barang yang dibeli <hr></h2>
															<div class="col-sm-4">
																<p>Unive</p>
															</div>
															<div class="col-sm-4">
																<p>x2</p>
																</div>
															<div class="col-sm-4">
																<p>Rp.60.000</p>
															</div>
															
															<div class="col-sm-12" style="padding:0"><hr>Total : <button type="button" class="btn btn-default" data-dismiss="modal">Rp.60000</button>
															</div>
														</div><!--/login form-->
													</div>
													
												</div>
											</div>
										</section><!--/form-->
											</div>
												</div>	
													<div class="col-sm-3">
									<section ><!--form-->
										<div class="container">
											<div class="row">
												<div class="col-sm-3">
													<div class="login-form"><!--login form-->
														<h2>Isi Form Transaksi</h2>
														<form action="#">
															<input type="text" placeholder="Nama" style="width:85%"/>
															<input type="text" placeholder="Telp (WA)" style="width:85%"/>
															<input type="text" placeholder="Alamat" style="width:85%"/>
															<button type="submit" class="btn btn-default">Check Out</button>
														</form>
													</div><!--/login form-->
												</div>
												
											</div>
										</div>
									</section><!--/form-->
													</div>
													
													</div>
											
												
											</div>
											
										</div>
										<div class="modal-footer">
										  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										  
										</div>
									  </div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								  </div><!-- /.modal -->