const menuIcon = document.getElementById("menu-icon");
const menuList = document.getElementById("menu-list");

menuIcon.addEventListener("click", () => {
  menuList.classList.toggle("hidden");
});


function toggleItenary() {
    var itenary = document.getElementById('containerItenary');
    if (itenary.style.display === "none") {
        itenary.style.display = "block";
    } else {
        itenary.style.display = "none";
    }
}
