function onMenuClick() {
  const nav = document.querySelector("#nav-container");
  const menuBtn = document.querySelector("#menu-button");
  if (nav.classList.contains("expanded")) {
    nav.classList.remove("expanded");
    nav.classList.add("collapsed");
    menuBtn.innerHTML = 'Menu <i class="fa fa-plus-circle" aria-hidden="true"></i>';
  } else {
    nav.classList.add("expanded");
    nav.classList.remove("collapsed");
    menuBtn.innerHTML = 'Menu <i class="fa fa-minus-circle" aria-hidden="true"></i>';
  }
}
