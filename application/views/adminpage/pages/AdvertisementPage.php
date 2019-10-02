<div id="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<button class="btn btn-info align-right"style="float: right" onclick="BIP.changeContent.init(this)"  onclick="BIP.changeContent.init(this)" data-method="getAdvertisementForm" modal-header="Reklam Ekleme Form" data-controller="AdvertisementController" is-modal="true" base_url="/" modal-name="modal" >Ürün Ekle</button>
		</div>
		<div class="col-md-2"></div>

	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">

			<table class="table">
				<caption></caption>
				<thead>
				<tr>
					<th scope="col">id</th>
					<th scope="col">Başlık</th>
					<th scope="col">Görüntüle</th>
					<th scope="col">Resimleri Görüntüle</th>
					<th scope="col">Güncelle</th>
					<th scope="col">Sil</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($advertisement as $adv ){?>
				<tr>
					<th scope="row"><?php echo $adv->id; ?></th>
					<th scope="row"><?php echo $adv->header; ?></th>
						<td><button class="btn btn-info btn-md fa fa-2x fa-pencil" onclick="BIP.changeContent.init(this)" data-method="getAdvertisementView" data-controller="AdvertisementController" is-modal="true" base_url="/" modal-name="modal" modal-header="Ürün Görüntüleme" data-id="<?php echo $adv->id ?>" >O</button> </td>
						<td><button class="btn btn-info btn-md fa fa-2x fa-pencil" onclick="BIP.changeContent.init(this)" data-method="getAdvertisementImages" data-controller="AdvertisementController" is-modal="true" base_url="/" modal-name="modal" modal-header="Ürün Resimleri Görüntüleme" data-id="<?php echo $adv->id ?>" >O</button> </td>
					<td><button class="btn btn-danger fa fa-pencil" onclick="BIP.changeContent.init(this)" data-method="getAdvertisementEditForm" data-controller="AdvertisementController" is-modal="true" base_url="/" modal-name="modal" modal-header="Ürün Güncelleme" data-id="<?php echo $adv->id ?>" >O</button></td>
					<td><button class="btn btn-success fa fa-pencil" onclick="BIP.deleteContent('AdvertisementController','deleteAdvertisement',<?php echo $adv->id?>,this)" data-method="getAdvertisementView" data-controller="AdvertisementController"
								is_modal="true" modal-hader="Reklam Bilgisi" modal-name="modal" >O</button></td>
				</tr>
				<?php } ?>

				</tbody>
			</table>

		</div>
		<div class="col-md-2"></div>

	</div>


</div>
