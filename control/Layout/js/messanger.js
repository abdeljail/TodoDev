let showBtnRemove = document.querySelectorAll(".send .content-send .body .btn");
let showBtnRemove = document.querySelectorAll(".send .content-send .all-users .content-all .user");
showBtnRemove.forEach(child => addEventClass(child, child.firstElementChild, "show-option"));