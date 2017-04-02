<?php

require_once('template.php');

$view = new Template();

require_once('session.php');

$view->content = <<<EOS
        <!-- Banner -->
        <section id="banner">
            <div class="inner">
                <h2>Cross Site Scripting</h2>
                <p>To alert() and Beyond!</p>
            </div>
        </section>

        <!-- One -->
        <section id="one" class="wrapper style1">
            <header class="major">
                <h2>XSS Lab Breakdown</h2>
                <p>
                    This lab is designed to demonstrate the three primary
                    types of cross site scripting. Those sections are broken
                    down below.
                </p>
            </header>
            <div class="container">
                <div class="row">
                    <div class="4u">
                        <section class="special box">
                            <i class="icon fa-retweet major"><span class="label">Reflected</span></i>
                            <h3>Reflected</h3>
                            <p>Reflected attacks are those where the injected script is reflected off the web server.</p>
                            <ul class="actions">
                                <li><a href="reflected.php" class="button alt">Learn More</a></li>
                            </ul>
                        </section>
                    </div>
                    <div class="4u">
                        <section class="special box">
                            <i class="icon fa-database major"><span class="label">Persistent</span></i>
                            <h3>Persistent</h3>
                            <p>Persistent attacks are those where the injected script is permanently stored on the target server.</p>
                            <ul class="actions">
                                <li><a href="persistent.php" class="button alt">Learn More</a></li>
                            </ul>
                        </section>
                    </div>
                    <div class="4u">
                        <section class="special box">
                            <i class="icon fa-code major"><span class="label">DOM-Based</span></i>
                            <h3>DOM-Based</h3>
                            <p>DOM based attacks are the result of active browser-side content on a page.</p>
                            <ul class="actions">
                                <li><a href="dom_based.php" class="button alt">Learn More</a></li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </section>
EOS;

echo $view->render('main_template.php');
?>
