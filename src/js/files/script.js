// Підключення функціоналу "Чертоги Фрілансера"
import { isMobile } from "./functions.js";
// Підключення списку активних модулів
import { flsModules } from "./modules.js";

/* Код для ссылок-при ховере на иконку-родительскому классу задается класс hhv  */

const links = document.querySelectorAll(".support__social-link");

for (let i = 0; i < links.length; i++) {
  links[i].addEventListener("mouseenter", function () {
    this.parentNode.classList.add("hhv");
  });

  links[i].addEventListener("mouseleave", function () {
    this.parentNode.classList.remove("hhv");
  });
}


// При прокрутке стрелка вниз изчезает

// window.onscroll = function () {
//   const arrow = document.querySelector('.intro__arrow-down');
//   if (window.scrollY > 100) {
//     arrow.classList.add('hidden');
//   } else {
//     arrow.classList.remove('hidden');
//   }
// };


/*menu*/
var lastId,
  topMenu = $("#fp-bullets"),
  topMenuHeight = topMenu.outerHeight() + 15,
  // All list items
  menuItems = topMenu.find("a"),
  // Anchors corresponding to menu items
  scrollItems = menuItems.map(function () {
    var item = $($(this).attr("href"));
    if (item.length) {
      return item;
    }
  });

// Bind to scroll
$(window).scroll(function () {
  // Get container scroll position
  var fromTop = $(this).scrollTop() + topMenuHeight;

  // Get id of current scroll item
  var cur = scrollItems.map(function () {
    if ($(this).offset().top < fromTop)
      return this;
  });
  // Get the id of the current element
  cur = cur[cur.length - 1];
  var id = cur && cur.length ? cur[0].id : "";

  if (lastId !== id) {
    lastId = id;
    // Set/remove active class
    menuItems
      .parent().removeClass("active")
      .end().filter("[href='#" + id + "']").parent().addClass("active");
  }
});


// Присвоим попапам и линкам на них порядковые номера


const objPopupVideoLink = document.querySelectorAll('.video-popup-video');
const objPopupVideo = document.querySelectorAll('.video-popup');



objPopupVideoLink.forEach((element, i) =>
  element.setAttribute('data-popup', '#videos-popup-video' + '-' + i));

for (var i = 0, b; b = document.getElementById('videos-popup-video'); ++i) {
  b.id += '-' + i;
}


