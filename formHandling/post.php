<?php
$errors =[];
$username = $password = ' ';
if($SERVER ['REQUEST_METHOD'] = 'POST'){
    if(isset ($POST['login_btn'])){
        echo "Login button clicked";
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = trim($username);

        if(string ($username) ==0){
            echo "username is required";
            $errors['username'] = "username is required";
        }
        echo $username . " " . $password;
    }
}
?>
<h1>Login form </h1>
<form method = "POST">
    username : <input type="text" name="username" value = " <?php echo $username;?>" id="username"> <?php
        if(array_key_exists('username',$errors)){
            echo " <span style = color:red>" . $errors['username'] . "</span>";
        } 
        ?><br>
        password : <input type="password" name="password" id="password"><br>
        <input type= "reset" value ="clear">
        <input type ="submit" name="login_btn" value ="log_in">
</form>