<?php

require_once('template.php');

$view = new Template();

require_once('session.php');

$view->content = <<<EOS
        <section id="main" class="wrapper style1">
            <header class="major">
                <h2>DOM-Based</h2>
                <p>DOM based attacks are the result of active browser-side content on a page.</p>
            </header>
            <div clss="container">
                <section style="text-align: center">
                    <h3>Welcome you are currently visiting:</h3>
                    <script>
                        document.write(unescape(document.baseURI));
                    </script>
                </section>
            </div>
        </section
EOS;

echo $view->render('main_template.php');

?>
