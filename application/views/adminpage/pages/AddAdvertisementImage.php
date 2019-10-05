<div class="form-row">

	<div class="form-group col-md-12">
		<label for="inputdescription">Resim</label>
		<input type="file" id="<?php echo $id ;?>" onchange="BIP.uploadIM(this)" class="form-control" multiple="multiple"
			   data-method="addAdvertisementImageToImage" data-controller="AdvertisementController" class="custom-file-input"
			   name="image" placeholder="resim">
	</div>
</div>
