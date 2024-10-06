<?php require_once 'core/dbConfig.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <?php
    // SQL query to insert a new record into the "Class" table
    $query = "INSERT INTO Class (class_id, trainer_id, schedule_id, class_name)
    VALUES (?, ?, ?, ?)";

    // Prepare the SQL query using the PDO object
    $stmt = $pdo->prepare($query);

    // Inserts class_id = 8, trainer_id = 4, schedule_id = 5, class_name = "sun"
    $executeQuery = $stmt->execute(
        [8, 4, 5, "Sun"]
    );

    // Checks if the query execution was successful
    if ($executeQuery) {
        echo "Insertion Successful!";
    } else {
        echo "Query Failed";
    }
    ?>
</body>
</html>
