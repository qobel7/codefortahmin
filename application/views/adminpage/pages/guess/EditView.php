

<form enctype="multipart/form-data" id="SaveForm">

    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="inputKey">Maç Saati</label>
            <input type="text" class="form-control" id="inputKey" name="match_time" value="<?php echo $data[0]->match_time ;?>" placeholder="">
        </div>
        <div class="form-group col-md-12">
            <label for="inputdescription">Açıklama</label>
            <!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="description" value="<?php echo $data[0]->description ;?>" placeholder="">
        </div>
		<div class="form-group col-md-12">
			<label for="inputdescription">Taraflar</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="sides" value="<?php echo $data[0]->sides;?>" placeholder="">
		</div>
		<div class="form-group col-md-12">
			<label for="inputdescription">Tahmin Yüzdesi</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="guess_percent" value="<?php echo $data[0]->guess_percent;?>" placeholder="">
		</div>
		<div class="form-group col-md-12">
			<label for="inputdescription">Tahmin</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="guess" value="<?php echo $data[0]->guess;?>" placeholder="">
		</div>
		<div class="form-group col-md-12">
			<label for="inputdescription">Tahmin Oranı</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="guess_state" value="<?php echo $data[0]->guess_state;?>" placeholder="">
		</div>
		<div class="form-group col-md-12">
			<label for="inputdescription">Kredi</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="credit" value="<?php echo $data[0]->credit;?>" placeholder="">
		</div>
		<div class="form-group col-md-12">
			<label for="inputdescription">Durum</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="state" value="<?php echo $data[0]->state;?>" placeholder="">
		</div>
		<div class="form-group col-md-12">
			<label for="inputdescription">Maç Kodu</label>
			<!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<input type="text" class="form-control" id="inputKey" name="match_code" value="<?php echo $data[0]->match_code;?>" placeholder="">
		</div>

		<input type="hidden" name="id" value="<?php echo $data[0]->id ;?>" >
    </div>
	<div class="row">
		<button  class="btn btn-primary" style="float: right;" onclick="BIP.updateContent('GuessController','update','SaveForm',this);return false;" >Kaydet</button>
	</div>

</form>
