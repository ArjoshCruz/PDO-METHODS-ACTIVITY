<?php require_once 'core/dbConfig.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // SQL query to update member_id = 70's name to Ronald Josiah Cruz from the "Members" table 
    $query = "UPDATE Members
    SET first_name = ?, last_name = ?
    WHERE member_id = 70";

    // Prepare the SQL query using the PDO object
    $stmt = $pdo->prepare($query);

    // Execute the prepared query and setting the first_name to Ronald Josiah, and last_name to = Cruz
    $executeQuery = $stmt->execute(
        ["Ronald Josiah", "Cruz"]
    );

    // Checker if the query is successfully executed
    if ($executeQuery) {
        echo "Update successful!";
    } else {
        echo "Query failed";
    }

    ?>
</body>
</html>
