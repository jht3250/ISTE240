<?php $PATH = "../"; $title = 'Things to Do'; include_once("../assets/inc/mainheader.inc.php"); ?>
    <body>
        <div id="toggle" class="meow" onclick="openMenu();">
            <i class="fas fa-bars fa-2xl"></i>
        </div>
        <main class="showcase" id="page">
            <header>
                <nav class="crumbs">
                    <a class="hiddenlink" href="./index.php"><h1 class="logo">Visit Greece!</h1></a>
                    <a class="hiddenlink" href="./do.php"><h2 class="logo">Things to Do</h2></a>
                </nav>
                <?php include_once $PATH . 'assets/inc/desktopnav.inc.php'; ?>
            </header>
            <section class="mainplaces">
                <div class="smallgrid"> 
                    <article class="entry">
                        <img src="../assets/images/paxos.jpg" class="entry-image" alt="A picture of Paxos">
                        <div class="entry-desc">
                            <a class="hiddenlink" href="./do/paxos.php">
                                <h3> Paxos Blue Caves </h3>
                                <p class="desc-body">
                                    The Blue Caves of Paxos are a series of sea caves that are located on the northern coast of the island of Paxos.
                                    You can get to them by boat, usually leaving from Kerkira. The boat I went with, had a seabob, which is a small underwater propulsion 
                                    device that you hold onto. It was the coolest thing I have ever done in the water. The caves are really cool, but the seabob was so fun to zip around with. 
                                    The best time to visit the Blue Caves is in the morning, when the sunlight is at its brightest and the water is at its bluest.
                                </p>
                                <p><br>Click to learn more!</p>
                            </a>
                        </div>
                    </article>
                    <article class="entryRev">
                        <img src="../assets/images/vikos.jpg" class="entry-image" alt="A picture of Vikos Gorge">
                        <div class="entry-desc">
                            <a class="hiddenlink" href="./do/vikos.php">
                                <h3> Canyon of Vikos </h3>
                                <p class="desc-body">
                                    The Vikos Gorge is a canyon in the Pindus Mountains of northern Greece that is known for being one of the deepest canyons in the world. 
                                    The best way to explore the Vikos Gorge is on foot, either by hiking along the rim of the canyon or by descending into the gorge itself. I personally went 
                                    along the rim of the canyon, where a monastery is located. I took the picture used here! It was really cool to be so high up, looking into the gorge.
                                </p>
                                <p><br>Click to learn more!</p>
                            </a>
                        </div>
                    </article>
                    <article class="entry">
                        <img src="../assets/images/meteora.jpg" class="entry-image" alt="A picture of Meteora">
                        <div class="entry-desc">
                            <h3> Relax </h3>
                            <p class="desc-body">
                                Sometimes, the best thing to do is nothing at all. Greece is a beautiful country with a lot to offer, but sometimes it's nice to just, have nothing to do. 
                                Taking breaks is crucial. It gets really tiring to be doing things all the time. I took this picture in Meteora, where I was just sitting on a bench, looking at the view.
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