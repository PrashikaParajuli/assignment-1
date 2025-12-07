<?php
session_start();

if (isset($_POST['start'])) {
    $_SESSION['status'] = 'ON';
}

if (isset($_POST['end'])) {
    session_destroy();
    $_SESSION = array();
}
?>
<!DOCTYPE html>
<html>
<body>
<?php if (!isset($_SESSION['status'])): ?>
    <form method=post>
        <input type=submit name=start value="START">
    </form>
<?php else: ?>
    Session: <?php echo $_SESSION['status']; ?><br>
    <form method=post>
        <input type=submit name=end value="END">
    </form>
<?php endif; ?>
</body>
</html>
