document.getElementById('back__to__top').addEventListener("click", function (){ 
    window.scrollTo(0,0); 
});
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

