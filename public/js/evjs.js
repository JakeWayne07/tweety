//gsap.fromTo(".spacer24", {scale: 1.3}, {scale: 1, duration: 3, ease: "power1"});

let navLinks = document.getElementsByClassName("uppercase");
let close = document.querySelector(".close");
let sidebar = document.querySelector(".sidebar");
let linkitems = document.querySelector(".linkitems");
let disabled = document.querySelectorAll(".disabled");
let thislink = [];





let mouseCursor = document.querySelector("#cursor");

TweenLite.set(mouseCursor, {
    xPercent: -50,
    yPercent: -50
});

window.addEventListener("mousemove", cursor);

function cursor(e){
    TweenLite.to(mouseCursor, 0, {
        x: e.clientX,
        y: e.clientY
    });
}








window.addEventListener("load", function () {
    TweenMax.to(linkitems, {paddingLeft: 20, paddingRight:20 ,duration: 1, ease: Power3.easeInOut});
    TweenMax.to(navLinks, {visibility: "hidden" ,duration: .8, ease: Power3.easeIn});
    takeLinks();
    for (let i=0; i < disabled.length; i++){
        disabled[i].removeAttribute("href");
    }
});

particlesJS.load('particles-js', 'particles.json');

close.addEventListener("click", function () {
    if (sidebar.clientWidth === 80){
        TweenMax.to(sidebar, {width: "300px", duration: 1, ease: Power3.easeInOut});
        TweenMax.to(navLinks, {opacity: "100%" ,duration: 1, ease: Power3.easeInOut, delay: .2});
        TweenMax.to(navLinks, {visibility: "visible" ,duration: .5, ease: Power3.easeIn});
        showMenu();
        hideMenu();

        for (let i=0; i < disabled.length; i++){
            disabled[i].setAttribute('href', thislink[i]);
        }

    }else {
        TweenMax.to(sidebar, {width: "80px", duration: 1, ease: Power3.easeInOut});
        TweenMax.to(linkitems, {paddingLeft: 20, paddingRight:20 ,duration: 1, ease: Power3.easeInOut});
        TweenMax.to(navLinks, {opacity: 0 ,duration: .5, ease: Power3.easeIn});
        TweenMax.to(navLinks, {visibility: "hidden" ,delay: .6, ease: Power3.easeIn});
        for (let i=0; i < disabled.length; i++){
            disabled[i].removeAttribute('href');
        }
    }
});

function showMenu() {
    for ( let i=0; i < navLinks.length; i++ ){
        navLinks[i].addEventListener("mouseover", function () {
            TweenMax.to(navLinks[i],{letterSpacing: ".08rem", duration: .5,ease: Power3.easeOut});
            TweenMax.to(navLinks[i],{color: "#4285ba", duration: .2,ease: Power3.easeInOut});
        })
    }
}

function hideMenu() {
    for ( let i=0; i < navLinks.length; i++ ){
        navLinks[i].addEventListener("mouseleave", function () {
            TweenMax.to(navLinks[i],{letterSpacing: "0rem", duration: .5,ease: Power3.easeOut});
            TweenMax.to(navLinks[i],{color: "white", duration: .5,ease: Power3.easeInOut});
        })
    }
}

function takeLinks() {
    for (let i=0; i < disabled.length; i++){
        thislink[i] = disabled[i].getAttribute('href');
    }

    return thislink;
}

function returnLinks() {

}

$(function(){

    var $slides = $("#landing img");			//slides
    var currentSlide = 0;				//keep track on the current slide
    var stayTime = 8;				//time the slide stays
    var slideTime = 10;				//fade in / fade out time

    TweenLite.set($slides.filter(":gt(0)"),{autoAlpha:0});	//we hide all images after the first one
    TweenLite.to( $slides.eq(currentSlide), slideTime, {scale:1.1});
    TweenLite.delayedCall(stayTime, nextSlide);				//start the slideshow

    function nextSlide(){
        TweenLite.to( $slides.eq(currentSlide - 1), slideTime, {scale: 1} );		//fade out the old slide
        TweenLite.to( $slides.eq(currentSlide), slideTime, {autoAlpha:0} );		//fade out the old slide
        currentSlide = ++currentSlide % $slides.length;							//find out which is the next slide
        TweenLite.to( $slides.eq(currentSlide), 5, {autoAlpha:1} );		//fade in the next slide
        TweenLite.to( $slides.eq(currentSlide), slideTime, {scale:1.1} );		//fade in the next slide
        TweenLite.delayedCall(stayTime, nextSlide);								//wait a couple of seconds before next slide
    }

});

