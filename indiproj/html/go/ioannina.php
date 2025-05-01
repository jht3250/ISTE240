<?php $PATH = "../../"; $title = 'Ioannina'; include_once("../../assets/inc/mainheader.inc.php"); ?>
    <body>
        <div id="toggle" class="meow" onclick="openMenu();">
            <i class="fas fa-bars fa-2xl"></i>
        </div>
        <main class="showcase pagePlaces" id="page">
            <header>
                <nav class="crumbs">
                    <a class="hiddenlink" href="../index.php"><h1 class="logo">Visit Greece!</h1></a>
                    <h2 class="logo"><a class="hiddenlink" href="../go.php">Places to Go</a> > Ioannina</h2>
                </nav>
                <?php include_once $PATH . 'assets/inc/desktopnav.inc.php'; ?>
            </header>
            <section class="mainplaces">
                <article class="itemflex">
                    <div class="item">
                        <img src="../../assets/images/ioanninamap.gif" class="item-image" alt="A map of Ioannina">
                        <div class="item-desc">
                            <h2> Map </h2>
                            <p>
                                Ioannina is a city in northwestern Greece, towards Albania. It is known for its large lake in the center of town, 
                                The city is home to a number of interesting attractions, including Pamvotida Lake, the Byzantine Museum, and my Great Uncle who is 98! 
                                He goes white water rafting and lifts weights every day. He is a beast. I don't understand how he's so strong.
                            </p>
                        </div>
                        <img src="../../assets/images/metsovo.jpg" class="item-image" alt="A picture of Kathisma Beach">
                        <div class="item-desc">
                            <h2> Metsovo </h2>
                            <p>
                                Metsovo is a small town in the mountains of northwestern Greece. The town is known for its traditional stone houses,
                                cobbled streets, and beautiful views of the surrounding mountains. Metsovo is also home to many monasteries atop the mountains.
                                The mountain ranges are truly a sight to see. The best time to visit Metsovo is in the summer, when the weather is warm and the mountains are green. 
                                I took the picture above last year, when I went with my Great Uncle. He said he wanted to go climb the mountains, and race me to the top. I don't 
                                know how he is immortal. 
                            </p>
                        </div>
                    </div>
                </article>
            </section>
            <?php include_once $PATH . 'assets/inc/footer.inc.php'; ?>
        </main>
        <?php include_once '../../assets/inc/mobilenav.inc.php'; ?>
    </body>
</html>