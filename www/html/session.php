<?php
session_start();
if (isset($_SESSION['logged_in'])) {
    $view->logged_in = $_SESSION['logged_in'];
} else {
    $view->logged_in = false;
}
?>
