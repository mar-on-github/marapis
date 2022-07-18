<?php
require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../", '.env');
$dotenv->load();
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../files/logger-diary/", 'logger-diary.env');
$dotenv->safeLoad();
header('Content-Type: text/plain; charset=utf-8');
// if ($_GET['wants'] == 'lv.l') {
//     
//     echo $_ENV[ldlatestvl];
// }
if ($_GET['wants'] == 'lv.r') {
    echo $_ENV['ldlatestvr'];
}
if ($_GET['wants'] == 'links.more') {
    echo file_get_contents('../files/logger-diary/links.html');
    }
if ($_GET['wants'] == 'links.more') {
    echo file_get_contents('../files/logger-diary/links.html');
}
if ($_GET['wants'] == 'links.more.json') {
    header('Content-Type: application/json; charset=utf-8');
    echo file_get_contents('../files/logger-diary/links.json');
}
if ($_GET['wants'] == 'board.motd.large') {
    echo file_get_contents('../files/logger-diary/news.html');
}
if ($_GET['wants'] == 'board.changelog') {
    $Parsedown = new Parsedown();
    $LoggerChangeLog = (file_get_contents('../files/logger-diary/changelog.md'));
    echo $Parsedown->text($LoggerChangeLog);
    echo "Logger-Diary changelog, sent to you from the mar apis.";
}