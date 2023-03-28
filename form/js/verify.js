var signUpBtn = document.querySelector(".signUp");
var logInBtn = document.querySelector(".logIn");

signUpBtn.addEventListener("click", signUpcheck, false);
logInBtn.addEventListener("click", logIncheck, false);

var emailStr = document.querySelector(".email").value;
var passwordStr = document.querySelector(".password").value;
var account = {}; //輸入的資料，填入空物件
account.email = emailStr; //填入的 email
account.password = passwordStr; //填入的密碼