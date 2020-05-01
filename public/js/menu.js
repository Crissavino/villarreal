function myFunction() {

  const menu = document.querySelector("#hamburgerMenu");
  if (menu.getAttribute('style') === "display: flex !important") {
    menu.removeAttribute('style')
    menu.setAttribute('style', 'display: none !important')
  } else {
    menu.removeAttribute('style')
    menu.setAttribute('style', 'display: flex !important')
  }

}