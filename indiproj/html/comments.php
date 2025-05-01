<?php
    include "../../../../connection.db.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!empty($_POST['from']) && !empty($_POST['message'])) {
            // Sanitize inputs to prevent XSS
            $from = htmlspecialchars(trim($_POST['from']), ENT_QUOTES, 'UTF-8');
            $message = htmlspecialchars(trim($_POST['message']), ENT_QUOTES, 'UTF-8');

            // Use prepared statements to prevent SQL injection
            $sql = "INSERT INTO `IndiComments` (`from`, `message`, `date`) VALUES (?, ?, now());";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("ss", $from, $message);
            $stmt->execute();
        }
    }

    // Fetch comments securely
    $select = "SELECT * FROM `IndiComments` ORDER BY `date` DESC;";
    $stmt = $mysqli->query($select);
    $comments = [];
    if ($stmt && $stmt->num_rows > 0) {
        while ($row = $stmt->fetch_assoc()) {
            $comments[] = [
                'from' => htmlspecialchars($row['from'], ENT_QUOTES, 'UTF-8'),
                'message' => htmlspecialchars($row['message'], ENT_QUOTES, 'UTF-8'),
                'date' => htmlspecialchars($row['date'], ENT_QUOTES, 'UTF-8')
            ];
        }
    }
?>
<?php $PATH = "../"; $title = 'Comments'; include_once("../assets/inc/mainheader.inc.php"); ?>
    <body>
        <div id="toggle" class="meow" onclick="openMenu();">
            <i class="fas fa-bars fa-2xl"></i>
        </div>
        <main class="showcase pageEat" id="page">
            <header>
                <nav class="crumbs">
                    <a class="hiddenlink" href="./index.php"><h1 class="logo">Visit Greece!</h1></a>
                    <h2 class="logo">Comments</h2>
                </nav>
                <?php include_once $PATH . 'assets/inc/desktopnav.inc.php'; ?>
            </header>
            <section class="mainfood">
                <article class="itemflex">
                    <div class="item" id="commentsBox">
                        <p><h3>Let me know what you think!</h3></p>
                        <br>
                        <div id="comments"> 
                            <ul>
                                <?php foreach ($comments as $com): ?>
                                    <li>
                                        <span class="commentsName"><?= $com['from']; ?>:</span> 
                                        <?= $com['message']; ?> 
                                        <span class="commentsDate">@ <?= $com['date']; ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <br>
                        <hr>
                        <br>
                        <div class="item-desc" id="commentFormBox">
                            <form id="commentForm" method="POST" onsubmit="return validateForm();">
                                <section>
                                    <?php 
                                        if (isset($_SESSION['username'])) {
                                            $username = $_SESSION['username'];
                                            echo "<label for='from'>Name:</label>";
                                            echo "<input type='text' id='from' name='from' value='$username' readonly>";
                                        }
                                        else {
                                            echo "<label for='from'>Name:</label>";
                                            echo "<input type='text' id='from' name='from'>";
                                        }
                                    ?>
                                </section>
                                <br>
                                <label for="message">Comment:</label>
                                <textarea id="message" name="message" placeholder="Enter your message!"></textarea>
                                <br>
                                <button type="submit" id="commentsButton">Submit</button>
                            </form>
                        </div>
                    </div>
                </article>
            </section>
            <?php include_once $PATH . 'assets/inc/footer.inc.php'; ?>
        </main>
        <?php include_once '../assets/inc/mobilenav.inc.php'; ?>
    </body>
</html>