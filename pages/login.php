<?php
include(__DIR__ . '/../bootstrap.php');

$users = [
    "michael" => '$2y$10$kQsA/XpWYQy8CDXMHlIqXuY2ZU4Y0Q0BSJpPYHMAOrWBEx.CuXOvG'
];

if (isset($_POST["username"], $_POST["password"])) {
    if (isset($users[$_POST["username"]])) {
        $expectedPasswordHash = $users[$_POST["username"]];

        if (password_verify($_POST["password"], $expectedPasswordHash)) {
            $_SESSION["authenticated_user"] = $_POST["username"];
            header('Location: /secret');
            exit;
        }
    }
}
?>
<?php
$title = 'Login';
include(__DIR__ . '/../_header.php');
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Login</h5>
                    <form method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include(__DIR__ . '/../_footer.php');
?>
