
<form enctype="multipart/form-data" id="adsetiementSaveForm">

    <div class="form-row">

        <div class="form-group col-md-12">
            <label for="inputdescription">evTakim</label>
            <!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
            <input type="text" class="form-control" id="inputKey" name="evTakim"  placeholder="">
        </div>
        <div class="form-group col-md-12">
            <label for="inputdescription">evtakimen</label>
            <!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
            <input type="text" class="form-control" id="inputKey" name="evtakimen"  placeholder="">
        </div>
        <div class="form-group col-md-12">
            <label for="inputdescription">deplasmanTakim</label>
            <!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
            <input type="text" class="form-control" id="inputKey" name="deplasmanTakim"  placeholder="">
        </div>
        <div class="form-group col-md-12">
            <label for="inputdescription">deplasmanTakimEN</label>
            <!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
            <input type="text" class="form-control" id="inputKey" name="deplasmanTakimEN"  placeholder="">
        </div>
        <div class="form-group col-md-12">
            <label for="inputdescription">tahmin</label>
            <!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
            <input type="text" class="form-control" id="inputKey" name="tahmin"  placeholder="">
        </div>
        <div class="form-group col-md-12">
            <label for="inputdescription">tahminEN</label>
            <!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
            <input type="text" class="form-control" id="inputKey" name="tahminEN"  placeholder="">
        </div>
        <div class="form-group col-md-12">
            <label for="inputdescription">oran</label>
            <!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
            <input type="text" class="form-control" id="inputKey" name="oran"  placeholder="">
        </div>
        <div class="form-group col-md-12">
            <label for="inputdescription">evSonuc</label>
            <!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
            <input type="text" class="form-control" id="inputKey" name="evSonuc"  placeholder="">
        </div>
        <div class="form-group col-md-12">
            <label for="inputdescription">deplasmanSonuc</label>
            <!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
            <input type="text" class="form-control" id="inputKey" name="deplasmanSonuc"  placeholder="">
        </div>
        <div class="form-group col-md-12">
            <label for="inputdescription">saat</label>
            <!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
            <input type="text" class="form-control" id="inputKey" name="saat"  placeholder="">
        </div>
        <div class="form-group col-md-12">
            <label for="inputdescription">iddaaKod</label>
            <!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
            <input type="text" class="form-control" id="inputKey" name="iddaaKod"  placeholder="">
        </div>
        <div class="form-group col-md-12">
            <label for="inputdescription">iddaaTur</label>
            <!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
            <input type="text" class="form-control" id="inputKey" name="iddaaTur"  placeholder="">
        </div>

    </div>
	<div class="row">
		<button  class="btn btn-primary" style="float: right;" onclick="BIP.saveContent('GuessController','add','adsetiementSaveForm',this);return false;" >Kaydet</button>
	</div>

</form>
