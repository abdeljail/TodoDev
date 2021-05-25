let url = document.URL.slice(document.URL.indexOf("/site") + 6);
let h1 = document.querySelector("h1");
// function click of Element => toggle class
let toggleClass         = (element, NameClass) => element.classList.toggle(NameClass);
// function  Element => remove class
let removeClass         = (element, NameClass) => element.classList.remove(NameClass);
// function  add Event toggle Class
let addEventClass       = (element, el, nameClass) => element.addEventListener("click", _ => toggleClass(el, nameClass));
// function  add Event toggle Class Remove
let addEventClassRemove = (element, el, nameClass) => element.addEventListener("click", _ => removeClass(el, nameClass));
// function  add Event toggle Class Add
let addEventClassAdd    = (element, el, nameClass) => element.addEventListener("click", _ => addClass(el, nameClass));
// function  Element => add class
let addClass = (element, NameClass) => element.classList.add(NameClass);
// function  Element => add class
let addUrl = (element, url) => element.addEventListener("click" ,_=> window.location.href = url);
// function check url for add class in tage h1
let urlH1 = _ => addClass(h1,"h1");
document.URL.split("=")[1] === "France" ? urlH1() : null
// funvtion fetch data 
let loopData = (data) => {
    let fd = new FormData();
    for (let i = 0; i < data.length; i++) {
        fd.append("data_" + i, data[i]);
    }
    return fd;
}
