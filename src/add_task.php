<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['message'])) {
    $message = $_POST['message'];

    $sql = $conn->prepare("INSERT INTO tasks (message) VALUES (?)");
    $sql->bind_param("s", $message);
    $sql->execute();

    header("Location: index.php");
    exit();
}
?>