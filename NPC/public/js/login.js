const inputs = document.querySelectorAll(".input-field");
const toggle_btn = document.querySelectorAll(".toggle");
const main = document.querySelector("main");
/*for admin */
let toggle_bar = document.querySelector(".togg");
let sidebar = document.querySelector(".navbar");

inputs.forEach((inp) => {
    inp.addEventListener("focus", () => {
        inp.classList.add("active");
    });
    inp.addEventListener("blur", () => {
        if (inp.value != "") return;
        inp.classList.remove("active");
    });
});

toggle_btn.forEach((btn) => {
    btn.addEventListener("click", () => {
        window.location.replace("registration");
    });
});

toggle_bar.addEventListener("click", function() {
    sidebar.classList.toggle("navbaractive");
});