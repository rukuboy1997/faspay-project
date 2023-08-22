function toggle() {
    var el = document.getElementById("nav-bar");
    var x = document.getElementById("hamburger");

    if (el.style.display === "none") {
        el.style.display = "block";
        x.style.backgroundColor = "#468fff";
    } else {
        el.style.display = "none";
        x.style.backgroundColor = "#2700FE";
    }
}

document.addEventListener("DOMContentLoaded", function () {

    var slider = document.getElementById("slider");
    var images = slider.getElementsByTagName("img");

    var currentIndex = 0;

    function showImage() {

        for (var i = 0; i < images.length; i++) {
            images[i].style.display = "none";
        }

        images[currentIndex].style.display = "block";
    }

    function nextImage() {
        currentIndex++;

        if (currentIndex >= images.length) {
            currentIndex = 0;
        }
        showImage();
    }

    function startSlideshow() {
        setInterval(nextImage, 3000);
    }

    showImage();

    startSlideshow();

});

const form = document.querySelector("form");


form.addEventListener("submit", 

(event) => {
    event.preventDefault();

    if (document.request.name.value == "") {
        alert("Please provide your name!");
        document.request.Name.focus();
        return false;
    } else if (document.request.country.value == "") {
        alert("Please provide your country!");
        return false;
    } else if (document.request.number.value == "") {
        alert("Please provide your phone number!");
        return false;
    } else if (document.request.email.value == "") {
        alert("Please provide your Email!");
        return false;
    } else {
        return true;
    }

})

/* function validate() {
    var x = 0;
    while (x <= 0) {
        if (document.request.name.value == "") {
            alert("Please provide your name!");
            document.request.Name.focus();
            return false;
        } else if (document.request.country.value == "") {
            alert("Please provide your country!");
            return false;
        } else if (document.request.number.value == "") {
            alert("Please provide your phone number!");
            return false;
        } else if (document.request.email.value == "") {
            alert("Please provide your Email!");
            return false;
        } else {
            x++;
            return true;
        }
    }
} */
                                     