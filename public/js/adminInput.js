const image_input = document.getElementById("img");
const cancel_image = document.getElementsByTagName("i")[0];
const display_image = document.querySelector(".image-container");
let file_input = document.getElementById("file");
let file_name = document.getElementsByClassName("file-name")[0];
let root = document.querySelector(":root");
let uploaded_img = "";
let selDiv = "";

image_input.addEventListener("change", function() {
    const reader = new FileReader();
    reader.addEventListener("load", ()=>{
        uploaded_img = reader.result;
        display_image.style.backgroundImage = `url(${uploaded_img})`;
        cancel_image.style.display = "inline";
        root.style.setProperty("--img-content", `""`);
        root.style.setProperty("--img-type-content", `""`);
        image_input_value = image_input.value.split(/(\\|\/)/g).pop();
        if (image_input_value.length > 15) {
            file_name.innerHTML = image_input_value.substring(0, 8) + "..." + image_input_value.substring(image_input_value.lastIndexOf("") - 5, image_input_value.lastIndexOf("")+1);
        } else {
            file_name.innerHTML = image_input_value;
        }
        console.log(image_input.value)
    });
    reader.readAsDataURL(this.files[0]);
});

cancel_image.addEventListener("click", function() {
    display_image.style.backgroundImage = "none";
    image_input.value = "";
    cancel_image.style.display = "none";
    root.style.setProperty("--img-content", `"Pilih file"`);
    root.style.setProperty("--img-type-content", `"Image.png / .jpg / .gif"`);
    file_name.innerHTML = "";
});

document.addEventListener("DOMContentLoaded", function() {
    file_input.addEventListener('change', function(e) {
        selDiv = document.getElementsByClassName("file-container")[0];
        if(!e.target.files) return;

        let files = e.target.files;
        for(var i=0; i < files.length; i++) {
            var f = files[i];
            selDiv.innerHTML += f.name;
        }
        console.log(file_input.value);
    }, false);
}, false);