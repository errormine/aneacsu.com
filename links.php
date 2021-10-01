<?php 
$description = "This page is a big list of different links to content that I find interesting or useful. I update it every once in a while and the newest links will be at the top of each section.";
include "include/head.php";
?>
    <body> 
        <?php include("include/header.html")?>
        <main>
            <section id="description">
                <h2 class="title">links</h2>
                <div class="content">
                    <p><?php echo $description ?></p>
                </div>
            </section>
            <section id="websites">
                <h2 class="title">websites</h2>
                <div class="content">
                    <ul class="word-list">
                        <li><a href="https://openlibrary.org/">Open Library</a></li>
                        <li><a href="https://archive.org/">Internet Archive</a></li>
                        <li><a href="https://sci-hub.se/">Sci-Hub</a></li>
                        <li><a href="https://www.eff.org/">Electronic Frontier Foundation</a></li>
                        <li><a href="https://neocities.org/">Neocities</a></li>
                        <li><a href="https://wiki.installgentoo.com/wiki/Main_Page">install gentoo</a></li>
                    </ul>
                </div>
            </section>
            <section id="articles">
                <h2 class="title">articles</h2>
                <div class="content">
                    <ul class="word-list">
                        <li><a href="https://en.wikipedia.org/wiki/Special:Random">random wikipedia article</a></li>
                        <li><a href="https://www.paulgraham.com/identity.html">Keep Your Identity Small</a></li>
                        <li><a href="https://www.deprocrastination.co/blog/9-digital-health-rules">9 Digital Health Rules</a></li>
                        <li><a href="http://norvig.com/21-days.html">Teach Yourself Programming in 10 Years</a></li>
                        <li><a href="https://www.humanetech.com/take-control">Take Control</a></li>
                        <li><a href="http://motherfuckingwebsite.com/">This is a motherfucking website</a></li>
                        <li><a href="http://tttthis.com/blog/if-i-could-bring-one-thing-back-to-the-internet-it-would-be-blogs">If I could bring one thing back to the internet it would be blogs</a></li>
                        <li><a href="https://sysl.blogspot.com/2008/09/who-is-kelly-voigt-why-is-she-ruining.html">Who Is Kelly Voigt & Why Is She Ruining My Doritos?</a></li>
                    </ul>
                </div>
            </section>
            <section id="courses">
                <h2 class="title">courses</h2>
                <div class="content">
                    <ul class="word-list">
                        <li><a href="https://java-programming.mooc.fi/">Java Programming</a></li>
                        <li><a href="https://online-learning.harvard.edu/catalog/free">Harvard University Free Online Courses</a></li>
                        <li><a href="https://www.edx.org/">edX</a></li>
                        <li><a href="https://www.codecademy.com/">Codecademy</a></li>
                    </ul>
                </div>
            </section>
            <section id="random">
                <h2 class="title">random interesting stuff</h2>
                <div class="content">
                    <ul class="word-list">
                        <li><a href="https://how-i-experience-web-today.com/detail.html">Web 2.0</a></li>
                        <li><a href="https://youtu.be/7Pq-S557XQU">Humans Need Not Apply</a></li>
                        <li><a href="https://solar.lowtechmagazine.com/">LOW←TECH MAGAZINE</a></li>
                        <li><a href="http://www.roysac.com/default.html">ASCII Art and ANSI Art</a></li>
                        <li><a href="http://radio.garden/">Radio Garden</a></li>
                        <li><a href="https://readhacker.news/">Read Hacker News</a></li>
                        <li><a href="https://lainzine.org/">close this World, open the Next</a></li>
                        <li><a href="https://transfer.sh">transfer.sh</a></li>
                        <li><a href="https://tosdr.org/en/frontpage">Terms of Service Didn't Read</a></li>
                        <li><a href="https://1mb.club/">1MB Club</a></li>
                        <li><a href="https://overthewire.org/wargames/">OverTheWire: Wargames</a></li>
                        <li><a href="https://spyware.neocities.org/articles/index.html">spyware watchdog</a></li>
                        <li><a href="http://theoldnet.com/">The Old Internet</a></li>
                        <li><a href="http://keygenmusic.org/">KeyGen Music</a></li>
                        <li><a href="https://observatory.mozilla.org/">Mozilla Observatory</a></li>
                    </ul>
                </div>
            </section>
        </main>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/include/footer.html") ?>
    </body>
</html>