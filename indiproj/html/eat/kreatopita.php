<?php $PATH = "../../"; $title = 'Kreatopita'; include_once("../../assets/inc/mainheader.inc.php"); ?>
    <div id="toggle" class="meow" onclick="openMenu();">
            <i class="fas fa-bars fa-2xl"></i>
    </div>
    <main class="showcase pageEat" id="page">
        <header>
            <nav class="crumbs">
                <a class="hiddenlink" href="../index.php"><h1 class="logo">Visit Greece!</h1></a>
                <h2 class="logo"><a class="hiddenlink" href="../eat.php">Food to Eat</a> > Kreatopita</h2>
            </nav>
            <?php include_once $PATH . 'assets/inc/desktopnav.inc.php'; ?>
        </header>
        <section class="mainfood">
            <article class="itemflex">
                <div class="item">
                    <img src="../../assets/images/kreatopita.jpeg" class="item-image" alt="Kreatopita">
                    <div class="item-desc">
                        <h3>Recipe for Kreatopita</h3>
                        <p>Here is a recipe on how to make Kreatopita the way I like it.</p>
                        <h4>Ingredients:</h4>
                        <ul class="ingredient-list">
                            <li><input type="checkbox"> 5 tablespoons extra-virgin olive oil plus extra for brushing</li>
                            <li><input type="checkbox"> 1/2 pound boneless lamb trimmed of fat and cut into 1/2-inch pieces</li>
                            <li><input type="checkbox"> 1/2 pound lean boneless pork cut into 1/2-inch pieces</li>
                            <li><input type="checkbox"> 1/2 pound lean boneless beef cut into 1/2-inch pieces</li>
                            <li><input type="checkbox"> 2 large onions finely chopped</li>
                            <li><input type="checkbox"> 3 cloves garlic minced</li>
                            <li><input type="checkbox"> 1/2 cup medium-grain rice</li>
                            <li><input type="checkbox"> 1 1/2 cups peeled seeded, and chopped tomatoes (canned are fine)</li>
                            <li><input type="checkbox"> 1/2 teaspoon ground cinnamon</li>
                            <li><input type="checkbox"> 1/2 teaspoon freshly grated nutmeg</li>
                            <li><input type="checkbox"> 1/2 cup water</li>
                            <li><input type="checkbox"> 1 large egg lightly beaten</li>
                            <li><input type="checkbox"> 1/2 cup grated kefalotyri cheese or any hard yellow cheese</li>
                            <li><input type="checkbox"> Salt and freshly ground black pepper to taste</li>
                            <li><input type="checkbox"> 1/2 cup chopped fresh flat-leaf parsley</li>
                            <li><input type="checkbox"> 1 package of thin commercial phyllo at room temperature</li>
                        </ul>
                        <h4>Directions:</h4>
                        <div class="directions">
                            <p>Heat 3 tablespoons of the olive oil in a large, heavy skillet over medium-high heat and brown the meats, in batches if necessary.</p> 
                            <p>Remove from the heat and let cool enough to handle. Shred the meats by hand.</p>
                            <p>Add the remaining 2 tablespoons olive oil to the skillet and cook the onion over medium heat, stirring, until translucent, about 10 minutes. Add the garlic, then the rice, and stir for 1 to 2 minutes. Add the tomatoes, cinnamon, and nutmeg and stir together, turn heat down to medium-low, and cook the mixture until most of the liquid has been absorbed, about 10 minutes.</p>
                            <p>Remove from the skillet and let cool. Add the water.</p> 
                            <p>Preheat the oven to 350°F.</p> 
                            <p>In a large bowl, combine the meat mixture with the egg, cheese, salt, pepper, and parsley.</p> 
                            <p>Oil a large, rectangular baking pan or a 15-inch-round baking pan that is 2 inches deep. Layer the seven sheets of phyllo on the bottom of the pan, brushing each with olive oil. If using a round pan, overlap the phyllo, brushing each sheet with olive oil, so that there is overhang all around the perimeter of the pan.</p>
                            <p>Place the filling over the phyllo and cover with another five sheets, using the same technique as for the bottom, leaving enough overhang so that you can join the top and bottom edges, roll them inwards, and form a nice perimeter. Place one last sheet over the top before you roll in the edges to form a rim, and crinkle up this sheet a bit, fitting it into the inside top of the pie, so that it has an almost pleated effect. Roll up the excess around the perimeter or edges to form a decorative rim. Brush the top sheet with olive oil and sprinkle with a little bit of cold water. Score into serving pieces and bake for about 50 minutes to one hour. Remove, let cool and serve.</p>
                            <p><br> Recipe sourced from: <a href="https://www.dianekochilas.com/kefalonitiki-kreatopita-cephalonia-three-meat-pie/">Diane Kochilas</a></p>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <?php include_once $PATH . 'assets/inc/footer.inc.php'; ?>
    </main>
    <?php include_once '../../assets/inc/mobilenav.inc.php'; ?>
</html>