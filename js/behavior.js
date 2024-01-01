// top pageのお知らせ／トピックスのリスト
if (document.querySelector('body.home')) {
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

// スクリーンサイズに応じて文言を変更する
// ローカル
// if (document.querySelector('.page.page-id-10')) {
// 本サイト
if (document.querySelector('.page.page-id-23')) {
  const handleUpdateText = () => {
    const changeWord = document.querySelector(".changeWord");
    if (window.innerWidth < 768) {
      changeWord.textContent = "下";
    } else {
      changeWord.textContent = "左";
    }
  };
  // 初回実行
  handleUpdateText();
  // スクリーンサイズの変更を監視
  window.addEventListener('resize', handleUpdateText);
}

// top pageのご祈祷・授与品、aboutページの画像を使ったリンク
const maskParents = document.querySelectorAll(".hover-bright");
maskParents.forEach(parent => {
  Array.from(parent.children).forEach((elem) => {
    if (elem.classList.value !== "hover") {
      elem.addEventListener("mouseenter", () => {
        elem.classList.add("hover");
      });
      elem.addEventListener("mouseleave", () => {
        elem.classList.remove("hover");
      });
    }
  });  
});

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
// const menu = document.querySelector('.hamburger-menu > .main-menu > .menu');
// const groupLink = document.querySelector('.hamburger-menu .group-link');
// let isMenuVisible = false;

menuToggleBtn.addEventListener('click', function() {
  // ボタンの表示を切り替える。
  this.classList.toggle('flag')
  // メニューを出現させる。
  globalMenu.classList.toggle('flag');
});

// スクロール・アニメーション　ふわっと現れる
const targetElems = document.querySelectorAll(".gradually-appear, .gradually-appear-long, .gradually-appear-short");
const windowHight = window.innerHeight;
document.addEventListener("scroll", function () {
  targetElems.forEach(elem => {
    // よほど長い記事の場合はこの関数で調整している。
    const haflElemHight = (argElem) => {
      if (argElem.indexOf('gradually-appear-short') !== -1) {
        return elem.clientHeight / 30;
      } else if (argElem.indexOf('gradually-appear-long') !== -1) {
        return elem.clientHeight / 20;
      } else if (argElem.indexOf('gradually-appear') !== -1) {
        return elem.clientHeight / 3;
      }
    };
    const setHight = windowHight - haflElemHight(elem.className);
    const getElemDistance = elem.getBoundingClientRect().top;
    if (setHight > getElemDistance) {
      elem.classList.add("active")
    }
  });
});

// modal about page
const modals = document.querySelectorAll(".modal"),
      openTriggers = document.querySelectorAll(".modal-open-trigger"),
      closeBtns = document.querySelectorAll(".modal-close-btn");
openTriggers.forEach((openTrigger, idx) => {
  //「開くボタン」をクリックしてモーダルを開く
  const modalOpen = () => {
    modals[idx].classList.add("activate-modal");
  };
  openTrigger.addEventListener("click", () => {
    modalOpen();
  });
  
  //「閉じるボタン」をクリックしてモーダルを閉じる
  function modalClose() {
    modals[idx].classList.remove("activate-modal");
  }
  closeBtns[idx].addEventListener("click", modalClose);
  
  //「モーダルの外側」をクリックしてモーダルを閉じる
  function modalOut(e) {
    if (e.target == modals[idx]) {
      modals[idx].classList.remove("activate-modal");
    }
  }
  addEventListener("click", modalOut);
});

// modal privacy policy
const modalsPrivacyPolicys = document.querySelectorAll(".modal-privacy-policy"),
      privacyPolicyTriggers  = document.querySelectorAll(".privacy-policy-anchor > p"),
      modalPrivacyPolicyCloseBtns = document.querySelectorAll(".modal-privacy-policy-close-btn");
privacyPolicyTriggers.forEach((trigger, idx) => {
  //「開くボタン」をクリックしてモーダルを開く
  const modalOpen = () => {
    modalsPrivacyPolicys[idx].classList.add("activate-modal-privacy-policy");
  };
  trigger.addEventListener("click", () => {
    modalOpen();
  });
  
  //「閉じるボタン」をクリックしてモーダルを閉じる
  function modalClose() {
    modalsPrivacyPolicys[idx].classList.remove("activate-modal-privacy-policy");
  }
  modalPrivacyPolicyCloseBtns[idx].addEventListener("click", modalClose);
  
  //「モーダルの外側」をクリックしてモーダルを閉じる
  function modalOut(e) {
    if (e.target == modalsPrivacyPolicys[idx]) {
      modalsPrivacyPolicys[idx].classList.remove("activate-modal-privacy-policy");
    }
  }
  addEventListener("click", modalOut);
});


// メニューを開く関数
const slideDown = (el) => {
  console.log(el);
  el.style.height = 'auto'; //いったんautoに
  let h = el.offsetHeight; //autoにした要素から高さを取得
  el.style.height = h + 'px';
  el.animate([ //高さ0から取得した高さまでのアニメーション
    { height: 0 },
    { height: h + 'px' }
  ], {
    duration: 300, //アニメーションの時間（ms）
  });
};

// メニューを閉じる関数
const slideUp = (el) => {
  el.style.height = 0;
};

const langBtn = document.getElementById("language");
langBtn.addEventListener("click", (e) => {
  e.target.parentNode.classList.toggle("active");
  const getUl = langBtn.nextElementSibling;
  if (e.target.parentNode.classList.contains("active")) {
    slideDown (getUl)
  } else {
    slideUp(getUl);
  }
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