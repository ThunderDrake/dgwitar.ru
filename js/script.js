$(document).ready(function() {
	$(document).on('click', '.field__label', function() {
		let list = $(this).siblings('.field__list');
		if (list.length) {
			let field = $(this).closest('.field');
			field.toggleClass('field--open');
			list.slideToggle();
		}
	});

	$(document).on('click', '.field__list-item:not(.active)', function() {
		let field = $(this).closest('.field'),
			text = $(this).html(),
			value = $(this).data('value');
		$(this).siblings().removeClass('active');
		$(this).addClass('active');
		field.find('.field__select').html(text);
		field.find('.field__select-input').val(value);
		field.toggleClass('field--open');
		field.find('.field__list').slideToggle();
	});

	$('.field__select').each(function() {
		let field = $(this).closest('.field');
		
		if (field.find('.field__list-item.active').length) {
			let item = field.find('.field__list-item.active'),
				text = item.html(),
				value = item.data('value');

			field.find('.field__select').html(text);
			field.find('.field__select-input').val(value);
		}
	});

	$(document).on('click', '[data-modal]', function(e) {
		let modal = $(this).data('modal');

		e.preventDefault();
		$.fancybox.open({
			src: '#' + modal,
			type: 'inline',
			opts: {
				autoFocus: false,
				smallBtn: false,
				toolbar: false,
				touch: false
			}
		});
	});

	$(document).on('click', '.modal__close', function() {
		$.fancybox.close();
	});

	$(document).on('click', '.js-scroll-to', function (e) {
        e.preventDefault();
        let id  = $(this).attr('href'),
            top = $(id).offset().top - $('.header').outerHeight();
        $('body,html').animate({scrollTop: top}, 1500);
		$('.menu').removeClass('active');
    });

    $('[name=phone]').inputmask({
		mask: '+ 7 ( 9 9 9 ) 9 9 9  9 9  9 9',
		placeholder: '-',
		clearIncomplete: true
	});

	$(document).on('submit', '.js-form', function (e) {
		e.preventDefault();
		leadSend($(this));
	});
	
	$(document).on('click', '.header__menu, .menu__bg, .menu__close', function(e) {
		e.preventDefault();
		$('.menu').toggleClass('active');
	});
	
	if ($(window).width() <= 1024) {
	    $('.course__video').each(function() {
	        $(this).insertAfter($(this).closest('.course').find('.course__title'));
	    });
	}
	
	if ($(window).width() <= 768) {
		$('.menu__messenger').appendTo($('.menu__navigation'));
		$('.menu__time').appendTo($('.menu__navigation'));
	}
	
	if ($(window).width() <= 480) {
	    $('.product__img-container').each(function() {
	        $(this).insertAfter($(this).closest('.product').find('.product__title'));
	    });
	}

	$('.content').css('margin-top', $('.header').outerHeight());
    let switching = 0
    let i = 1;
    let tabList = document.querySelectorAll('.education [data-tab-id]');
    function tabSwitch() {
        let id = $('.education [data-tab-id]:not(.active)').data('tab-id');

        tabList.forEach(el=>{
            el.classList.remove('active');
        })
        tabList[i].classList.add('active');
        if(i == tabList.length - 1 ) {
            i = 0
        } else {
            i = ++i % tabList.length;
        }
        // tabList.removeClass('active');
		// $('.education [data-tab-id]:not(.active)').addClass('active');

		$('[data-tab="' + id + '"]').siblings('.tab-content').fadeOut(500);
		$('[data-tab="' + id + '"]').fadeIn(1000);
		if ($('[data-tab="' + id + '"]').find('.courses').length) {
			$('[data-tab="' + id + '"]').find('.courses').slick('setPosition');
		}
        switching = setTimeout(tabSwitch, 7000)
    }
    switching = setTimeout(tabSwitch, 7000)

	$(document).on('click', '[data-tab-id]:not(.active)', function() {
        clearTimeout(switching);
		let id = $(this).data('tab-id'),
			list = $(this).closest('.tab-list');

		list.find('[data-tab-id]').removeClass('active');
		$(this).addClass('active');
        list.find('[data-tab-id]').css('pointer-events', 'none');
        setTimeout(function(){
            list.find('[data-tab-id]').css('pointer-events', '');
        }, 1500)
		if ($(this).hasClass('tab-list__item-btn--red')) {
			list.addClass('tab-list--red');
		} else {
			list.removeClass('tab-list--red');
		}
		$('[data-tab="' + id + '"]').siblings('.tab-content').fadeOut(500);
		$('[data-tab="' + id + '"]').fadeIn(1000    );
		if ($('[data-tab="' + id + '"]').find('.courses').length) {
			$('[data-tab="' + id + '"]').find('.courses').slick('setPosition');
		}
	});
    $(document).on("click", function(e) {
        if (e.target.classList.contains('course') || $(e.target).parents(".course").length) {
          clearTimeout(switching);
        }
      });
    

	$('.partner__list').slick({
		infinite: false,
		arrows: false,
		variableWidth: true,
		autoplay: false,
		autoplaySpeed: 5000
	});

	let partnersWidth = 0;
	$('.partner__list .slick-slide').each(function() {
		partnersWidth = partnersWidth + $(this).width();
	});
	if ($('.partner__list').width() < partnersWidth) {
		$('.partner__list').slick('slickSetOption', 'autoplay', true).slick('refresh');
	}

	$('.review__list').slick({
		slidesToShow: 3,
		prevArrow: '<button type="button" class="slick-prev"><svg><use href="img/sprite.svg#left-2"></use></svg></button>',
		nextArrow: '<button type="button" class="slick-next"><svg><use href="img/sprite.svg#right-2"></use></svg></button>',
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});

	new WOW().init();

	let expSlider = $('.experience__slider'),
		expSlides = expSlider.children(),
		expSliderAutoplaySpeed = 20000;

	expSlides.eq(0).addClass('experience__slider-item--active');
	expSlides.eq(1).addClass('experience__slider-item--next');
	expSlides.eq(2).addClass('experience__slider-item--nextafter');

	setInterval(function() {
		let slides = expSlider.find('.experience__slider-item'),
			activeIndex = expSlider.find('.experience__slider-item--active').index();

		expSlider.addClass('experience__slider--hidden');

		setTimeout(function() {
			expSlider.find('.experience__slider-item--active').removeClass('experience__slider-item--active');
			expSlider.find('.experience__slider-item--next').removeClass('experience__slider-item--next');
			expSlider.find('.experience__slider-item--nextafter').removeClass('experience__slider-item--nextafter');

			if (slides.eq(activeIndex+1).length) {
				slides.eq(activeIndex+1).addClass('experience__slider-item--active');
			} else {
				slides.eq(0).addClass('experience__slider-item--active');
			}
			if (expSlider.find('.experience__slider-item--active').next().length) {
				expSlider.find('.experience__slider-item--active').next().addClass('experience__slider-item--next');
			} else {
				slides.eq(0).addClass('experience__slider-item--next');
			}
			if (expSlider.find('.experience__slider-item--next').next().length) {
				expSlider.find('.experience__slider-item--next').next().addClass('experience__slider-item--nextafter');
			} else {
				slides.eq(0).addClass('experience__slider-item--nextafter');
			}

			expSlider.removeClass('experience__slider--hidden');
		}, 150);
	}, expSliderAutoplaySpeed);

	$('.courses').slick({
		prevArrow: '<button type="button" class="slick-prev"><svg><use href="img/sprite.svg#left-2"></use></svg></button>',
		nextArrow: '<button type="button" class="slick-next"><svg><use href="img/sprite.svg#right-2"></use></svg></button>'
	});
    
    if ($_GET('modal') == 'course') {
        $.fancybox.open({
			src: '#modalCourse',
			type: 'inline',
			opts: {
				autoFocus: false,
				smallBtn: false,
				toolbar: false,
				touch: false
			}
		});
    }
    
    if ($_GET('modal') == 'catalog') {
        $.fancybox.open({
			src: '#modalCatalog',
			type: 'inline',
			opts: {
				autoFocus: false,
				smallBtn: false,
				toolbar: false,
				touch: false
			}
		});
    }
});

$(window).on('load',function() {
	$('.js-custom-scroll').mCustomScrollbar();
});

$(window).resize(function() {
	$('.content').css('margin-top', $('.header').outerHeight());
});
	
function $_GET(key) {
    let p = window.location.search;
    p = p.match(new RegExp(key + '=([^&=]+)'));
    return p ? p[1] : false;
}

function leadSend(form) {
	form.find('.error').removeClass('error');

    let msg = form.serialize(),
    	email = form.find('[name=email]'),
    	faults = form.find('input').filter(function() {
    		if ($(this).attr('type') == 'text') {
    			if ($(this).attr('name') == 'email' && $(this).data('required') && !/^[\w-\.]+@[\w-]+\.[a-z]{2,10}$/i.test($(this).val())) {
    				$(this).closest('.field').addClass('error');
					return true;
    			}
				if ($(this).data('required') && $(this).val() === "") {
					$(this).closest('.field').addClass('error');
					return true;
				}
			} else {
				if ($(this).data('required') && !$(this).prop('checked')) {
					$(this).addClass('error');
					return true;
				}
			}
		});

    if (!faults.length) {
	    $.ajax({
	        type: "POST",
	        url: "mail.php",
	        data: msg,
	        success: function(data) {
	        	$.fancybox.close();
	            $.fancybox.open({
					src: '#modalThank',
					type: 'inline',
					opts: {
						autoFocus: false,
						smallBtn: false,
						toolbar: false,
						touch: false
					}
				});
                ym(88269980,'reachGoal','formSubmit');
	        },
	        error:  function(xhr, str){
	            alert('Возникла ошибка!');
	        }
	    });
	}
}