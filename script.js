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







// //Create an array of images 
// var imageArray = ["assets/1.JPG", "assets/2.png", "assets/3.png", "assets/4.png", "assets/5.png", "assets/6.png", "assets/7.png", "assets/8.png", "assets/9.png", "assets/10.png", "assets/11.png", "assets/12.png", "assets/13.png"];

// //Save total size of array to variable arraySize
// var arraySize = imageArray.length;

// //Set wait time between slides in milliseconds 
// setInterval(runit, 2000);

// var x = 1; //Used to count up to arraySize

// //Function runit play slideshow when called 
// function runit() {
//     //Set image to next picture in image array
//     document.getElementById('slideshow').src = imageArray[x];

//     //Increase count by 1
//     x++;

//     //If count has reached the last index of imageArray than set count back to starting index.
//     if (x === arraySize) {
//         x = 0;
//     }
// }


// function change(id,img) 
// {
// document.getElementById(id).src=img;
    
// }

// function hey(id,img) 
// {
// document.getElementById(id).src=img;
    
// }
