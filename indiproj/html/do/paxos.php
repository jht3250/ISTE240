<?php $PATH = "../../"; $title = 'Paxos'; include_once("../../assets/inc/mainheader.inc.php"); ?>
    <body>
        <div id="toggle" class="meow" onclick="openMenu();">
            <i class="fas fa-bars fa-2xl"></i>
        </div>
        <main class="showcase pagePlaces" id="page">
            <header>
                <nav class="crumbs">
                    <a class="hiddenlink" href="../index.php"><h1 class="logo">Visit Greece!</h1></a>
                    <h2 class="logo"><a class="hiddenlink" href="../do.php">Things to Do</a> > Paxos Blue Caves</h2>
                </nav>
                <?php include_once $PATH . 'assets/inc/desktopnav.inc.php'; ?>
            </header>
            <section class="mainplaces">
                <article class="itemflex">
                    <div class="item itemPlaces">
                        <img src="../../assets/images/paxos2.jpg" class="item-image" alt="A map of Ioannina">
                        <div class="item-desc">
                            <h2> Blue Caves </h2>
                            <p>
                                The Blue Caves of Paxos are a series of sea caves that are located on the northern coast of the island of Paxos.
                                In person, the water really is <i>that</i> blue. We had gone with a speedboat from Corfu to Paxos and Antipaxos.
                                The caves seen above are the main Blue Caves, located at Erimitis Beach. We had gone with a sea bob, which allowed us 
                                to go really far into the caves, without worrying about getting tired.
                            </p>
                        </div>
                        <img src="../../assets/images/caves.jpg" class="item-image" alt="A picture of Kathisma Beach">
                        <div class="item-desc">
                            <h2> Secret Beach </h2>
                            <p>
                                The Secret Beach is a hidden gem located on the island of Paxos. The beach is only accessible by boat, and is
                                surrounded by towering cliffs and crystal-clear waters. It's extremely small, so not many people actually 
                                stop to lounge, but it's a great place for photos. I took the picture above. It's a rock structure that someone had built,
                                likely within the past few days. I thought it was really cool!
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