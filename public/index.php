<?php
if (!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on") {
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
    die;
}
require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '/../.env');
$dotenv->load();
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '/../.env.marapi-local');
$dotenv->safeLoad();
?>
<html>
<title>Woops!</title>

<body>
    <?php
    echo "<p>Mar's api - hosted by <font color=\"orange\">" . $_ENV['hostedby'] . "</font> written by <a href=\"https://github.com/mar-on-github/\">mar</a>.</p>";
    ?>
    <h1>I think you may have stumbled upon something that is not meant for humans to stumble upon!</h1>
    <p><i>Other places that <u>ARE</u> meant for humans to stumble upon:</i></p>
    <ul>
        <li><a href="https://blog.from-mar.com">My blog</a></li>
        <li><a href="https://ecosia.org/">Search the web</a></li>
        <li><a href="https://github.com/mar-on-github?tab=repositories">Other coding by me</a></li>
    </ul>
    <p><b>Stay safe on your travels, dear friend!</b></p>
</body>

</html>