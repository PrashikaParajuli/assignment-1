<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['uploadFile'])) {
    $file = $_FILES['uploadFile'];
    echo "File Name: " . $file['name'] . "<br>";
    echo "Size: " . $file['size'] . " bytes<br>";
    echo "Type: " . $file['type'] . "<br>";
    if ($file['error'] == 0) {
        echo "Upload successful!<br>";
    }
}
?>
<!DOCTYPE html>
<html>
<body>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="uploadFile"><br>
    <input type="submit" value="Upload">
</form>
</body>
</html>
