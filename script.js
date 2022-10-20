// and array for image paths
var images = [
    "images/1.jpg",
    "images/2.jpg",
    "images/3.jpg",
    "images/4.jpg",
    "images/5.jpg"
];

setInterval(function() {
    var random = Math.floor(Math.random() * images.length);
    document.getElementById("image_slide").src = images[random];
}, 2000);
