$(function() {
	$('#barradenavegacao ul li a[href="' + document.body.getAttribute("id") + '.php"]').parent().addClass('active');
	$(".chosen-select").chosen();
	$.fn.editable.defaults.mode = 'inline';
});

$(document).ready(function() {
        $('.editable').editable({
			pk: 1,
			params: function(params) {
						var row = $(this).parent().parent();

						params.room = $(':nth-child(6) a', row).html();
						params.date = row.parent().attr('id');
						params.startTime = $(':nth-child(4) a', row).html();
						params.endTime = $(':nth-child(5) a', row).html();

						return params;
					}
		});
		$('a[data-name="type"]').editable('option', 'source', 'ax/scheduleAllowedTypes.php');
        $('a[data-name="speaker"]').editable('option', 'source', 'ax/speakersNames.php');
        $(".tablesorter").tablesorter();
    }
);

function PreviewImage() {
	var oFReader = new FileReader();
	oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
	oFReader.onload = function (oFREvent) {
		document.getElementById("uploadPreview").src = oFREvent.target.result;
	};
};

function PreviewRegisterImage() {
	var oFReader = new FileReader();
	oFReader.readAsDataURL(document.getElementById("uploadRegisterImage").files[0]);
	oFReader.onload = function (oFREvent) {
		document.getElementById("uploadRegisterPreview").src = oFREvent.target.result;
	};
};

var loading_gif = "<img src='img/loading.gif' alt='loading'/>";
var infoPanel_url = "ax/infoempresa.php";
var editModal_url = "ax/editarempresa.php";
var editContributionModal_url = "ax/editarpatrocinio.php";
var infoContributionPanel_url = "ax/infopatrocinio.php";
var registarModal_url = "comp/registarempresa.php";

function load_panel(nif){

	var ajax_load = "<img src='img/loading.gif' alt='loading'/>";

	$("#gestaoempresas")
		.html(loading_gif)
		.load(infoPanel_url,{nif: nif});
    
    $("#gestaopatrocinios")
		.html(loading_gif)
		.load(infoContributionPanel_url,{nif: nif});
		
	$("#editarpopup")
        .html(loading_gif)
        .load(editModal_url, {nif: nif});
    
    $("#editarpatrociniopopup") 
         .html(loading_gif)
        .load(editContributionModal_url, {nif: nif});
}

function savechanges() {
	$("#editForm").ajaxForm({
		error: showError,
		success: showResponse
	}).submit();
	$('#editResponse').hide();
}

function savechangesregister() {

	$("#registerForm").ajaxForm({error: showErrorRegister,success: showResponseRegister}).submit();
	$('#registerResponse').hide();
}


function registarempresa(){
		$("#editarpopup")
			.load(registarModal_url);
}

function showResponse(responseText, statusText, xhr, $form)  {
	var json_response = jQuery.parseJSON(responseText);
	$('#myModal').modal('hide');
    
    $('#contributionModal').modal('hide');
	
	$("#gestaoempresas")
		.html(loading_gif)
		.load(infoPanel_url,{nif: json_response.nif});
    
    $("#gestaopatrocinios")
    	.html(loading_gif)
		.load(infoContributionPanel_url,{nif: json_response.nif});
    
	$('#listaempresas_chosen > a.chosen-single > span')
        .html(json_response.name);
    
     $("#editarpatrociniopopup") 
        .html(loading_gif)
        .load(editContributionModal_url, {nif: json_response.nif});
}

function showResponseRegister(responseText, statusText, xhr, $form)  {

	var json_response = jQuery.parseJSON(responseText);

	$('#myModal2').modal('hide');
	
	$("#gestaoempresas")
		.html(loading_gif)
		.load(infoPanel_url,{nif: json_response.nif});
	$('#listaempresas_chosen > a.chosen-single > span').html(json_response.name);
}

function savechangesRegisterCont(){
	$("#registerForm").ajaxForm({
		error: showError,
		success: showResponseRegisterContributor
	}).submit();
	$('#registerResponse').hide();
}


function showResponseRegisterContributor(responseText, statusText, xhr, $form)  {
	location.reload(true);
}

// Só tenho a certeza do primeiro parametero ser o xhr,
// de resto não sei quantos recebe ou quais são.
function showError(xhr, errMsg, status)  {
	var editResponse = $('#editResponse');

	editResponse.html(xhr.responseText);
	editResponse.show();
}

function showErrorRegister(xhr, errMsg, status)  {
	var registerResponse = $('#registerResponse');

	registerResponse.html(xhr.responseText);
	registerResponse.show();
}