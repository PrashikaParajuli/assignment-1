<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $file = $_FILES['profile'];

    $file_to_move = $file['tmp_name'];
    $file_name = $file['name'];
    $allowed_extensions = array("jpg", "jpeg", "png");
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    if(in_array($file_ext, $allowed_extensions)){
        
        $permited_size = 56320; // limit 55kb

        // Checking files size 
        if($file['size'] > $permited_size){
            echo "File size too big. Must be less than 55kb.";
        }else{
            
            $destination = 'uploads/'. time() . $file_name;
        
            move_uploaded_file($file_to_move, $destination);
        }

    }else{
        echo "File is not of type image.";
    }



    
    print_r($file);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="">File:</label>
        <input type="file" name="profile" id ="profile"><br>
        <input type="submit" value="upload">
    </form>
</body>
</html>