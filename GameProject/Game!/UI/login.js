const uname = document.getElementById("uname");
const password = document.getElementById("pw");
const form = document.getElementById("form");
const error = document.getElementById("error");

form.addEventListener("submit", (e) => {
  let msg = [];
  if (uname.value === "" || uname.value == null || uname.length <= 6) {
    msg.push("name");
    console.log("ddd");
  }
  if (password.value === "" || password.value == null) {
    msg.push("password");
  }

  // if (password.length >= 20) {
  //   msg.push("pw must be shorter");
  // }

  if (msg.length > 0) {
    e.preventDefault();
    error.innerText = msg.join(" and ");
  }
});
