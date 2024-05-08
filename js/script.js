// Function to show login form and hide sign up form
document.getElementById("loginBtn").addEventListener("click", function() {
    document.getElementById("loginForm").style.display = "block";
    document.getElementById("signupForm").style.display = "none";
});

// Function to show sign up form and hide login form
document.getElementById("signUpBtn").addEventListener("click", function() {
    document.getElementById("loginForm").style.display = "none";
    document.getElementById("signupForm").style.display = "block";
});

// Function to handle sign in form submission
document.getElementById("signInForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default form submission behavior
    // Simulate authentication
    var username = this.querySelector('input[type="text"]').value;
    var password = this.querySelector('input[type="password"]').value;
    // For demo purpose, let's assume username and password are both "admin"
    if (username === "admin" && password === "admin") {
        // Perform login actions here
        alert("Login successful!");
    } else {
        alert("Incorrect username or password. Please try again.");
    }
});

// Function to handle sign up form submission
document.getElementById("signUpForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default form submission behavior
    // Simulate sign up process
    var username = this.querySelector('input[type="text"]').value;
    var email = this.querySelector('input[type="email"]').value;
    var password = this.querySelector('input[type="password"]').value;
    // For demo purpose, let's assume sign up is successful
    alert("Sign up successful!\nUsername: " + username + "\nEmail: " + email);
});


document.addEventListener("DOMContentLoaded", function() {
    const prevButton = document.querySelector("[data-carousel-prev]");
    const nextButton = document.querySelector("[data-carousel-next]");
    const carouselItems = document.querySelectorAll("[data-carousel-item]");
    const indicators = document.querySelectorAll("[data-carousel-slide-to]");

    let currentIndex = 0;

    // Function to show current slide and hide others
    function showSlide(index) {
        carouselItems.forEach(item => {
            item.classList.remove("opacity-100");
            item.classList.add("opacity-0");
        });

        carouselItems[index].classList.remove("opacity-0");
        carouselItems[index].classList.add("opacity-100");

        indicators.forEach(indicator => {
            indicator.setAttribute("aria-current", "false");
        });
        indicators[index].setAttribute("aria-current", "true");
    }

    // Event listener for prev button
    prevButton.addEventListener("click", function() {
        currentIndex = (currentIndex === 0) ? carouselItems.length - 1 : currentIndex - 1;
        showSlide(currentIndex);
    });

    // Event listener for next button
    nextButton.addEventListener("click", function() {
        currentIndex = (currentIndex === carouselItems.length - 1) ? 0 : currentIndex + 1;
        showSlide(currentIndex);
    });

    // Event listener for slide indicators
    indicators.forEach((indicator, index) => {
        indicator.addEventListener("click", function() {
            currentIndex = index;
            showSlide(currentIndex);
        });
    });
});
