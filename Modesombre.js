document.addEventListener("DOMContentLoaded", function() {
    const toggleButton = document.getElementById("toggleDarkMode");

    if (localStorage.getItem('dark-mode') === 'enabled') {
        document.body.classList.add("dark-mode");
        toggleButton.innerHTML = '<i class="fas fa-sun"></i>'; 
    } else {
        toggleButton.innerHTML = '<i class="fas fa-moon"></i>'; 
    }

    toggleButton.addEventListener("click", function() {
        document.body.classList.toggle("dark-mode");

        if (document.body.classList.contains("dark-mode")) {
            localStorage.setItem('dark-mode', 'enabled');
            toggleButton.innerHTML = '<i class="fas fa-sun"></i>'; 
        } else {
            localStorage.setItem('dark-mode', 'disabled');
            toggleButton.innerHTML = '<i class="fas fa-moon"></i>'; 
        }
    });
});
