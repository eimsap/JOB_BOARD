//  Learn More
$(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
  $(".service-card-details-link").click(function() {
    var $this = $(this);
    $this.tooltip('hide');
    $this.parents('.service-card').siblings().children('.service-card-details-block').hide();
    var $otherDetailLinks = $this.parents('.service-card').siblings().children().children('.service-card-details-link');
    $otherDetailLinks.removeClass('expanded');
    $otherDetailLinks.html("Learn More");
    $otherDetailLinks.attr('data-original-title', 'Learn More');

    var $detailsContent = $this.parents().nextAll(".service-card-details-block").first();
    $detailsContent.slideToggle("fast", function() {
      $this.toggleClass("expanded");

      if ($this.hasClass("expanded")) {
        $this.html("Close");
        $this.attr('data-original-title', '');
      } else {
        $this.html("Learn More");
        $this.attr('data-original-title', 'Learn More');
      }
    });
    return false;
  });

//  Formulaire / Pop Up
var elems = $('.service-card');
elems.on('mouseenter mouseleave', function(e) {
  elems.not(this).stop(true).fadeTo('fast', e.type == 'mouseenter' ? 0.5 : 1);
  });
	$('.open-form').click(function() {
		$('.form-popup').show();
	});
	$('.close-form').click(function() {
		$('.form-popup').hide();
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

//  Formulaire / Bouton
 $("#button1").click(function(){
    $("#adconcern").empty();
    $title = $("#titre1");
    $("#adconcern").append($title);
  });
  $("#button2").click(function(){
    $("#adconcern").empty();
    $title = $("#titre2");
    $("#adconcern").append($title);
  });
  $("#button3").click(function(){
    $("#adconcern").empty();
    $title = $("#titre3");
    $("#adconcern").append($title);
  });
  $("#button4").click(function(){
    $("#adconcern").empty();
    $title = $("#titre4");
    $("#adconcern").append($title);
  });
  $("#button5").click(function(){
    $("#adconcern").empty();
    $title = $("#titre5");
    $("#adconcern").append($title);
  });
});

//  Carousel
$(document).ready(function(){
   var slide =  $('.card')
   $(slide).first().addClass('active-img');
   $(slide).last().addClass('small').addClass('prev');
   $(slide).last().prev('.card').addClass('smaller prevSmall');
   $(slide).first().next('.card').addClass('small next');
   $(slide).first().next('.card').next('.card').addClass('smaller nextSmall');

$('.next-btn').click(function(e){
    e.preventDefault();
    var Active = $('.active-img'), Prev = $('.prev'), Next = $('.next'), SmallPrev = $('.prevSmall'), SmallNext = $('.nextSmall');
    $(Active).addClass('small prev ').removeClass('active-img');
    $(Next).addClass('active-img').removeClass('small next');
    $(Prev).addClass('smaller prevSmall ').removeClass('small prev ');
    $(SmallNext).addClass('small next').removeClass('smaller nextSmall ');
    $(SmallPrev).removeClass('prevSmall').addClass('nextSmall');
});

$('.prev-btn').click(function(e){
    e.preventDefault();
    var Active = $('.active-img'), Prev = $('.prev'), Next = $('.next'), SmallPrev = $('.prevSmall'), SmallNext = $('.nextSmall');
    $(Active).removeClass('active-img').addClass('small next');
    $(Prev).removeClass('small prev').addClass('active-img');
    $(Next).removeClass('small next').addClass('smaller nextSmall');
    $(SmallPrev).addClass('small prev').removeClass('smaller prevSmall');
    $(SmallNext).removeClass('nextSmall').addClass('prevSmall');
});
});
});
//Formulaire
var formContainer = $('#form-container');

bindFormClick();
function bindFormClick(){
  $(formContainer).on('click', function(e) {
    e.preventDefault();
    toggleForm();
    $(this).off();
  });
}

$('#form-close, .form-overlay').click(function(e) {
  e.stopPropagation();
  e.preventDefault();
  toggleForm();
  bindFormClick();
});

function toggleForm(){
  $(formContainer).toggleClass('expand');
  $(formContainer).children().toggleClass('expand');
  $('body').toggleClass('show-form-overlay');
  $('.form-submitted').removeClass('form-submitted');
}

//Form validation
$('form').submit(function() {
  var form = $(this);
  form.find('.form-error').removeClass('form-error');
  var formError = false;
  
  form.find('.input').each(function() {
    if ($(this).val() == '') {
      $(this).addClass('form-error');
      $(this).select();
      formError = true;
      return false;
    }
    else if ($(this).hasClass('email') && !isValidEmail($(this).val())) {
      $(this).addClass('form-error');
      $(this).select();
      formError = true;
      return false;
    }
  });
  
  if (!formError) {
    $('body').addClass('form-submitted');
    $('#form-head').addClass('form-submitted'); 
    setTimeout(function(){
      $(form).trigger("reset");
    }, 1000);
  }
  return false;
});
