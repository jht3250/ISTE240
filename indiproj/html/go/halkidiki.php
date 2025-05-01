<?php $PATH = "../../"; $title = 'Halkidiki'; include_once("../../assets/inc/mainheader.inc.php"); ?>
    <body>
        <div id="toggle" class="meow" onclick="openMenu();">
            <i class="fas fa-bars fa-2xl"></i>
        </div>
        <main class="showcase pagePlaces" id="page">
            <header>
                <section class="crumbs">
                    <a class="hiddenlink" href="../index.php"><h2 class="logo">Visit Greece!</h2></a>
                    <h3 class="logo"><a class ="hiddenlink" href="../go.php">Places to Go</a> > Halkidiki</h3>
                </section>
                <?php include_once $PATH . 'assets/inc/desktopnav.inc.php'; ?>
            </header>
            <section class="mainplaces">
                <div class="itemflex">
                    <div class="item">
                        <img src="../../assets/images/halkidikimap.jpg" class="item-image" alt="A map of Lefkada">
                        <div class="item-desc">
                            <h2> Map </h2>
                            <span>
                                Halkidiki is a region in northern Greece that is known for its blue flag beaches, local food, and an extremely large resort in Sani Beach. 
                                The region is home to three peninsulas, each with its own unique character and attractions. 
                                One of which, is home to Mount Athos, a mountain and peninsula in northeastern Greece, of which I will go into more detail below!
                                Some of the most popular beaches in the region include Sani Beach, Kallithea Beach, and Vourvourou Beach. 
                            </span>
                        </div>
                        <img src="../../assets/images/athos.webp" class="item-image" alt="A picture of Kathisma Beach">
                        <div class="item-desc">
                            <h2> Mount Athos </h2>
                            <span>
                                Mount Athos is a mountain and peninsula in northeastern Greece and an important center of Eastern Orthodoxy. 
                                It is home to 20 Eastern Orthodox monasteries and forms an autonomous state under Greek sovereignty. 
                                The peninsula, the easternmost of the three peninsulas of Halkidiki, is also known as the Holy Mountain due to its historic monastic community. 
                                In order to get to the monasteries, you must hike up the mountain. A trip not for many. It takes about 10 and a half hours to complete. Before you can 
                                even start the hike, you must get a permit from the government. The permit is free, but only 100 are given out per day. On top of that, only men are 
                                allowed to enter the territory. Myself along with my brothers have done it once. It was quite brutal, and honestly I didn't really want to go up for 
                                religious purposes, but more for the experience. It was a once in a lifetime opportunity, and I am glad I did it.
                            </span>
                        </div>
                    </div>
                </div>
            </section>
            <?php include_once $PATH . 'assets/inc/footer.inc.php'; ?>
        </main>
        <?php include_once '../../assets/inc/mobilenav.inc.php'; ?>
    </body>
</html>