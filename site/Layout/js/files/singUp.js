let showForm        = document.querySelector(".sing-up .container .form");
let email           = document.querySelector(".sing-up .container .form .email input");
let phone           = document.querySelector(".sing-up .container .form .phone input");
let password        = document.querySelector(".sing-up .container .form .password input");
let full_name       = document.querySelector(".sing-up .container .form .full-name input");
let f_password      = document.querySelector(".sing-up .container .form .f-password input");
let btn_send        = document.querySelector(".sing-up .container .form .btn button");
let errBox          = document.querySelector(".sing-up .container .err");
let lodding          = document.querySelector(".sing-up .container .form .lod");
let iconClose       = `<i class="fas fa-times"></i>`;
let err             = [];
let sec             = [];
// object print err email for body
const printErrEmail = {
    MyMethod: _ => `<div>err for input email ${iconClose}</div>`,
} 
// object print err full name for body
const printErrFull_name  = {
    MyMethod: _ => `<div>err for input full name ${iconClose}</div>`,
}
// object print err phone for body
const printErrPhone = {
    MyMethod: _ => `<div>err for input phone ${iconClose}</div>`,
}
// object print err Password for body
const printErrPassword = {
    MyMethod: _ => `<div>err for input password ${iconClose}</div>`,
}
// object print err verify Password for body
const printErrFpassword = {
    MyMethod: _ => `<div>err for input verify password ${iconClose}</div>`,
}
// function out err for body
let outErr = (e) => errBox.innerHTML += e.MyMethod();
// function of loop remove err 
let removeErr = _ => [...errBox.children].forEach(er => er.addEventListener("click", _ => er.remove()));
// funhction check input email
let checkEmail = _ =>{
    if (email.value.length != "" && email.value.includes("@") && email.value.includes(".")) { sec.push(email.value);return};
    outErr(printErrEmail);
    err.push("name");
}
// funhction check input full name 
let checkFull_name = _ => {
    if (full_name.value.length > 8 && full_name.value.includes(" ")) { sec.push(full_name.value.replace(" ", "-")); return};
    outErr(printErrFull_name);
    err.push("full");
}
// funhction check input number phone
let checkPhone = _ => {
    if (!isNaN(phone.value) && phone.value.length == 10 && phone.value.startsWith("06")) { sec.push(phone.value.replace("0", "")); return };
    outErr(printErrPhone);
    err.push("phone");
}
// funhction check input number password
let checkPassword = _ => {
    if (password.value.length >= 10) { sec.push(password.value); return };
    outErr(printErrPassword);
    err.push("password");
}
// funhction check input number verify password
let checkFpassword = _ => {
    if (f_password.value != "" && f_password.value == password.value) { sec.push(f_password.value); return };
    outErr(printErrFpassword);
    err.push("fpassword");
}
btn_send.addEventListener("click", _ => {
    errBox.innerHTML = null;
    checkFull_name();
    checkEmail();
    checkPhone();
    checkPassword();
    checkFpassword();
    if (err.length != 0) { err = [];removeErr();return;}
    removeClass(lodding,"app-o");
    fetch("http://localhost/tododev/site/php/createAccount.php",
        { method: "POST", body: loopData(sec) })
    .then(res => res.json())
    .then(res => {
        console.log(res.message);
        addClass(lodding, "app-o");
        if (res.message == "Found"){
            alert("your acount in create");
            return;
        }
        if (res.message == "add") {
            window.Location.href = "http://localhost/tododev/site/to-do-today.php";
            return;
        }
        if (res.message == "Error Server") {
            alert("your acount in create");
            return;
        }

    });
    sec =[];
});
(_=>{
    removeClass(showForm,"animate-t");
})();