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
    // SQL query to delete a member_id = 50 from the "Members" table 
    $query = "DELETE FROM Members 
    WHERE member_id =50";

    // Prepare the SQL query using the PDO object
    $stmt = $pdo->prepare($query);

    // Execute the prepared query
    $executeQuery = $stmt->execute();

    // Checker if the query is successfully executed
    if ($executeQuery) {
        echo "Deletion successful!";
    } else {
        echo "Query failed";
    }

    ?>
</body>
</html>
