// Path

// Vars
$('#searchSteps').owlCarousel({
	items: 1,
	animateOut: 'bounceOutDown',
	animateIn: 'bounceInDown',
	smartSpeed: 450,
	nav: false,
	dots: false,
	autoplay: false,
	mouseDrag: false,
	touchDrag: false,
	startPosition: 'URLHash',
});
function activeState(name){
	return '<span>'+name+'</span><span href="#" class="chng-link">Изменить</span>';
}
function clearChain(par){
	switch (par) {
		case '#0':
			$('.s-brend').html("Производитель").attr("data-state","cur");;
			$('.s-device').html("Устройство");
			$('.s-type').html("Тип");
			$('.s-model').html("Модель");
			break;
		case '#1':
			$('.s-device').html("Устройство").attr("data-state","cur");;
			$('.s-type').html("Тип");
			$('.s-model').html("Модель");
			break;
		case '#2':
			$('.s-type').html("Тип").attr("data-state","cur");;
			$('.s-model').html("Модель");
			break;
		case '#3':
			$('.s-model').html("Модель").attr("data-state","cur");
			break;
	}
}
var pos = 0;
function stepCounter(posthis){
	pos = posthis.attr("href").slice(-1);
}
$('.search-step').on("click", function(){
	if ($(this).attr("href").slice(-1) <= pos){
		clearChain($(this).attr("href"));
		$('.brend-content').show();
		$('#searchResult').hide();
	} else {
		event.preventDefault();
	}
});
$("#searchSteps .models-list a").on("click", function(){
	$('.s-model').html(activeState($(this).html()));
	$('#searchResult').show();
	$('.brend-content').hide();
});
$("#searchSteps .selectType a").on("click", function(){
	$('.s-type').html(activeState($(this).find('.device-name').html()));
	stepCounter($(this));
});
$("#searchSteps .selectDevice a").on("click", function(){
	$('.s-device').html(activeState($(this).find('.device-name').html()));
	stepCounter($(this));
});
$("#searchSteps .brend-item a").on("click", function(){
	$('.s-brend').html(activeState($(this).attr('data-name')));
	stepCounter($(this));
});
var wrapper    = $("#site-wrapper"),
    menu       = $(".menu-mobile"),
    menuLinks  = $(".menu-mobile ul li a"),
    toggle     = $(".nav-toggle"),
    toggleIcon = $(".nav-toggle span");

function toggleThatNav() {
  if (menu.hasClass("show-nav")) {
    if (!Modernizr.csstransforms) {
      menu.removeClass("show-nav");
      toggle.removeClass("show-nav");
      menu.animate({
        right: "-=300"
      }, 500);
      toggle.animate({
        right: "-=300"
      }, 500);
    } else {
      menu.removeClass("show-nav");
      toggle.removeClass("show-nav");
    }

  } else {
    if (!Modernizr.csstransforms) {
      menu.addClass("show-nav");
      toggle.addClass("show-nav");
      menu.css("right", "0px");
      toggle.css("right", "330px");
    } else {
      menu.addClass("show-nav");
      toggle.addClass("show-nav");
    }
  }
}

function changeToggleClass() {
  toggleIcon.toggleClass("fa-times");
  toggleIcon.toggleClass("fa-bars");
}
function overlay() {
  $('.menu-overlay').toggleClass("show");
  $('.menu-overlay').toggleClass("hidden");
}
$(function() {
  toggle.on("click", function(e) {
    e.stopPropagation();
    e.preventDefault();
    toggleThatNav();
    changeToggleClass();
      overlay();
  });
    $('.menu-overlay').on("click", function(e) {
    e.stopPropagation();
    e.preventDefault();
    toggleThatNav();
    changeToggleClass();
      overlay();
  });

    // Keyboard Esc event support
  $(document).keyup(function(e) {
    if (e.keyCode == 27) {
      if (menu.hasClass("show-nav")) {
        if (!Modernizr.csstransforms) {
          menu.removeClass("show-nav");
          toggle.removeClass("show-nav");
          menu.css("right", "-300px");
          toggle.css("right", "30px");
          changeToggleClass();
            overlay();
        } else {
          menu.removeClass("show-nav");
          toggle.removeClass("show-nav");
          changeToggleClass();
            overlay();
        }
      }
    }
  });
});
$(function() {
    $('.adv-btn').on("click", function(e){
        $('.simple').css('display','none');
        $('.advanced').css('display','inline-block');
    });
    $('.sml-btn').on("click", function(e){
        $('.advanced').css('display','none');
        $('.simple').css('display','inline-block');
    });
});
$(document).ready(function(){
    var cost1 = $('.col-1 .cost-item span').text().replace(' ', '').replace('руб.', '');
    var econ1 = $('.col-1 .econ-item span').text().replace(' ', '').replace('руб.', '');
    var summ = parseInt(cost1) + parseInt(econ1);
    var heig1 = (cost1/summ*100).toFixed(2);
    var heig2 = (econ1/summ*100).toFixed(2);
    if (heig1<20) {
        heig1=27;
        heig2=73;
    }
    $('.col-1 .cost-item').css('height', heig1+'%');
    $('.col-1 .econ-item').css('height', heig2+'%');

    var cost2 = $('.col-2 .cost-item span').text().replace(' ', '').replace('руб.', '');
    var econ2 = $('.col-2 .econ-item span').text().replace(' ', '').replace('руб.', '');
    var summ = parseInt(cost2) + parseInt(econ2);
    var heig3 = (cost2/summ*100).toFixed(2);
    var heig4 = (econ2/summ*100).toFixed(2);
    $('.col-2 .cost-item').css('height', heig3+'%');
    $('.col-2 .econ-item').css('height', heig4+'%');

    var cost3 = $('.col-3 .cost-item span').text().replace(' ', '').replace('руб.', '');
    var econ3 = $('.col-3 .econ-item span').text().replace(' ', '').replace('руб.', '');
    var summ = parseInt(cost3) + parseInt(econ3);
    var heig5 = (cost3/summ*100).toFixed(2);
    var heig6 = (econ3/summ*100).toFixed(2);
    $('.col-3 .cost-item').css('height', heig5+'%');
    $('.col-3 .econ-item').css('height', heig6+'%');
});

var inputs = document.querySelectorAll( '.inputfile' );
Array.prototype.forEach.call( inputs, function( input )
{
	var label	 = input.nextElementSibling,
		labelVal = label.innerHTML;

	input.addEventListener( 'change', function( e )
	{
		var fileName = '';
		if( this.files && this.files.length > 1 )
			fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
		else
			fileName = e.target.value.split( '\\' ).pop();

		if( fileName )
			label.querySelector( 'span' ).innerHTML = fileName;
		else
			label.innerHTML = labelVal;
	});
});

$('.mobile-menu-title').on("click", function(e) {
    $('.mobile-menu').toggleClass("menu-active", 1000);
    $('.mobile-menu').toggleClass("menu-hidden",  'slow', "easeOutSine");
});
