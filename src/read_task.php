<?php

include 'db.php';

$sql = $conn->prepare("SELECT * FROM tasks");
$sql->execute();
$result = $sql->get_result();

// Check if there are any tasks returned by the query
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row['message'] . " ";
        echo "<form method='post' action='delete_task.php' style='display:inline;'>
                  <input type='hidden' name='task_id' value='" . $row['id'] . "'>
                  <input type='submit' value='X'>
              </form>";
        echo "<br>";
        echo "<br>";
    }
} else {
    // Display a message or do nothing if no tasks are found
    echo "listan är tom!";
}

$sql->close();
?>
