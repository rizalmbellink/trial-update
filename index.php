<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="upload.php">Upload</a><hr>
    <?php
    $dirname = "uploaded_files/";
    $images = glob($dirname."*.*");
    
    foreach($images as $image) {
        echo '<img src="'.$image.'" width="50" height="50"/><br />';
    }
    ?>
</body>
</html>