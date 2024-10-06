<?php require_once 'core/dbConfig.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>

    <style>
        table, th, td {
            border: 2px solid black;
        }
        th, td {
            padding: 4px 10px;
        }
    </style>
</head>
<body>
    <?php
    // SQL query to count the number of members per trainer
    $query = "SELECT
                CASE
                    WHEN trainer_id = 1 THEN 'Trainer Kyle'
                    WHEN trainer_id = 2 THEN 'Trainer Henryetta'
                    WHEN trainer_id = 3 THEN 'Trainer Joechel'
                    WHEN trainer_id = 4 THEN 'Trainer Ranthaniel'
                    WHEN trainer_id = 5 THEN 'Trainer Emmalynn'
                END AS trainer_id, COUNT(*) AS memberCount
                FROM Members
                GROUP BY trainer_id
    ";

    // Prepare the SQL query using the PDO object
    $stmt = $pdo->prepare($query);
    
    // Execute the prepared Query
    $executeQuery = $stmt->execute();

    // Checks if the query execution was successful
    if ($executeQuery) {
        // Fetch all results and store them in the $studentByTrainer variable
        $studentByTrainer = $stmt->fetchAll();
    } else {
        echo "Query Failed";
    }
    ?>

    <!-- HTML Table to display the trainer's name and their number of members they're training -->
    <table>
        <tr>
            <th>Trainer</th>
            <th>Member Count</th>
        </tr>
         <!-- 
            - Iterate over each row in the $studentByTrainer array
            - Each element (which represents a trainer and their member count) is assigned to the variable $row for use within the loop

         -->
        <?php foreach ($studentByTrainer as $row) {?>
        <tr>
            <td><?php echo $row['trainer_id']?></td>
            <td><?php echo $row['memberCount']?></td>
        </tr>

        <?php }?>
    </table>
</body>
</html>
