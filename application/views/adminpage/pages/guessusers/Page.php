<div id="container">

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">

			<table class="table">
				<thead>
				<tr>
					<th scope="col">Kullanıcı Adı</th>
					<th scope="col">Email</th>
					<th scope="col">Kredi</th>
					<th scope="col">Kredi Güncelle</th>
					<th scope="col">Görüntüle</th>
					<th scope="col">Sil</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($data as $adv ){?>

					<tr>
						<th scope="row"><?php echo $adv->name; ?></th>
						<th scope="row"><?php echo $adv->email; ?></th>
						<td><?php echo $adv->credit; ?></td>
						<td><button class="btn btn-success  fa fa-pencil" onclick="BIP.changeContent.init(this)" data-method="getUpdateView" data-controller="GuessUsers" is-modal="true" base_url="/" modal-name="modal" modal-header="Kredi Güncelleme" data-id="<?php echo $adv->id ?>" >O</button></td>
						<td><button class="btn btn-info btn-md fa fa-2x fa-pencil" onclick="BIP.changeContent.init(this)" data-method="getView" data-controller="GuessUsers" is-modal="true" base_url="/" modal-name="modal" modal-header="Kullanıcı Görüntüleme" data-id="<?php echo $adv->id ?>" >O</button> </td>
						<td><button class="btn btn-danger fa fa-pencil" onclick="BIP.deleteContent('GuessUsers','delete','<?php echo $adv->id?>',this)" data-method="getVersionView" data-controller="GuessUsers"
									is_modal="true" modal-hader="Kategori Bilgisi" modal-name="modal" >O</button></td>
					</tr>
				<?php } ?>

				</tbody>
			</table>

		</div>
		<div class="col-md-2"></div>

	</div>


</div>
