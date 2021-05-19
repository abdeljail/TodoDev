let showSelect = document.querySelector(".box-input .select-year");
addEventClass(showSelect, showSelect.lastElementChild, "show-box-select");
[...showSelect.lastElementChild.children].forEach(child => {
    child.addEventListener("click",_=>{
        showSelect.firstElementChild.firstElementChild.innerHTML = child.innerHTML;
    })
});
