<?php
session_start();
if (!isset($_SESSION['pass'])) {
header ('Location: index.php');
exit();
}
?>