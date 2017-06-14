<?php
session_start();
if (!isset($_SESSION['pass'])) {
header ('Location: ../Vue/Connexion.php');
exit();
}
?>