<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>Todo List</title>
</head>
<body>
<div class="container">
    <h1>shopping list</h1>
    <form method="post" action="add_task.php">
        <input type="text" placeholder="oreos, milk..." name="message" required>
        <input type="submit" value="add +">
    </form>

    <div class="task"><?php include 'read_task.php'; ?></div>
</div>
</body>
</html>
