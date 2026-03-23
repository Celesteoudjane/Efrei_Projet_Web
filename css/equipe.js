window.onload = function () {

    const buttons = document.querySelectorAll(".toggle-btn");

    buttons.forEach(button => {
        button.addEventListener("click", function () {

            const section = this.closest(".section");
            const content = section.querySelector(".content");

            if (content.style.display === "block") {
                content.style.display = "none";
                this.textContent = "▼";
            } else {
                content.style.display = "block";
                this.textContent = "▲";
            }

        });
    });

};