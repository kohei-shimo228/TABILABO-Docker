const swiper = new Swiper('.swiper', {
  // オプション
  direction: 'horizontal', // 水平スライダー
  slidesPerView:5,              // ループ有効化
  spaceBetween:10,

  pagination: {
    el: '.swiper-pagination',
    clickable: true,       // ページネーションのクリック有効化
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});