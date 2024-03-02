const burger = document.querySelector('.header__burger');
const lines = document.querySelectorAll('.burger__line');

function toggleBurger() {
  lines.forEach((line) => line.classList.toggle('active'));
}

burger.addEventListener('click', toggleBurger);