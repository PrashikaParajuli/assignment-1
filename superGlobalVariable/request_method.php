<?php
$countries =[
    "np" => "Nepal",
    "in" => "India",
    "ch" => "China",
    "jp" => "Japan"
];

if($_SERVER['REQUEST_METHOD']=='GET'){
    $country= $_POST['country'];
    echo " You selected $country .<br>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<bod>
    <form action="" method="GET">
        Select your Country:
        <select name="country">
        <option value="">Select A Country</option>
        <option value="Nepal" <?php if($country=='Nepal') 
        echo "selected";?>>Nepal</option>
        <option value="India" <?php if($country=='India') 
        echo "selected";?>>India</option>
        <option value="China" <?php if($country=='China') 
        echo "selected";?>>China</option>
        </select>
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>