<?php
require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../", '.env');
$dotenv->load();
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../", 'logger-diary');
$dotenv->safeLoad();
// if ($_GET['wants'] == 'lv.l') {
//     header('Content-Type: text/plain; charset=utf-8');
//     echo $_ENV[ldlatestvl];
// }
if ($_GET['wants'] == 'lv.r') {
    header('Content-Type: text/plain; charset=utf-8');
    echo $_ENV['ldlatestvr'];
}
if ($_GET['wants'] == 'links.more') {
    echo "<a href=\"https://from-mar.com\" target=\"_blank\">About author</a>";
    echo "<a href=\"https://github.com/mar-on-github/logger-diary/issues/new/choose\" target=\"_blank\">Report...</a>";
    echo "<a href=\"https://github.com/mar-on-github/logger-diary\" target=\"_blank\"><img src=\"https://github.githubassets.com/images/modules/site/icons/footer/github-mark.svg\"> Visit the GitHub repo</a>";
}