function contactValidation(){
    var subject = document.getElementById('subject').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    var reg = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;

    if(subject.trim()==""){
        alert("Please Write the subject !!");
        return false;
    }else if(email.trim()==""){
        alert("Please write your email !!");
        return false;
    }else if(reg.test(email)==false){
        alert("Invalid email address");
        return false;
    }else if(message.trim()==""){
        alert("Please write the message !!");
        return false;
    }
    return true;
}