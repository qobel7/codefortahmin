
<form enctype="multipart/form-data" id="adsetiementSaveForm">

	<div class="form-row">
		<div class="form-group col-md-12">
			<label for="inputKey">Duyuru</label>
			<input type="text" class="form-control" id="inputKey" name="text" value="" placeholder="">
		</div>


	</div>
	<div class="row">
		<button  class="btn btn-primary" style="float: right;" onclick="BIP.saveContent('NewsController','add','adsetiementSaveForm',this);return false;" >Kaydet</button>
	</div>

</form>
