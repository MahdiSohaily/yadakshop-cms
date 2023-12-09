<?php

use App\Core\Auth\Auth;

require_once BASE_PATH . 'views/templates/heroHeader.php';
require_once BASE_PATH . 'views/inventory/components/navbar.php';
require_once BASE_PATH . 'views/inventory/components/aside.php';
?>

<section class="mt-14 p-5">






    <div id="toast-simple" class="fixed bottom-5 left-5 flex justify-between items-center w-full max-w-xs p-4 space-x-4 rtl:space-x-reverse text-gray-500 bg-white  rounded-lg shadow dark:text-gray-400 space-x dark:bg-green-700" role="alert">
        <div class="ps-4 text-sm font-normal"><?= Auth::user()['name'] . " " . Auth::user()['family'] ?> عزیز خوش آمدید.</div>
        <svg width="20px" height="20px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" onclick="toggleSidebar()">
            <path fill="red" d="M195.2 195.2a64 64 0 0 1 90.496 0L512 421.504 738.304 195.2a64 64 0 0 1 90.496 90.496L602.496 512 828.8 738.304a64 64 0 0 1-90.496 90.496L512 602.496 285.696 828.8a64 64 0 0 1-90.496-90.496L421.504 512 195.2 285.696a64 64 0 0 1 0-90.496z" />
        </svg>
    </div>





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
            const url = "<?= CONFIG['login_notification_url'] ?>";
            const id = "<?= Auth::user()['id'] ?>";
            const username = "<?= Auth::user()['username'] ?>";
            const time = "<?= $today ?>";
            const host = "<?= $_SERVER['HTTP_HOST'] ?>";
            const ip = "<?= $_SERVER['REMOTE_ADDR'] ?>";

            sendAjaxRequestForSuccessfulLogin(url, id, username, time, host, ip);
        }
    });
</script>

<!-- Component End  -->
<?php
require_once BASE_PATH . 'views/templates/heroFooter.php'
?>