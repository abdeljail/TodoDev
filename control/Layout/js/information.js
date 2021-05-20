let showInputimg    = document.querySelector(".btn-change button");
let overly          = document.querySelector(".overly");
let inputChange          = document.querySelector(".input-change");
addEventClass(showInputimg, overly ,"show-overly");
addEventClass(showInputimg, inputChange,"show-input-change");
addEventClassRemove(inputChange.firstElementChild.firstElementChild.lastElementChild, inputChange,"show-input-change");
addEventClass(inputChange.firstElementChild.firstElementChild.lastElementChild, overly,"show-overly");
addEventClassRemove(overly, inputChange,"show-input-change");
addEventClassRemove(overly, overly, "show-overly");