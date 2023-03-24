<?php
include_once "./includes/includes.php";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$ajudar = $_REQUEST['ajudar'];


$sql = "INSERT INTO usuarios (nome, email, telefone, ajudar) VALUES ('$nome', '$email', '$telefone', '$ajudar') ";
if (mysqli_query($conn, $sql)) {
    header('Location: ./index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
