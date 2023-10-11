$(function () {
  getCookieByName('privacy');
  mobileMenu(1000);
  sliderMenu('.language');
  sliderMenu('.menuMember');
});

// table過長時增加卷軸
// $('table').wrap('<div class="tableBox"></div>');
$('body').append('<div class="mobileBtn"></div>');

// 單層選單功能
function sliderMenu(elm) {
  $(elm)
    .children('.btn')
    .off()
    .on('click', function () {
      $(this).parent().toggleClass('active');
      $(this).siblings('ul').slideToggle('fast');
      $(elm).siblings('.active').find('ul').slideToggle('fast');
      $(elm).siblings('.active').removeClass('active');
      $('body').removeClass('mobileOpen');
    });
  $(window).on('load resize', function () {
    $(elm).find('ul').removeAttr('style');
    $(elm).removeClass('active');
  });
}

// 電腦版主選單搜尋功能
(function () {
  // 搜尋功能
  $('.menuSearch .btn').on('click', function () {
    $('.menuSearch').siblings('.active').find('ul').slideUp('fast');
    $('.menuSearch').siblings('.active').removeClass('active');
    $('.menuSearch').addClass('active');
    $('body').removeClass('mobileOpen');
    $(this).parent().parent().siblings('.active').find('ul').slideToggle('fast');
    $(this).parent().parent().siblings('.active').removeClass('active');
  });
  $('.menuSearch .searchClose').on('click', function () {
    $('.menuSearch').removeClass('active');
  });
  $(window).on('load resize', function () {
    $('.menuSearch').removeClass('active');
  });
})();

// 滾動畫面時
$(window).on('load scroll', function () {
  // let headHeigh = $('.headerBox').outerHeight();
  if ($(window).scrollTop() > 20) {
    $('body').addClass('headFix');
    // $('.mainMenu .toggleBtn').siblings('ul').css('top', headHeigh);
  } else {
    $('body').removeClass('headFix');
    // headHeigh = $('.headerBox').outerHeight();
    // $('.mainMenu .toggleBtn').siblings('ul').css('top', headHeigh);
  }
});

// QA風琴功能
function qa(q, a) {
  $(q).on('click', function () {
    var thisQ = $(this);
    var thisP = thisQ.parent();
    if (thisP.is('.active') == true) {
      thisP.toggleClass('active').find(a).slideToggle('fast');
    } else {
      console.log(a);
      thisP.siblings('.active').removeClass('active').find(a).slideToggle('fast');
      thisP.toggleClass('active').find(a).slideToggle('fast');
    }
  });
}

// 主選單
(function () {
  // $('.mainMenu li').has('ul').addClass('nextLv').append('<span class="toggleBtn"></span>');
  $('.mainMenu li').has('.nextMenuBox').addClass('nextLv').append('<span class="toggleBtn"></span>');
  $('.mainMenu li li').has('ul').addClass('nextLv').append('<span class="toggleBtnSec"></span>');

  $(window).on('load resize', function () {
    let windowWidth = $(window).outerWidth();
    if (windowWidth > 1000) {
      $('.menuBox .mainMenu li.nextLv').hover(
        function () {
          if ($('.mobileBtn').is(':hidden')) {
            $(this).addClass('active');
            // $(this).children('.nextMenuBox').stop().slideDown('fast');
          }
        },
        function () {
          if ($('.mobileBtn').is(':hidden')) {
            $(this).removeClass('active');
            // $(this).children('.nextMenuBox').stop().slideUp('fast');
          }
        }
      );
    } else {
      $('.mainMenu .nextLv > a,.mainMenu .nextLv > button')
        .off('click')
        .on('click', function () {
          $(this).siblings('.toggleBtn').trigger('click');
          return false;
        });
    }

    $('.mainMenu li li.nextLv > a')
      .off('click')
      .on('click', function () {
        console.log('a');
        $(this).siblings('.toggleBtnSec').trigger('click');
        return false;
      });

    $('.mainMenu .toggleBtn')
      .off('click')
      .on('click', function () {
        // let headHeigh = $('.headerBox').outerHeight();
        $(this).siblings('ul').stop().slideToggle('fast');
        $(this).siblings('.nextMenuBox').stop().slideToggle('fast');
        // $(this).parent('li').siblings().find('ul').stop(true, false).slideUp('fast');
        // $(this).parents('li').siblings().find('.nextMenuBox').stop(true, false).slideUp('fast');
        $(this).parent().toggleClass('active');
        $('.mainMenu li').not($(this).parent('li')).removeClass('active');
      });

    $('.mainMenu .toggleBtnSec')
      .off('click')
      .on('click', function () {
        console.log('a');
        $(this).siblings('ul').stop().slideToggle('fast');
        $(this).parent('li').siblings().find('ul').stop(true, false).slideUp('fast');
      });

    let menuItem = document.querySelectorAll('.menuBox .nextMenuBox.productsBox .menuList .item');
    let productsContent = document.querySelectorAll('.menuBox .nextMenuBox.productsBox .contentInfo .item');

    menuItem.forEach((item, index) => {
      item.addEventListener('click', function () {
        menuItem.forEach((v, i) => {
          v.classList.remove('active');
          productsContent[i].classList.remove('active');
        });

        item.classList.add('active');
        productsContent[index].classList.add('active');
      });
    });
  });
})();

// lazyload
(function () {
  const placeholderSrc = (w, h) => `data:image/svg+xml,%3Csvg xmlns="http:// www.w3.org/2000/svg" viewBox="0 0 ${w} ${h}"%3E%3C/svg%3E`;
  const options = {
    root: null,
    rootMargin: '0px',
    thresholds: 1,
  };

  let observer = new IntersectionObserver((entries) => {
    entries.forEach((img) => {
      if (img.isIntersecting) {
        img.target.src = img.target.dataset.src;
        img.target.classList.add('picAnimated');
        observer.unobserve(img.target);
      }
    });
  }, options);

  document.querySelectorAll('.lazyLoad').forEach((img) => {
    img.src = placeholderSrc(img.dataset.width, img.dataset.height);
    observer.observe(img);
  });
})();

// 偵測物件距離顯示畫面，需要偵測的物件增加.isAnimate
(function () {
  let options = {
    root: null,
    rootMargin: '0px',
    thresholds: 0.5,
  };
  let observer = new IntersectionObserver((entries) => {
    entries.forEach((elm) => {
      if (elm.isIntersecting) {
        elm.target.classList.add('isAnimated');
      } else {
        elm.target.classList.remove('isAnimated');
      }
    });
  }, options);

  document.querySelectorAll('.isAnimate').forEach((elm) => {
    observer.observe(elm);
  });
})();

//  GOTOP
(function () {
  let goTopBtn = document.querySelector('.goTop');

  window.addEventListener('scroll', function () {
    let windowScrollTop = document.documentElement.scrollTop;
    if (windowScrollTop >= 200) {
      goTopBtn.style.cssText = 'opacity:1';
    } else {
      goTopBtn.style.cssText = 'opacity:0';
    }
  });
  goTopBtn.addEventListener('click', function () {
    window.scrollTo({
      top: 0,
      behavior: 'smooth',
    });
  });
})();

// cookie
function getCookieByName(name) {
  var value = Cookies.get(name);
  if (value !== 'true') {
    $('.closePrivacy').on('click', function () {
      Cookies.set(name, 'true');
      $('.privacyBox').slideUp(400, function () {
        $(this).remove();
      });
    });
  } else {
    $('.privacyBox').remove();
  }
}

// 手機主選單
function mobileMenu(maxWidth) {
  $(window).on('load resize', function () {
    let windowWidth = $(window).outerWidth();
    if (windowWidth < maxWidth) {
      $('body').addClass('onMobile');
      $('body').removeClass('mobileOpen');
    } else {
      $('body').removeClass('onMobile');
    }
  });

  $('.mobileBtn').on('click', function (event) {
    $('body').toggleClass('mobileOpen');
    $('.menuMember.active,.language.active').removeClass('active').find('ul').slideUp();
    $('.menuSearch').removeClass('active');
  });
}

// 無限輪播
function sliderUse(elm) {
  let parentBox = 0;
  let sliderMovePx = 0;
  let request;

  $(window).on('load resize', function () {
    parentBox = $(elm).outerWidth(true);
    cancelAnimationFrame(request);
    requestAnimationFrame(animation);
  });

  function animation() {
    sliderMovePx++;
    if (sliderMovePx < parentBox) {
      $(elm).css('transform', `translateX(-${sliderMovePx}px)`);
      request = requestAnimationFrame(animation);
    } else {
      sliderMovePx = 0;
      request = requestAnimationFrame(animation);
    }
  }
}

// 滾動漂浮
$(window).on('load resize', function () {
  $(window).on('scroll', function () {
    let windowWidth = $(window).outerWidth();
    let windowHeight = $(window).outerHeight();
    let windowScrollTop = document.documentElement.scrollTop;
    if (windowWidth > 800) {
      let bg_use = $('.bgUse');
      let bg_use_h = ((windowScrollTop - 100) / $('.mainBox').height()) * 100;
      if (windowScrollTop > 0) {
        TweenLite.to(bg_use, 1, {
          'background-position': '0 ' + bg_use_h + '%',
        });
      } else {
        TweenLite.to(bg_use, 1, {
          'background-position': '0 ' + '0' + '%',
        });
      }

      $('.acBoxDown').each(function () {
        let box_t = $(this).offset().top;
        // let ac_move = $(this).find('.acMove');
        let ac_move = $(this);
        if (windowScrollTop + windowHeight / 3 > box_t && windowWidth > 800) {
          TweenLite.to(ac_move, 1, {
            y: (windowScrollTop + windowHeight / 3 - box_t) / 10,
          });
        }
      });

      $('.acBoxUp').each(function () {
        let box_t = $(this).offset().top;
        // let ac_move = $(this).find('.acMove');
        let ac_move = $(this);
        if (windowScrollTop + windowHeight / 3 > box_t && windowWidth > 800) {
          TweenLite.to(ac_move, 1, {
            y: -(windowScrollTop + windowHeight / 3 - box_t) / 10,
          });
        }
      });
    }
  });
});

// 跟隨滑鼠
$.fn.parallax = function (resistance, mouse) {
  $el = $(this);
  TweenLite.to($el, 0.2, {
    x: -((mouse.clientX - window.innerWidth / 2) / resistance),
    y: -((mouse.clientY - window.innerHeight / 2) / resistance),
  });
};

// 倒數用
$.fn.animateNumbers = function (stop, commas, duration, ease) {
  return this.each(function () {
    let $this = $(this);
    let start = parseInt($this.text().replace(/,/g, ''));
    commas = commas === undefined ? true : commas;
    $({
      value: start,
    }).animate(
      {
        value: stop,
      },
      {
        duration: duration == undefined ? 1000 : duration,
        easing: ease == undefined ? 'swing' : ease,
        step: function () {
          $this.text(Math.floor(this.value));
          if (commas) {
            $this.text($this.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,'));
          }
        },
        complete: function () {
          if (parseInt($this.text()) !== stop) {
            $this.text(stop);
            if (commas) {
              $this.text($this.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,'));
            }
          }
        },
      }
    );
  });
};

// 開啟畫面動態效果
// AOS.init({
//   offset: 100, // 移動距離 (單位為像素)
//   delay: 0, // 延遲時間，範圍從 0-3000
//   duration: 1000, // 完成動畫所需的時間，範圍從 0-3000
//   easing: 'ease', // 動畫曲線
//   once: true, // 動畫是否只跑一次
//   mirror: false, // 鏡像
//   anchorPlacement: 'top-bottom', // 動畫觸發的位置
// });

// 開啟畫面動態效果
new WOW({
  boxClass: 'wow', // default
  animateClass: 'animated', // default
  offset: 50, // default
  mobile: true, // default
  live: true, // default
}).init();
