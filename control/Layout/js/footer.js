let lang                = document.querySelector("footer .lang div:first-child"),
    parentSpanLang      = lang.nextElementSibling,
    boxSpanLang         = parentSpanLang.children;
// function click of Element => toggle class
let toggleClass = (element, NameClass) => element.classList.toggle(NameClass);
// function loop of children
let loopChildrenLang = children => [...children].forEach(child => child.addEventListener("click", _ => {
    if (lang.lastElementChild.innerHTML === child.innerHTML) { removeClass(parentSpanLang, "select-show"); return; }
    window.location.href = document.URL.split("?")[0] + "?lang=" + child.dataset.set ;
}));
loopChildrenLang(boxSpanLang);
lang.addEventListener("click", _ => { toggleClass(parentSpanLang,"select-show"); });