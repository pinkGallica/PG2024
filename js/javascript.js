console.log("testing");
const toggleBtn = document.getElementById("toggle-btn");
const theme = document.body;
let altMode = localStorage.getItem("alt-mode");
const enableAltMode = () => {
  theme.classList.add("alt-mode");
  toggleBtn.classList.remove("alt-toggle");
  localStorage.setItem("alt-mode", "enabled");
};
const disableAltMode = () => {
  theme.classList.remove("alt-mode");
  toggleBtn.classList.add("alt-toggle");
  localStorage.setItem("alt-mode", "disabled");
};
if (altMode === "enabled") {
  enableAltMode(); // set state of darkMode on page load
}
toggleBtn.addEventListener("click", (e) => {
  altMode = localStorage.getItem("alt-mode"); // update darkMode when clicked
  if (altMode === "disabled") {
    enableAltMode();
  } else {
    disableAltMode();
  }
});

const hamburgerMenu = document.querySelector(".hamburger");
const menuItem = document.querySelector(".nav-links");
let open;
function openMenu() {
    if (open) {
       menuItem.style.display = "none";
       open = false;
    } else if (!open) {
       menuItem.style.display = "block";
       open = true;
    }
}