<?php

include 'db.php';

if (isset($_POST['task_id'])) {
    $taskId = $_POST['task_id'];

    $stmt = $conn->prepare("DELETE FROM tasks WHERE id = ?");
    $stmt->bind_param("i", $taskId);
    $stmt->execute();
    $stmt->close();

    header("Location: index.php");
    exit();
} else {
    header("Location: index.php");
    exit();
}

