function productValidation(){
    var name = document.getElementById('productName').value;
    var price = document.getElementById('productPrice').value;
    var description = document.getElementById('productDescription').value;
    
    // var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png"];    
    // var arrInputs = document.getElementsByClassName("img_validate");
    // for (var i = 0; i < arrInputs.length; i++) {
    //     var oInput = arrInputs[i];
    //     if (oInput.type == "file") {
    //         var sFileName = oInput.value;
    //         if (sFileName.length > 0) {
    //             var blnValid = false;
    //             for (var j = 0; j < _validFileExtensions.length; j++) {
    //                 var sCurExtension = _validFileExtensions[j];
    //                 if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
    //                     blnValid = true;
    //                     break;
    //                 }
    //             }
    //             if (!blnValid) {
    //                 alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions);
    //                 return false;
    //             }
    //         }
    //     }
    // }

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

function employeValidation(){
    var employname = document.getElementById('employeName').value;
    var employsurname = document.getElementById('employeSurname').value;
    var position = document.getElementById('employePosition').value;
    
    // var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png"];    
    // var arrInputs = document.getElementsByClassName("img_validate");
    // for (var i = 0; i < arrInputs.length; i++) {
    //     var oInput = arrInputs[i];
    //     if (oInput.type == "file") {
    //         var sFileName = oInput.value;
    //         if (sFileName.length > 0) {
    //             var blnValid = false;
    //             for (var j = 0; j < _validFileExtensions.length; j++) {
    //                 var sCurExtension = _validFileExtensions[j];
    //                 if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
    //                     blnValid = true;
    //                     break;
    //                 }
    //             }
    //             if (!blnValid) {
    //                 alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions);
    //                 return false;
    //             }
    //         }
    //     }
    // }

    if(employname.trim()==""){
        alert("Please write the employee name !");
        return false;
    }else if(employsurname.trim()==""){
        alert("Please write the employee surname !");
        return false;
    }else if(position.trim()==""){
        alert("Please write the employee work position !");
        return false;
    }
    return true;
}