<?php
if (!defined('MY_APP')) {
    define('MY_APP', true);
}
include_once "mod-delete.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['username'])) {
    $modDelete = new ModDelete();
    $username = $_POST['username'];

    if ($modDelete->deleteUser($username)) {
        // Redirection avec un message de succès
        header('Location: ../../index.php?module=delete&success=success');
        $_GET['success'] = 'success';
    } else {
        // Redirection avec un message d'erreur
        header('Location: your_view_page.php?error=1');
    }
    exit;
}
