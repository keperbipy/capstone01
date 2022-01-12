var mainC = document.getElementById("main"),
    style = window.getComputedStyle(mainC),
    cols = style.getPropertyValue('grid-template-columns');

console.log(cols);

//grid-template-columns: 1fr 6fr;
var element = document.getElementById('image_1')