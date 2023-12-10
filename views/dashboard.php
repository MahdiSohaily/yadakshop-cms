<?php
require_once BASE_PATH . 'views/templates/heroHeader.php';
require_once BASE_PATH . 'views/inventory/components/navbar.php';
require_once BASE_PATH . 'views/inventory/components/aside.php';
?>

<section class="mt-14 p-5">
    <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
    <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-12">
        <div class="-m-1 flex flex-wrap md:-m-2">
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                    <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center" src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" />
                </div>
            </div>
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                    <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center" src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(74).webp" />
                </div>
            </div>
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                    <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center" src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(75).webp" />
                </div>
            </div>
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                    <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center" src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(70).webp" />
                </div>
            </div>
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                    <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center" src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(76).webp" />
                </div>
            </div>
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                    <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center" src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(72).webp" />
                </div>
            </div>
        </div>
    </div>


    <div id="toast-simple" class="fixed bottom-5 left-5 flex justify-between items-center w-full max-w-xs p-4 space-x-4 rtl:space-x-reverse rounded-lg shadow text-gray-400 space-x bg-gray-800" role="alert">
        <img class="w-10 h-10 rounded-full" src="<?= asset_url('img/default.jpg') ?>" alt="profile Photo" />
        <p class="text-sm font-normal"><?= $user['name'] . " " . $user['family'] ?> عزیز خوش آمدید.</p>
        <svg id="close_login_notification" class="cursor-pointer" width="20px" height="20px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
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
            const id = "<?= $user['id'] ?>";
            const username = "<?= $user['username'] ?>";
            const time = "<?= $today ?>";
            const host = "<?= $_SERVER['HTTP_HOST'] ?>";
            const ip = "<?= $_SERVER['REMOTE_ADDR'] ?>";

            sendAjaxRequestForSuccessfulLogin(url, id, username, time, host, ip);
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