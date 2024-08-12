//An array of WEBP image files
const slide_show_images = [image1.webp, image2.webp, image3.webp, image4.webp, image5.webp];

let current_index = 0;
const theImageDisplay = document.getElementById('image_here');
const theDecrementButton = document.getElementById('previousButton');
const theIncrementButton = document.getElementById('nextButton');

//Image Display Function
function display_image() {
    theImageDisplay.textContent = current_index;
}

//Next Button
theDecrementButton.addEventListener('click', () => {
    if (current_index > 0) {
        current_index--;
        display_image();
    }
});

//Previous Button
theIncrementButton.addEventListener('click', () => {
    if (current_index > slide_show_images.length - 1) {
        current_index++;
        display_image();
    }
});

