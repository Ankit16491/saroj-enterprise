<?php

session_start();

unset($_SESSION['user']);
unset($_SESSION['photo']);
unset($_SESSION['name']);
unset($_SESSION['id']);

//session_destroy();

header("location:index.php");

?>
