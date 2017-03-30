<?php

require_once('template.php');

$view = new Template();

require_once('session.php');

$view->content = <<<EOS
        <section id="main" class="wrapper style1">
            <header class="major">
                <h2>Reflected</h2>
                <p>Reflected attacks are those where the injected script is reflected off the web server.</p>
            </header>
            <div class="container">
                <section>
                    <form method="GET">
                        <div class="input-group">
                          <input type="text" name="name" id="name" class="form-control" placeholder="Say Hello...">
                          <span class="input-group-btn">
                            <button class="button" type="submit">Hello</button>
                          </span>
                        </div>
                    <form>
                </section>
EOS;

if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $view->content = $view->content . "<section class='major'><h3>Hello, $name!</h3></section";
}

$view->content = $view->content . <<<EOS
            </div>
        </section>
EOS;

echo $view->render('main_template.php');

?>
