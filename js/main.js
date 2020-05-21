var back__to__top=document.getElementById('back__to__top');
if(back__to__top){
    back__to__top.addEventListener("click", function (){ 
        window.scrollTo(0,0); 
    });
}
var ontop=document.getElementById('back__to__top');
var prevScrollpos = window.pageYOffset;
window.addEventListener('scroll', function() {
    var currentScrollPos = window.pageYOffset;
    if(currentScrollPos > prevScrollpos){
        ontop.classList.add("on__top__fixed");
    }else{
        ontop.classList.remove("on__top__fixed");
    }
    prevScrollpos = currentScrollPos;
    
});

var loginbtn=document.getElementById('login__rid');
if(loginbtn){
    loginbtn.addEventListener("click", function (){
        document.getElementsByClassName('signup__description')[0].style.display='none';
        document.getElementsByClassName('signup__form')[0].style.display='none';
        document.getElementsByClassName('login__description')[0].style.display='flex';
        document.getElementsByClassName('login__form')[0].style.display='flex';
    });
}

var signupbtn=document.getElementById('signup__rid');
if(signupbtn){
    signupbtn.addEventListener("click", function (){
        document.getElementsByClassName('login__description')[0].style.display='none';
        document.getElementsByClassName('login__form')[0].style.display='none';
        document.getElementsByClassName('signup__description')[0].style.display='flex';
        document.getElementsByClassName('signup__form')[0].style.display='flex';

    });
}

