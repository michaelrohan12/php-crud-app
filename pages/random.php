<?php
include(__DIR__ . '/../bootstrap.php');
?>

<!DOCTYPE html>
<?php $randomInt = random_int(1, 10);
$title = 'Random';
include(__DIR__ . '/../_header.php'); ?>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <br><h1 class="text-center">Your lucky number is: <?php echo $randomInt; ?></h1>
            <?php if ($randomInt > 5): ?>
                <h2 class="text-center">Nice
                    <?php
                    $name = $_SESSION["name"];
                    if ($name) {
                        if (strlen($name) > 25) {
                            $name = substr($name, 0, 25);
                        }
                    } else {
                        $name = "anonymous user";
                    }
                    echo ", " . htmlspecialchars($name, ENT_QUOTES);
                    ?>!
                </h2>
            <?php endif; ?>

            <form method="post" action="/pictures" class="text-center">
                <input type="hidden" name="number" value="<?php echo $randomInt; ?>">
                <button type="submit" class="btn btn-primary">
                    Now show me <?php echo $randomInt; ?> pictures!
                </button>
            </form>
        </div>
    </div>

<?php include(__DIR__ . '/../_footer.php'); ?>
