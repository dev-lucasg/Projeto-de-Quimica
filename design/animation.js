
window.addEventListener("load", () => {
    AOS.init({
        duration: 1000
    })
})


//arrumar função abaixo
function aparecer() {

    const card = document.querySelectorAll(".card")
    cards.forEach((card) => {
        card.addEventListener("click", () => {
            aparecer(card)

            card.classList.add("sem-hover")
            card.style.top = "-530px";
            card.style.left = "400px"
        });
    });


}
