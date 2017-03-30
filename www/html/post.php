<?php

require_once('template.php');

$view = new Template();

require_once('db.php');
require_once('session.php');

if (empty($_GET['id']) || !is_numeric($_GET['id'])) {
    header("location: persistent.php");
}

$sql = 'SELECT title, body FROM posts WHERE id = ?';
$stmt = $connection->prepare($sql);
$stmt->execute(array($_GET['id']));

$post = $stmt->fetch(PDO::FETCH_ASSOC);

if ($post === false) {
    header("location: persistent.php");
}

$title = $post['title'];
$body  = $post['body'];

$view->content = <<<EOS
        <section id="main" class="wrapper style1">
            <header class="major">
                <h2>$title</h2>
            </header>
            <div class="container">
                <p>$body</p>
            </div>
        </section>
EOS;

echo $view->render('main_template.php');
?>
