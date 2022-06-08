<html>
    <title>Update from repository</title>
    <body>
<?php
if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on"){
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
    die;
}
require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '/../.env');
$dotenv->load();
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '/../.env.marapi-local');
$dotenv->safeLoad();
if (isset($_POST['Password'])) {
    echo "<h1>Update from marapi repository</h1><pre style=\"border: 5px solid; background-color: #CCC\">";
IF (md5($_POST['Password']) == $_ENV['Updatepasswd']) {
    $output = shell_exec(__DIR__ . '/../update.sh');
    echo $output;
} else {
    echo "ERROR.";
}
    echo "</pre>";
} else {
    ?>
        <form method="post">
            <input type="password" name="Password">
            <input type="submit">
        </form>
<?php
}
?>
    </body>
</html>