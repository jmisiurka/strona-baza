<?php
include 'header.php';

if (isset($_POST['wire'])) {
    $wire = $_POST['wire'];
}else {
    echo 'No wire';
}
if (isset($_POST['gas'])) {
    $gas = $_POST['gas'];
} else {
    echo 'No gas';
}
if (isset($_POST['current'])) {
    $current = $_POST['current'];
} else {
    echo 'No current';
}
if (isset($_POST['voltage_correct'])) {
    $voltage_correct = $_POST['voltage_correct'];
} else {
    echo 'No voltage correct';
}
if (isset($_POST['gas_flow'])) {
    $gas_flow = $_POST['gas_flow'];
} else {
    echo 'No gas flow';
}
if (isset($_POST['prog_name_robot'])) {
    $prog_name_robot = $_POST['prog_name_robot'];
} else {
    echo 'No prog name robot';
}
if (isset($_POST['prog_name_source'])) {
    $prog_name_source = $_POST['prog_name_source'];
} else {
    echo 'No prog name source';
}

$conn->query('INSERT INTO cladding_param (wire, gas, current, voltage_correct, gas_flow, Prog_Name_Robot, Prog_Name_Source)
                VALUES ("'.
                    $wire.'","'.
                    $gas.'",'.
                    $current.','.
                    $voltage_correct.','.
                    $gas_flow.',"'.
                    $prog_name_robot.'","'.
                    $prog_name_source.'");');

header('Location: /');
?>