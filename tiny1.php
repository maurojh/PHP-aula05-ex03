<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
    <script>
window.onload = function() {
    tinymce.init({
      selector: 'textarea',  // change this value according to the HTML
      toolbar: 'undo | styleselect | bold italic',
    });
}    
    </script>
</head>
<body>
     <textarea cols="30" rows="10"></textarea>   
</body>
</html>