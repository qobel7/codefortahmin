

<form enctype="multipart/form-data" id="SaveForm">

    <div class="form-row">

        <div class="form-group col-md-12">
            <label for="inputdescription">evTakim</label>
            <!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="evTakim" value="<?php echo $data[0]->evTakim ;?>" placeholder="">
        </div>
		<div class="form-group col-md-12">
			<label for="inputdescription">evtakimen</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="evtakimen" value="<?php echo $data[0]->evtakimen;?>" placeholder="">
		</div>
		<div class="form-group col-md-12">
			<label for="inputdescription">deplasmanTakim</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="deplasmanTakim" value="<?php echo $data[0]->deplasmanTakim;?>" placeholder="">
		</div>
		<div class="form-group col-md-12">
			<label for="inputdescription">deplasmanTakimEN</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="deplasmanTakimEN" value="<?php echo $data[0]->deplasmanTakimEN;?>" placeholder="">
		</div>
		<div class="form-group col-md-12">
			<label for="inputdescription">tahmin</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="tahmin" value="<?php echo $data[0]->tahmin;?>" placeholder="">
		</div>
		<div class="form-group col-md-12">
			<label for="inputdescription">tahminEN</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="tahminEN" value="<?php echo $data[0]->tahminEN;?>" placeholder="">
		</div>
		<div class="form-group col-md-12">
			<label for="inputdescription">oran</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="oran" value="<?php echo $data[0]->oran;?>" placeholder="">
		</div>
		<div class="form-group col-md-12">
			<label for="inputdescription">evSonuc</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="evSonuc" value="<?php echo $data[0]->evSonuc;?>" placeholder="">
		</div>
        <div class="form-group col-md-12">
			<label for="inputdescription">deplasmanSonuc</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="deplasmanSonuc" value="<?php echo $data[0]->deplasmanSonuc;?>" placeholder="">
		</div>
        <div class="form-group col-md-12">
			<label for="inputdescription">saat</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="saat" value="<?php echo $data[0]->saat;?>" placeholder="">
		</div>
        <div class="form-group col-md-12">
			<label for="inputdescription">iddaaKod</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="iddaaKod" value="<?php echo $data[0]->iddaaKod;?>" placeholder="">
		</div>
        <div class="form-group col-md-12">
			<label for="inputdescription">iddaaTur</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="iddaaTur" value="<?php echo $data[0]->iddaaTur;?>" placeholder="">
		</div>

		<input type="hidden" name="id" value="<?php echo $data[0]->id ;?>" >
    </div>
	<div class="row">
		<button  class="btn btn-primary" style="float: right;" onclick="BIP.updateContent('GuessController','update','SaveForm',this);return false;" >Kaydet</button>
	</div>

</form>
