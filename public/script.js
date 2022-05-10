// nav bar
let btn = document.getElementById("navbar");
let btns = btn.getElementsByClassName("btn");
for(let i = 0; i<btns.length; i++) {
    btns[i].addEventListener('click',function(){
        let current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active");
        this.className += " active";
    })
}
// pop up
let popup = document.getElementById("popup");

function openPopup() {
    popup.classList.add("open-popup");
}
function closePopup() {
    popup.classList.remove("open-popup");
}
// scroll to top 
let span = document.querySelector(".up");

window.onscroll = function () {
    this.scrollY >= 1000 ? span.classList.add("show") : span.classList.remove("show");
};

span.onclick = function () {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
};