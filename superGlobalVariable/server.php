<?php
echo "Current Script: " . $_SERVER['PHP_SELF'] . "<br>"; 
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";  
echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>"; 
echo "HTTP Host: " . $_SERVER['HTTP_HOST'] . "<br>";
echo "User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo "Remote IP: " . $_SERVER['REMOTE_ADDR'] . "<br>"; 
echo "Query String: " . ($_SERVER['QUERY_STRING'] ?? 'None') . "<br>";
echo "Server Port: " . $_SERVER['SERVER_PORT'] . "<br>";
echo "Script Path: " . $_SERVER['SCRIPT_NAME'] . "<br>";
?>
