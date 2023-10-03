<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/stud.css">
    <title>Resume</title>
</head>
<body>
    <div class="container" id="CR">
            <h4>RESUME UPLOAD</h4>
            <div id="image-preview"></div>
            <form id="upload-form" enctype="multipart/form-data">
                <input type="file" id="file-input" accept="image/*">
                <button type="submit">preview</button>
            </form>
            <script>
                const uploadForm = document.getElementById("upload-form");
                const fileInput = document.getElementById("file-input");
                const imagePreview = document.getElementById("image-preview");

                uploadForm.addEventListener("submit", function(e) {
                    e.preventDefault(); // Prevent the form from submitting in the traditional way

                    const file = fileInput.files[0];

                    if (file && file.type.startsWith("image/")) {
                        const reader = new FileReader();

                        reader.onload = function(e) {
                            const img = document.createElement("img");
                            img.src = e.target.result;
                            img.height = 150;
                            img.width = 250;
                            imagePreview.innerHTML = ""; // Clear any previous image
                            imagePreview.appendChild(img);
                        };

                        reader.readAsDataURL(file);
                    } else {
                        imagePreview.textContent = "Please select a valid image file.";
                    }
                });
            </script>
        </div>
</body>
</html>