$(document).ready(function () {
	
	locations = Array(
        '#',
        'index.php',
        '#',
		'#',
		'#',
		'#',
        'uruguay/'
    );
    $("#form-select25").change(function () {
        goto = locations[$("#form-select25>option:selected").index()];
        window.location.href = goto;
    })
	
	$('#arg').on('mouseenter', function(){
	$("#fondos").addClass("fondoARG");
	}).on('mouseleave', function(){
	$("#fondos").removeClass("fondoARG");
	})
	
	$('#bol').on('mouseenter', function(){
	$("#fondos").addClass("fondoBOL");
	}).on('mouseleave', function(){
	$("#fondos").removeClass("fondoBOL");
	})
	
	$('#chi').on('mouseenter', function(){
	$("#fondos").addClass("fondoCHI");
	}).on('mouseleave', function(){
	$("#fondos").removeClass("fondoCHI");
	})
	
	$('#par').on('mouseenter', function(){
	$("#fondos").addClass("fondoPAR");
	}).on('mouseleave', function(){
	$("#fondos").removeClass("fondoPAR");
	})
	
	$('#per').on('mouseenter', function(){
	$("#fondos").addClass("fondoPER");
	}).on('mouseleave', function(){
	$("#fondos").removeClass("fondoPER");
	})
	
	$('#uru').on('mouseenter', function(){
	$("#fondos").addClass("fondoURU");
	}).on('mouseleave', function(){
	$("#fondos").removeClass("fondoURU");
	})
	
	
});