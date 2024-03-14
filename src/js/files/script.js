// Підключення функціоналу "Чертоги Фрілансера"
import { isMobile } from "./functions.js";
// Підключення списку активних модулів
import { flsModules } from "./modules.js";


// let scrollpos = window.scrollY
// let lastScroll = 0;
// const scrollChange = 80
// const defaultOffset = 80;
// const add_class_on_scroll = () => header.classList.add("_header-bg")
// const remove_class_on_scroll = () => header.classList.remove("_header-bg")
// const header = document.querySelector('.header');

// const scrollPosition = () => window.pageYOffset || document.documentElement.scrollTop;
// const containHide = () => header.classList.contains('_hide');

// window.addEventListener('scroll', () => {
//   if (scrollPosition() > lastScroll && !containHide() && scrollPosition() > defaultOffset) {
//     //scroll down
//     header.classList.add('_hide');
//   } else if (scrollPosition() < lastScroll && containHide()) {
//     //scroll up
//     header.classList.remove('_hide');
//   }
//   lastScroll = scrollPosition();
// })

// window.addEventListener('scroll', function () {
//   scrollpos = window.scrollY;

//   if (scrollpos >= scrollChange) {
//     add_class_on_scroll()
//   } else {
//     remove_class_on_scroll()
//   }
// })



// document.querySelector('.support__social-link').addEventListener('mouseenter', function() {
//   this.parentNode.classList.add('hhover');
// });

// var links = document.querySelectorAll('.support__social-link');

// for (var i = 0; i < links.length; i++) {
//   links[i].addEventListener('mousemove', function () {
//     this.parentNode.classList.add('main');
//   });
// }


/* Код для ссылок-при ховере на иконку-родительскому классу задается класс hhv  */

// const links = document.querySelectorAll(".support__social-link");

// for (let i = 0; i < links.length; i++) {
//   links[i].addEventListener("mouseenter", function () {
//     this.parentNode.classList.add("hhv");
//   });

//   links[i].addEventListener("mouseleave", function () {
//     this.parentNode.classList.remove("hhv");
//   });
// }


// При прокрутке стрелка вниз изчезает

window.onscroll = function () {
  const arrow = document.querySelector('.intro__arrow-down');
  if (window.scrollY > 10) {
    arrow.classList.add('hidden');
  } else {
    arrow.classList.remove('hidden');
  }
};


// const indicators = document.querySelectorAll(".fp-bullet");
// const sections = document.querySelectorAll("section");

// const resetCurrentActiveIndicator = () => {
//   const activeIndicator = document.querySelector(".active");
//   activeIndicator.classList.remove("active");
// };

// const onSectionLeavesViewport = (section) => {
//   const observer = new IntersectionObserver(
//     (entries) => {
//       entries.forEach((entry) => {
//         if (entry.isIntersecting) {
//           resetCurrentActiveIndicator();
//           const element = entry.target;
//           const indicator = document.querySelector(`a[href='#${element.id}']`);
//           indicator.classList.add("active");
//           return;
//         }
//       });
//     },
//     {
//       root: null,
//       rootMargin: "0px",
//       threshold: 0.75
//     }
//   );
//   observer.observe(section);
// };

// indicators.forEach((indicator) => {
//   indicator.addEventListener("click", function (event) {
//     event.preventDefault();
//     document
//       .querySelector(this.getAttribute("href"))
//       .scrollIntoView({ behavior: "smooth" });
//     resetCurrentActiveIndicator();
//     this.classList.add("active");
//   });
// });

// sections.forEach(onSectionLeavesViewport);




// (function () {
//   var current = location.pathname.split('/')[1];
//   if (current === "") return;
//   var menuItems = document.querySelectorAll('.fp-bullet a');
//   for (var i = 0, len = menuItems.length; i < len; i++) {
//       if (menuItems[i].getAttribute("href").indexOf(current) !== -1) {
//           menuItems[i].className += "active";
//       }
//   }
// })();



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