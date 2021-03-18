const toggleButton = document.getElementById("hamburger");
const navUL = document.getElementById("nav-ul");

toggleButton.addEventListener('click', function() {
	navUL.classList.toggle('show')
});