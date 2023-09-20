const passwordInput = document.querySelector("#passwordInput"),
  $ = document.querySelector.bind(document);
const icShowPassword = $(".icon-password");
passwordInput.addEventListener("keyup", function () {
  if (passwordInput.value === "") {
    return icShowPassword.classList.remove("show");
  } else {
    icShowPassword.classList.add("show");
  }
  //   if (passwordInput.value.match(/^[A-Za-z]\w{7,14}$/))
});
icShowPassword.addEventListener("click", function () {
  if (passwordInput.type == "password") {
    passwordInput.type = "text";
    icShowPassword.src = "./assets/images/icons/hide.png";
  } else {
    passwordInput.type = "password";
    icShowPassword.src = "./assets/images/icons/visible.png";
  }
});
