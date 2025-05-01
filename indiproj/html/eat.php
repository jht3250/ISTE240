<?php $PATH = "../"; $title = 'Food to Eat'; include_once("../assets/inc/mainheader.inc.php"); ?>       
    <body>
        <div id="toggle" class="meow" onclick="openMenu();">
            <i class="fas fa-bars fa-2xl"></i>
        </div>
        <main class="showcase" id="page">
            <header>
                <nav class="crumbs">
                    <a class="hiddenlink" href="./index.php"><h1 class="logo">Visit Greece!</h1></a>
                    <a class="hiddenlink" href="./eat.php"><h2 class="logo">Food to Eat</h2></a>
                </nav>
                <?php include_once $PATH . 'assets/inc/desktopnav.inc.php'; ?>
            </header>
            <section class="mainplaces">
                <div class="smallgrid"> 
                    <article class="entry">
                        <img src="../assets/images/kreatopita.jpeg" class="entry-image" alt="A picture of Kreatopita">
                        <div class="entry-desc">
                            <a class="hiddenlink" href="./eat/kreatopita.php">
                                <h3> Kreatopita </h3>
                                <p class="desc-body">
                                    Kreatopita is a traditional Greek meat pie that is made with ground beef, onions, and spices, all wrapped in a flaky phyllo pastry. 
                                    The pie is typically served as a main course or as a snack. It is my favorite food from my childhood. Nothing comes close. 
                                    Kreatopita is a popular dish in Greece, and is often served at family gatherings, festivals, and other special occasions. 
                                    The best Kreatopita I have ever had was on top of a mountain in Sivota at the smallest restaurant known to man.
                                </p>
                                <p><br>Click to learn more!</p>
                            </a>
                        </div>
                    </article>
                    <article class="entryRev">
                        <img src="../assets/images/gyro.jpg" class="entry-image" alt="A picture of Gyro">
                        <div class="entry-desc">
                            <a class="hiddenlink" href="./eat/gyro.php">
                                <h3> Gyro </h3>
                                <p class="desc-body">
                                    If you're going to Greece, you have to try an authentic gyro. A gyro is a popular Greek dish that is made with meat, 
                                    usually pork or chicken, that is cooked on a vertical rotisserie and then sliced and served in a pita bread with tomatoes, onions, and tzatziki sauce.
                                    The best Gyro are found in Thessaloniki! I have never had a better Gyro than the ones I had from a small hole in the wall on the street.
                                </p>
                                <p><br>Click to learn more!</p>
                            </a>
                        </div>
                    </article>
                    <article class="entry">
                        <img src="../assets/images/pontian.jpg" class="entry-image" alt="A picture of Pontian Food">
                        <div class="entry-desc">
                            <h3> Pontian Food </h3>
                            <p class="desc-body">
                                Pontian cuisine is a type of Greek cuisine that is native to the Pontus region of northeastern Turkey. 
                                The cuisine is known for its use of fresh, local ingredients, and its emphasis on simple, rustic flavors. 
                                Some of the most popular dishes in Pontian cuisine include ivristo, kourkoubinia, and dolmades. 
                                Pontian food may seem like the planes are still flying overhead, but it is a must try if you are in Greece.
                            </p>
                        </div>
                    </article>
                </div>
            </section>
            <?php include_once $PATH . 'assets/inc/footer.inc.php'; ?>
        </main>
        <?php include_once '../assets/inc/mobilenav.inc.php'; ?>
    </body>
</html>