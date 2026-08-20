
window.addEventListener("load", () => {
    AOS.init({
        duration:1000
    })
})



function aparecer() {
    const card = document.querySelector(".card")
    card.style.top = "-530px";
    card.style.left = "400px";
}

