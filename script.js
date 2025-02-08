document.addEventListener("DOMContentLoaded", function() {
    var togglerButtons = document.querySelectorAll("[id^='toggleButton']");
    togglerButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            var projetcId = button.id.replace("toggleButton", "");
            var additionalInfo = document.getElementById("additionalInfo" + projectId);
            if (additionalInfo.style.display === "none") {
                additionalInfo.style.display = "block";
                button.innerText = "Ver Menos";
            } else {
                additionalInfo.style.display = "none";
                button.innerText = "Ver Mais";
            }
        });
    });
});