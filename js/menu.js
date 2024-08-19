let menu = document.querySelector(".image-menu");
menu.addEventListener("click", function () {
  let header = document.querySelector(".header");
  let main = document.querySelector(".main");
  let banner = document.querySelector(".banner");
  let header1 = document.querySelector(".header-cambio");
  let main1 = document.querySelector(".main-cambio");
  let banner1 = document.querySelector(".banner-cambio");
  let imgMenu = document.querySelector("#menuLateral");

  if (header1) {
    header1.className = "header";
    main1.className = "main";
    banner1.className = "banner";
    imgMenu.style = "background-color:white;";
  }

  if (header) {
    header.className = "header-cambio";
    main.className = "main-cambio";
    banner.className = "banner-cambio";
    imgMenu.style = "background-color:rgb(202, 226, 246);";
  }
});
