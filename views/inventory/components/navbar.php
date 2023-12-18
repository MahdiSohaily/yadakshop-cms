<header class="fixed top-0 left-0 right-0 flex align-center justify-between px-5 h-15 text-white bg-white dark:bg-gray-800 shadow-lg">
    <ul class="flex">
        <li class="flex items-center ml-5">
            <svg class="cursor-pointer stroke-gray-800 dark:stroke-white" onclick="toggleSidebar()" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_429_11066)">
                    <path d="M3 6.00092H21M3 12.0009H21M3 18.0009H21" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                </g>
                <defs>
                    <clipPath id="clip0_429_11066">
                        <rect width="24" height="24" fill="white" transform="translate(0 0.000915527)" />
                    </clipPath>
                </defs>
            </svg>
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
            <img id="logo" class="cursor-pointer" onclick="toggleTheme()" src="<?= asset_url("icons/sun.svg") ?>" alt="bell icon">
        </li>
        <li class="flex items-center">
            <a href="#">
                <svg class="fill-gray-800 dark:fill-white" width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.3399 14.49L18.3399 12.83C18.1299 12.46 17.9399 11.76 17.9399 11.35V8.82C17.9399 6.47 16.5599 4.44 14.5699 3.49C14.0499 2.57 13.0899 2 11.9899 2C10.8999 2 9.91994 2.59 9.39994 3.52C7.44994 4.49 6.09994 6.5 6.09994 8.82V11.35C6.09994 11.76 5.90994 12.46 5.69994 12.82L4.68994 14.49C4.28994 15.16 4.19994 15.9 4.44994 16.58C4.68994 17.25 5.25994 17.77 5.99994 18.02C7.93994 18.68 9.97994 19 12.0199 19C14.0599 19 16.0999 18.68 18.0399 18.03C18.7399 17.8 19.2799 17.27 19.5399 16.58C19.7999 15.89 19.7299 15.13 19.3399 14.49Z" />
                    <path d="M14.8297 20.01C14.4097 21.17 13.2997 22 11.9997 22C11.2097 22 10.4297 21.68 9.87969 21.11C9.55969 20.81 9.31969 20.41 9.17969 20C9.30969 20.02 9.43969 20.03 9.57969 20.05C9.80969 20.08 10.0497 20.11 10.2897 20.13C10.8597 20.18 11.4397 20.21 12.0197 20.21C12.5897 20.21 13.1597 20.18 13.7197 20.13C13.9297 20.11 14.1397 20.1 14.3397 20.07C14.4997 20.05 14.6597 20.03 14.8297 20.01Z" />
                </svg>
            </a>
        </li>
        <li class="flex items-center">
            <a href="#">
                <svg class="fill-gray-800 dark:fill-white" width="20px" height="20px" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.5 1C0.671573 1 0 1.67157 0 2.5V10.5C0 11.3284 0.671574 12 1.5 12L13.5 12C14.3284 12 15 11.3284 15 10.5V2.5C15 1.67157 14.3284 1 13.5 1H1.5Z" />
                    <path d="M4 15H11V14H4V15Z" />
                </svg>
            </a>
        </li>
        <li class="flex items-center">
            <img class="w-8 h-8 rounded-full py-4ll" title="username" src="<?= asset_url('img/default.jpg') ?>" alt="">
        </li>
    </ul>
</header>
<main>