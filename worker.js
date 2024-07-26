document.addEventListener('click', (e)=>{
    const isDropdownButton = e.target.matches("[data-dropdown-button]");

    let currentDropdown;
    if(isDropdownButton){
        currentDropdown = e.target.closest('[data-dropdown]');
        currentDropdown.classList.toggle('active,focus');
    }

    document.querySelectorAll("[data-dropdown].active").forEach(dropdown => {
        if(dropdown === currentDropdown) return;
        dropdown.classList.remove('active,focus');
    })
});
let x = new Date().getFullYear();
let y = new Date().getMonth();
let z = new Date().getDay();
document.getElementById("year").textContent = `${z}/${y}/${x}`;

function darkmode() {
    const x = document.querySelector("html");
    const dd = document.querySelectorAll(".main-content, .major-side, .minor-side");
    const modeClass = "mode";

    x.classList.toggle(modeClass);
    dd.forEach((element) => {
        const bgColor = x.classList.contains(modeClass) ? "black" : "white";
        const textColor = x.classList.contains(modeClass) ? "white" : "black";
        element.style.cssText = `border: 1px solid ${textColor}; background-color: ${bgColor}; color: ${textColor};`;
    });
}