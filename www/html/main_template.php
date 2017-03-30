<!DOCTYPE HTML>
<!--
    Ion by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
    <head>
        <title>XSS Lab</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="js/jquery.min.js"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/skel-layers.min.js"></script>
        <script src="js/init.js"></script>
    </head>
    <body id="top">

        <!-- Header -->
        <header id="header" class="skel-layers-fixed">
            <h1 id="logo"><a href="/">XSS Lab</a></h1>
            <nav id="nav">
                <ul>
                    <li><a href="reflected.php">Reflected</a></li>
                    <li><a href="persistent.php">Persistent</a></li>
                    <li><a href="dom_based.php">DOM-Based</a></li>
                    <?php if ($logged_in) { ?>
                    <li><a href="logout.php" class="button special">Logout</a></li>
                    <?php } else { ?>
                    <li><a href="login.php" class="button special">Login</a></li>
                    <?php } ?>
                </ul>
            </nav>
        </header>

        <?php echo $content; ?>

        <!-- Footer -->
        <footer id="footer">
            <div class="container">
                <div class="row double">
                    <div class="6u">
                        <div class="row collapse-at-2">
                            <div class="6u">
                                <h3>Breakdown</h3>
                                <ul class="alt">
                                    <li><a href="reflected.php">Reflected</a></li>
                                    <li><a href="persistent.php">Persistent</a></li>
                                    <li><a href="dom_based.php">DOM-Based</a></li>
                                    <?php if ($logged_in) { ?>
                                    <li><a href="logout.php">Logout</a></li>
                                    <?php } else { ?>
                                    <li><a href="login.php">Login</a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="6u">
                        <h2>XSS Lab</h2>
                        <p>
                            This site is designed to be a testing ground and
                            learning site, to play with different types of
                            cross site scripting attacks.
                        </p>
                        <ul class="icons">
                            <li><a href="https://twitter.com/tygarsai" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="https://github.com/jbarone" class="icon fa-github"><span class="label">Pinterest</span></a></li>
                            <li><a href="https://www.linkedin.com/in/jmbarone/" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
                        </ul>
                    </div>
                </div>
                <ul class="copyright">
                    <li>&copy;2017 - Joshua Barone. All rights reserved.</li>
                    <li>Design: <a href="http://templated.co">TEMPLATED</a></li>
                    <li>Images: <a href="http://unsplash.com">Unsplash</a></li>
                </ul>
            </div>
        </footer>

    </body>
</html>
