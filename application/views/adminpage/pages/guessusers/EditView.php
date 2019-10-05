

<form enctype="multipart/form-data" id="SaveForm">

    <div class="form-row">

		<div class="form-group col-md-12">
			<label for="inputdescription">Kredi</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="credit" value="<?php echo $data[0]->credit;?>" placeholder="">
		</div>

		<input type="hidden" name="id" value="<?php echo $data[0]->id ;?>" >
    </div>
	<div class="row">
		<button  class="btn btn-primary" style="float: right;" onclick="BIP.updateContent('GuessUsers','update','SaveForm',this);return false;" >Kaydet</button>
	</div>

</form>
