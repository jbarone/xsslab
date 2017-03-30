<?php

require_once('template.php');

$view = new Template();

require_once('db.php');
require_once('session.php');

$error = '';

if (isset($_POST['submit'])) {
    if (empty($_POST['title']) || empty($_POST['body'])) {
        $error = "Values are required for both title and body";
    } else {
        $title = $_POST['title'];
        $body  = $_POST['body'];

        $sql = 'INSERT INTO posts (title, body) VALUES (?, ?)';
        $istmt = $connection->prepare($sql);
        $istmt->execute(array($title, $body));
    }
}

$view->content = <<<EOS
        <section id="main" class="wrapper style1">
            <header class="major">
                <h2>Persistent</h2>
                <p>Persistent attacks are those where the injected script is permanently stored on the target server.</p>
            </header>
            <div class="container">
                <div id="newPost">
                    <h2>Create New Post</h2>
                    <form action="" method="POST">
                        <input id="title" name="title" placeholder="title" type="text">
                        <textarea id="body" name="body" placeholder="body" rows="5"></textarea>
                        <input name="submit" type="submit" value="Post">
                        <span class="error">$error</span>
                    </form>
                </div>
                <ul id="posts">
EOS;

$stmt = $connection->prepare("SELECT id, title FROM posts ORDER BY id DESC");
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $safe_title = htmlspecialchars($row['title']);
    $view->content .= "<li><a href='post.php?id={$row['id']}'>$safe_title</a></li>";
}

$view->content .= <<<EOS
                </ul>
            </div>
        </section>
EOS;

echo $view->render('main_template.php');

?>
