const email = document.querySelector(".input-content#email"),
  phone = document.querySelector(".input-content#phone"),
  nameInput = document.querySelector(".input-content#name"),
  notiPhone = document.querySelector(".noti#phone"),
  notiName = document.querySelector(".noti#name"),
  notiEmail = document.querySelector(".noti#email");
// Popup
const emailPopup = document.querySelector(".input-content#email-popup"),
  phonePopup = document.querySelector(".input-content#phone-popup"),
  nameInputPopup = document.querySelector(".input-content#name-popup"),
  notiPhonePopup = document.querySelector(".noti#phone-popup"),
  notiNamePopup = document.querySelector(".noti#name-popup"),
  notiEmailPopup = document.querySelector(".noti#email-popup");
function checkValidateForm(input, noti, text, regex) {
  if (input.value === "") {
    return (
      noti.classList.remove("show-noti") &&
      (document.querySelector(".btn-signup").style = "pointer-events: none;")
    );
  }
  if (input.value.match(regex)) {
    noti.classList.remove("show-noti");
    noti.textContent = "";
    document.querySelector(".btn-signup").style = "pointer-events: auto;";
  } else {
    noti.classList.add("show-noti");
    noti.textContent = text;
    document.querySelector(".btn-signup").style = "pointer-events: none;";
  }
}
phone.addEventListener("keyup", function () {
  checkValidateForm(phone, notiPhone, "Định dạng không hợp lệ.", /^\d{10}$/);
});
email.addEventListener("keyup", function () {
  checkValidateForm(
    email,
    notiEmail,
    "Email không hợp lệ.",
    /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
  );
});

nameInput.addEventListener("keyup", function () {
  checkValidateForm(
    nameInput,
    notiName,
    "Định dạng tên không hợp lệ.",
    /^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+$/g
  );
});
phonePopup.addEventListener("keyup", function () {
  checkValidateForm(
    phonePopup,
    notiPhonePopup,
    "Số điện thoại không hợp lệ.",
    /^\d{10}$/
  );
});
emailPopup.addEventListener("keyup", function () {
  checkValidateForm(
    emailPopup,
    notiEmailPopup,
    "Địa chỉ email không hợp lệ.",
    /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
  );
});

nameInputPopup.addEventListener("keyup", function () {
  checkValidateForm(
    nameInputPopup,
    notiNamePopup,
    "Định dạng tên không hợp lệ.",
    /^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+$/g
  );
});

if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}
