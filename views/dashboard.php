<?php
require_once BASE_PATH . 'views/templates/heroHeader.php';
require_once BASE_PATH . 'views/inventory/components/navbar.php';
require_once BASE_PATH . 'views/inventory/components/aside.php';
?>

<section class="mt-14 p-5">
</section>
<?php
if (isset($_SESSION['login_status'])) :
?>
    <div id="toast-simple" class="fixed bottom-5 left-5 flex justify-between items-center w-full max-w-xs p-4 space-x-4 rtl:space-x-reverse rounded-lg shadow text-gray-400 space-x bg-gray-800" role="alert">
        <img class="w-10 h-10 rounded-full" src="<?= asset_url('img/default.jpg') ?>" alt="profile Photo" />
        <p class="text-sm font-normal"><?= $user['name'] . " " . $user['family'] ?> عزیز خوش آمدید.</p>
        <img class="cursor-pointer" id="close_login_notification" src="<?= asset_url('icons/close.svg') ?>" alt="close nav icon">
    </div>
<?php endif; ?>
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
            const id = "<?= $user['id'] ?>";
            const username = "<?= $user['username'] ?>";
            const time = "<?= $today ?>";
            const host = "<?= $_SERVER['HTTP_HOST'] ?>";
            const ip = "<?= $_SERVER['REMOTE_ADDR'] ?>";

            // sendAjaxRequestForSuccessfulLogin(url, id, username, time, host, ip);
        }
    });

    $(document).ready(function() {
        // Set the initial left position to '10px'
        $('#toast-simple').css('left', '10px');

        // Use setTimeout to change the left position to '-100%' after 5 seconds
        setTimeout(function() {
            $('#toast-simple').css('left', '-100%');
        }, 5000);

        $('#close_login_notification').click(function() {
            $('#toast-simple').css('left', '-100%');
        })
    });
</script>

<!-- Component End  -->
<?php
require_once BASE_PATH . 'views/templates/heroFooter.php'
?>