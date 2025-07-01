<?php
require '../includes/functions.php';
if (!is_logged_in()) {
    header('Location: index.php');
    exit;
}
?>