<?php
session_start();
if(!isset($_SESSION['user_id'])) {
    header("Location: login_form.php");
    exit;
}
$user_id = $_SESSION['user_id'];
$name = $_SESSION['name'];
echo "Hello " . $name;
?>