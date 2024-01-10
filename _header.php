<?php
$title = $title ?? 'PHP for the Web';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title, ENT_QUOTES); ?></title>
    <link rel="stylesheet" href= "/styles/styles.css">
    <link rel="stylesheet" href= "/styles/bootstrap.min.css">
</head>
<body style="padding-top: 56px;">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand" href="/"><img src="images/tourLogo.png" class="logo-image"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Homepage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/name">Name</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/random">Random number</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pictures">Pictures</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/secret">Secret picture</a>
                </li>
                <?php if (isset($_SESSION['authenticated_user'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <?php
    include(__DIR__ . '/_flash_message.php');
    ?>
