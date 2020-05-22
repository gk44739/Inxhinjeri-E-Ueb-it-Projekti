window.onload=auto__slider;

var sticky__header=document.getElementById('header__nav');
if(sticky__header){
var sticky = sticky__header.offsetTop;
    window.onscroll=function stickyHeader(){
        if (window.pageYOffset > sticky) {
            sticky__header.classList.add("sticky");
        } else {
            sticky__header.classList.remove("sticky");
        }
    }
}
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

var auto__slider=setInterval(autoPlay,4000);
var next__button=document.getElementById('next__button');
if(next__button){
    next__button.addEventListener("click",function(){
        clearInterval(auto__slider);
        auto__slider=setInterval(auto__slider,4000);
        var index=0;
        var home__slider__content=document.getElementsByClassName('home__slider__content');
        for(var div of home__slider__content){
            index++;
            if(div.classList.contains('visible') && index<home__slider__content.length){
                var next__div=div.nextElementSibling;
                next__div.classList.add('visible');
                div.classList.remove('visible');
                break;
            }else if(div.classList.contains('visible') && index==home__slider__content.length){
                home__slider__content[0].classList.add('visible');
                div.classList.remove('visible');
                break;
            }
        }
    });
    
}
var prev__button=document.getElementById('prev__button');
if(prev__button){
    prev__button.addEventListener("click",function(){
        var index=0;
        var home__slider__content=document.getElementsByClassName('home__slider__content');
        var last__slide=home__slider__content[home__slider__content-1];
            for(var div of home__slider__content){
                index++;
                var prev__div=div.previousElementSibling;
                if(div.classList.contains('visible') && index<home__slider__content.length){
                    prev__div.classList.add('visible');
                    div.classList.remove('visible');
                break;
                }else if(div.classList.contains('visible') && index==home__slider__content.length){
                    prev__div.classList.add('visible');
                    div.classList.remove('visible');
                    break;
                }else if(div.classList.contains('visible') && index==0){
                    home__slider__content.lasrChild.classList.add('visible');
                    div.classList.remove('visible');
                }   
            }
    });
}


var shop_list=document.getElementsByClassName('shop__thumbnails__li');
for (var index = 0; index < shop_list.length; index++) {
    const element = shop_list[index]
    if(element){
        element.addEventListener("click",function(){
            var src= element.getElementsByTagName("img")[0].src;
            document.getElementsByClassName("shop__product__img")[0].getElementsByTagName("img")[0].src = src;
            var currentactive=document.getElementsByClassName('active')[0];
            currentactive.className= currentactive.className.replace("active","");
            this.classList.add("active");
            
        });
    }
}

function autoPlay(){
    var index=0;
    var home__slider__content=document.getElementsByClassName('home__slider__content');
    for(var div of home__slider__content){
        index++;
        if(div.classList.contains('visible') && index<home__slider__content.length){
                var next__div=div.nextElementSibling;
                next__div.classList.add('visible');
                div.classList.remove('visible');
                break;
        }else if(div.classList.contains('visible') && index==home__slider__content.length){
                home__slider__content[0].classList.add('visible');
                div.classList.remove('visible');
                break;
        }
    }
}

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



