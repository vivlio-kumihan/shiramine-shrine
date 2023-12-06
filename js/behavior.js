if (document.querySelector('body.home')) {
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
}

// headerのglobal-menu pull-down-list
const pullDownList = document.querySelectorAll(".global-menu .lower > .menu > .menu-item");

pullDownList.forEach(elem => {
  elem.addEventListener("mouseenter", () => {
    elem.classList.add("active");
  });
  elem.addEventListener("mouseleave", () => {
    elem.classList.remove("active");
  });
});

// ハンバーガー・メニュー
// ボタン
const menuToggleBtn = document.getElementById('menu-toggle-btn');
const globalMenu = document.getElementById('global-menu');
const menu = document.querySelector('.hamburger-menu > .main-menu > .menu');
const groupLink = document.querySelector('.hamburger-menu .group-link');
let isMenuVisible = false;

menuToggleBtn.addEventListener('click', function() {
  // ボタンの表示を切り替える。
  this.classList.toggle('flag')
  // メニューを出現させる。
  globalMenu.classList.toggle('flag');
});

// スクロール・アニメーション　ふわっと現れる
const targetElems = document.querySelectorAll(".gradually-appear, .gradually-appear-long");
const windowHight = window.innerHeight;
document.addEventListener("scroll", function () {
  targetElems.forEach(elem => {
    // よほど長い記事の場合はこの関数で調整している。
    const haflElemHight = () => {
      if (elem.className === "gradually-appear") {
        return elem.clientHeight / 3;
      } else if (elem.className === "gradually-appear-long") {
        return elem.clientHeight / 15;
      }
    };
    const setHight = windowHight - haflElemHight();
    const getElemDistance = elem.getBoundingClientRect().top;
    if (setHight > getElemDistance) {
      elem.classList.add("active")
    }
  });
});


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