<div class="form-row">

	<div class="form-group col-md-12">
		<label for="inputdescription">Resim</label>
		<input type="file" id="<?php echo $advertisement[0]->id ;?>" onchange="BIP.uploadIM(this)" class="form-control" multiple="multiple"
			   data-method="UpdateAdvertisementImage" data-controller="AdvertisementController" class="custom-file-input"
			   name="image" placeholder="resim">
	</div>
</div>
<form enctype="multipart/form-data" id="adsetiementSaveForm">


    <div class="form-row">
		<div class="form-group col-md-12">
			<label for="inputKey">Kategori</label>
			<?php /*print_r($advertisement[0]->version)*/?><!--
			--><?php /*print_r($categories)*/?>
			<select " name="version" id="exampleFormControlSelect1">
				<?php foreach ($categories as $item) {?>
				<option value="<?php echo $item->id ?>"
				 <?php echo $advertisement[0]->version == $item->id ? "selected='selected'":""?> ><?php echo $item->key ?></option>
				<?php } ?>
			</select>
		</div>
        <div class="form-group col-md-12">
            <label for="inputKey">Başlık</label>
            <input type="text" class="form-control" id="inputKey" name="header" value="<?php echo $advertisement[0]->header ;?>" placeholder="Anahtar sözcük">
        </div>
        <div class="form-group col-md-12">
            <label for="inputdescription">Açıklama</label>
            <!--<input type="text" class="form-control" id="inputdescription" name="description" placeholder="açıklama">-->
			<textarea name="description" class="form-control" > <?php echo $advertisement[0]->description ;?> </textarea>
        </div>


		<input type="hidden" name="id" value="<?php echo $advertisement[0]->id ;?>" >
    </div>
	<div class="row">
		<button  class="btn btn-primary" style="float: right;" onclick="BIP.updateContent('AdvertisementController','updateAdvertisement','adsetiementSaveForm',this);return false;" >Kaydet</button>
	</div>

</form>
