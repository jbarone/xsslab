<?php

session_start();

require_once('db.php');

$error = '';

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    } else {
        $username=$_POST['username'];
        $password=$_POST['password'];

        $sql = 'SELECT id, username FROM users WHERE username = ? and password = ?';
        $stmt = $connection->prepare($sql);
        $stmt->execute(array($username, $password));

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user === false) {
            $error = "Username or Password is invalid";
        } else {
            $_SESSION['logged_in'] = true;
            $_SESSION['user'] = $user['username'];
            header("location: secret.php");
        }
    }
}

require_once('template.php');

$view = new Template();
$view->logged_in = false;

$view->content = <<<EOS
        <section id="main" class="wrapper style1">
            <div class="container">
                <div id="login">
                    <h2>Login Form</h2>
                    <form action="" method="POST">
                        <label>UserName :</label>
                        <input id="name" name="username" placeholder="username" type="text">
                        <label>Password :</label>
                        <input id="password" name="password" placeholder="**********" type="password">
                        <input name="submit" type="submit" value=" Login ">
                        <span class="error">$error</span>
                    </form>
                </div>
            </div>
        </section>
EOS;

echo $view->render('main_template.php');

?>
