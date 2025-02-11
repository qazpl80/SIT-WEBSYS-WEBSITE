
document.addEventListener("DOMContentLoaded", function () {
    // Get all images with the class 'img-thumbnail'
    const thumbnails = document.getElementsByClassName("img-thumbnail");

    // Loop through the array of images and add an event listener to each one
    for (let i = 0; i < thumbnails.length; i++) {
        thumbnails[i].addEventListener("click", function () {
            // Check for and remove any existing popup image
            const existingPopup = document.querySelector(".img-popup");
            if (existingPopup) {
                existingPopup.remove();
            }

            // Create a new span element for the popup
            const span = document.createElement("span");
            span.setAttribute("class", "img-popup");

            // Create a new img element for the popup image
            const popupImage = document.createElement("img");
            popupImage.setAttribute("src", thumbnails[i].src);
            popupImage.setAttribute("alt", thumbnails[i].alt);
            popupImage.setAttribute("class", "popup-image");

            // Add the img element to the span
            span.appendChild(popupImage);

            // Add the span to the body
            //"beforeend": Just inside the targetElement, after its last child.
            document.body.insertAdjacentElement("beforeend", span);

            // Add an event listener to the span to remove the popup when clicked
            span.addEventListener("click", function () {
                span.remove();
            });
        });
    }
});