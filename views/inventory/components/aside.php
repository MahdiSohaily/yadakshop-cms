<!-- Sidebar -->
<aside id="sidebar" class=" fixed z-1 min-h-screen flex flex-col items-center w-60  text-white bg-gray-800 shadow-lime-800">
    <div class="flex justify-between items-center w-full px-3 mt-3">
        <span class="flex items-center">
            <img class="w-8 h-8 fill-current" src="<?= asset_url('icons/brand.svg') ?>" alt="">
            <span class="ml-2 text-sm font-bold px-2">یدک شاپ</span>
        </span>
        <img class="cursor-pointer" onclick="toggleSidebar()" src="<?= asset_url('icons/close.svg') ?>" alt="close nav icon">
    </div>
    <div class="w-full">
        <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700">
            <a class="flex items-center w-full h-12 px-3 py-3 hover:bg-gray-700 hover:text-gray-300 <?= $page_title == 'داشبورد' ? 'text-gray-200 bg-gray-700' : '' ?>" href="#">
                <img class="w-6 h-6 stroke-current" src="<?= asset_url('icons/dashboard.svg') ?>" alt="">
                <span class="ml-2 text-sm px-2">صفحه اصلی</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 py-3 hover:bg-gray-700 hover:text-gray-300" href="#">
                <img class="w-6 h-6 stroke-current" src="<?= asset_url('icons/search.svg') ?>" alt="">
                <span class="ml-2 text-sm px-2">جستجوی اجناس</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 hover:bg-gray-700 py-3" href="#">
                <img class="w-6 h-6 stroke-current" src="<?= asset_url('icons/file.svg') ?>" alt="">
                <span class="ml-2 text-sm px-2">مدیریت فایل</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 py-3 hover:bg-gray-700 hover:text-gray-300" href="#">
                <img class="w-6 h-6 stroke-current" src="<?= asset_url('icons/store.svg') ?>" alt="">
                <span class="ml-2 text-sm px-2">انبار گردانی</span>
            </a>
            <div class="dropdown_container w-full">
                <a class="flex items-center justify-between w-full h-12 px-3 py-3 hover:bg-gray-700 hover:text-gray-300" href="#">
                    <div class="flex items-center">
                        <img class="w-6 h-6 stroke-current" src="<?= asset_url('icons/price.svg') ?>" alt="">
                        <span class="ml-2 text-sm px-2">سامانه قیمت</span>
                    </div>
                    <img src="<?= asset_url('icons/left_arrow.svg') ?>" alt="">
                </a>
                <div class="dropdown_menu bg-gray-800 w-52 text-white">
                    <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal border-b focus:z-10 focus:ring-2  border-gray-600 hover:bg-gray-600 hover:text-white focus:ring-gray-500 focus:text-white">
                        <img class="w-4 h-4 me-2.5" src="<?= asset_url("icons/price_tag.svg") ?>" alt="3 days report">
                        سامانه قیمت
                    </a>
                    <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal border-b focus:z-10 focus:ring-2  border-gray-600 hover:bg-gray-600 hover:text-white focus:ring-gray-500 focus:text-white">
                        <img class="w-4 h-4 me-2.5" src="<?= asset_url("icons/original.svg") ?>" alt="3 days report">
                        قیمت موبیز
                    </a>
                </div>
            </div>

            <div class="dropdown_container w-full">
                <a class="flex items-center justify-between w-full h-12 px-3 py-3 hover:bg-gray-700 hover:text-gray-300" href="#">
                    <div class="flex items-center">
                        <img class="w-6 h-6 stroke-current" src="<?= asset_url('icons/move.svg') ?>" alt="">
                        <span class="ml-2 text-sm px-2">انتقال به انبار</span>
                    </div>
                    <img src="<?= asset_url('icons/left_arrow.svg') ?>" alt="">
                </a>
                <div class="dropdown_menu bg-gray-800 w-52 text-white">
                    <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal border-b focus:z-10 focus:ring-2  border-gray-600 hover:bg-gray-600 hover:text-white focus:ring-gray-500 focus:text-white">
                        <img class="w-4 h-4 me-2.5" src="<?= asset_url("icons/transfer.svg") ?>" alt="3 days report">
                        انتقال به انبار
                    </a>
                    <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal border-b focus:z-10 focus:ring-2  border-gray-600 hover:bg-gray-600 hover:text-white focus:ring-gray-500 focus:text-white">
                        <img class="w-4 h-4 me-2.5" src="<?= asset_url("icons/report.svg") ?>" alt="3 days report">
                        گزارش انتقالات
                    </a>
                    <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal border-b focus:z-10 focus:ring-2  border-gray-600 hover:bg-gray-600 hover:text-white focus:ring-gray-500 focus:text-white">
                        <img class="w-4 h-4 me-2.5" src="<?= asset_url("icons/decrease.svg") ?>" alt="3 days report">
                        نیاز به انتقال
                    </a>
                    <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal focus:z-10 focus:ring-2  border-gray-600 hover:bg-gray-600 hover:text-white focus:ring-gray-500 focus:text-white">
                        <img class="w-4 h-4 me-2.5" src="<?= asset_url("icons/decrease2.svg") ?>" alt="3 days report">
                        گزارش کسرات
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center w-full border-t border-gray-700">
            <a class="relative flex items-center w-full h-12 px-3 py-3 hover:bg-gray-700 hover:text-gray-300" href="#">
                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                </svg>
                <span class="ml-2 text-sm px-2">Messages</span>
                <span class="absolute top-0 left-0 w-2 h-2 ml-2 bg-indigo-500 rounded-full"></span>
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