/*
 * Theme Name: Salvi Theme Sample
 * Author:  Mateus Salvi
 * Author URI: https://igonnabe10upper.salvimateus.com
 */

/*
 * ----------------------------# Functions #----------------------------
 **/

/*
 * ----------------------------# Dark mode #----------------------------
 **/

const $salvHtml = document.querySelector("html");
const $salvDarkModeWrap = document.querySelector("#js-dark-mode-wrap");
const $salvDarkModeToggle = document.querySelector("#js-dark-mode-toggle");

$salvDarkModeWrap.addEventListener("click", function () {
  if (Cookies.get("js-dark-mode-toggle")) {
    $salvDarkModeWrap.classList.remove("is-dark-mode--on");
  } else {
    $salvDarkModeWrap.classList.add("is-dark-mode--on");
  }
});

$salvDarkModeToggle.addEventListener("change", function () {
  $salvHtml.classList.toggle("t-dark-mode");
  if (Cookies.get("js-dark-mode-toggle")) {
    Cookies.remove("js-dark-mode-toggle");
  } else {
    Cookies.set("js-dark-mode-toggle", true);
  }
});
