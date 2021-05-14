let showViewAll = document.querySelector(".box-content .header span");
let state = document.querySelector(".state");

addClass(state,"show-state-d");
state.firstElementChild.firstElementChild.lastElementChild.addEventListener("click", _ => removeClass(state, "show-state-d"));
// div/dach => div.content => div.hrader => span
// div/dach => div.content => div.hrader => div.box
// click of span for toggle class in div.box
showViewAll.addEventListener("click",_=> toggleClass(showViewAll.parentElement.lastElementChild, "show-box-s"));
