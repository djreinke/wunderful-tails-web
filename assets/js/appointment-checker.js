var errors = false;

var requiredFields = "#make-appointment > .form-group > input[required]";
$( requiredFields ).blur(function (){
	validateInput( $(this) );
});
$( "#make-appointment-submit" ).click(function() {
  $( requiredFields ).each(function( index ) {
  	validateInput( $(this) );
  });
  if(errors){
  	event.preventDefault();
  	$('html, body').animate({
    	scrollTop: $("#make-appointment").offset().top
	}, 300);
  }
  else{
  	validatePolicyProcedures( $('#policies-procedures-checkbox') );
  }
});

function validateInput( el ){
	if( !$( el ).val() ){
		if( !$( el ).parents('div.form-group').hasClass('has-error') ){
  			$(el).parents('div.form-group').addClass('has-error'); 
  			$(el).after( "<span class='help-block'>Required</span>" );
  			errors = true;
  		}
  	}
  	else{
  		$(el).parents('div.form-group').removeClass('has-error');
  		$(el).parents('div.form-group').children("span.help-block").remove();
  		errors = false;
  	}
}
function validatePolicyProcedures( el ){
	if( !$(el).is(':checked') ){
		$(el).parents('label').parents('div.form-group').addClass('has-error');
		errors = true;
		event.preventDefault();
		$('#policies-procedures').modal('show');
	}
}