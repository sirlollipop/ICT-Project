<?php
session_start();
$_SESSION["myusername"] = "";
session_destroy();
header("Location: Quiz.php");
?>