function onPageLoad() {
    // connect to nav button
    const button = document.querySelector(".nav-button")
    // connect with the menu
    const menu = document.querySelector(".shop-nav")
    // make the button listen for a click
    button.addEventListener("click", function() {
        if(menu.classList.contains("open")) {
            menu.classList.remove("open")
        }
        else {
            menu.classList.add("open")
        }
    })
}
window.addEventListener("load",onPageLoad)