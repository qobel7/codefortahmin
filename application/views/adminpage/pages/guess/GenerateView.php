
<form enctype="multipart/form-data" id="adsetiementSaveForm">

	<div class="form-row">
		<<div class="form-group col-md-12">
			<label for="inputKey">Maç Saati</label>
			<input type="text-local" class="form-control" id="inputKey" name="match_time" value="" placeholder="">
		</div>
		<div class="form-group col-md-12">
			<label for="inputdescription">Açıklama</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="description" value="" placeholder="">
		</div>
		<div class="form-group col-md-12">
			<label for="inputdescription">Taraflar</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="sides" value="" placeholder="">
		</div>
		<div class="form-group col-md-12">
			<label for="inputdescription">Tahmin Yüzdesi</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="guess_percent" value="" placeholder="">
		</div>
		<div class="form-group col-md-12">
			<label for="inputdescription">Tahmin</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="guess" value="" placeholder="">
		</div>
		<div class="form-group col-md-12">
			<label for="inputdescription">Kredi</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="credit" value="" placeholder="">
		</div>
		<div class="form-group col-md-12">
			<label for="inputdescription">Tahmin Durumu</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="guess_state" value="" placeholder="">
		</div>
		<div class="form-group col-md-12">
			<label for="inputdescription">Durum</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="guess_state" value="" placeholder="">
		</div>
		<div class="form-group col-md-12">
			<label for="inputdescription">Maç Kodu</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="match_code" value="" placeholder="">
		</div>

	</div>
	<div class="row">
		<button  class="btn btn-primary" style="float: right;" onclick="BIP.saveContent('GuessController','add','adsetiementSaveForm',this);return false;" >Kaydet</button>
	</div>

</form>
