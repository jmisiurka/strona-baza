<?php
include 'header.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
}

$conn->query('DELETE FROM tool WHERE id='.$id.';');

header('Location: /');
?>