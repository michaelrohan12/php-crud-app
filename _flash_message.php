<?php
if (isset($_SESSION["message"])) {
    ?>
    <div class="alert alert-info alert-dismissible fade show m-0" role="alert">
        <strong><?php echo htmlspecialchars($_SESSION["message"], ENT_QUOTES); ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="this.parentElement.style.display='none';">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
    unset($_SESSION["message"]);
}
?>
