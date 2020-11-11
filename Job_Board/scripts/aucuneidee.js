$(document).ready(function () {
  $("#job-board-area .button-wrapper button").click(function(){
    $("#job-board-area .button-wrapper button").removeClass("active");
    $(this).addClass("active");
  });
  $("#job-board-area .button-wrapper #view-job").click(function(){
    $("#job-board-area #post-job-content").fadeOut(0);
    $("#job-board-area #view-job-content").fadeIn(500);
  });
  $("#job-board-area .button-wrapper #post-job").click(function(){
    $("#job-board-area #view-job-content").fadeOut(0);
    $("#job-board-area #post-job-content").fadeIn(500);
  });
});

/** POP UP **/
$(document).ready(function() {

	$('.open-form').click(function() {
		$('.form-popup').show();
		$('#view-job-content').hide();
	});

	$('.close-form').click(function() {
		$('.form-popup').hide();
		$('#view-job-content').show();
	});
  
	$('.reset-form').click(function() {
		$('.success-message').show();
    $('#my-form').trigger( 'reset' );

    setTimeout(function() {
	    $('.success-message').hide()
    }, 1500);
	});

	$(document).mouseup(function(e) {
		var container = $(".form-wrapper");
		var form = $(".form-popup");

		if (!container.is(e.target) && container.has(e.target).length === 0) {
			form.hide();
		}
	});
});

$('#disconnect').click(function(){
    location.replace('ApiCRUD/administration/disconnect.php');
})