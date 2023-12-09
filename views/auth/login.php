<?php

$today = jDateTime::date('l j F Y H:i');

require_once BASE_PATH . 'views/templates/heroHeader.php';
?>
<style>
    body {
        margin-top: 0 !important;
        background: url(<?= site_url("public/img/loginbg.svg") ?>) center center no-repeat;
        background-size: cover;
    }
</style>

<section class="login_bg">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="<?= site_url() ?>" class="flex items-center mb-6 text-3xl font-semibold text-white">
            مجموعه یدک شاپ
        </a>
        <div class="w-full bg-white rounded-lg shadow border md:mt-0 sm:max-w-md xl:p-0 border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                    ورود به حساب کاربری
                </h1>
                <form class="space-y-4 md:space-y-6" action="<?= site_url('login/check') ?>" method="post">
                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900"> نام کاربری</label>
                        <input onkeyup="convertToEnglish(this)" type="text" name="username" id="username" minlength="3" maxlength="20" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 placeholder-gray-400  focus:ring-blue-500 focus:border-blue-500" placeholder="user" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">رمز عبور</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500" required="">
                    </div>
                    <div>
                        <?= (isset($_SESSION['login_status']) && $_SESSION['login_status'] === 'failed') ? "<p class='text-sm text-red-700'>نام کاربری و یا رمز عبور اشتباه است.</p>" : "" ?>
                    </div>
                    <button type="submit" class="w-full text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">ورود به حساب</button>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="<?= asset_url('js/handleLoginNotification.js') ?>"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Check the login status
        const loginStatus = "<?= isset($_SESSION['login_status']) ? $_SESSION['login_status'] : ''; ?>";
        const f_username = "<?= isset($_SESSION['f_username']) ? $_SESSION['f_username'] : ''; ?>";
        const f_password = "<?= isset($_SESSION['f_password']) ? $_SESSION['f_password'] : ''; ?>";

        // Clear the login status to avoid re-triggering AJAX requests on subsequent page loads
        <?php unset($_SESSION['login_status']); ?>
        <?php unset($_SESSION['f_username']); ?>
        <?php unset($_SESSION['f_password']); ?>

        // Check the login status and trigger AJAX requests accordingly
        if (loginStatus === 'failed') {
            // Run AJAX request for successful login
            const url = "<?= CONFIG['login_notification_url'] ?>";
            const host = "<?= $_SERVER['HTTP_HOST'] ?>";
            const ip = "<?= $_SERVER['REMOTE_ADDR'] ?>";
            const time = "<?= $today ?>";

            sendLoginAttemptAlert(url, f_username, f_password, time, host, ip);
        }
    });
</script>

<?php
require_once BASE_PATH . "views/templates/heroFooter.php";
