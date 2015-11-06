$(document).ready(function() {

    $('.flag-link').click(function(){
        var target = $(this).data("target");
        $('.content_group').hide();
      	$('#info-'+target).show();
      	$('#img-'+target).show();
      	$('#map-'+target).show();
      	return false;
    });

});