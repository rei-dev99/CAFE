// ドロワーメニュー //
jQuery('.drawer-icon').on('click',function(e) {
  e.preventDefault();

  jQuery('.drawer-icon').toggleClass('is-active');
  jQuery('.drawer-content').toggleClass('is-active');
  jQuery('.drawer-background').toggleClass('is-active');

  return false;
});
// 背景の黒い部分をクリックしたときに戻る
jQuery('.drawer-background').on('click', function(){
  jQuery('.drawer-icon').removeClass('is-active');
  jQuery('.drawer-content').removeClass('is-active');
  jQuery('.drawer-background').removeClass('is-active');
});


// swiper //
const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    effect: 'fade',
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    speed: 2000,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
  });



// スムーススクロール //
jQuery('.to-top').on('click', function(){
  jQuery('body, html').animate({scrollTop: 0}, 300);
});

// トップへ戻る //
jQuery(window).on('scroll', function() {
  if ( 100 < jQuery(this).scrollTop()) {
    jQuery('.to-top').addClass('is-show');
  } else {
    jQuery('.to-top').removeClass('is-show');
  }
});

// ドロワーメニュートップページ、メインビジュアルを過ぎてから表示 //
jQuery(window).on("scroll", function($) {
	if (jQuery(this).scrollTop() > 795) { //スクロール量
		jQuery('.front-page-drawer').addClass('is-show');
	} else {
		jQuery('.front-page-drawer').removeClass('is-show');
	} 
});