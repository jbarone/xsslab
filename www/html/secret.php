<?php

require_once('template.php');

$view = new Template();

require_once('session.php');

if (!$_SESSION['logged_in']) {
    header('location: login.php');
}

$view->content = <<<EOS
        <section id="main" class="wrapper style1">
            <header class="major">
                <h2>Welcome {$_SESSION["user"]}</h2>
            <header>
        </section>
EOS;

echo $view->render('main_template.php');

?>
