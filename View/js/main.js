


var loginbtn=document.getElementById('login__rid');
if(loginbtn){
    loginbtn.addEventListener("click", function (){
        document.getElementsByClassName('forgot_password__form')[0].style.display='none';
        document.getElementsByClassName('signup__description')[0].style.display='none';
        document.getElementsByClassName('signup__form')[0].style.display='none';
        document.getElementsByClassName('login__description')[0].style.display='flex';
        document.getElementsByClassName('login__form')[0].style.display='flex';
    });
}

var signupbtn=document.getElementById('signup__rid');
if(signupbtn){
    signupbtn.addEventListener("click", function (){
        document.getElementsByClassName('forgot_password__form')[0].style.display='none';
        document.getElementsByClassName('login__description')[0].style.display='none';
        document.getElementsByClassName('login__form')[0].style.display='none';
        document.getElementsByClassName('signup__description')[0].style.display='flex';
        document.getElementsByClassName('signup__form')[0].style.display='flex';

    });
}

var signupbtn=document.getElementById('forgot__rid');
if(signupbtn){
    signupbtn.addEventListener("click", function (){
        document.getElementsByClassName('forgot_password__form')[0].style.display='flex';
        document.getElementsByClassName('login__description')[0].style.display='none';
        document.getElementsByClassName('login__form')[0].style.display='none';
        document.getElementsByClassName('signup__description')[0].style.display='flex';
        document.getElementsByClassName('signup__form')[0].style.display='none';

    });
}

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

window.onload=function(){
   var onload_slider_class = document.querySelectorAll('.home__slider__content')[0];
   if(onload_slider_class){
        onload_slider_class.classList.add('visible');
   }
    var slideTime=setInterval(autoPlay,6000);
    var next__button=document.getElementById('next__button');
    if(next__button){
        next__button.addEventListener("click",function(){
            clearInterval(slideTime);
            slideTime=setInterval(autoPlay,4000);
            var index=0;
            var home__slider__content=document.getElementsByClassName('home__slider__content');
            for(var div of home__slider__content){
                index++;
                var next__div=div.nextElementSibling;
                if(div.classList.contains('visible') && index<home__slider__content.length){
                    next__div.classList.add('visible');
                    div.classList.remove('visible');
                    break;
                }
                else if(div.classList.contains('visible') && index==home__slider__content.length){
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
            clearInterval(slideTime);
            slideTime=setInterval(autoPlay,4000);
            var index=0;
            var home__slider__content=document.getElementsByClassName('home__slider__content');
            var last__slide=home__slider__content[home__slider__content.length-1];
                for(var div of home__slider__content){
                    index++;
                    prev__div=div.previousElementSibling;
                    if(div.classList.contains('visible') && index<home__slider__content.length){
                        prev__div=div.previousElementSibling;
                        if(prev__div==null){
                            last__slide.classList.add('visible');
                            div.classList.remove('visible');
                            break;
                        }else{
                            prev__div.classList.add('visible');
                            div.classList.remove('visible');
                            break;
                        }
                    }else if(div.classList.contains('visible') && index==home__slider__content.length){
                        prev__div.classList.add('visible');
                        div.classList.remove('visible');
                        break;
                    }
                }
        });
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
}

var shop_list=document.getElementsByClassName('shop__thumbnails__li');
for (var index = 0; index < shop_list.length; index++) {
    const element = shop_list[index];

    if(element){
        element.addEventListener("click",function(){
            var src= element.getElementsByTagName("img")[0].src;
            var img = document.getElementsByClassName("shop__product__img")[0].getElementsByTagName("img")[0].src = src;
            var currentactive=document.getElementsByClassName('active')[0];
            currentactive.className= currentactive.className.replace("active","");
            this.classList.add("active");
            
        });
    }
}

var minus=document.getElementById('minus');
var plus=document.getElementById('plus');
if(minus){
    minus.addEventListener("click",function(){
        var inputval=document.getElementsByClassName('costum__input')[0].getElementsByTagName('input')[0];
        if(inputval.value<=1){
            return
        }else{
            inputval.value = parseInt(inputval.value) - 1;
        }
    });
}
if(plus){
    plus.addEventListener("click",function(){
        var inputval=document.getElementsByClassName('costum__input')[0].getElementsByTagName('input')[0];
        inputval.value = parseInt(inputval.value) + 1;
    });

}

var to__products=document.getElementById('to__products');
var to__products__arrow=document.getElementById('to__products__arrow')
if(to__products__arrow){
    to__products__arrow.addEventListener("click", function (){ 
        to__products.scrollIntoView();
    });
}

var back__to__top=document.getElementById('back__to__top');
if(back__to__top){
    back__to__top.addEventListener("click", function (){ 
        window.scrollTo(0,0)
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
var input_file_photo=document.querySelector("#photo");
if(input_file_photo){
    input_file_photo.addEventListener('change', function() {
        var file = this.files[0];
        var allowed__types = [ 'image/jpeg', 'image/png'];
        
        if(allowed__types.indexOf(file.type) == -1) {
            alert('Format not allowed select .png or .jpeg !');
            return;
        }

        if(file.size > 2*1024*1024) {
            alert('Exceeded size 2MB select lower size !');
            return;
        }

        _PREVIEW_URL = URL.createObjectURL(file);

        document.querySelector("#preview-image").setAttribute('src', _PREVIEW_URL);
        document.querySelector("#preview-image").style.display = 'flex';
    });
}
var input = document.getElementById("searchProduct");
    input.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
            document.getElementById("searchButton").click();
        }else if(event.keyCode === 8){
            document.getElementById("searchButton").click();
        }

});
function search(){
    var input = document.getElementById("searchProduct").value.trim();
    if(input == ""){
        alert("Please write the product title");
    } else {
        var products=document.getElementsByClassName('home__product');
        var products_shop=document.getElementsByClassName('shop__product');
        if(products){
            products=document.getElementsByClassName('home__product');
            for(var i=0;i<products.length;i++){
                if(products[i].children[0].children[1].children[0].textContent.trim().toLowerCase().includes(input.toLowerCase())){
                    products[i].style.display="block";
                    window.scrollTo(0, products[i].offsetTop-300);
                } else {
                    products[i].style.display="none";
                }
            }
        }
        if(products_shop){
            for(var i=0;i<products_shop.length;i++){
                if(products_shop[i].children[0].children[1].children[0].textContent.trim().toLowerCase().includes(input.toLowerCase())){
                    products_shop[i].style.display="block";
                    window.scrollTo(0, products_shop[i].offsetTop-300);
                } else {
                    products_shop[i].style.display="none";
                }
            }
        }
            
        
    }
}
