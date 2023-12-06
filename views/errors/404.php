<?php
require_once BASE_PATH . 'views/errors/templates/header.php';
?>

<body>
    <div class="flex flex-col items-center justify-center w-screen h-screen gap-12 py-8 ">
        <img class="h-1/2 aspect-video" src="<?= asset_url('img/404.svg') ?>" alt="">
        <div class="flex flex-col items-center gap-4">
            <h1 class="text-5xl font-bold text-center text-indigo-600">
                ۴۰۴
            </h1>
            <p class="text-xl text-center ">
                متاسفانه صفحه درخواستی شما پیدا نشد.
            </p>
            <a href="<?= site_url() ?>" class="px-5 inline py-3 text-sm font-medium leading-5 shadow-2xl text-white transition-all duration-400 border border-transparent rounded-lg focus:outline-none bg-indigo-600 active:bg-red-600 hover:bg-red-700">برگشت به صفحه اصلی</a>
        </div>
    </div>
</body>

</html>