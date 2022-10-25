'use strict';

const targetDiv = document.getElementById("toggleShowMenu");
const btn = document.getElementById("toggleMobile");

// Show / Hide mobile menu
btn.onclick = function () {
	if (targetDiv.style.display !== "none") {
		targetDiv.style.display = "none";
	} else {
		targetDiv.style.display = "block";
	}
};

// If resize view toggle mobile nav
function checkForWindowResize() {
    if (window.innerWidth < 786) {
       targetDiv.style.display = "none";
    }
    else {
       targetDiv.style.display = "block";
    }
}

window.addEventListener('resize', checkForWindowResize);
window.addEventListener('load', checkForWindowResize);