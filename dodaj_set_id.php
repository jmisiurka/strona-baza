<?php
include 'header.php';

if (isset($_POST['id_number'])) {
    $id_number = $_POST['id_number'];
}else {
    echo 'No number';
}
if (isset($_POST['set_name'])) {
    $name = $_POST['set_name'];
} else {
    echo 'No name';
}

$conn->query('INSERT INTO set_id (id_number, nazwa_kompletu)
                VALUES ("'.
                    $id_number.'","'.
                    $name.'");');

header('Location: /');
?>