//An array of WEBP image files
const slide_show_images = [image1.webp, image2.webp, image3.webp, image4.webp, image5.webp];

//Next Button
function next_button() {
    var current_image;
    document.getElementById("image_here").innerHTML = slide_show_images[current_image++];
}

//Previous Button
function previous_button() {
    var current_image;
    document.getElementById("image_here").innerHTML = slide_show_images[current_image--];
}

