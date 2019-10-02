

<form enctype="multipart/form-data" id="SaveForm">

    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="inputKey">Duyuru</label>
            <input type="datetime" class="form-control date" id="inputKey" name="text" value="<?php echo $data[0]->text ;?>" placeholder="">
        </div>


		<input type="hidden" name="id" value="<?php echo $data[0]->id ;?>" >
    </div>
	<div class="row">
		<button  class="btn btn-primary" style="float: right;" onclick="BIP.updateContent('NewsController','update','SaveForm',this);return false;" >Kaydet</button>
	</div>

</form>
