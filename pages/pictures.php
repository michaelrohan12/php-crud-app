<?php
include(__DIR__ . '/../bootstrap.php');

if (isset($_POST['number'])) {
    $_SESSION["message"] = "There are {$_POST['number']} picture images shown below and can be modified to cat or an apple as well as the number\n";
}

$title = 'Pictures';
include(__DIR__ . '/../_header.php');
?>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?php
            if (isset($_POST["number"])) {
                $numberOfPictures = (int) $_POST["number"];
            } else {
                $numberOfPictures = 1;
            }

            if ($numberOfPictures < 1) {
                $numberOfPictures = 1;
            }

            $pictures = [
                "images/cat.png" => "Cat",
                "images/apple.jpg" => "Apple",
            ];
            $picture = isset($_POST["picture"]) ? $_POST["picture"] : "images/cat.png";

            for ($i = 1; $i <= $numberOfPictures; $i++) {
                ?>
                <br><br><?php if ($picture === "images/cat.png") {?>Cat<?php } else {?>Apple<?php }?> <?php echo $i; ?><br>
                <img src="/<?php echo htmlspecialchars($picture, ENT_QUOTES); ?>" alt="Picture <?php echo $i ?>">
                <?php
            }
            ?>
            <form method="post">
                <div>
                    <br><label for="picture">
                        Select a picture:
                    </label>

                    <select name="picture" id="picture">
                        <?php foreach ($pictures as $filename => $description) {?>
                            <option value="<?php
                            echo htmlspecialchars($filename, ENT_QUOTES); ?>"
                                <?php
                                if (isset($_POST["picture"]) && $_POST['picture'] === $filename) {
                                    ?> selected <?php }?>><?php echo htmlspecialchars($description, ENT_QUOTES); ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label for="number">
                        Number of pictures to show:
                    </label>
                    <input name="number" id="number" value="<?php if (isset($_POST['number'])) {
                        echo htmlspecialchars($_POST['number'], ENT_QUOTES);
                    }
                    ?>">
                </div>
                <div class="mb-3">
                    <br><button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

<?php include(__DIR__ . '/../_footer.php'); ?>
