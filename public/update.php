<html>
    <body>
<?php
require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '/../.env');
$dotenv->load();
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '/../.env.marapi-local');
$dotenv->safeLoad();
if (isset($_POST['Password'])) {
IF (md5($_POST['Password']) == $_ENV['Updatepasswd']) {
    $output = shell_exec(__DIR__ . '/../update.sh');
    echo "<title>Update from repository</title><div style=\"border: 14px solid\">";
    echo $output;
    echo "</div>";
} else {
    echo "ERROR.";
}
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