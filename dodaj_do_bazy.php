<?php
include 'header.php';

if (isset($_POST['foto'])) {
    $foto = $_POST['foto'];
}else {
    echo 'No foto';
}
if (isset($_POST['material'])) {
    $material = $_POST['material'];
} else {
    echo 'No material';
}
if (isset($_POST['tool_type'])) {
    $tool_type = $_POST['tool_type'];
} else {
    echo 'No tool type';
}
if (isset($_POST['reg_cycles'])) {
    $reg_cycles = $_POST['reg_cycles'];
} else {
    echo 'No reg cycles';
}
if (isset($_POST['set_id'])) {
    $set_id = $_POST['set_id'];
} else {
    echo 'No set id';
}
if (isset($_POST['cladding_id'])) {
    $cladding_id = $_POST['cladding_id'];
} else {
    echo 'No clad id';
}
if (isset($_POST['qr'])) {
    $qr = $_POST['qr'];
} else {
    echo 'No qr';
}

$conn->query('INSERT INTO tool (foto, materiał, tool_type, reg_cycles, id_cladd_prog, id_set, qr)
                VALUES ("'.
                    $foto.'","'.
                    $material.'","'.
                    $tool_type.'",'.
                    $reg_cycles.','.
                    $cladding_id.','.
                    $set_id.',"'.
                    $qr.'");');

header('Location: /');
?>