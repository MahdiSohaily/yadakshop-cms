<?php
require_once BASE_PATH . 'views/templates/heroHeader.php';
require_once BASE_PATH . 'views/inventory/components/navbar.php';
require_once BASE_PATH . 'views/inventory/components/aside.php';
?>

<section class="mt-14 p-5">
    <!-- Start Content -->
    <div class="grid grid-cols-1 gap-5 mt-6 sm:grid-cols-2 lg:grid-cols-4">
        <div x-for="i in 4" :key="i">
            <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                <div class="flex items-start justify-between">
                    <div class="flex flex-col space-y-2">
                        <span class="text-gray-400">مجموع کاربران</span>
                        <span class="text-lg font-semibold">100</span>
                    </div>
                    <img class="rounded-md w-16 h-16" src="<?= asset_url('icons/user.svg') ?>" alt="">
                </div>
                <div>
                    <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">14%</span>
                    <span>مدیریت کاربران</span>
                </div>
            </div>
        </div>
        <div x-for="i in 4" :key="i">
            <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                <div class="flex items-start justify-between">
                    <div class="flex flex-col space-y-2">
                        <span class="text-gray-400">مجموع فاکتور های ثبت شده</span>
                        <span class="text-lg font-semibold">100,221</span>
                    </div>
                    <img class="rounded-md w-16 h-16" src="<?= asset_url('icons/invoice.svg') ?>" alt="">
                </div>
                <div>
                    <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">14%</span>
                    ثبت فاکتور جدید
                </div>
            </div>
        </div>
        <div x-for="i in 4" :key="i">
            <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                <div class="flex items-start justify-between">
                    <div class="flex flex-col space-y-2">
                        <span class="text-gray-400">مجموع اقلام وارد شده</span>
                        <span class="text-lg font-semibold">100,221</span>
                    </div>
                    <img class="rounded-md w-16 h-16" src="<?= asset_url('icons/receive.svg') ?>" alt="">
                </div>
                <div>
                    <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">14%</span>
                    <span>گزارش اقلام وارده</span>
                </div>
            </div>
        </div>
        <div x-for="i in 4" :key="i">
            <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                <div class="flex items-start justify-between">
                    <div class="flex flex-col space-y-2">
                        <span class="text-gray-400">مجموع اقلام به فروش رسیده</span>
                        <span class="text-lg font-semibold">100,221</span>
                    </div>
                    <img class="rounded-md w-16 h-16" src="<?= asset_url('icons/deliver.svg') ?>" alt="">
                </div>
                <div>
                    <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">14%</span>
                    <span>گزارش اقلام خارجه</span>
                </div>
            </div>
        </div>
    </div>
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