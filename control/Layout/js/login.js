let emailORphone             = document.querySelector(".login .form .email-phone input"),
    send                     = document.querySelector(".login .form .btn button"),
    email                    = document.querySelector(".login .email-phone input");
    password                 = document.querySelector(".login .password input"),
    err                      = [],
    e0                       = "";
let checkinputemailPhone     = (element)=>{
    if (element.endsWith("@gmail.com")) return;  // if (element.indexOf("@gmail.com") != -1 && element.split("@")[1] == "gmail.com") return;
    if (!isNaN(element) && element.length == 10 && element.startsWith("06")) return;  //if (!isNaN(element) && element.length == 10 && element[0] == 0) return;
    err.push("email");
}
let checkinputpassword = (element) => {
    if (element.length > 10) return;
    err.push("password");
}
send.addEventListener("click",_=>{
    abdo = email.value.slice(1);
    checkinputemailPhone(email.value);
    checkinputpassword(password.value);
    if (email.value.indexOf("06") === 0) e0 = email.value.slice(1);
    else e0 = email.value;
    if (err.length != 0){  err = [];return; }
    fetch("http://localhost/tododev/control/php/login.php",
    { method: "POST", body: loopData([e0, password.value]) })
    .then(res => res.json())
    .then(res => {
        if (res.message[0] === "found") location.href = "http://localhost/tododev/control/dach.php";
        if (res.message[0] === "not found") location.href = "http://localhost/tododev/control/notFound.php";
    });
});



