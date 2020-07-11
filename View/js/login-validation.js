var username = "";
var password = "";
var email = "";

function kycu() {
  var user = document.getElementById("username").value;
  var pass = document.getElementById("pass").value;

  if (user.trim() == "" || pass.trim() == "") {
    alert("Please type your username or password");
    return false;
  }
}

function regjistrohu() {
  var user = document.getElementById("userReg").value;
  if (user.trim() == "") {
    alert("Type your username");
  } else {
    username = user;
  }

  var pass = document.getElementById("passReg").value;
  var pass2 = document.getElementById("passConReg").value;

  if (pass.trim() == "" || pass2.trim() == "") {
    alert("Type your password");
  } else {
    if (pass == pass2) {
      password = pass;
    } else {
      alert("Password not matching");
    }
  }

  var doc = document.getElementById("email").value;
  var reg = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;

  if (doc.trim() == "") {
    alert("Type your email");
  } else {
    if (reg.test(doc) == false) {
      alert("Invalid email adress");
    } else {
      email == doc;
    }
  }
}
