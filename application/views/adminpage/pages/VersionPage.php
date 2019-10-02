<div id="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<button class="btn btn-info align-right"style="float: right" onclick="BIP.changeContent.init(this)"  onclick="BIP.changeContent.init(this)" data-method="getVersionGenerateView" modal-header="VersiyonReklam Ekleme Form" data-controller="versionController" is-modal="true" base_url="/" modal-name="modal" >Kategori Ekle</button>
		</div>
		<div class="col-md-2"></div>

	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">

			<table class="table">
				<caption>List of users</caption>
				<thead>
				<tr>
					<th scope="col">Id</th>
					<th scope="col">İsim</th>
					<th scope="col">Açkılama</th>
					<th scope="col">Görüntüleme</th>
					<th scope="col">Güncelle</th>
					<th scope="col">Sil</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($version as $adv ){?>
					<tr>
						<th scope="row"><?php echo $adv->id; ?></th>
						<th scope="row"><?php echo $adv->key; ?></th>
						<td><?php echo $adv->version; ?></td>
						<td><button class="btn btn-info btn-md fa fa-2x fa-pencil" onclick="BIP.changeContent.init(this)" data-method="getVersionView" data-controller="VersionController" is-modal="true" base_url="/" modal-name="modal" modal-header="Kategori Görüntüleme" data-id="<?php echo $adv->id ?>" >O</button> </td>
						<td><button class="btn btn-success  fa fa-pencil" onclick="BIP.changeContent.init(this)" data-method="getVersionUpdateView" data-controller="versionController" is-modal="true" base_url="/" modal-name="modal" modal-header="Kategori Güncelleme" data-id="<?php echo $adv->id ?>" >O</button></td>
						<td><button class="btn btn-danger fa fa-pencil" onclick="BIP.deleteContent('VersionController','deleteVersion',<?php echo $adv->id?>,this)" data-method="getVersionView" data-controller="versionController"
									is_modal="true" modal-hader="Kategori Bilgisi" modal-name="modal" >O</button></td>
					</tr>
				<?php } ?>

				</tbody>
			</table>

		</div>
		<div class="col-md-2"></div>

	</div>


</div>
