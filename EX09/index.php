<?php
    include "../../../connection.db.php";

    if (!empty($_POST['from']) && !empty($_POST['message'])) {
        $from = $_POST['from'];
        $message = $_POST['message'];

        $sql = "INSERT INTO `Comments` (`from`, `message`, `date`) VALUES (?, ?, now());";

        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ss", $from, $message);
        
        $stmt->execute();
    }

    $select = "SELECT * FROM `Comments`;";

    $stmt = $mysqli->query($select);
    
    if ($stmt -> num_rows > 0) {
        while($row = $stmt->fetch_assoc()) {
            $comments[] = $row;
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/styles.css">
        <title>Document</title>
    </head>
    <body>
        <h2>What do you think?</h2>
        <div id="comments"> 
            <?php
                foreach ($comments as $com) {
                    echo "<li><span class='commentsName'>" . $com['from'] . ":</span> " . $com['message'] . " @ <span class='commentsDate'>" . $com['date'];
                }
            ?>
        </div>
        <hr>
        <h2>What do you have to say?</h2>
        <br>
        <form method="POST">
            <label for="from">First Name:</label>
            <input type="text" id="from" name="from" required>
            <br>
            <textarea id="message" name="message" placeholder="enter your message!" required></textarea>
            <br>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>