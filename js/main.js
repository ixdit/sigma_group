$(document).ready(function () {
  const slickArrows = {
    prevArrow: `
			<button class="slick-prev slick-arrow-center">
				<svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
					<circle cx="22.5" cy="22.5" r="22.5" transform="rotate(-180 22.5 22.5)" fill="#8D8D8D" fill-opacity="0.8"/>
					<path d="M18 32L28 22L18 12" stroke="white" stroke-width="2"/>
				</svg>
			</button>
		`,
    nextArrow: `
			<button class="slick-next slick-arrow-center">
				<svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
					<circle cx="22.5" cy="22.5" r="22.5" transform="rotate(-180 22.5 22.5)" fill="#8D8D8D" fill-opacity="0.8"/>
					<path d="M18 32L28 22L18 12" stroke="white" stroke-width="2"/>
				</svg>
			</button>
		`,
  };

  $('.js-team-slider-one').slick({
    ...slickArrows,
    slidesToShow: 1,
  });

  /**
   * Filter
   */
  (function () {
    const range1 = document.getElementById('range-1');

    if (range1) {
      noUiSlider.create(range1, {
        start: [0, 2000],
        range: {
          'min': 0,
          'max': 2000
        },
        format: wNumb({
          decimals: 0,
        })
      });
      range1.noUiSlider.on('update', function (values, handle) {
        $('.range1-input1').val(values[0])
        $('.range1-input2').val(values[1])
      });

      $('.range1-input1').keyup(function () {
        range1.noUiSlider.set([
          $('.range1-input1').val(),
          null
        ]);
      });

      $('.range1-input2').keyup(function () {
        range1.noUiSlider.set([null, $('.range1-input2').val()]);
      });
    }

    let value = '';

    $('.range1-input1, .range1-input2, .range2-input1, .range2-input2').focus(function () {
      value = $(this).val();
      $(this).val('');
    });
    $('.range1-input1, .range1-input2, .range2-input1, .range2-input2').blur(function () {
      if ($(this).val() === '') {
        $(this).val(value);
      }

      value = '';
    });

    const range2 = document.getElementById('range-2');

    if (range2) {
      noUiSlider.create(range2, {
        start: [0, 2000],
        range: {
          'min': 0,
          'max': 2000
        },
        format: wNumb({
          decimals: 0,
        })
      });
      range2.noUiSlider.on('update', function (values, handle) {
        $('.range2-input1').val(values[0])
        $('.range2-input2').val(values[1])
      });

      $('.range2-input1').keyup(function () {
        range2.noUiSlider.set([
          $('.range2-input1').val(),
          null
        ]);
      });

      $('.range2-input2').keyup(function () {
        range2.noUiSlider.set([null, $('.range2-input2').val()]);
      });
    }
  })();

  $('.js-video-slider').slick({
    slidesToShow: 3,
    arrows: false,
    swipeToSlide: true,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 478,
        settings: {
          slidesToShow: 1,
        }
      }
    ],
  });

  $('.js-certificates-slider').slick({
    slidesToShow: 4,
    ...slickArrows,
    swipeToSlide: true,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 478,
        settings: {
          slidesToShow: 2,
        },
      },
    ],
  });

  (function () {
    function fixed() {
      if ($(this).scrollTop() > 200) {
        $('.js-header').addClass('fixed');
      } else {
        $('.js-header').removeClass('fixed');
      }
    }

    fixed();
    $(document).scroll(function () {
      fixed();
    });
  })();

  $('.js-project-mobile-3').slick({
    slidesToShow: 3,
    arrows: true,
    swipeToSlide: true,
    ...slickArrows,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });

  if ($(document).width() < 991) {
    $('.js-project-mobile').slick({
      slidesToShow: 2,
      arrows: true,
      swipeToSlide: true,
      ...slickArrows,
      responsive: [
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
          }
        }
      ]
    });
  }

  $('.js-work-slider').slick({
    adaptiveHeight: true,
    ...slickArrows,
  });
  $('.js-phone-mask').mask("+7 (999) 999-99-99", {autoclear: false});


  $('.js-fixed').click(function () {
    $('.js-fixed').next().toggleClass('active');
    const attr = $(this).find('use').attr('xlink:href');

    if (attr === 'images/svg-sprite.svg#arrow-right') {
      $(this).find('use').attr('xlink:href', 'images/svg-sprite.svg#close');
    } else {
      $(this).find('use').attr('xlink:href', 'images/svg-sprite.svg#arrow-right');
    }
  });


  $('.job__head').click(function () {
    $(this).next().slideToggle();
    $(this).toggleClass('active');
  });

  $('.js-toggle-city-modal').click(function () {
    $('.js-city-modal').toggle();
  });

  $('.js-show-menu').click(function () {
    $('.js-menu').toggleClass('active');
    $('body').toggleClass('fixed');
  });

  $('.js-question-text').click(function () {
    $(this).prev().addClass('show');
    $(this).hide();
  });

  $('.js-tab-controls a').click(function (e) {
    e.preventDefault();
    const $container = $('#' + $(this).closest('ul').data('tabs'));
    const id = $(this).attr('href');

    $container.find('>.tab-panel').hide().removeClass('active');
    $(this).closest('ul').find('a').removeClass('active');
    $(id).fadeIn('200', function () {
      $('.js-team-slider-one').slick('setPosition', 0);
      $('.js-portfolio-slider').slick('setPosition', 0);
    });
    $(this).addClass('active');
  });

  $('.js-team-slider').slick({
    slidesToShow: 4,
    swipeToSlide: true,
    ...slickArrows,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        }
      },
    ]
  });

  $('.js-three-slider').slick({
    slidesToShow: 3,
    swipeToSlide: true,
    ...slickArrows,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        }
      },
    ],
  });

  $('.js-one-slider').slick({
    slidesToShow: 1,
    arrows: true,
    ...slickArrows,
  });

  $('.question__head').click(function () {
    $(this).next().slideToggle();
    $(this).toggleClass('active');

    $('.js-one-slider').slick('setPosition');
  });

  $('.js-offers').slick({
    rows: 2,
    slidesToShow: 3,
    ...slickArrows,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          rows: 1,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          rows: 1,
        }
      },
    ],
  });

  $('.js-tariffs').slick({
    slidesToShow: 4,
    ...slickArrows,
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        }
      },
    ],
  });

  $('.js-portfolio-slider').slick({
    rows: 2,
    slidesToShow: 3,
    arrows: false,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          rows: 3,
        }
      },
    ],
  });

  $('.prev').click(function () {
    $('.js-portfolio-slider').slick('slickPrev');
  });

  $('.next').click(function () {
    $('.js-portfolio-slider').slick('slickNext');
  });

  $('.contacts-item__head').click(function () {
    const $thisContainer = $(this).closest('.contacts-items');

    $thisContainer.find('>.contacts-item>.contacts-item__content').slideUp();
    $thisContainer.find('>.contacts-item').addClass('active');

    if (!$(this).hasClass('active')) {
      $(this).next().slideDown();
      $(this).addClass('active');
    } else {
      $(this).next().slideUp();
      $(this).removeClass('active');
    }
  });

  $('.js-short-gallery').slick({
    rows: 2,
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          arrows: true,
          ...slickArrows,
        }
      },
      {
        breakpoint: 576,
        settings: {
          rows: 1,
          arrows: true,
          slidesToShow: 1,
          ...slickArrows,
        }
      },
    ],
  });

  if ($(document).width() < 991) {
    $('.tab-inline').slick({
      slidesToShow: 4,
      ...slickArrows,
      arrows: true,
      responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 3,
            arrows: true,
            ...slickArrows,
          }
        },
        {
          breakpoint: 576,
          settings: {
            rows: 1,
            arrows: true,
            slidesToShow: 2,
            ...slickArrows,
          }
        },
      ]
    })
  }

  $('.input-images-1').imageUploader({
    maxFiles: 5,
  });

  $('.js-bank-tabs a').click(function (e) {
    e.preventDefault();
    const $id = $(this).attr('href');

    $('.js-bank-tabs a').removeClass('active');
    $('.bank-list .desktop table').removeClass('active');

    $(this).addClass('active');
    $(`.bank-list .desktop [data-id="${$id.replace('#', '')}"]`).addClass('active');
    $(`.bank-list .mobile [data-id]`).hide();
    $(`.bank-list .mobile [data-id="${$id.replace('#', '')}"]`).show();
  });

  $('.js-grid').masonry({
    itemSelector: '.grid-item',
  });

  $('.dropdown-select').find('input').change(function () {
    if($(this).closest('.dropdown-select').find('input:checked').length !== 0) {
      $(this).closest('.dropdown-select').addClass('active');
    }else {
      $(this).closest('.dropdown-select').removeClass('active');
    }
  });

  // Product check
  (function () {
    const $form = '.js-check__form';
    const $showForm = '.js-check__show-form';
    const $showPrices = '.js-check__show-prices';
    const $prices = '.js-check__prices';

    const $addCheck = '.js-check__add';
    const $checkProps = '.js-check__props';
    const $deleteProp = '.js-check__delete-prop';
    const $price = '.js-check__price';
    const $prop = '.js-check__prop';
    const $tab = '.js-check__tab';
    const $mainPrice = '.js-check__main-price';
    const $messageInput = '.js-check__message';

    const $mainTitle = '.js-check__main-name';
    const $project_material = '.project_material';

    let propsSum = 0;
    let propsCount = 0;
    let sendMail = {
      more: {},
      prices: {}
    }

    function showForm() {
      $($form).fadeIn();
      $($prices).hide();
    }

    function showPrices() {
      $($form).hide();
      $($prices).fadeIn();
    }

    function toggleCheckProps() {
      propsCount >= 1 ? $($checkProps).show() : $($checkProps).hide();
    }

    function createProp(settings) {
      const ul = $($checkProps).find('ul');

      const template = `
            <li class="js-check__prop">
                <span class="d-flex align-items-center flex-wrap">
                   ${settings.title}<b>${settings.price !== null ? ': ' + settings.price.toLocaleString() + 'руб' : ''}</b>
                   <a href="" class="js-check__delete-prop ml-2" data-content="${settings.contentId}" data-price="${settings.price}">
                       <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                       <path fill="none" stroke="red" stroke-width="1.06" d="M16,16 L4,4"></path>
                       <path fill="none" stroke="red" stroke-width="1.06" d="M16,4 L4,16"></path>
                       </svg>
                   </a>
                </span>
            </li>
         `;

      $('#' + settings.contentId).hide();

      ul.append(template);

      updatePrice(settings.price);

      sendMail['more'][settings.contentId] = {
        name: settings.title,
        price: settings.price == null ? 'Бесплатно' : settings.price + 'руб',
      }
    }

    function deleteProp(settings) {
      settings.container.hide();
      $('#' + settings.contentId).show();

      delete sendMail.more[settings.contentId];

      updatePrice(settings.price, true);
    }

    function updatePrice(price, n = false) {
      let total = parseInt($($price).attr('data-price'));

      if (price !== null) {
        let result = n ? total - price : total + price;
        propsSum = n ? propsSum - price : propsSum + price;
        $($price).attr('data-price', result).html(result.toLocaleString());
      }
    }

    function printNewPrice(price) {
      $($price).html(Number(price + propsSum).toLocaleString());
      $($price).attr('data-price', price + propsSum)
    }

    function createMessage() {
      if($($form).find('[name="hidden-price"]').length == 0 && $($form).find('[name="hidden-total"]').length == 0) {
        $($form).append(`
               <input type="hidden" name="hidden-price" value="${onlyNumber($($price).html())}">
               <input type="hidden" name="hidden-total" value="${onlyNumber($($mainPrice).html())}">
            `);
      }

      if (sendMail['more'] !== undefined) {
        for (let key in sendMail['more']) {
          if($($form).find(`[name="${sendMail['more'][key].name}"]`).length == 0){
            $($form).append(`
                     <input type="hidden" name="property[]" value="${sendMail['more'][key].name} ${String(sendMail['more'][key].price).replace('руб', '')}">
                  `);
          }
        }
      }
    }

    $($showForm).click(function (e) {
      e.preventDefault();
      showForm();
      createMessage();
    });

    $($showPrices).click(function (e) {
      e.preventDefault();
      showPrices();
    });

    $($addCheck).click(function (e) {
      showPrices();
      e.preventDefault();
      propsCount++;
      toggleCheckProps();
      $(this).hide();

      createProp({
        price: $(this).data('price') || null,
        title: $(this).data('title'),
        contentId: $(this).data('prop'),
      });
    });

    $(document).on('click', $deleteProp, function (e) {
      e.preventDefault();
      propsCount--;
      toggleCheckProps();
      $(`[data-prop=${$(this).data('content')}]`).show();

      deleteProp({
        container: $(this).closest($prop),
        contentId: $(this).data('content'),
        price: $(this).data('price') || null
      });
    });

    $($tab).click(function () {
      printNewPrice($(this).data('price'));
      showPrices();
      $($mainTitle).html($(this).data('title'))
      $($project_material).val($(this).data('title'))
      $($mainPrice).html($(this).data('price').toLocaleString())
    })
  }());


  $('.js-team-short__show').click(function () {
    $('.js-team-short').addClass('hidden-team');
    $(this).hide();
  });

  $('.float-search__close').click(function () {
    $('.float-search').hide()
;  });
});
