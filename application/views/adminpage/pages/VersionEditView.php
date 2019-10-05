
<div class="form-row">

	<div class="form-group col-md-12">
		<label for="inputdescription">Resim</label>
		<input type="file" id="<?php echo $version[0]->id ;?>" onchange="BIP.uploadIM(this)" class="form-control"
			   data-method="updateVersionImage" data-controller="VersionController" class="custom-file-input"
			   name="image" placeholder="resim">
	</div>
</div>
<form enctype="multipart/form-data" id="adsetiementSaveForm">

    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="inputKey">Başlık</label>
            <input type="text" class="form-control" id="inputKey" name="key" value="<?php echo $version[0]->key ;?>" placeholder="">
        </div>
        <div class="form-group col-md-12">
            <label for="inputdescription">Açıklama</label>
            <!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="version" value="<?php echo $version[0]->version ;?>" placeholder="">
        </div>

		<input type="hidden" name="id" value="<?php echo $version[0]->id ;?>" >
    </div>
	<div class="row">
		<button  class="btn btn-primary" style="float: right;" onclick="BIP.updateContent('VersionController','updateVersion','adsetiementSaveForm',this);return false;" >Kaydet</button>
	</div>

</form>
