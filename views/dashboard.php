<?php
require_once BASE_PATH . 'views/templates/heroHeader.php';
require_once BASE_PATH . 'views/inventory/components/navbar.php';
require_once BASE_PATH . 'views/inventory/components/aside.php';
?>
<section class="">
    <p class=""><?= $today ?></p>
</section>

<script src="<?= asset_url('js/handleLoginNotification.js') ?>"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Check the login status
        const loginStatus = "<?php echo isset($_SESSION['login_status']) ? $_SESSION['login_status'] : ''; ?>";

        // Clear the login status to avoid re-triggering AJAX requests on subsequent page loads
        <?php unset($_SESSION['login_status']); ?>

        // Check the login status and trigger AJAX requests accordingly
        if (loginStatus === 'success') {
            // Run AJAX request for successful login
            sendAjaxRequestForSuccessfulLogin();
        }
    });
</script>

<!-- Component End  -->
<?php
require_once BASE_PATH . 'views/templates/heroFooter.php'
?>