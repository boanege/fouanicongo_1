$(document).ready.(function(){
	$(".col-md-4, .card mb-4 box-shadow, .card-body, .card-text").hide();

	$(".btn btn-sm btn-outline-danger").click(function(){
		$(this).parent().next().slideToggle().css("color", "green");

		if($(this).html() == "view"){
			$(this).html("cacher la reponse");
		}
		else{
			$(this).html("voir la reponse");
		}

	});

});