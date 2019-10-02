<div id="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<button class="btn btn-info align-right"style="float: right"  onclick="BIP.changeContent.init(this)" data-method="addAdvertisementImage" modal-header="Reklam Ekleme Form" data-controller="AdvertisementController" data-id="<?php echo $id ?>" is-modal="true" base_url="/" modal-name="modal" >Resim Ekle</button>
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
					<th scope="col">Resim</th>
					<th scope="col">Sil</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($advertisementImages as $adv ){?>
				<tr>
					<td><img style="text-align: center;width: 300px" class="figure-img img-fluid rounded" src="<?php echo $adv->path ;?>" alt="Card image cap"></td>
					<td><button class="btn btn-success fa fa-pencil" onclick="BIP.deleteContent('AdvertisementController','deleteAdvertisementImage',<?php echo $adv->id?>,this)" data-method="deleteAdvertisementImage" data-controller="AdvertisementController"
								is_modal="true" modal-hader="Reklam Bilgisi" modal-name="modal" >O</button></td>
				</tr>
				<?php } ?>

				</tbody>
			</table>

		</div>
		<div class="col-md-2"></div>

	</div>


</div>
