<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['myfile'])) {

    echo "<pre>";
    print_r($_FILES['myfile']);
    echo "</pre>";
    
    // Basic file info
    echo "<h3>File Details:</h3>";
    echo "Name: " . $_FILES['myfile']['name'] . "<br>";
    echo "Type: " . $_FILES['myfile']['type'] . "<br>";
    echo "Size: " . $_FILES['myfile']['size'] . " bytes<br>";
    echo "Temp: " . $_FILES['myfile']['tmp_name'] . "<br>";
    echo "Error: " . $_FILES['myfile']['error'] . "<br>";
}
?>
<!DOCTYPE html>
<html>
<body>
<h2>Simple File Upload</h2>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="myfile"><br><br>
    <input type="submit" value="Upload">
</form>

</body>
</html>
