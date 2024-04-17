const links = document.querySelectorAll("nav li");



icons.addEventListener("click", () => { //js connaît l'id
    nav.classList.toggle("active");
})


links.forEach((link) => {
    link.addEventListener("click", () => {
        nav.classList.remove("active");
    })
})

