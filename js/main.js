$('.navTrigger').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();

});

$(".clients-carousel").owlCarousel({
	autoplay: true,
	loop: true,
	margin: 15,
	dots: false,
	slideTransition: "linear",
	autoplayTimeout: 4500,
	autoplayHoverPause: true,
	autoplaySpeed: 4500,
	responsive: {
	  0: {
		items: 2
	  },
	  500: {
		items: 3
	  },
	  600: {
		items: 4
	  },
	  800: {
		items: 4
	  },
	  1200: {
		items: 4
	  }
	}
  });
  
$(document).ready(function() {
	$(".menu-icon").on("click", function() {
		  $("nav ul").toggleClass("showing");
	});
});

// Scrolling Effect

$(window).on("scroll", function() {
	if($(window).scrollTop()) {
		  $('nav').addClass('black');
	}

	else {
		  $('nav').removeClass('black');
	}
})

(function ($) {
	$(function () {
  
  
	  if (!('ontouchstart' in window)) {
		const videoPropCont = document.querySelectorAll('.js-create_video');
  
		videoPropCont.forEach(function (item) {
		  item.addEventListener('mouseenter', function () {
			var video = this.querySelector('video');
  
			if(!item.classList.contains('js-active')){
  
			  item.classList.add('js-active');
  
			  video.play();
			  video.loop = false;
  
			  video.addEventListener('ended', function () {
				item.classList.remove('js-active');
				item.classList.remove('js-video-end');
				item.classList.remove('js-video-pause');
			  });
  
			  video.addEventListener('timeupdate', function () {
				if((video.currentTime >= 2) && !item.classList.contains('js-video-end')) {
				  video.pause();
				  item.classList.add('js-video-pause');
				}
			  });
			}
		  });
  
		  item.addEventListener('mouseleave', function () {
			var video = this.querySelector('video');
  
			if(item.classList.contains('js-active')) {
			  if(item.classList.contains('js-video-pause')){
				item.classList.add('js-video-end');
				video.play()
			  } else {
				item.classList.add('js-video-end');
			  }
			}
  
		  });
  
		});
	  }
  
  
	});
})(jQuery);


// navbar button
let navBtn = $('#nav-button');
let menu = $('.menu-wrapper');
let menuImage = $('.menu-image-wrapper');

navBtn.click(function() {
    if(navBtn.hasClass('open')) {
        navBtn.toggleClass('open');
        navBtn.css("transform", "rotate(0deg)");
        menu.css("opacity", "0");
        menu.css("pointer-events", "none");
        menu.css("z-index", "50");
        menuImage.css("display", "none");
        $('body').css("overflow", "auto");
        setTimeout(function() {
            menu.css("pointer-events", "none");
            menu.css("z-index", "50");
        }, 275);
    } else {
        navBtn.toggleClass('open');
        navBtn.css("transform", "rotate(180deg)");
        menu.css("opacity", "1");
        menuImage.css("display", "inline-block");
        $('body').css("overflow", "hidden");
        setTimeout(function() {
            menu.css("pointer-events", "auto");
            menu.css("z-index", "auto");
        }, 275);
    }
});


// Cursor
const cursorInner = document.querySelector('.cursor');
const cursor = document.querySelector('#cursor');
const cursorCircle = cursor.querySelector('.cursor-circle');

const menuImage1 = document.querySelector('#m-img-1');
const menuImage2 = document.querySelector('#m-img-2');
const menuImage3 = document.querySelector('#m-img-3');
const menuImage4 = document.querySelector('#m-img-4');

const menuItem1 = document.querySelector("#m-item-1");
const menuItem2 = document.querySelector("#m-item-2");
const menuItem3 = document.querySelector("#m-item-3");
const menuItem4 = document.querySelector("#m-item-4");

menuItem1.addEventListener('mouseenter', e => {
    menuImage1.style.opacity = "1";
    menuItem2.style.opacity = ".12";
    menuItem3.style.opacity = ".12";
    menuItem4.style.opacity = ".12";
});
menuItem1.addEventListener('mouseleave', e => {
    menuImage1.style.opacity = "0";
    menuItem2.style.opacity = "1";
    menuItem3.style.opacity = "1";
    menuItem4.style.opacity = "1";
});
menuItem2.addEventListener('mouseenter', e => {
    menuImage2.style.opacity = "1";
    menuItem1.style.opacity = ".12";
    menuItem3.style.opacity = ".12";
    menuItem4.style.opacity = ".12";
});
menuItem2.addEventListener('mouseleave', e => {
    menuImage2.style.opacity = "0";
    menuItem1.style.opacity = "1";
    menuItem3.style.opacity = "1";
    menuItem4.style.opacity = "1";
});
menuItem3.addEventListener('mouseenter', e => {
    menuImage3.style.opacity = "1";
    menuItem1.style.opacity = ".12";
    menuItem2.style.opacity = ".12";
    menuItem4.style.opacity = ".12";
});
menuItem3.addEventListener('mouseleave', e => {
    menuImage3.style.opacity = "0";
    menuItem1.style.opacity = "1";
    menuItem2.style.opacity = "1";
    menuItem4.style.opacity = "1";
});
menuItem4.addEventListener('mouseenter', e => {
    menuImage4.style.opacity = "1";
    menuItem1.style.opacity = ".12";
    menuItem2.style.opacity = ".12";
    menuItem3.style.opacity = ".12";
});
menuItem4.addEventListener('mouseleave', e => {
    menuImage4.style.opacity = "0";
    menuItem1.style.opacity = "1";
    menuItem2.style.opacity = "1";
    menuItem3.style.opacity = "1";
});

const mouse = { x: -100, y: -100 }; // mouse pointer's coordinates
const pos = { x: 0, y: 0 }; // cursor's coordinates
const speed = 0.1; // between 0 and 1

const updateCoordinates = e => {
    mouse.x = e.clientX;
    mouse.y = e.clientY;
}

window.addEventListener('mousemove', updateCoordinates);


function getAngle(diffX, diffY) {
    return Math.atan2(diffY, diffX) * 180 / Math.PI;
}

function getSqueeze(diffX, diffY) {
    const distance = Math.sqrt(
        Math.pow(diffX, 2) + Math.pow(diffY, 2)
    );
    const maxSqueeze = 0.15;
    const accelerator = 1500;
    return Math.min(distance / accelerator, maxSqueeze);
}


const updateCursor = () => {
    const diffX = Math.round(mouse.x - pos.x);
    const diffY = Math.round(mouse.y - pos.y);

    pos.x += diffX * speed;
    pos.y += diffY * speed;

    const angle = getAngle(diffX, diffY);
    const squeeze = getSqueeze(diffX, diffY);

    const scale = 'scale(' + (1 + squeeze) + ', ' + (1 - squeeze) +')';
    const rotate = 'rotate(' + angle +'deg)';
    const translate = 'translate3d(' + pos.x + 'px ,' + pos.y + 'px, 0)';

    menuImage1.style.transform = translate;
    menuImage2.style.transform = translate;
    menuImage3.style.transform = translate;
    menuImage4.style.transform = translate;

    cursorInner.style.transform = translate;
    cursor.style.transform = translate;
    cursorCircle.style.transform = rotate + scale;
};

function loop() {
    updateCursor();
    requestAnimationFrame(loop);
}

requestAnimationFrame(loop);



const cursorModifiers = document.querySelectorAll('[cursor-class]');

cursorModifiers.forEach(curosrModifier => {
    curosrModifier.addEventListener('mouseenter', function() {
        const className = this.getAttribute('cursor-class');
        cursor.classList.add(className);
        cursorInner.style.opacity = "0";
    });

    curosrModifier.addEventListener('mouseleave', function() {
        const className = this.getAttribute('cursor-class');
        cursor.classList.remove(className);
        cursorInner.style.opacity = "1";
    });
});


$(function() {

	if ( $('.slide-one-item').length > 0 ) {
		$('.slide-one-item').owlCarousel({
		items: 1,
		loop: true,
			stagePadding: 0,
		margin: 0,
		autoplay: true,
		animateOut: 'slideOutDown',
		animateIn: 'fadeIn',
		pauseOnHover: false,
		nav: true,
		navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">']
	  });
  }
  
$(".custom-carousel").owlCarousel({
	autoWidth: true,
	loop: true
  });
  $(document).ready(function () {
	$(".custom-carousel .item").click(function () {
	  $(".custom-carousel .item").not($(this)).removeClass("active");
	  $(this).toggleClass("active");
	});
  });
  
  var siteSticky = function() {
		$(".js-sticky-header").sticky({topSpacing:0});
	};
	siteSticky();

	var siteMenuClone = function() {

		$('.js-clone-nav').each(function() {
			var $this = $(this);
			$this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
		});


		setTimeout(function() {
			
			var counter = 0;
      $('.site-mobile-menu .has-children').each(function(){
        var $this = $(this);
        
        $this.prepend('<span class="arrow-collapse collapsed">');

        $this.find('.arrow-collapse').attr({
          'data-toggle' : 'collapse',
          'data-target' : '#collapseItem' + counter,
        });

        $this.find('> ul').attr({
          'class' : 'collapse',
          'id' : 'collapseItem' + counter,
        });

        counter++;

      });

    }, 1000);

		$('body').on('click', '.arrow-collapse', function(e) {
      var $this = $(this);
      if ( $this.closest('li').find('.collapse').hasClass('show') ) {
        $this.removeClass('active');
      } else {
        $this.addClass('active');
      }
      e.preventDefault();  
      
    });

		$(window).resize(function() {
			var $this = $(this),
				w = $this.width();

			if ( w > 768 ) {
				if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
			}
		})

		$('body').on('click', '.js-menu-toggle', function(e) {
			var $this = $(this);
			e.preventDefault();

			if ( $('body').hasClass('offcanvas-menu') ) {
				$('body').removeClass('offcanvas-menu');
				$this.removeClass('active');
			} else {
				$('body').addClass('offcanvas-menu');
				$this.addClass('active');
			}
		}) 

		// click outisde offcanvas
		$(document).mouseup(function(e) {
	    var container = $(".site-mobile-menu");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {
	      if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
	    }
		});
	}; 
	siteMenuClone();

});