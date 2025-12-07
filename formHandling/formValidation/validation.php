<?php
$emailErr = $phoneErr = $dateErr = $timeErr = "";
$email = $phone = $date = $time = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Email validation
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
    
    // Phone number validation (10 digits numeric)
    if (empty($_POST["phone"])) {
        $phoneErr = "Phone is required";
    } else {
        $phone = test_input($_POST["phone"]);
        if (!preg_match("/^[0-9]{10}$/", $phone)) {
            $phoneErr = "Phone must be exactly 10 digits";
        }
    }
    
    // Date validation (YYYY-MM-DD)
    if (empty($_POST["date"])) {
        $dateErr = "Date is required";
    } else {
        $date = test_input($_POST["date"]);
        if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $date) || 
            !strtotime($date)) {
            $dateErr = "Invalid date format (YYYY-MM-DD)";
        }
    }
    
    // Time validation (HH:MM 24-hour)
    if (empty($_POST["time"])) {
        $timeErr = "Time is required";
    } else {
        $time = test_input($_POST["time"]);
        if (!preg_match("/^([01]?[0-9]|2[0-3]):[0-5][0-9]$/", $time)) {
            $timeErr = "Invalid time format (HH:MM)";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && 
    empty($emailErr) && empty($phoneErr) && 
    empty($dateErr) && empty($timeErr)) {
    echo "<h3>Valid Data:</h3>";
    echo "Email: $email<br>";
    echo "Phone: $phone<br>";
    echo "Date: $date<br>";
    echo "Time: $time<br>";
}
?>
<!DOCTYPE html>
<html>
<body>
<h2>Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Email: <input type="text" name="email" value="<?php echo $email;?>">
    <span style="color:red"><?php echo $emailErr;?></span><br><br>
    
    Phone: <input type="text" name="phone" value="<?php echo $phone;?>">
    <span style="color:red"><?php echo $phoneErr;?></span><br><br>
    
    Date: <input type="text" name="date" placeholder="YYYY-MM-DD" value="<?php echo $date;?>">
    <span style="color:red"><?php echo $dateErr;?></span><br><br>
    
    Time: <input type="text" name="time" placeholder="HH:MM" value="<?php echo $time;?>">
    <span style="color:red"><?php echo $timeErr;?></span><br><br>
    
    <input type="submit" value="Submit">
</form>

</body>
</html>
