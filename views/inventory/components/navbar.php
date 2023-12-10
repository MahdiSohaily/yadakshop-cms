<header class="fixed top-0 left-0 right-0 flex align-center justify-between px-5 h-15 text-white bg-gray-800 shadow-lg">
    <ul class="flex">
        <li class="flex items-center ml-5">
            <img class="cursor-pointer" src="<?= asset_url('icons/open.svg') ?>" alt="" onclick="toggleSidebar()">
        </li>
        <li class="flex items-center">
            <a class="flex items-center py-4 hover:text-gray-200 rounded p-2 ml-2 <?= $page_title == 'ورود کالا' ? 'bg-gray-700 ' : '' ?>" href="">
                <img src="<?= asset_url('icons/inter.svg') ?>" alt="inter new goods">
                <span class="text-sm px-2"> ورود کالا</span>
            </a>
        </li>
        <li class="flex items-center">
            <a class="flex items-center py-4 hover:text-gray-200 rounded p-2 ml-2 <?= $page_title == 'خروج کالا' ? 'bg-gray-700 ' : '' ?>" href="">
                <img src="<?= asset_url('icons/export.svg') ?>" alt="export goods">
                <span class="text-sm px-2"> خروج کالا</span>
            </a>
        </li>
        <li class="flex items-center relative tooltip_container">
            <a class="flex items-center py-4 hover:text-gray-200 bg-gray-700 rounded p-3 ml-2 <?= $page_title == 'گزارش ورود' ? 'bg-gray-700 ' : '' ?>" href="">
                <img src="<?= asset_url('icons/enter_report.svg') ?>" alt="enter report">
                <span class="text-sm px-2"> گزارش ورود </span>
            </a>
            <div class="tooltip absolute bg-gray-800 w-52 rounded-b-lg  border border-gray-600 text-white">
                <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal border-b focus:z-10 focus:ring-2  border-gray-600 hover:bg-gray-600 hover:text-white focus:ring-gray-500 focus:text-white">
                    <img class="w-4 h-4 me-2.5" src="<?= asset_url("icons/3days.svg") ?>" alt="3 days report">
                    ۳ روز اخیر
                </a>
                <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal border-b focus:z-10 focus:ring-2  border-gray-600 hover:bg-gray-600 hover:text-white focus:ring-gray-500 focus:text-white">
                    <img class="w-4 h-4 me-2.5 bg-white" src="<?= asset_url("icons/10days.svg") ?>" alt="3 days report">
                    ۱۰ روز اخیر
                </a>
                <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal border-b focus:z-10 focus:ring-2  border-gray-600 hover:bg-gray-600 hover:text-white focus:ring-gray-500 focus:text-white">
                    <img class="w-4 h-4 me-2.5" src="<?= asset_url("icons/30days.svg") ?>" alt="3 days report">
                    ۳۰ روز اخیر
                </a>
                <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal rounded-b-lg focus:z-10 focus:ring-2  border-gray-600 hover:bg-gray-600 hover:text-white focus:ring-gray-500 focus:text-white">
                    <img class="w-4 h-4 me-2.5" src="<?= asset_url("icons/60days.svg") ?>" alt="3 days report">
                    ۶۰ روز اخیر
                </a>
            </div>
        </li>
        <li class="flex items-center relative tooltip_container">
            <a class="flex items-center py-4 hover:text-gray-200 rounded p-2 ml-2 <?= $page_title == 'گزارش خروج' ? 'bg-gray-700 ' : '' ?>" href="">
                <img src="<?= asset_url('icons/enter_report.svg') ?>" alt="enter report">
                <span class="text-sm px-2"> گزارش خروج </span>
            </a>
            <div class="tooltip absolute bg-gray-800 w-52 rounded-b-lg  border border-gray-600 text-white">
                <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal border-b focus:z-10 focus:ring-2  border-gray-600 hover:bg-gray-600 hover:text-white focus:ring-gray-500 focus:text-white">
                    <img class="w-4 h-4 me-2.5" src="<?= asset_url("icons/3days.svg") ?>" alt="3 days report">
                    ۳ روز اخیر
                </a>
                <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal border-b focus:z-10 focus:ring-2  border-gray-600 hover:bg-gray-600 hover:text-white focus:ring-gray-500 focus:text-white">
                    <img class="w-4 h-4 me-2.5 bg-white" src="<?= asset_url("icons/10days.svg") ?>" alt="3 days report">
                    ۱۰ روز اخیر
                </a>
                <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal border-b focus:z-10 focus:ring-2  border-gray-600 hover:bg-gray-600 hover:text-white focus:ring-gray-500 focus:text-white">
                    <img class="w-4 h-4 me-2.5" src="<?= asset_url("icons/30days.svg") ?>" alt="3 days report">
                    ۳۰ روز اخیر
                </a>
                <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal rounded-b-lg focus:z-10 focus:ring-2  border-gray-600 hover:bg-gray-600 hover:text-white focus:ring-gray-500 focus:text-white">
                    <img class="w-4 h-4 me-2.5" src="<?= asset_url("icons/60days.svg") ?>" alt="3 days report">
                    ۶۰ روز اخیر
                </a>
            </div>
        </li>
        <li class="flex items-center">
            <a class="flex items-center py-4 hover:text-gray-200 rounded p-2 ml-2 <?= $page_title == 'موجودی کالا' ? 'bg-gray-700 ' : '' ?>" href="">
                <img src="<?= asset_url("icons/exist.svg") ?>" alt="existing goods">
                <span class="text-sm px-2"> موجودی کالا</span>
            </a>
        </li>
        <li class="flex items-center">
            <a class="flex items-center py-4 hover:text-gray-200 rounded p-2 ml-2 <?= $page_title == 'مرکز تماس' ? 'bg-gray-700 ' : '' ?>" href="">
                <img src="<?= asset_url("icons/call.svg") ?>" alt="3 days report">
                <span class="text-sm px-2"> مرکز تماس</span>
            </a>
        </li>
    </ul>
    <ul class="flex gap-3">
        <li class="flex items-center">
            <a href="#">
                <img src="<?= asset_url("icons/bell.svg") ?>" alt="bell icon">
            </a>
        </li>
        <li class="flex items-center">
            <a href="#">
                <img src="<?= asset_url("icons/tv.svg") ?>" alt="tv icon">
            </a>
        </li>
        <li class="flex items-center">
            <img class="w-8 h-8 rounded-full py-4ll" title="username" src="<?= asset_url('img/default.jpg') ?>" alt="">
        </li>
    </ul>
</header>
<main>