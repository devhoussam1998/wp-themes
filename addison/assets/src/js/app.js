"use strict";

import "../scss/app.scss";
import * as bootstrap from "bootstrap";

const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
const tooltipList = [...tooltipTriggerList].map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl, {
        container: "body",
        trigger: "hover",
    });
});

(() => {
    "use strict";

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll(".needs-validation");

    // Loop over them and prevent submission
    Array.from(forms).forEach((form) => {
        form.addEventListener(
            "submit",
            (event) => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add("was-validated");
            },
            false
        );
    });
})();

function togglePassword() {
    const passwordInput = document.querySelector("#password");
    const toggleButton = document.querySelector("#toggle-password-visibility");
    const eyeSlash = "bi bi-eye-slash fs-5";
    const eye = "bi bi-eye fs-5";

    function showHidePassword() {
        if (passwordInput.type === "password") {
            passwordInput.setAttribute("type", "text");
            toggleButton.innerHTML = `<i class="${eye}"></i>`;
        } else {
            passwordInput.setAttribute("type", "password");
            toggleButton.innerHTML = `<i class="${eyeSlash}"></i>`;
        }
    }

    toggleButton.addEventListener("click", showHidePassword);
}

togglePassword();
