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
								<img src="<?= base_url('assets/images/results/Carosel1.jpg') ?>" class="girl img-responsive" alt="" />
								<!-- <img src="images/home/pricing.png"  class="pricing" alt="" /> -->
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
								<img src="<?= base_url('assets/images/results/Carosel2.jpg') ?>" class="girl img-responsive" alt="" />
								<!-- <img src="images/home/pricing.png" class="pricing" alt="" /> -->
							</div>
						</div>

						<div class="item">
							<div class="col-sm-6">
								<h1><span>J</span>-STORE</h1>
								<h2>Free Ecommerce Template</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								<button type="button" class="btn btn-default get">Shop Now <i class="fa fa-angle-right"></i></button>
							</div>
							<div class="col-sm-6">
								<img src="<?= base_url('assets/images/results/Carosel3.jpg') ?>" class="girl img-responsive" alt="" />
								<!-- <img src="images/home/pricing.png" class="pricing" alt="" /> -->
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
<<<<<<< Updated upstream
				
				
					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-9"></div>
						<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
							
						</div>
					</div>
						<div class="col-sm-12">
							<br>
							<ul class="nav nav-tabs">
                            <?php 
                            $no=1;
                            foreach ($kategori as $ctg) :
                                $active = "";
                                if ($no==1) {
                                    $active="active";
                                }
                                $name = str_replace(" ", "", $ctg['nama_kategori']);
                                  ?>

                                <li class="<?=$active?>"><a href="#<?=$name?>" data-toggle="tab"><?=$ctg['nama_kategori']?></a></li>
                            <?php $no++; endforeach; ?>
								
							</ul>
						</div>
                        <div class="tab-content">

                        <?php 
                            $tes=1;
                            $no=1;
                        foreach ($kategori as $ctg) :
                            $active="";
                            if ($no==1) {
                                $active = "active in";
                            }
                            $name = str_replace(" ", "", $ctg['nama_kategori']);
                        ?>
                            
							<div class="tab-pane fade <?=$active?>" id="<?=$name?>" >
							
							<?php 
                            
                            $user = $this->db->get_where('t_barang', ['id_kategori' => $ctg['id_kategori']])->result_array();

                                foreach ($user as $barangmuncul) :
                                    $tes++;
                            ?>	
								
=======



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

>>>>>>> Stashed changes
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
																	<h2>Rp.<?= $barangmuncul['harga'] ?></h2>
																	<p><?= $barangmuncul['nama_barang'] ?></p>
																	<br>

																	<p class="text-danger" style="font-weight: bold;">Deskripsi :</p>
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
													<input type="number" min="1" max="<?= $barangmuncul['stok'] ?>" value="1" required="true" placeholder="QTY" name="qty" class="input-list-group-item-action" style="padding:5px;margin-right:5px;" <?= $qty ?>>
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													<button class="btn btn-default add-to-cart" <?= $button ?>><i class="fa fa-shopping-cart"></i> Buy Now</button>

												</form>

											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
<<<<<<< Updated upstream
								  </div><!-- /.modal -->
                                
                                <?php endforeach; ?>
								<?php
								$count = $this->db->get_where('t_barang', ['id_kategori' => $ctg['id_kategori']])->num_rows();
									if($count==0){
									?>
										<div class="col-sm-12">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
                                     		 <h2 style="margin-top:80px;margin-bottom:80px;">Barang Kosong!</h2>
											</div>
											
										</div>
									</div>
								</div>
									<?php }?>
                                </div>
                        <?php $no++;endforeach; ?>
                                
							
							
                                </div>
							
						
					</div><!--/category-tab-->
				
					<div class="col-md-3">
=======
								</div><!-- /.modal -->
>>>>>>> Stashed changes

							<?php endforeach; ?>

						</div>
					<?php $no++;
					endforeach; ?>



				</div>


			</div>
			<!--/category-tab-->

			<div class="col-md-3">

			</div>
			<div class="recommended_items">
				<!--recommended_items-->
				<h2 class="title text-center">recommended items</h2>

				<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="item active">
							<?php
							$lim = 1;
							foreach ($barang as $brg) :
								if ($lim > 3) {
								} else {
							?>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?= base_url('assets/images/results/' . $brg['gambar']) ?>" alt="" />
													<h2>Rp.<?= $brg['harga'] ?></h2>
													<p><?= $brg['nama_barang'] ?></p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>

											</div>
										</div>
									</div>
<<<<<<< Updated upstream
                                    <?php };$lim++;endforeach;?>    
									
								</div>
                                <div class="item">	
									<?php 
                                    $lim=1;
                                    foreach($barang as $brg):
                                    if($lim<4||$lim>6){
                                        
                                    }
                                    else{
                                    ?>
                                        <div class="col-sm-4">
=======
							<?php };
								$lim++;
							endforeach; ?>

						</div>
						<div class="item">
							<?php
							$lim = 1;
							foreach ($barang as $brg) :
								if ($lim < 4) {
								} else {
							?>
									<div class="col-sm-4">
>>>>>>> Stashed changes
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?= base_url('assets/images/results/' . $brg['gambar']) ?>" alt="" />
													<h2>Rp.<?= $brg['harga'] ?></h2>
													<p><?= $brg['nama_barang'] ?></p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>

											</div>
										</div>
									</div>
							<?php };
								$lim++;
							endforeach; ?>

						</div>
					</div>
					<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
			<!--/recommended_items-->

		</div>
	</div>
	</div>
</section>