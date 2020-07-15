function kycu() {
  var user = document.getElementById("username").value;
  var pass = document.getElementById("pass").value;

  if (user.trim() == "") {
      alert("Please type your username");
      return false;
  }else if(pass.trim() == ""){
      alert("Please type your password");
      return false;
  }
}

function regjistrohu() {
    var user = document.getElementById("userReg").value;
    var pass = document.getElementById("passReg").value;
    var pass2 = document.getElementById("passConReg").value;

    var doc = document.getElementById("email").value;
    var reg = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;

    if(user.trim() == "") {
        alert("Type your username");
        return false;
    }else if(doc.trim() == ""){
        alert("Type your email");
        return false;
    }else if(reg.test(doc) == false){
        alert("Invalid email adress");
        return false;
    }else if(pass.trim() == ""){
      alert("Type your password");
      return false;
    }else if(pass2.trim() == ""){
      alert("Confirm your password");
      return false;
    }else if(pass != pass2){
      alert("Password not matching !!");
      return false;
    }  

    return true;
}

function forgotPassword(){
    var username = document.getElementById('usernameForgot').value;
    var email = document.getElementById('emailForgot').value;
    var reg = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;

    if(username.trim()==""){
      alert("Please write your username !");
      return false;
    }else if(email.trim()==""){
      alert("Please write your email !!");
      return false;
    }else if(reg.test(email)==false){
      alert("Invalid email address");
      return false;
    }else {
      alert("We will send you an email to change your password");
      return true;
    }
}