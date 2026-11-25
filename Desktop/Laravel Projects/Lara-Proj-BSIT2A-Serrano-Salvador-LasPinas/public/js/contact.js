// Get the contact form
const contactForm = document.getElementById("contactForm");

// Listen for form submission
contactForm.addEventListener("submit", function (event) {
    // Prevent the page from refreshing
    event.preventDefault();

    // Get the values entered by the user
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const subject = document.getElementById("subject").value.trim();
    const message = document.getElementById("message").value.trim();

    // Reset previous errors
    document.querySelectorAll(".error").forEach(function (error) {
        error.textContent = "";
    });

    // Remove previous invalid styles
    document
        .querySelectorAll("#contactForm input, #contactForm textarea")
        .forEach(function (field) {
            field.classList.remove("invalid");
            field.removeAttribute("aria-invalid");
        });

    // Hide previous success message
    document.getElementById("successMessage").hidden = true;

    let isValid = true;

    // Check name

    if (name === "") {
        showError("name", "Name is required.");
    }

    // Check email
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email === "") {
        showError("email", "Email is required.");
    } else if (!emailPattern.test(email)) {
        showError("email", "Please enter a valid email address.");
    }

    // Check subject
    if (subject === "") {
        showError("subject", "Subject is required.");
    }

    // Check message
    if (message === "") {
        showError("message", "Message is required.");
    }

    // Show success message if everything is valid
    if (isValid) {
        document.getElementById("successMessage").hidden = false;
        contactForm.reset();
    } else {
        const firstInvalidField = contactForm.querySelector(".invalid");
        firstInvalidField.focus();
    }

    // Function for displaying errors
    function showError(fieldId, errorMessage) {
        document.getElementById(fieldId + "Error").textContent = errorMessage;

        document.getElementById(fieldId).classList.add("invalid");

        document.getElementById(fieldId).setAttribute("aria-invalid", "true");

        isValid = false;
    }
});
