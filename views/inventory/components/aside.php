<!-- Sidebar -->
<aside id="sidebar" class=" fixed z-1 min-h-screen flex flex-col items-center w-60  overflow-hidden text-white bg-gray-800 shadow-lime-800">
    <div class="flex justify-between items-center w-full px-3 mt-3">
        <span class="flex items-center">
            <img class="w-8 h-8 fill-current" src="<?= asset_url('icons/brand.svg') ?>" alt="">
            <span class="ml-2 text-sm font-bold px-2">یدک شاپ</span>
        </span>
        <img class="cursor-pointer" onclick="toggleSidebar()" src="<?= asset_url('icons/close.svg') ?>" alt="close nav icon">
    </div>
    <div class="w-full px-2">
        <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700">
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300 <?= $page_title == 'داشبورد' ? 'text-gray-200 bg-gray-700' : '' ?>" href="#">
                <img class="w-6 h-6 stroke-current" src="<?= asset_url('icons/dashboard.svg') ?>" alt="">
                <span class="ml-2 text-sm px-2">صفحه اصلی</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
                <img class="w-6 h-6 stroke-current" src="<?= asset_url('icons/search.svg') ?>" alt="">
                <span class="ml-2 text-sm px-2">جستجوی اجناس</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 hover:bg-gray-700 rounded" href="#">
                <img class="w-6 h-6 stroke-current" src="<?= asset_url('icons/file.svg') ?>" alt="">
                <span class="ml-2 text-sm px-2">مدیریت فایل</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
                <img class="w-6 h-6 stroke-current" src="<?= asset_url('icons/store.svg') ?>" alt="">
                <span class="ml-2 text-sm px-2">انبار گردانی</span>
            </a>
            <a class="flex items-center justify-between w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
                <div class="flex items-center">
                    <img class="w-6 h-6 stroke-current" src="<?= asset_url('icons/price.svg') ?>" alt="">
                    <span class="ml-2 text-sm px-2">سامانه قیمت</span>
                </div>
                <img src="<?= asset_url('icons/left_arrow.svg') ?>" alt="">

            </a>
            <a class="flex items-center justify-between w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
                <div class="flex items-center">
                    <img class="w-6 h-6 stroke-current" src="<?= asset_url('icons/move.svg') ?>" alt="">
                    <span class="ml-2 text-sm px-2">انتقال به انبار</span>
                </div>
                <img src="<?= asset_url('icons/left_arrow.svg') ?>" alt="">
            </a>
        </div>
        <div class="flex flex-col items-center w-full mt-2 border-t border-gray-700">
            <a class="relative flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                </svg>
                <span class="ml-2 text-sm px-2">Messages</span>
                <span class="absolute top-0 left-0 w-2 h-2 mt-2 ml-2 bg-indigo-500 rounded-full"></span>
            </a>
        </div>
    </div>
    <form class="flex items-center justify-center w-full h-12 mt-auto" action="<?= site_url('logout') ?>" method="post">
        <button type="submit" class="flex items-center justify-center w-full h-12 mt-auto bg-gray-600 hover:bg-gray-700 hover:text-gray-300">
            <img src="<?= asset_url('icons/logout.svg') ?>" alt="">
            <span class="ml-2 text-sm px-2"> خروج از حساب</span>
        </button>
    </form>
</aside>