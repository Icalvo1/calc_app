$(document).ready(function(){
var princ = 0;
var years = 0;
var rate = 0;
var cycle = 0;	
	
	
	$( "#principal" ).focus(function() {
  var princ = $( this ).val();
  console.log(princ);
});	
	$( "#principal" ).focusout(function() {
  var princ = $( this ).val();
  console.log(princ);
});
	$( "#years" ).focus(function() {
  var years = $( this ).val();
  console.log(years);
});	
	$( "#years" ).focusout(function() {
  var years = $( this ).val();
  console.log(years);
});
	$( "#int-rate" ).focus(function() {
  var rate = $( this ).val();
  console.log(rate);
});	
	$( "#int-rate" ).focusout(function() {
  var rate = $( this ).val();
  console.log(rate);
});

	$( "#cycles" ).focus(function() {
	var cycle = $( this ).val();
	console.log(cycle)
});

	$( "#cycles" ).focusout(function() {	
	var cycle = $( this ).val();
  	console.log(cycle)
});


$("#button").click(function(event){
		event.preventDefault();
		var $principal = parseFloat($("#principal").val());
		var $years = parseFloat($("#years").val());
		var $intrate = parseFloat(($("#int-rate").val())/100);
		var $cycles = parseFloat($("#cycles").val());
		//var $answer = $principal * (1 + $intrate/$cycles);
		var $ansfinal = parseInt(Math.pow($principal * (1 + $intrate/$cycles), ($cycles * $years)));
		$("<div>").append($ansfinal).appendTo('#append');
	}); 
$("#clear").click(function(event){
		event.preventDefault();
		$("#append").empty();

});

	
	

});