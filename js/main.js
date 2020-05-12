document.getElementById('back__to__top').addEventListener("click", function (){ 
    window.scrollTo(0, 0); 
});
var ontop=document.getElementById('back__to__top');
window.addEventListener('scroll', function() {
    if(window.pageYOffset > 500){
        ontop.classList.add("on__top__fixed");
    }else{
        ontop.classList.remove("on__top__fixed");
    }
});

