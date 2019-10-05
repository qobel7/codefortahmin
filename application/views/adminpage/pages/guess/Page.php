<div id="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<button class="btn btn-info align-right"style="float: right" onclick="BIP.changeContent.init(this)"  onclick="BIP.changeContent.init(this)" data-method="getGenerateView" modal-header="Tahmin Ekleme Formu" data-controller="GuessController" is-modal="true" base_url="/" modal-name="modal" >Tahmin Ekle</button>
		</div>
		<div class="col-md-2"></div>

	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">

			<table class="table">
				<thead>
				<tr>
					<th scope="col">Taraflar</th>
					<th scope="col">Maç Kodu</th>
					<th scope="col">Kredi</th>
					<th scope="col">Güncelle</th>
					<th scope="col">Sil</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($data as $adv ){?>
					<tr>
						<th scope="row"><?php echo $adv->sides; ?></th>
						<th scope="row"><?php echo $adv->match_code; ?></th>
						<td><?php echo $adv->credit; ?></td>
						<td><button class="btn btn-success  fa fa-pencil" onclick="BIP.changeContent.init(this)" data-method="getUpdateView" data-controller="GuessController" is-modal="true" base_url="/" modal-name="modal" modal-header="Tahmin Güncelleme" data-id="<?php echo $adv->id ?>" >O</button></td>
						<td><button class="btn btn-danger fa fa-pencil" onclick="BIP.deleteContent('GuessController','delete',<?php echo $adv->id?>,this)" data-method="getVersionView" data-controller="guess"
									is_modal="true" modal-hader="Kategori Bilgisi" modal-name="modal" >O</button></td>
					</tr>
				<?php } ?>

				</tbody>
			</table>

		</div>
		<div class="col-md-2"></div>

	</div>


</div>
