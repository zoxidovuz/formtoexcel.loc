<?php
if (isset($_SESSION['status'])) {
?>

    <div class="alert alert-primary" role="alert">
        <?= $_SESSION['status'] ?>
    </div>

<?php
    unset($_SESSION['status']);
}
?>