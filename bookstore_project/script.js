let span = document.querySelector(".up")
window.onscroll = function (){
//     console.log(this.scrollY)
// the scroll will show up when the page reach 1100
    if(this.scrollY >= 1100){
        span.classList.add("show");
    }else{
        span.classList.remove("show");
    }
}
span.onclick = function(){
    window.scrollTo({
        top:0,
        behavior:"smooth",
    })
}
let foot = document.querySelector(".foot")
foot.onclick =function(){
    window.scrollTo({
        bottom:0,
        behavior:"smooth",
    })
}