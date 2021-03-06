<?php
// Variables
$ldlatestvr = "v1.3.1-beta";
$ldwin32latestpackagedownload = "https://github.com/mar-on-github/logger-diary/releases/download/v1.3.1-beta/Logger-Diary_Installer_v1.3.1-beta_win32.exe";


require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../", '.env');
$dotenv->load();

header('Content-Type: text/plain; charset=utf-8');
// if ($_GET['wants'] == 'lv.l') {
//     
//     echo $_ENV[ldlatestvl];
// }
if ($_GET['wants'] == 'lv.r') {
    echo $ldlatestvr;
}
if ($_GET['wants'] == 'links.more') {
    echo file_get_contents('../files/logger-diary/links.html');
}
if ($_GET['wants'] == 'latestdownload') {
    if ($_GET['OS'] == 'Win32') {
        echo $ldwin32latestpackagedownload;
    }
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
