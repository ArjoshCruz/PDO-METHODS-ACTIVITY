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
    // Prepare a SQL query to select all rows from the "class" table
    $stmt = $pdo->prepare('SELECT * FROM class');

    // Execute the query and check if it's successful
    if ($stmt->execute()) {
        // <pre> is used to display preformatted text
        echo "<pre>";
        // fetches all the rows from the result set as an array
        // print_r is used to make the output more readable
        print_r($stmt->fetchAll());
        echo "</pre>";
    }
    ?>
</body>
</html>
