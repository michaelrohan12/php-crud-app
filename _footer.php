</body>
<?php if (isset($_SESSION['authenticated_user'])): ?>
    <br><br><br><br><footer class="footer">
        <p>You are logged in as: <?php echo $_SESSION['authenticated_user'] ?></p>
    </footer>
<?php endif; ?>
</html>
