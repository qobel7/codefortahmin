<div id="container">
	<div class="row" style="padding: 20px	">
		<div class="col-xs-2"> <b>Başlık </b></div>
		<div class="col-xs-10"><?php echo $advertisement[0]->header ;?></div>
		<hr class="my-4">
	</div>

	<div class="row" style="padding: 20px	">
		<div class="col-xs-2"><b>Açıklama</b></div>
		<div class="col-xs-10"><?php echo $advertisement[0]->description ;?></div>
		<hr class="my-4">
	</div>

	<div class="row" style="padding: 20px	">
		<div class="col-xs-2"><b>Kategori</b></div>
		<div class="col-xs-10"><?php echo $advertisement[0]->category_name ;?></div>
		<hr class="my-4">
	</div>

<!--	<div class="row" style="padding: 20px	">
		<div class="col-xs-2"><b>Resim</b></div>
		<div class="col-xs-10">
			<img style="text-align: center" class="figure-img img-fluid rounded" src="<?php /*echo $advertisement[0]->image ;*/?>" alt="Card image cap">
		</div>
	</div>-->



</div>
