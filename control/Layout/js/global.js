// function click of Element => toggle class
let toggleClass = (element, NameClass) => element.classList.toggle(NameClass);
// function click of Element => toggle class
let removeClass = (element, NameClass) => element.classList.remove(NameClass);
// funvtion fetch data 
let loopData = (data) => {
    let fd = new FormData();
    for (i = 0; i < data.length;i++) {
        fd.append("data_" + i, data[i]);
    }
    return fd;
}