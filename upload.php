<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <form action="proses.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="uploadedFile" required>
        <input type="submit" name="uploadBtn" value="Upload" />
    </form>
</body>
</html>