
document.addEventListener("DOMContentLoaded", () => {
  const menuToggle = document.getElementById("menu-burger");
  const menuList = document.getElementById("menu-burger-list");
  const html = document.documentElement;

  menuToggle.addEventListener("click", () => {
      menuList.classList.toggle("active");
      html.classList.toggle("no-scroll");
  });

});