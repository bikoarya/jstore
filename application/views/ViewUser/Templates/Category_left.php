<div class="col-sm-3">
	<div class="left-sidebar">


		<div class="brands_products">
			<!--brands_products-->
			<h2>Category</h2>
			<div class="brands-name">
				<ul class="nav nav-pills nav-stacked">
					<?php
					$kategori = $this->model->get('t_kategori');
					foreach ($kategori as $ctg) :
					?>
						<li><a href="javascript:void(0);" style="font-weight: bold;"> <span class="pull-right">(<?= $this->model->makeup($ctg['id_kategori']); ?>)</span><?= $ctg['nama_kategori'] ?></a></li>
					<?php endforeach ?>
				</ul>
			</div>
		</div>
		<!--/brands_products-->




	</div>
</div>