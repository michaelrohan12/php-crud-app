<?php
include(__DIR__ . '/../bootstrap.php');

if (!isset($_SESSION['authenticated_user'])) {
    header("Location: /login");
    exit;
}
$title = 'Secret';
include(__DIR__ . '/../_header.php');
?>
    <br><p>Here's something special for users who are logged in:</p>
    <p><img src="/images/elephant.jpg" alt="An elephant"></p>
<?php
include(__DIR__ . '/../_footer.php');
?>
