<?php
session_start();
if (!isset($_SESSION['pass'])) {
header ('Location: ../Vue/index.php');
exit();
}
?>