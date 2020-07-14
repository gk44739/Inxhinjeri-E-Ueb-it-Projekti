function productValidation(){
    var name = document.getElementById('productName').value;
    var price = document.getElementById('productPrice').value;
    var description = document.getElementById('productDescription').value;
    if(name.trim()==""){
        alert("Please write the product name !");
        return false;
    }else if(price.trim()==""){
        alert("Please write the product price !");
        return false;
    }else if(description.trim()==""){
        alert("Please write the product description !");
        return false;
    }
    return true;
}

function usersValidation(){
    var username = document.getElementById('usernameField').value;
    var email = document.getElementById('emailField').value;
    var password = document.getElementById('passwordField').value;

    var reg = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
    
    if(username.trim()==""){
        alert("Please write the username !");
        return false;
    }else if(email.trim()==""){
        alert("Please write the email !");
        return false;
    }else if(reg.test(email)==false){
        alert("Invalid email address !");
        return false;
    }else if(password.trim()==""){
        alert("Please write the password !");
        return false;
    }
    return true;
}