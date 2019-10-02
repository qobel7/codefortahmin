
<form enctype="multipart/form-data" id="adsetiementSaveForm">

	<div class="form-row">
		<div class="form-group col-md-12">
			<label for="inputKey">Anahtar sözcük</label>
			<input type="text" class="form-control" id="inputKey" name="key"  placeholder="Anahtar sözcük">
		</div>
		<div class="form-group col-md-12">
			<label for="inputdescription">Versiyon</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="version" placeholder="Versiyon">
		</div>
		<div class="form-group col-md-12">
			<label for="inputdescription">Resim</label>
			<input type="file" class="form-control" id="inputdescription" name="image" placeholder="resim">
		</div>

	</div>
	<div class="row">
		<button  class="btn btn-primary" style="float: right;" onclick="BIP.saveContent('VersionController','addVersion','adsetiementSaveForm',this);return false;" >Kaydet</button>
	</div>

</form>
