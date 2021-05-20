let asideLinks = document.querySelectorAll("aside .content-aside a");
let url = document.URL.slice(document.URL.indexOf("/control") + 8);
let showPortfoloi = document.querySelector(".portfoloi .img-p");
let logOut = document.querySelector(".portfoloi ul li:last-child button");
// function click of Element => toggle class
let toggleClass = (element, NameClass) => element.classList.toggle(NameClass);
// function  Element => remove class
let removeClass = (element, NameClass) => element.classList.remove(NameClass);
// function  add Event toggle Class
let addEventClass = (element, el, nameClass) => element.addEventListener("click", _ => toggleClass(el, nameClass));
// function  add Event toggle Class Remove
let addEventClassRemove = (element, el, nameClass) => element.addEventListener("click", _ => removeClass(el, nameClass));
// function  add Event toggle Class Add
let addEventClassAdd = (element, el, nameClass) => element.addEventListener("click", _ => addClass(el, nameClass));
// function  Element => add class
let addClass = (element, NameClass) => element.classList.add(NameClass);
// function check url of page
let checkUrl = (namePage) => document.URL.includes(namePage) === true;
let addClassEl = (namePage, element, NameClass) => checkUrl(namePage) === true ? addClass(element, NameClass) : null;
// funvtion fetch data 
let loopData = (data) => {
    let fd = new FormData();
    for (let i = 0; i < data.length;i++) {
        fd.append("data_" + i, data[i]);
    }
    return fd;
}
// tag aside
// add class "al" for link in aside
for (let i = 0; i < asideLinks.length;i++){
    if (url.startsWith(asideLinks[i].dataset.url)) {
        addClassEl(asideLinks[i].dataset.url, asideLinks[i],"al");
        break;
    }
}

// hedaer => div.portfoloi => div.img-p
// hedaer => div.portfoloi => ul
// click of div.img for toggle class in tag ul;
addEventClass(showPortfoloi, showPortfoloi.nextElementSibling.nextElementSibling,"show-ul-h");
addEventClass(showPortfoloi, showPortfoloi.nextElementSibling, "show-ul-h");
// log out 
// header => div.portfoloi => ul => button;
logOut.addEventListener("click",_=> window.location.href ="http://localhost/tododev/control/php/logOut.php");