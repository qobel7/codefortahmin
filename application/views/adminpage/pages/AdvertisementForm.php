<form enctype="multipart/form-data" id="adsetiementSaveForm">
    <div class="form-row">
		<div class="form-group col-md-12">
			<label for="inputKey">Kategori</label>
			<select class="form-control" name="version" id="exampleFormControlSelect1">
				<?php foreach ($categories as $item) {?>
					<option value="<?php echo $item->id ?>" ><?php print_r($item->key) ?></option>
				<?php } ?>
			</select>
		</div>
        <div class="form-group col-md-12">
            <label for="inputKey">Başlık</label>
            <input type="text" class="form-control" id="inputKey" name="header" placeholder="Başlık">
        </div>
        <div class="form-group col-md-12">
            <label for="inputdescription">Açıklama</label>
            <!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<textarea name="description" class="form-control"></textarea>
        </div>


    </div>
	<div class="row">
		<button  class="btn btn-primary" style="float: right;" onclick="BIP.saveContent('AdvertisementController','addAdvertisement','adsetiementSaveForm',this);return false;" >Kaydet</button>
	</div>

</form>
