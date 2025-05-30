<?php $PATH = "../"; $title = 'Home'; include_once("../assets/inc/mainheader.inc.php");?>
    
    <body>
        <div id="toggle" class="meow" onclick="openMenu();">
            <i class="fas fa-bars fa-2xl"></i>
        </div>
        <main class="showcase" id="page">
            <header class="headerbar">
                <section class="crumbs">
                    <h1 class="logo"> Visit Greece! </h1>
                </section>
                <?php include_once $PATH . 'assets/inc/desktopnav.inc.php'; ?>
            </header>
            <section class="mainhome">
                <div class="homeflex">
                    <section class="homeitem">
                        <img src="../assets/images/map.jpg" class="homeitem-image" alt="A map of Lefkada">
                        <div class="homeitem-desc">
                            <h2> Map of Greece </h2>
                            <span>
                                Greece is a country in southeastern Europe with thousands of islands throughout the Aegean and
                                Ionian seas. Each region has something unique to offer. Whether that be experiences, food, or 
                                places to visit, Greece has it all. The most distinctive regions are the islands of course. 
                                Separated from the mainland, each island offers a unique experience that you can't find anywhere else.
                            </span>
                        </div>
                    </section>
                    <section class="homeitem">
                        <figure class="homeitem-desc selection do" onmouseover="toggleDescription(this)" onmouseout="toggleDescription(this)">
                            <a class="hiddenlink" href="./do.php"> 
                                <h2 > Things to Do </h2>
                                <p class="hidden">
                                    Experience the culture of Greece by visiting landmarks, monasteries, and enjoying your time. 
                                </p>
                            </a>
                        </figure>
                        <figure class="homeitem-desc selection eat" onmouseover="toggleDescription(this)" onmouseout="toggleDescription(this)">
                            <a class="hiddenlink" href="./do.php"> 
                                <h2> Food to Eat </h2>
                                <p class="hidden">
                                    Enjoy the local cuisine of Greece by trying traditional dishes, and visiting local restaurants.
                                    Each region has some sort of specialty that you can't find anywhere else!
                                </p>
                            </a>
                        </figure>
                        <figure class="homeitem-desc selection go" onmouseover="toggleDescription(this)" onmouseout="toggleDescription(this)">
                            <a class="hiddenlink" href="./do.php"> 
                                <h2> Places to Go </h2>
                                <p class="hidden">
                                    Visit the beautiful regions of Greece by exploring the islands, the mountains, and the cities.
                                    My favorite regions are Lefkada, Halkidiki, and Ioannina!
                                </p> 
                            </a>
                        </figure>
                    </section>
                    <div class="bottomflex">
                        <aside class="homeitem-about">
                            <div class="homeitem-about-desc">
                                <h2> Who? </h2>
                                <span>
                                    <img src="../assets/images/john.png" class="homeitem-about-image" alt="A picture of John">
                                </span>
                            </div>
                            <div class="homeitem-about-desc">
                                <span>
                                    My name is John Treon, I am a 2nd-generation Greek-American who has been visiting Greece since I was a child. I have a lot of family 
                                    in Greece, and I have been lucky enough to visit many of the beautiful places that Greece has to offer. I have been to the islands, the 
                                    mountains, the cities, and the countryside. I have eaten the food, swam in the sea, and danced at the festivals. Greece is a wonderful 
                                    country with the most welcoming people you will ever meet. I hope that my travel log will inspire you to visit Greece and experience a 
                                    little bit of my culture! <br><br> Pictured on the left, is myself, with my amazing hat, of which, my wife offered severe disdain to. 
                                    I thought it was cool. I hope you do too.
                                </span>
                            </div>
                        </aside>
                        <aside class="homeitem-about">
                            <section class="homeitem-about-desc">
                                <h2> Where?</h2>
                                <span>
                                    <img src="../assets/images/greecefamily.png" class="homeitem-about-image" alt="A picture of John">
                                </span>
                            </section>
                            <section class="homeitem-about-desc">
                                <span>
                                    My family comes from two main regions of Greece: Katerini, and Ioannina. My father is from Katerini, a small city in northern Greece, near Thessaloniki
                                    that is known for its city center, full of shops, cafes, and restaurants. The city is quaint, but that means you can walk everywhere! On 
                                    the other hand Ioannina, where my mother is from, is a rural area in northwestern Greece, near Albania. The area is known for its large lake, 
                                    and vibrant nightlife. It is home to many mountains, and is a great place to go hiking. I have been to both places many times, and I love them
                                    both. I hope you get to visit them too! 
                                </span>
                            </section>
                        </aside>
                    </div>
                    <?php include_once $PATH . 'assets/inc/footer.inc.php'; ?>
                </div>
            </section>
        </main>
        <?php include_once '../assets/inc/mobilenav.inc.php'; ?>
    </body>
</html>