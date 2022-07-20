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
if ($_GET['wants'] == 'latestdownload') {
    if ($_GET['OS'] == 'Win32') {
        echo "https://github.com/mar-on-github/logger-diary/releases/download/v1.2.2-beta/Logger-Diary_Installer_v1.2.2-beta_x32.exe";
    }
}
if ($_GET['wants'] == 'links.more') {
    echo str_replace('\n', '', file_get_contents('../files/logger-diary/links.html'));
}
if ($_GET['wants'] == 'links.more.json') {
    header('Content-Type: application/json; charset=utf-8');
    echo str_replace('\n', '', file_get_contents('../files/logger-diary/links.json'));
}
if ($_GET['wants'] == 'board.motd.large') {
    echo str_replace('\n', '', file_get_contents('../files/logger-diary/news.html'));
}
if ($_GET['wants'] == 'board.changelog') {
    $Parsedown = new Parsedown();
    $LoggerChangeLog = (file_get_contents('../files/logger-diary/changelog.md'));
    echo str_replace('\n', '', ($Parsedown->text($LoggerChangeLog)));
    echo "Logger-Diary changelog, sent to you from the mar apis.";
}