<section id="slider">
	<!--slider-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="slider-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#slider-carousel" data-slide-to="1"></li>
						<li data-target="#slider-carousel" data-slide-to="2"></li>
					</ol>

					<div class="carousel-inner">
						<div class="item active">
							<div class="col-sm-6">
								<h1><span>J</span>-STORE</h1>
								<h2>Eksklusif Beauty Cosmetic</h2>
								<p>Rahasia cantik yang aman bagi kulit anda</p>
								<button type="button" class="btn btn-default get">Shop Now <i class="fa fa-angle-right"></i></button>
							</div>
							<div class="col-sm-6">
								<img src="<?= base_url('assets/images/results/carousel1.png') ?>" class="girl img-responsive" alt="" />
							</div>
						</div>
						<div class="item">
							<div class="col-sm-6">
								<h1><span>J</span>-STORE</h1>
								<h2>Natural Product</h2>
								<p>Cleansing and Face Wash Lokal untuk kulit sensitif , Menguatkan Skin Barier dan
									meredakan Inflamasi</p>
								<button type="button" class="btn btn-default get">Shop Now <i class="fa fa-angle-right"></i></button>
							</div>
							<div class="col-sm-6">
								<img src="<?= base_url('assets/images/results/carousel2.png') ?>" class="girl img-responsive" alt="" />
							</div>
						</div>

						<div class="item">
							<div class="col-sm-6">
								<h1><span>J</span>-STORE</h1>
								<h2>Best Online Shop</h2>
								<p>Tempat terbaik untuk produk kecantikan. Temukan produk yang cocok untuk anda disini.</p>
								<button type="button" class="btn btn-default get">Shop Now <i class="fa fa-angle-right"></i></button>
							</div>
							<div class="col-sm-6">
								<img src="<?= base_url('assets/images/results/Carosel3.jpg') ?>" class="girl img-responsive" alt="" />
							</div>
						</div>

					</div>

					<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>

			</div>
		</div>
	</div>
</section>
<!--/slider-->

<section>
	<div class="container">
		<div class="row">

			<?php
			$this->load->view('ViewUser/Templates/Category_left');
			?>



			<div class="category-tab">
				<!--category-tab-->
				<div class="col-sm-9"></div>
				<div class="col-sm-3">
				</div>
				<div class="col-sm-12">
					<br>
					<ul class="nav nav-tabs">
						<?php
						$no = 1;
						foreach ($kategori as $ctg) :
							$active = "";
							if ($no == 1) {
								$active = "active";
							}
							$name = str_replace(" ", "", $ctg['nama_kategori']);
						?>

							<li class="<?= $active ?>"><a href="#<?= $name ?>" data-toggle="tab"><?= $ctg['nama_kategori'] ?></a></li>
						<?php $no++;
						endforeach; ?>

					</ul>
				</div>
				<div class="tab-content">

					<?php
					$tes = 1;
					$no = 1;
					foreach ($kategori as $ctg) :
						$active = "";
						if ($no == 1) {
							$active = "active in";
						}
						$name = str_replace(" ", "", $ctg['nama_kategori']);
					?>

						<div class="tab-pane fade <?= $active ?>" id="<?= $name ?>">

							<?php

							$user = $this->db->get_where('t_barang', ['id_kategori' => $ctg['id_kategori']])->result_array();

							foreach ($user as $barangmuncul) :
								$tes++;
							?>

								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<a data-toggle="modal" data-target="#myModal<?= $tes ?>"><img src="<?= base_url('assets/images/results/' . $barangmuncul['gambar']) ?>" alt="" /></a>

												<h2><?= $barangmuncul['nama_barang'] ?></h2>
												<h4>Rp. <?= number_format($barangmuncul['harga']) ?></h4>
												<a data-toggle="modal" data-target="#myModal<?= $tes ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> Buy Now</a>
											</div>

										</div>
									</div>
								</div>

								<div class="modal fade" id="myModal<?= $tes ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												<h4 class="modal-title" id="myModalLabel"><?= $ctg['nama_kategori'] ?></h4>
											</div>
											<div class="modal-body">
												<div class="container">
													<div class="row">

														<div class="tab-content">
															<div class="tab-pane fade active in" id="body">
																<div class="col-sm-3">
																	<div class="product-image-wrapper">
																		<div class="single-products">
																			<div class="productinfo text-center align-items-center">
																				<!-- Modal -->
																				<img src="<?= base_url('assets/images/results/' . $barangmuncul['gambar']) ?>" alt="" />
																			</div>

																		</div>
																	</div>
																</div>
																<div class="col-sm-3">
																	<h1 style="font-weight: bold; color: #FEA125"><?= $barangmuncul['nama_barang'] ?></h1>
																	<h4 style="margin-bottom: 30px">Rp. <?= $barangmuncul['harga'] ?></h4>
																	<h5 style="font-weight: bold;">Deskripsi :</h5>
																	<p><?= $barangmuncul['deskripsi'] ?></p>
																	<p class="text-title" style="font-weight: bold;">Stok : <?= $barangmuncul['stok'] ?></p>

																	<br>

																</div>
															</div>
														</div>

													</div>
												</div>

											</div>
											<div class="modal-footer">
												<?php
												$qty = "";
												$button = "";
												if ($barangmuncul['stok'] == 0) {
													$qty = "readonly";
													$button = "disabled";
												} ?>
												<form action="<?= site_url('User/Checkout'); ?>" method="POST" enctype="multipart/form-data">
													<input type="text" value="<?= $barangmuncul['id_barang'] ?>" name="id_barang" hidden>
													<input type="number" min="1" max="<?= $barangmuncul['stok'] ?>" value="1" required="true" placeholder="QTY" name="qty" class="input-list-group-item-action" style="padding:5px;margin-left:-85px; position: absolute;" <?= $qty ?>>
													<button class="btn btn-default add-to-cart" <?= $button ?>><i class="fa fa-shopping-cart"></i> Buy Now</button>

												</form>

											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div><!-- /.modal -->

							<?php endforeach; ?>

						</div>
					<?php $no++;
					endforeach; ?>



				</div>


			</div>
			<!--/category-tab-->

			<div class="col-md-3">

			</div>
			<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<?php
										$recomended = $this->model->getRecomended();
										$no=1;
										foreach($recomended as $recom):
											if($no<4){
									?>
									
									<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<a data-toggle="modal" data-target="#modal<?= $no ?>"><img src="<?= base_url('assets/images/results/' . $recom['gambar']) ?>" alt="" /></a>

												<h2><?= $recom['nama_barang'] ?></h2>
												<h4>Rp. <?= number_format($recom['harga']) ?></h4>
												<a data-toggle="modal" data-target="#modal<?= $no ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> Buy Now</a>
											</div>

										</div>
									</div>
								</div>
									<?php };$no++;endforeach; ?>
									
								</div>
								<div class="item">	
								<?php
										$recomended = $this->model->getRecomended();
										$no=1;
										foreach($recomended as $recom):
											if($no>3 && $no<7){
									?>
									
									<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<a data-toggle="modal" data-target="#modal<?= $no ?>"><img src="<?= base_url('assets/images/results/' . $recom['gambar']) ?>" alt="" /></a>

												<h2><?= $recom['nama_barang'] ?></h2>
												<h4>Rp. <?= number_format($recom['harga']) ?></h4>
												<a data-toggle="modal" data-target="#modal<?= $no ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> Buy Now</a>
											</div>

										</div>
									</div>
								</div>
									<?php };$no++;endforeach; ?>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
			</div>
		</div>
	</div>
</section>


<?php
	$recomended = $this->model->getRecomended();
	$no=1;
	foreach($recomended as $recom):
		
									?>
<div class="modal fade" id="modal<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												<h4 class="modal-title" id="myModalLabel">Recomended <?=$no?></h4>
											</div>
											<div class="modal-body">
												<div class="container">
													<div class="row">

														<div class="tab-content">
															<div class="tab-pane fade active in" id="body">
																<div class="col-sm-3">
																	<div class="product-image-wrapper">
																		<div class="single-products">
																			<div class="productinfo text-center align-items-center">
																				<!-- Modal -->
																				<img src="<?= base_url('assets/images/results/' . $recom['gambar']) ?>" alt="" />
																			</div>

																		</div>
																	</div>
																</div>
																<div class="col-sm-3">
																	<h1 style="font-weight: bold; color: #FEA125"><?= $recom['nama_barang'] ?></h1>
																	<h4 style="margin-bottom: 30px">Rp. <?= $recom['harga'] ?></h4>
																	<h5 style="font-weight: bold;">Deskripsi :</h5>
																	<p><?= $recom['deskripsi'] ?></p>
																	<p class="text-title" style="font-weight: bold;">Stok : <?= $recom['stok'] ?></p>

																	<br>

																</div>
															</div>
														</div>

													</div>
												</div>

											</div>
											<div class="modal-footer">
												<?php
												$qty = "";
												$button = "";
												if ($recom['stok'] == 0) {
													$qty = "readonly";
													$button = "disabled";
												} ?>
												<form action="<?= site_url('User/Checkout'); ?>" method="POST" enctype="multipart/form-data">
													<input type="text" value="<?= $recom['id_barang'] ?>" name="id_barang" hidden>
													<input type="number" min="1" max="<?= $recom['stok'] ?>" value="1" required="true" placeholder="QTY" name="qty" class="input-list-group-item-action" style="padding:5px;margin-left:-85px; position: absolute;" <?= $qty ?>>
													<button class="btn btn-default add-to-cart" <?= $button ?>><i class="fa fa-shopping-cart"></i> Buy Now</button>

												</form>

											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div><!-- /.modal -->
<?php $no++;endforeach;?>