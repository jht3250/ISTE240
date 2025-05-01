<?php $PATH = "../../"; $title = 'Gyro'; include_once("../../assets/inc/mainheader.inc.php"); ?>
    <body>
        <div id="toggle" class="meow" onclick="openMenu();">
            <i class="fas fa-bars fa-2xl"></i>
        </div>
        <main class="showcase pageEat" id="page">
            <header>
                <nav class="crumbs">
                    <a class="hiddenlink" href="../index.php"><h1 class="logo">Visit Greece!</h1></a>
                    <h2 class="logo"><a class="hiddenlink" href="../eat.php">Food to Eat</a> > Gyro</h2>
                </nav>
                <?php include_once $PATH . 'assets/inc/desktopnav.inc.php'; ?>
            </header>
            <section class="mainfood">
                <article class="itemflex">
                    <div class="item">
                        <img src="../../assets/images/gyro.jpg" class="item-image" alt="Gyro">
                        <div class="item-desc">
                            <h3>Recipe for Gyro</h3>
                            <p>Here is a recipe on how to make Gyro at home!</p>
                            <h4>Ingredients:</h4>
                            <ul class="ingredient-list">
                                <li><input type="checkbox"> 4 lbs pork shoulder cutlets</li>
                                <li><input type="checkbox"> 1 lb pork belly thinly sliced</li>
                                <li><input type="checkbox"> ¼ cup sea salt</li>
                                <li><input type="checkbox"> ¼ cup brown sugar</li>
                                <li><input type="checkbox"> 1-2 bay leaves</li>
                                <li><input type="checkbox"> 1 tablespoon whole peppercorns</li>
                                <li><input type="checkbox"> 2-3 fresh herb sprigs (like sage and rosemary sprigs)</li>
                                <li><input type="checkbox"> 3-4 cloves</li>
                                <li><input type="checkbox"> 4 garlic cloves crushed</li>
                                <li><input type="checkbox"> ½ cup extra virgin olive oil</li>
                                <li><input type="checkbox"> 2 tablespoons white wine vinegar</li>
                                <li><input type="checkbox"> 1 tablespoon honey</li>
                                <li><input type="checkbox"> 1 tablespoon sumac</li>
                                <li><input type="checkbox"> 1 tablespoon dry oregano</li>
                                <li><input type="checkbox"> 1 tablespoon fresh ground pepper</li>
                                <li><input type="checkbox"> 1 teaspoon chili flakes</li>
                                <li><input type="checkbox"> 2 teaspoons sea salt</li>
                                <li><input type="checkbox"> 2 tablespoons fresh herbs roughly chopped (like fresh thyme, oregano, rosemary, sage)</li>
                                <li><input type="checkbox"> smoked paprika (optional)</li>
                                <li><input type="checkbox"> lemon slices (optional)</li>
                            </ul>
                            <h4>Instructions:</h4>
                            <div class="directions">
                                <p><strong>Brine the pork:</strong></p>
                                <p>For the brine, place the sugar, salt, in a sauce pan with a cup of water. Simmer on medium heat for 3-4 minutes until sugar and salt have dissolved.</p>
                                <p>Fill a large container or pot with the sugar-salt mixture and water. Add the bay leaves, peppercorns, cloves, garlic, and herbs. Stir well. Place the pork in the brine. Make sure it is fully immersed and cover with water. Chill overnight.</p>
                                <p><strong>Marinate:</strong></p>
                                <p>Remove the meat and dry the pieces well with a paper towel.</p>
                                <p>In a bowl, mix ½ cup of olive oil, 1 tablespoon white wine vinegar, 1 tablespoon honey, 1 tablespoon dry oregano, 1 tablespoon sumac, 2 teaspoons sea salt, roughly chopped fresh herbs (like thyme, oregano, rosemary, sage), and some freshly ground pepper.</p>
                                <p>Place meat pieces in a pan and pour the marinade all over. Rub pieces with marinade. Let pork belly sit for 3 hours or overnight.</p>
                                <p><strong>Roast:</strong></p>
                                <p>Preheat the oven to 350°F.</p>
                                <p>Pierce the pork pieces on the vertical rotisserie. Add the pork belly slices between the cutlets.</p>
                                <p>Add half a lemon on top or half an onion. Place meat on a rimmed baking sheet. Bake in the oven for 1 hour and 30 minutes. Turn pork around every 30 minutes to ensure even cooking.</p>
                                <p><br>Recipe sourced from: <a href="https://thegreekfoodie.com/homemade-traditional-greek-pork-gyros/">The Greek Foodie</a></p>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
            <?php include_once $PATH . 'assets/inc/footer.inc.php'; ?>
        </main>
        <?php include_once '../../assets/inc/mobilenav.inc.php'; ?>
    </body>
</html>