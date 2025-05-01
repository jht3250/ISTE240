<section class="desktopnav">
                    <ul>
                        <li><a href="https://solace.ist.rit.edu/~jht3250/240/final/html/index.php">Home</a></li>
                        <li><a href="https://solace.ist.rit.edu/~jht3250/240/final/html/do.php">Things to Do</a></li>
                        <li><a href="https://solace.ist.rit.edu/~jht3250/240/final/html/eat.php">Food to Eat</a></li>
                        <li><a href="https://solace.ist.rit.edu/~jht3250/240/final/html/go.php">Places to Go</a></li>
                        <li><a href="https://solace.ist.rit.edu/~jht3250/240/final/html/comments.php">Comments</a></li>
                        <li><a href="https://solace.ist.rit.edu/~jht3250/240/final/html/references.php">References</a></li>
                        <li><a href="https://solace.ist.rit.edu/~jht3250/240/final/html/grading.php">Grading</a></li>
                        <?php 
                            if (isset($_SESSION['username'])) {
                                echo '<li><a>' . $_SESSION['username'] . '</a></li>';
                            }
                            else {
                                echo '<li><a class="clickable" onclick="openLoginPopup()">Login</a></li>';
                            }
                        ?>
                    </ul>
                </section>