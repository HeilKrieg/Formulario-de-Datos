let inputModificarLabel = document.querySelectorAll(".cambioInput");

for (let i = 0; i < inputModificarLabel.length; i++) {
  inputModificarLabel[i].addEventListener("focus", function () {
    let spanModificar =
      inputModificarLabel[i].nextElementSibling.nextElementSibling;
    spanModificar.style =
      "color:black;opacity:1;transform: scale(0.75) translateY(-100%) translateX(-30px)";
  });

  inputModificarLabel[i].addEventListener("blur", function () {
    let spanModificar =
      inputModificarLabel[i].nextElementSibling.nextElementSibling;
    spanModificar.style =
      "padding:5px;pointer-events: none;position:absolute;left:0;top: 17px;;transition: 0.2s;transition-timing-function: ease;transition-timing-function: cubic-bezier(0.25, 0.1, 0.25, 1);opacity:0.5;";
  });
}
