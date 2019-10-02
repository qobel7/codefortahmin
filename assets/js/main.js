/**
 * Created by qobel on 23.09.2017.
 */
var rangeSliderSec =  document.getElementById('sliderSec');
var rangeSliderFirst =  document.getElementById('slideFirst');
var creditHiddenVal = null;
var periodHiddenVal = null;
var link = "";
$(document).ready(function(){


	/*$("#slideFirst").slider({ id: "slideFist"});

	 $("#slideFirst").on("slide", function(slideEvt) {
	 $("#sliderTextFirst").val(slideEvt.value);
	 console.log(slideEvt.value)
	 });
	 $("#sliderSec").slider({ id: "sliderSec"});

	 $("#sliderSec").on("slide", function(slideEvt) {
	 $("#sliderTextSecond").val(FormUtil.convertMoney(slideEvt.value));
	 $("#realCredit").val(slideEvt.value);

	 console.log(slideEvt.value)
	 });*/
});
FormUtil={
	changeMounthSlider:function(that){
		rangeSliderFirst.noUiSlider.set(Number($(that).val()));
	},
	routeCredit:function(that){
		var url = $(that).attr("hrefAttr");
		var k = 0 ;
		if($('#insurances').is(":checked"))
			k = 1;
		else
			k = 0;
		window.location.href = url+"#"+creditHiddenVal+"#"+periodHiddenVal+"#"+k;
		//	window.location.href = url+"#"+creditHiddenVal+"#"+periodHiddenVal;
	},
	changeCreditSlider:function(that){
		rangeSliderSec.noUiSlider.set(Number($(that).val()));
	},
	changeCreditSliderUrl:function(){
		if(window.location.hash!="") {
			var values = window.location.hash.substring(1).split("#");
			rangeSliderFirst.noUiSlider.set(Number(values[1]));
			rangeSliderSec.noUiSlider.set(Number(values[0]));
			if(Number(values[2])==1)
				$('#insurances').prop('checked', true);
			else
				$('#insurances').prop('checked', false);
		}
		this.calculateResult();
	},
	clearForm: function () {

	},
	uploadForm: function () {

	},
	saveForm: function (that,reload) {
		var form_id = $(that).attr('data-id');
		var method = $(that).attr('data-method');
		var controller = $(that).attr('data-controller');
		var content = $('#' + form_id).serializeArray();
		var url = '/index.php/' + controller + '/' + method;
		var iframeURL = location.href;
		console.log(content);
		$.ajax({
			url: url,
			dataType: 'text', // what to expect back from the server
			cache: false,
			contentType: false,
			processData: false,
			type: 'post',
			data: {'data': content, 'lang': window.language},
			success: function (data) {
				console.log(data);
				//debugger;
				if(reload)
					location.replace(iframeURL);
				// $('.modal').modal('hide');
			}
		});
	},
	rmz:function (loan,month,percent){if(!loan){loan=0}if(!month){month=0}if(!percent){percent=0}loan=parseFloat(loan);month=parseFloat(month);percent=parseFloat(percent);var interest=((Math.pow((percent/100+1),(1/12))-1)*12)*100;var ppi=function(duration){var ppi=0;var percentages=new Array(0.27279,1.53825,2.57019,3.21027,3.60528,3.86484,4.06014,4.20756,4.32348,4.41861);switch(duration){case duration<7:ppi=percentages[0];break;case duration<13:ppi=percentages[1];break;case duration<19:ppi=percentages[2];break;case duration<25:ppi=percentages[3];break;case duration<31:ppi=percentages[4];break;case duration<37:ppi=percentages[5];break;case duration<43:ppi=percentages[6];break;case duration<49:ppi=percentages[7];break;case duration<55:ppi=percentages[8];break;default:ppi=percentages[9]}return ppi/100};var output={};output.rate=(loan*(interest/1200))/(1-Math.pow(1+(interest/1200),-month));output.cost=(month*output.rate);output.interestCost=output.cost-loan;output.protection=(ppi(month)*month*((loan.rate>=2000)?2000:output.rate))/month;output.rateSecure=output.rate+output.protection;return output}
	,
	calculateResult : function(){
		var values = $("#creditForm").serialize().split("&");
		var creadit = $("#realCredit").val();
		var length = $("#sliderTextFirst").val();
		var interest = Number($("#credit_rate_hidden").val());
		var interest1 = Number($("#credit_rate_hidden1").val());

		creadit = $("#realCredit").val();
		var pays = this.rmz(Number(creadit),Number(length),interest);// creadit*(interest*(Math.pow((1+interest),length))/(Math.pow((1+interest),length)-1));
		var pays1 = this.rmz(Number(creadit),Number(length),interest1);//creadit*(interest1*(Math.pow((1+interest1),length))/(Math.pow((1+interest1),length)-1));
		$(".insurance1").text(this.convertMoney(pays.protection));
		$(".insurance").text(this.convertMoney(pays1.protection));
		$("#insurance1").val(this.convertMoney(pays.protection));
		$("#insurance").val(this.convertMoney(pays1.protection));
		if($('#insurances').is(":checked")){
			pays = pays.rate ;
			pays1 = pays1.rate;
		}else{
			pays1 = pays1.rate;
			pays = pays.rate ;
		}
		var sumPays = pays*length;
		var sumPays1 = pays1*length;


		$("#calculatedResult").val(this.convertMoney(sumPays));
		$("#calculatedResultMonthly").val(this.convertMoney(pays));
		$(".calculatedResult").text(this.convertMoney(sumPays));
		$(".calculatedResultMonthly").text(this.convertMoney(pays));
		$("#calculatedResult1").val(this.convertMoney(sumPays1));
		$("#calculatedResultMonthly1").val(this.convertMoney(pays1));
		$(".calculatedResult1").text(this.convertMoney(sumPays1));
		$(".calculatedResultMonthly1").text(this.convertMoney(pays1));


	},
	openCalculateModal:function(){
		var values = $("#creditForm").serialize().split("&");
		var creadit = $("#realCredit").val();
		var length = $("#sliderTextFirst").val();
		var interest = Number($("#credit_rate_hidden").val());
		var interest1 = Number($("#credit_rate_hidden1").val());
		creadit = $("#realCredit").val();
		if(creadit.length == 0 || length.length == 0 || interest.length == 0 ){
			alert("please choose credity and length");
			return;
		}
		var pays = this.rmz(creadit,length,interest);// creadit*(interest*(Math.pow((1+interest),length))/(Math.pow((1+interest),length)-1));
		var pays1 = this.rmz(creadit,length,interest1);//creadit*(interest1*(Math.pow((1+interest1),length))/(Math.pow((1+interest1),length)-1));
		$("#insurance1").val(this.convertMoney(pays.protection));
		$("#insurance").val(this.convertMoney(pays1.protection));
		if($('#insurances').is(":checked")){
			pays = pays.rate ;
			pays1 = pays1.rate;
		}else{
			pays1 = pays1.rate;
			pays = pays.rate ;
		}
		var sumPays = pays*length;
		var sumPays1 = pays1*length;

		$(".credit").val(this.convertMoney(Number(creadit)));
		$(".credit_period").val(length);
		$(".credit_repay").val(this.convertMoney(sumPays));
		$(".interest_rate").val(interest);

		$(".mouthly_repay").val(this.convertMoney(pays));

		$(".credit_repay1").val(this.convertMoney(sumPays1));
		$(".mouthly_repay1").val(this.convertMoney(pays1));
		$(".interest_rate1").val(interest1);
		//	$(".modalMail").modal("show");
	},
	convertMoney : function(money){
		return (money).toLocaleString('DE-CH', {
			style: 'currency',
			currency: 'CHF',
		});
	}
};
ajaxRequest = {
	init: function (url, data, onSuccess, onError) {
		$.ajax({
			url: url,
			type: 'post',
			data: data,
			success: function (response) {
				// console.log(response);

				onSuccess(response)
			},
			error: function (response) {

				onError(response);
			}
		});
	}
};
///////////////////////////////////////////////////////////////////////*****************************************/////


BIP= {};
BIP.readMode={
	init:function(that){
		this.openModal($(that).parent().children()[2].innerHTML,$(that).parent().children()[1].innerHTML)
	},
	openModal:function(response,modal_header){
		$('.modalContent .modal-body').html(response);
		$('.modalContent .modal-header h1').html(modal_header);

		$('.modalContent').modal('show');
	}
}
BIP.changeContent={
	init:function(button){
		// console.log($(button));
		var methods = $(button).attr('data-method');
		var controller = $(button).attr('data-controller');
		var is_modal = $(button).attr('is-modal');
		var modal_name = $(button).attr('modal-name');
		var modal_header = $(button).attr('modal-header');
		var language = $(button).attr('data-language');
		var base_url = $(button).attr('base_url');
		var data_id = $(button).attr('data-id');
		var url = controller+'/route?page='+methods;
		var modal_url = controller+'/'+methods;
		window.pageName=methods;
		BIP.router.init(methods,url,is_modal,modal_name,language,modal_url,modal_header,data_id);
	}
};
BIP.router = {
	method: 'post',
	url: '',
	modal_url:'',
	is_modal: false,
	modal_name: null,
	that:this,
	language:null,
	data_id:null,
	init: function (methods, url, is_modal,  modal_name,language,modal_url,modal_header,data_id) {
		if (methods == 'post' || methods == null)
			this.method = 'post';
		else
			this.method = 'get';
		this.url = url;
		this.modal_url = modal_url;
		this.is_modal = is_modal;
		this.modal_name=modal_name;
		this.language=language;
		this.data_id = data_id;
		if(is_modal!=undefined && is_modal=='true') {
			console.log(is_modal);
			this.openModal(modal_header);
		} else{
			this.changeIframe();
		}
	},
	openModal:function(modal_header){
		var modal = this.modal_name;
		var data=null;
		if(this.data_id!=undefined)
			data = {"id":this.data_id};
		$.ajax({
			url:this.modal_url,
			type:'post',
			data:data,
			success:function(response){
				$('.'+modal+' .modal-body').html(response);
				$('.'+modal+' .modal-header h1').html(modal_header);
				$('.'+modal).modal('show');
			}
		});
	},
	changeIframe: function () {
		var status = BIP.pageStatus.pageStatusCheck();
		if(status == 'true') {
			var iframelive = $('iframe.live');
			var iframeedit = $('iframe.edit');
			/* console.log(iframelive.attr('src'));*/
			iframelive.attr('src', this.url + '&language='+this.language+'&is_admin=false');
			/*console.log(iframeedit.attr('src'));*/
			iframeedit.attr('src', this.url + '&language='+this.language+'&is_admin=1');
		}else{
			$('.save-alert-modal').modal('show');
		}
	}
};
$('.menu_item').click(function(){
	BIP.changeContent.init(this);
});
BIP.pageStatus={
	pageStatusCheck:function(){
		var inside = $('.edit').contents();
		var child = inside.children().children();
		console.log(child[1]);
		return $(child[1]).attr('data-status');
	},
	setPageStatus:function(tf){
		//debugger;
		var inside = $('.edit').contents();
		var child = inside.children().children();
		console.log(child[1]);
		return $(child[1]).attr('data-status',tf);
	},
	saveData:function(){
		var inside = $('.edit').contents();
		var data = inside.find('.page-data-value').attr('data-value');
		var url = '/index.php/'+window.pageName+'/saveData';

		var that = this;
		$.ajax({
			url:url,
			type:'post',
			data:{'data':data},
			success:function(response){
				console.log(response);
				that.setPageStatus(true);
			}
		});
	},
	dontSave:function(status){
		BIP.pageStatus.setPageStatus(status);
		BIP.router.changeIframe();
		$('.save-alert-modal').modal('hide');
	}
};
BIP.sendLive={
	init:function(page,lang){
		var status = BIP.pageStatus.pageStatusCheck();
		if(status != 'true') {
			$('.save-alert-modal').modal('show');
		}else{
			var url = '/index.php/'+page+'/sendLive';
			$.ajax({
				url:url,
				type:'post',
				data:{'lang':lang},
				success:function(response){

					console.log(response);
					// debugger;
					toastr.info('Sending ...');
					setTimeout(function(){
						BIP.reloadIframes.init(page);
						$('.publish-side').removeClass('open');
						$('.publish-page').removeClass('open');
					},2000);
				}
			});
		}
	}/*,
	 sendLiveWithLanguage:function(lang){
	 var status = BIP.pageStatus.pageStatusCheck();
	 if(status != 'true') {
	 $('.save-alert-modal').modal('show');
	 }else{
	 var url = '/index.php/page_components/sendLiveWithLanguage';
	 $.ajax({
	 url:url,
	 type:'post',
	 data:{'lang':lang},
	 success:function(response){
	 console.log(response);
	 // debugger;
	 BIP.reloadIframes.init(page);
	 $('.publish-side').removeClass('open');
	 $('.publish-page').removeClass('open');
	 }
	 });
	 }
	 }*/
};
BIP.reloadIframes={
	init:function(page){
		if(page=='page_components')
			page='home';
		var iframelive = $('iframe.live');
		var iframeedit = $('iframe.edit');
		var url = window.location.origin+'/index.php/router/route?page=home';
		iframelive.attr('src', url + '&language=en&is_admin=false');
		iframeedit.attr('src', url + '&language=en&is_admin=1');
	}
};
BIP.deleteContent = function (controler,func,id,that){
	var formData = new FormData();
	formData.append("id",id);
	var url = link+controler+"/"+func;
	succesFunc = function(args){
		alertify.success('Content  deleted');
		that.parentElement.parentElement.remove();
	}
	BIP.ajaxRequest.init(url,formData,succesFunc);
}
BIP.saveContent = function (controler,func,formid,that){
	var data =$("#"+formid).serializeArray();
	var formData = new FormData();
	for(var i = 0;i<data.length;i++){
		formData.append(data[i].name,data[i].value)
	}

	if($("input[type='file']").length > 0){

		for(var i = 0;i < $("input[type='file']").length; i++){
			$($("input[type='file']")[i]).prop("files")[0]
			formData.append($($("input[type='file']")[i]).attr("name"),$($("input[type='file']")[i]).prop("files")[0]);
		}
	}
	var url = controler+"/"+func;
	succesFunc = function(args){
		alertify.success('Content  added');
		alertify.confirm("Content  added. İf you see content in here please reflesh page",
			function(){
				window.location.reload();
				alertify.success('Ok');
			},
			function(){
				alertify.error('Cancel');
			});
	}
	BIP.ajaxRequest.init(url,formData,succesFunc);
};
BIP.uploadIM = function (that) {
	var data_method =$(that).attr('data-method');
	var data_controller = $(that).attr('data-controller');

	var formUrl = link+data_controller+"/"+data_method;
	var file_data =$(that).prop('files')[0];
	var form_data = new FormData();
	if($(that).attr("id")){
		form_data.append("id",$(that).attr("id"));
	}
	form_data.append($(that).attr('name'), file_data);
	$.ajax({
		url: formUrl, // point to server-side controller method
		dataType: 'text', // what to expect back from the server
		cache: false,
		contentType: false,
		processData: false,
		data: form_data,
		type: 'post',
		success: function (response) {
			if(JSON.parse(response).status == true)
				alertify.success('Dosya güncellendi');
			else
				alertify.error('Dosya güncellenemedi');
		},
		error: function (response) {
			alertify.error('Error'); // display error response from the server
		}
	});
};
BIP.updateContent = function (controler,func,formid,that){
	var data = $("#"+formid).serializeArray();

	var url = link+controler+"/"+func;
	var formData = new FormData();
	for(var i = 0;i<data.length;i++){
		formData.append(data[i].name,data[i].value)
	}
	succesFunc = function(args){
		if(args && args != ""){
			args = JSON.parse(args);
			if(args.status == false){
				if(args.errorMessage)
					alertify.error(args.errorMessage);
				else
					alertify.error("Bir sorun oluştu");
				return;
			}
		}
		alertify.success('Content  updated');
		alertify.confirm("Content  updated. İf you see content in here please reflesh page",
			function(){
				window.location.reload();
				alertify.success('Ok');
			},
			function(){
				alertify.error('Cancel');
			});
	}
	BIP.ajaxRequest.init(url,formData,succesFunc);

}
BIP.changeLanguage=function(that){
	var lang = $(that).attr("value");
	onSuccess=function(response){
		try{
			response = JSON.parse(response);
			if(response.ref!="error")
				window.location.reload();
			else
				alertify
					.alert("Language not change", function(){
						alertify.message('OK');
					});
		}
		catch(e){
			console.log(e);
			return;
		}


	};
	BIP.ajaxRequest.init("home/changeLanguage",{"lang":lang},onSuccess);
}
BIP.ajaxRequest={
	init:function(url,data,onSuccess){
		$.ajax({
			url:url,
			dataType: 'text', // what to expect back from the server
			cache: false,
			contentType: false,
			processData: false,
			data: data,
			type: 'post',
			success:function(response){
				//   debugger;
				onSuccess(response,data);
			},
			error: function (xhr, ajaxOptions, thrownError) {
				alertify
					.alert("İşlem sırasında hata oluştu . İşlem gerçekleştirilemedi", function(){
						alertify.message('OK');
					});
			}
		});
	},
	changeMetaTagContent:function(response,data){
		var div = $('.metatagcontent');
		div.html($(response).children());
		var select = $('.meta-form-select-page');
		var page_option = $('option[value="'+data.page+'"]');
		page_option.attr('selected','true');
	},
	ajaxForm:function(url,succesfunc){
		$("form#" + formid).submit(function(){
			var  formData=new FormData(this);
		});
		$.post($(this).attr("action"),
			formData,function(data){
				alert(data);
			})
		return false;
	}
};

var Upload = function (file,method,controller) {
	this.file = file;
	this.method = method;
	this.controller = controller;
};

Upload.prototype.getType = function() {
	return this.file.type;
};
Upload.prototype.getSize = function() {
	return this.file.size;
};
Upload.prototype.getName = function() {
	return this.file.name;
};
Upload.prototype.doUpload = function () {
	var that = this;
	var formData = new FormData();

	// add assoc key values, this will be posts values
	formData.append("file", this.file, this.getName());
	formData.append("upload_file", true);

	$.ajax({
		type: "POST",
		url: link+this.controller+"/"+this.method,
		xhr: function () {
			var myXhr = $.ajaxSettings.xhr();
			if (myXhr.upload) {
				myXhr.upload.addEventListener('progress', that.progressHandling, false);
			}
			return myXhr;
		},
		success: function (data) {
			// your callback here
			debugger;
			console.log(data)
		},
		error: function (error) {
			// handle error
		},
		async: true,
		data: formData,
		cache: false,
		contentType: false,
		processData: false,
		timeout: 60000
	});
};

Upload.prototype.progressHandling = function (event) {
	var percent = 0;
	var position = event.loaded || event.position;
	var total = event.total;
	var progress_bar_id = "#progress-wrp";
	if (event.lengthComputable) {
		percent = Math.ceil(position / total * 100);
	}
	// update progressbars classes so it fits your code
	$(progress_bar_id + " .progress-bar").css("width", +percent + "%");
	$(progress_bar_id + " .status").text(percent + "%");
};
