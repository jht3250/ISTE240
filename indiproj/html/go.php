<?php $PATH = "../"; $title = 'Places to Go'; include_once("../assets/inc/mainheader.inc.php"); ?>
    <body>
        <div id="toggle" class="meow" onclick="openMenu();">
            <i class="fas fa-bars fa-2xl"></i>
        </div>
        <main class="showcase" id="page">
            <header>
                <nav class="crumbs">
                    <a class="hiddenlink" href="./index.php"><h1 class="logo">Visit Greece!</h1></a>
                    <a class="hiddenlink" href="./go.php"><h2 class="logo">Places to Go</h2></a>
                </nav>
                <?php include_once $PATH . 'assets/inc/desktopnav.inc.php'; ?>
            </header>
            <section class="mainplaces">
                <div class="smallgrid"> 
                    <!-- Entry for Lefkada -->
                    <article class="entry">
                        <img src="../assets/images/lefkada.webp" class="entry-image" alt="A picture of Kathisma Beach">
                        <div class="entry-desc">
                            <a class="hiddenlink" href="./go/lefkada.php">
                                <h3> Lefkada </h3>
                                <p class="desc-body">
                                    Lefkada is a beautiful island located in the Ionian Sea, off the western coast of Greece. 
                                    The island is known for its stunning beaches, crystal-clear waters, and picturesque villages. 
                                    Some of the most popular beaches on the island include Porto Katsiki, Egremni, and Kathisma. 
                                    Lefkada is my personal favorite place to visit in Greece, and I highly recommend it to anyone looking for a relaxing and
                                    beautiful vacation spot.
                                </p>
                                <p><br>Click to learn more!</p>
                            </a>
                        </div>
                    </article>
                    <!-- Entry for Halkidiki -->
                    <article class="entryRev">
                        <img src="../assets/images/halkidiki.jpg" class="entry-image" alt="A picture of Halkidiki">
                        <div class="entry-desc">
                            <a class="hiddenlink" href="./go/halkidiki.php">
                                <h3> Halkidiki </h3>
                                <p class="desc-body">
                                    Halkidiki is a region in northern Greece that is known for its blue flag beaches, local food, and an extremely large resort in Sani Beach. 
                                    The region is home to three peninsulas, each with its own unique character and attractions. 
                                    Some of the most popular beaches in the region include Sani Beach, Kallithea Beach, and Vourvourou Beach. 
                                    Halkidiki is a great place to visit if you are looking for a relaxing beach vacation with plenty of opportunities for outdoor activities.
                                </p>
                                <p><br>Click to learn more!</p>
                            </a>
                        </div>
                    </article>
                    <!-- Entry for Ioannina -->
                    <article class="entry">
                        <img src="../assets/images/ioannina.jpg" class="entry-image" alt="A picture of Ioannina">
                        <div class="entry-desc">
                            <a class="hiddenlink" href="./go/ioannina.php">
                                <h3> Ioannina </h3>
                                <p class="desc-body">
                                    Ioannina is a city in northwestern Greece that is known for its beautiful lake, historic old town, and vibrant cultural scene. 
                                    The city is home to a number of interesting attractions, including the Ali Pasha Museum, the Byzantine Museum, and the Archaeological Museum. 
                                    Ioannina is also a great base for exploring the surrounding region, which is home to a number of beautiful villages, monasteries, and natural attractions.
                                </p>
                                <p><br>Click to learn more!</p>
                            </a>
                        </div>
                    </article>
                </div>
            </section>
            <?php include_once $PATH . 'assets/inc/footer.inc.php'; ?>
        </main>
        <!-- Side menu -->
        <?php include_once '../assets/inc/mobilenav.inc.php'; ?>
    </body>
</html>