// // Appear and Hide Header 
// // とりあえず見送り
// const fixedElm = document.querySelector('header');
// let scrollPoint = 0; // 現在のスクロール位置をセットする変数
// let lastPoint = 0; // 1つ前のスクロール位置をセットする変数
// window.addEventListener("scroll",function(){
//   scrollPoint = window.scrollY;
//   console.log(scrollPoint);
//   if(scrollPoint > lastPoint){ // 下スクロールの場合
//     fixedElm.classList.add('fixed-appear');
//   } else { // 上スクロールの場合
//     fixedElm.classList.remove('fixed-appear');
//   }
//   lastPoint = scrollPoint;
// });

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

// headerのglobal-menu pull-down-list
// const menuItem = document.querySelectorAll(".global-menu .lower > .menu > .menu-item");
const pullDownList = document.querySelectorAll(".global-menu .lower > .menu > .menu-item > .sub-menu > li");

pullDownList.forEach((elem, idx) => {
  elem.addEventListener("mouseenter", () => {
    elem.classList.add("pull-down-list");
  });
  elem.addEventListener("mouseleave", () => {
    elem.classList.remove("pull-down-list");
  });

});


  // const lists = document.querySelectorAll(".menu-item:nth-of-type(idx + 1) .sub-menu li");
  // elem.addEventListener("mouseenter", () => {
  //   lists.forEach(li => li.classList.add("pull-down-list"));
  // });
  // elem.addEventListener("mouseleave", () => {
  //   lists.forEach(li => li.classList.remove("pull-down-list"));
  // });
// top pageのお知らせ／トピックスのリスト
const postItem = document.querySelectorAll(".post-item");
postItem.forEach(elem => {
  elem.addEventListener("mouseenter", () => {
    elem.classList.add("color-blue");
  });
  elem.addEventListener("mouseleave", () => {
    elem.classList.remove("color-blue");
  });
});

// top pageの祈祷・授与品
const maskParent = document.getElementById("to-prayer-gift");
Array.from(maskParent.children).forEach((elem) => {
  elem.addEventListener("mouseenter", () => {
    elem.classList.add("hover", true);
  });
  elem.addEventListener("mouseleave", () => {
    elem.classList.remove("hover", false);
  });
});



