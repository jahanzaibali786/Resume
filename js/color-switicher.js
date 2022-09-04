/* ============= toggle style switicher ===============*/
const styleSwitichToggle = document.querySelector(".style-switicher-toggler");
styleSwitichToggle.addEventListener("click", () =>{
    document.querySelector(".style-switicher").classList.toggle("open");
})
//hide window on scroll
window.addEventListener("scroll", () => {
if(document.querySelector(".style-switicher").classList.contains("open")){
    document.querySelector(".style-switicher").classList.remove("open");
}
})
//////////theme color
const alternateStyles = document.querySelectorAll(".alternate-color");
function setActivityStyle(colors){
    alternateStyles.forEach((style) =>{
        if(colors === style.getAttribute("title")){
            style.removeAttribute("disabled");
        }
        else{
            style.setAttribute("disabled","true");
        }
    })
} 
//////////dark-light mode
const dayNight = document.querySelector(".day-night");
  dayNight.addEventListener("click",()=>{
    dayNight.querySelector("i").classList.toggle("fa-sun");
    dayNight.querySelector("i").classList.toggle("fa-moon");
    document.body.classList.toggle("dark");
  })
window.addEventListener("load", ()=>{
    if(document.body.classList.contains("dark")){
        dayNight.querySelector("i").classList.add("fa-sun");
    }
    else{
        dayNight.querySelector("i").classList.add("fa-moon");
    }
})
