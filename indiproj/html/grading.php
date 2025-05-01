<?php $PATH = "../"; $title = 'Grading'; include_once("../assets/inc/mainheader.inc.php"); ?>
    <body>
        <div id="toggle" class="meow" onclick="openMenu();">
            <i class="fas fa-bars fa-2xl"></i>
        </div>
        <main class="showcase" id="page">
            <header>
                <nav class="crumbs">
                    <a class="hiddenlink" href="./index.php"><h1 class="logo">Visit Greece!</h1></a>
                    <a class="hiddenlink" href="./grading.php"><h2 class="logo">Grading</h2></a>
                </nav>
                <?php include_once $PATH . 'assets/inc/desktopnav.inc.php'; ?>
            </header>
            <section class="mainplaces">
                <article class="gradbox">
                    <h2>My Thoughts</h2>
                    <p>
                        Thank you again AGAIN for allowing me an extension on this project. I hope you enjoy it!
                        <br>
                        <br>
                        ISSUES FROM BEFORE FIXED:
                        <ul>
                            <li>Fixed scaling of text on full screen.</li>
                            <li>Fixed the heading to reflect name of website and breadcrumbs beneath.</li>
                            <li>Fixed the center aligned text throughout the page.</li>
                            <li>Implemented semantic elements instead of div tags across nearly the entire site.</li>
                            <li>Implemented an actual desktop navigation bar, instead of a hamburger menu for both desktop and mobile.</li>
                            <li>Fixed alignment issues across the site, and readability of text on mobile throughout.</li>
                        </ul>
                        <br>
                        <br>
                        This Project's Grading!:
                        <ul>
                            <li>Original Javascript component: Login Pop Up Screen</li>
                            <li>DHTML Component: Moving Mobile Nav, and buttons that open for text on homepage (Do, Eat, Go)</li>
                            <li>Extras: 
                                <br>Login System! (button in Nav) with password hashing!
                                <br>Username auto populating in comments section using Session Variables.
                                <br>Moving Mobile Nav...
                            </li>
                        </ul>
                        <br>
                        <br>
                    </p>
                </article>
                <?php include_once $PATH . 'assets/inc/footer.inc.php'; ?>
            </section>
        </main>
        <?php include_once '../assets/inc/mobilenav.inc.php'; ?>
    </body>
</html>