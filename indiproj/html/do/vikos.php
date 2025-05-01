<?php $PATH = "../../"; $title = 'Vikos'; include_once("../../assets/inc/mainheader.inc.php"); ?>
    <body>
        <div id="toggle" class="meow" onclick="openMenu();">
            <i class="fas fa-bars fa-2xl"></i>
        </div>
        <main class="showcase pagePlaces" id="page">
            <header>
                <nav class="crumbs">
                    <a class="hiddenlink" href="../index.php"><h1 class="logo">Visit Greece!</h1></a>
                    <h2 class="logo"><a class="hiddenlink" href="../do.php">Things to Do</a> > Vikos Canyon</h2>
                </nav>
                <?php include_once $PATH . 'assets/inc/desktopnav.inc.php'; ?>
            </header>
            <section class="mainplaces">
                <article class="itemflex">
                    <div class="item">
                        <img src="../../assets/images/vikos.jpg" class="item-image" alt="A map of Ioannina">
                        <div class="item-desc">
                            <h2> Canyon of Vikos </h2>
                            <p>
                                The Vikos Gorge is a canyon in the Pindus Mountains of northern Greece that is known for being one of the deepest canyons in the world.
                                In order to get to the viewpoint in the picture above (taken by yours truly), you must drive up to the village of Monodendri. From there, 
                                there is a hiking path that takes about 50 minutes, depending on your pace. The picture I took honestly doesn't capture the scale of the canyon.
                                It is unbelievably large, that you feel like an ant in comparison up there.
                            </p>
                        </div>
                        <img src="../../assets/images/paraskevi.jpg" class="item-image" alt="A picture of Kathisma Beach">
                        <div class="item-desc">
                            <h2> Agia Paraskevi </h2>
                            <p>
                                Agia Paraskevi is a small monastery situated on the side of the Vikos Gorge. The viewpoint is located at the back of the monastery. 
                                You can actually see the viewpoint in the picture above! The monastery is a great place to visit if you want to see the canyon from a different angle.
                                They also sell honey and special icons that are made by the nuns that live there. 
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