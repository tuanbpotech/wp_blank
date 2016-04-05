/* ************************ */
/* Theme name  : Brave      */
/* Author name : Ashok      */
/* ************************ */


jQuery(document).ready(function($){

	/* ****************** */
	/* Tooltips & Popover */
	/* ****************** */
	$(".b-tooltip").tooltip();

	$(".b-popover").popover();
	
	/* ************** */
	/* Magnific Popup */
	/* ************** */
	$('.lightbox').magnificPopup({type:'image'});

	var hidden = true;
	$(".b-dropdown").click(function(e){
		e.preventDefault();
		if (hidden){
           $(this).next('.b-dropdown-block').slideToggle(400, function(){hidden = false;});
      }
	}); 
	$('html').click(function() {
        if (!hidden) {
            $('.b-dropdown-block').slideUp();
            hidden=true;
        }
   });
   $('.b-dropdown-block').click(function(event) {
        event.stopPropagation();
   }); 
	
	/* Owl carousel */
	$(".owl-carousel").owlCarousel({
		slideSpeed : 500,
		rewindSpeed : 1000,
		mouseDrag : true,
		stopOnHover : true
	});
	/* Own navigation */
	$(".owl-nav-prev").click(function(){
		$(this).parent().next(".owl-carousel").trigger('owl.prev');
	});
	$(".owl-nav-next").click(function(){
		$(this).parent().next(".owl-carousel").trigger('owl.next');
	});

	/* ************* */
	/* Scroll to top */
	/* ************* */

	$(window).scroll(function(){
		if ($(this).scrollTop() > 200) {
			$('.totop').fadeIn();
		} else {
			$('.totop').fadeOut();
		}
	});
	$(".totop a").click(function(e) {
		e.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, "slow");
		return false;
	});


	/* *************** */
	/* Navigation menu */
	/* *************** */

	$.fn.menumaker = function(options) {
      
    var cssmenu = $(this), settings = $.extend({
        title: "Menu",
        format: "dropdown",
        sticky: false
      }, options);

      return this.each(function() {
		
		cssmenu.prepend('<div id="menu-button">' + settings.title + '</div>');
		$(this).find("#menu-button").on('click', function(){
		  $(this).toggleClass('menu-opened');
		  var mainmenu = $(this).next('ul');
		  if (mainmenu.hasClass('open')) { 
			mainmenu.slideUp().removeClass('open');
		  }
		  else {
			mainmenu.slideDown().addClass('open');
			if (settings.format === "dropdown") {
			  mainmenu.find('ul').slideDown();
			}
		  }
		});
		
		cssmenu.find('li ul').parent().addClass('has-sub');

		multiTg = function() {
		  cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
		  cssmenu.find('.submenu-button').on('click', function() {
			$(this).toggleClass('submenu-opened');
			if ($(this).siblings('ul').hasClass('open')) {
			  $(this).siblings('ul').removeClass('open').slideUp();
			}
			else {
			  $(this).siblings('ul').addClass('open').slideDown();
			}
		  });
		};

		if (settings.format === 'multitoggle') multiTg();
		else cssmenu.addClass('dropdown');
		
		
      });
	};

	$(".navy").menumaker({
		title: "Menu",
		format: "multitoggle"
	});

	// AUDIO
	var audio;

	//Hide Pause
	$('#pause').hide();

	initAudio($('#playlist li:first-child'));

	function initAudio(element){
		var song = element.attr('song');
		var title = element.text();
		var cover = element.attr('cover');
		var artist = element.attr('artist');
		
		//Create audio object
		audio = new Audio(song);
		
		//Insert audio info
		$('.artist').text(artist);
		$('.title').text(title);
		
		//Insert song cover
		$('img.cover').attr('src','img/audio/'+cover);
		
		$('#playlist li').removeClass('active');
		element.addClass('active');
	}

	//Play button
	$('#play').click(function(){
		audio.play();
		$('#play').hide();
		$('#pause').show();
		showDuration();
	});

	//Pause button
	$('#pause').click(function(){
		audio.pause();
		$('#play').show();
		$('#pause').hide();
	});

	//Stop button
	$('#stop').click(function(){
		audio.pause();
		audio.currentTime = 0;
	});

	//Next button
	$('#next').click(function(){
		audio.pause();
		var next = $('#playlist li.active').next();
		if(next.length == 0){
			next = $('#playlist li:first-child');
		}
		initAudio(next);
		audio.play();
		showDuration();
	});

	//Prev button
	$('#prev').click(function(){
		audio.pause();
		var prev = $('#playlist li.active').prev();
		if(prev.length == 0){
			prev = $('#playlist li:last-child');
		}
		initAudio(prev);
		audio.play();
		showDuration();
	});

	//Playlist song click
	$('#playlist li').click(function(){
		audio.pause();
		initAudio($(this));
		$('#play').hide();
		$('#pause').show();
		audio.play();
		showDuration();
	});

	//Volume control
	$('#volume').change(function(){
		audio.volume = parseFloat(this.value / 10);
	});

	//Time/Duration
	function showDuration(){
		$(audio).bind('timeupdate',function(){
			//Get hours and minutes
			var s = parseInt(audio.currentTime % 60);
			var m = parseInt(audio.currentTime / 60) % 60;
			if(s < 10){
				s = '0'+s;
			}
			$('#duration').html(m + ':'+ s);
			var value = 0;
			if(audio.currentTime > 0){
				value = Math.floor((100 / audio.duration) * audio.currentTime);
			}
			$('#progress').css('width',value+'%');
		});
	}
});
