
function handleFileSelect(event) {
    var file = event.target.files; // FileList object
    var f = file[0];
    // Only process image files.
    if (!f.type.match('image.*')) {
        alert("Image only please....");
    }
    var reader = new FileReader();
    // Closure to capture the file information.
    reader.onload = (function() {
        return function(e) {
            // Render thumbnail.
            let parentImage = document.querySelector(".parent_image");
            parentImage.innerHTML =  `<img width="250" class="border img-thumbnail" src="${e.target.result}">`
        };
    })(f);
    // Read in the image file as a data URL.
    reader.readAsDataURL(f);
}

document.getElementById('formFile').addEventListener('change', handleFileSelect, false);