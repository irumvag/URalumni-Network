<?php
session_start();
session_destroy();
header("Location: alumni.php");
exit();
?>