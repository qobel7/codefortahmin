<div id="container">
	<!--<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<button class="btn btn-info align-right"style="float: right" onclick="BIP.changeContent.init(this)"  onclick="BIP.changeContent.init(this)" data-method="getGenerateView" modal-header="Duyuru Ekleme Formu" data-controller="NewsController" is-modal="true" base_url="/" modal-name="modal" >Duyuru Ekle</button>
		</div>
		<div class="col-md-2"></div>

	</div>-->
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">

			<table class="table">
				<thead>
				<tr>
					<th scope="col">Duyuru</th>
					<th scope="col">Güncelle</th>
<!--					<th scope="col">Sil</th>
-->				</tr>
				</thead>
				<tbody>
				<?php foreach ($data as $adv ){?>
					<tr>
						<th scope="row"><?php echo $adv->text; ?></th>
						<td><button class="btn btn-success  fa fa-pencil" onclick="BIP.changeContent.init(this)" data-method="getUpdateView" data-controller="NewsController" is-modal="true" base_url="/" modal-name="modal" modal-header="Duyuru Güncelleme" data-id="<?php echo $adv->id ?>" >O</button></td>
						<!--<td><button class="btn btn-danger fa fa-pencil" onclick="BIP.deleteContent('NewsController','delete',<?php /*echo $adv->id*/?>,this)" data-method="getVersionView" data-controller="NewsController"
									is_modal="true" modal-hader="Kategori Bilgisi" modal-name="modal" >O</button></td>-->
					</tr>
				<?php } ?>

				</tbody>
			</table>

		</div>
		<div class="col-md-2"></div>

	</div>


</div>
