let e_p = document.querySelector(".sing-in .container .form .e-p input");
let pas = document.querySelector(".sing-in .container .form .password input");
let btn_send = document.querySelector(".sing-in .container .form .btn button");
let err = [];
let sec = [];
import * as all from "./singUp.js";
// function for check input of phone or email
let checkinputemailPhone = (element) => {
    if (element.value.length != "" && element.value.includes("@") && element.value.includes(".")) { sec.push(element.value); return };
    if (!isNaN(element.value) && element.value.length == 10 && element.value.startsWith("06")) { sec.push(element.value.replace("0", "")); return };
    all.outErr(all.printErrEmail);
    err.push("email");
}
// function for check input of password
let checkinputpassword = (element) => {
    if (element.value.length >= 10) {sec.push(element.value); return;}
    all.outErr(all.printErrPassword);
    err.push("password");
}
// add event click " add url  " for button btn_back
addUrl(all.btn_back, "http://localhost/tododev/site/");
addUrl(all.spanUrl, "http://localhost/tododev/site/singUp.php");
btn_send.addEventListener("click",_=>{
    all.errBox.innerHTML = null;
    checkinputemailPhone(e_p);
    checkinputpassword(pas);
    if (err.length != 0) { err = []; all.removeErr(); return; }
    removeClass(all.lodding, "app-o");
    fetch("http://localhost/tododev/site/php/login.php",
        { method: "POST", body: loopData(sec) })
        .then(res => res.json())
        .then(res => {
            console.log(res.message);
            if (res.message == "password"){
                window.location.href = "http://localhost/tododev/site/notFound.php?password=" + pas.value;
                return;
            }
            if (res.message == "not found") {
                window.location.href = "http://localhost/tododev/site/notFound.php?" + e_p.value;
                return;
            }
            if (res.message == "found") {
                window.location.href = "http://localhost/tododev/site/to-do-today.php";
                return;
            }
            addClass(all.lodding, "app-o");
        });
    sec = [];
});