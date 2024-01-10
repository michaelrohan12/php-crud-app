<?php
include(__DIR__ . '/../bootstrap.php');

if (isset($_POST["name"])) {
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["message"] = "Thanks for telling us your name!";
    header('Location: /random');
    exit;
}
?>
<?php
$title = 'Name';
include(__DIR__ . '/../_header.php'); 
?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <form method="post">
            <p class="text-center">
                <br><label for="name">
                    Your name:
                </label>
                <input type="text" name="name" id="name">
            </p>
            <p class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </p>
        </form>
    </div>
</div>

<?php
include(__DIR__ . '/../_footer.php');
?>
