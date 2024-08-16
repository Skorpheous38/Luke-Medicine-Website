//An array of WEBP image files
const slide_show_images = [image1.jfif, image2.jfif, image3.jfif, image4.jpeg, image5.jpeg];

let current_index = 0;
const theImageDisplay = document.getElementById('image_container');
const theDecrementButton = document.getElementById('previousButton');
const theIncrementButton = document.getElementById('nextButton');

//Image Display Function
function display_image(let refered_image) {
    theImageDisplay.innerHTML = refered_image;
}

function previous_button() {
    let decrease = current_index--;
    let the_element = slide_show_images[decrease];
    display_image();
}
function next_button() {
    let increase = current_index++;
    let the_element = slide_show_images[increase];
    display_image();
}