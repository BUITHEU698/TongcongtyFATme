//click icon to show password
function showPassword(id, el) {
  let x = document.getElementById(id);
  if (x.type === "password") {
    x.type = "text";
    el.className = "fas fa-eye showpwd";
  } else {
    x.type = "password";
    el.className = "fas fa-eye-slash showpwd";
  }
}
//kiểm tra mật khẩu trùng khớp
function checkPassword() {
  let password = document.getElementById("passwd1");
  let confirmPassword = document.getElementById("passwd2");
  if (password != confirmPassword) {
    document.getElementsByClassName("error").innerHTML = "Mật khẩu không trùng khớp";
    return false;
  } else {
    document.getElementsByClassName("error").innerHTML = "";
    return true;
  }
}
