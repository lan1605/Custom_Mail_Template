/* Rounded corners Notifications */
function round_default_noti() {
  Lobibox.notify("default", {
    pauseDelayOnHover: true,
    size: "mini",
    rounded: true,
    delayIndicator: false,
    continueDelayOnInactiveTab: false,
    position: "top right",
    msg: "Lorem ipsum dolor sit amet hears farmer indemnity inherent.",
  });
}

function round_info_noti() {
  Lobibox.notify("info", {
    pauseDelayOnHover: true,
    size: "mini",
    rounded: true,
    icon: "bx bx-info-circle",
    delayIndicator: false,
    continueDelayOnInactiveTab: false,
    position: "top right",
    msg: "Lorem ipsum dolor sit amet hears farmer indemnity inherent.",
  });
}

function round_warning_noti() {
  Lobibox.notify("warning", {
    pauseDelayOnHover: true,
    size: "mini",
    rounded: true,
    delayIndicator: false,
    icon: "bx bx-error",
    continueDelayOnInactiveTab: false,
    position: "top right",
    msg: "Lorem ipsum dolor sit amet hears farmer indemnity inherent.",
  });
}

function round_error_noti($mess) {
  Lobibox.notify("error", {
    pauseDelayOnHover: true,
    size: "mini",
    rounded: true,
    delayIndicator: false,
    icon: "bx bx-x-circle",
    continueDelayOnInactiveTab: false,
    position: "top right",
    msg: $mess,
  });
}

function round_success_noti($mess) {
  Lobibox.notify("success", {
    pauseDelayOnHover: true,
    size: "mini",
    rounded: true,
    icon: "bx bx-check-circle",
    delayIndicator: false,
    continueDelayOnInactiveTab: false,
    position: "top right",
    msg: $mess,
  });
}
