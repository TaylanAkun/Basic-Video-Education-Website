<?php 
session_start();
session_destroy();

header('Location:../university/index.php');

?>