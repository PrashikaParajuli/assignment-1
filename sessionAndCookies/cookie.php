<?php
if(isset($_POST['name']) && !empty($_POST['name'])) {
    setcookie("username", $_POST['name'], time()+3600, "/");
}
?>

<html>
<body>
<?php if(isset($_COOKIE['username'])): ?>
    <h3>Hello, <?php echo $_COOKIE['username']; ?>!</h3>
<?php else: ?>
    <form method=post>
        Name: <input type=text name=name required>
        <input type=submit value="Set Cookie">
    </form>
<?php endif; ?>
</body>
</html>
