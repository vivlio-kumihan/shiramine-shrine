// appear and hide Header 
const fixedElm = document.querySelector('header');
let scrollPoint = 0; // 現在のスクロール位置をセットする変数
let lastPoint = 0; // 1つ前のスクロール位置をセットする変数
window.addEventListener("scroll",function(){
  scrollPoint = window.scrollY;
  console.log(scrollPoint);
  if(scrollPoint > lastPoint){ // 下スクロールの場合
    fixedElm.classList.add('fixed-appear');
  } else { // 上スクロールの場合
    fixedElm.classList.remove('fixed-appear');
  }
  lastPoint = scrollPoint;
});

// // Swiper
// if (document.querySelector('body.home')) {
//   const swiper = new Swiper('.swiper', {
//     loop: true,
//     initialSlide: 1,
//     slidesPerView: 'auto',
//     spaceBetween: 0,
  
//     // If we need pagination
//     pagination: {
//       el: '.swiper-pagination',
//     },
  
//     // Navigation arrows
//     navigation: {
//       nextEl: '.swiper-button-next',
//       prevEl: '.swiper-button-prev',
//     },
  
//     // And if we need scrollbar
//     scrollbar: {
//       el: '.swiper-scrollbar',
//     },
//   });
// }