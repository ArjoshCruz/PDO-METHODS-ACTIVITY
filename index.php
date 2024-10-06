<?php require_once 'core/dbConfig.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FetchAll</title>
</head>
<body>
    <?php
    $query = "INSERT INTO Class (class_id, trainer_id, schedule_id, class_name
    VALUES (?, ?, ?, ?)";

    $stmt = $pdo->prepare($query);

    $executeQuery = $stmt->execute(
        [8, 4, 5, "Sun"]
    );

    if ($executeQuery) {
        echo "Query Successful!";
    } else {
        echo "Query Failed";
    }
    ?>
</body>
</html>
