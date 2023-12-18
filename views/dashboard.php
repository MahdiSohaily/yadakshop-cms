<?php
require_once BASE_PATH . 'views/templates/heroHeader.php';
require_once BASE_PATH . 'views/inventory/components/navbar.php';
require_once BASE_PATH . 'views/inventory/components/aside.php';
?>
<!-- ---------------------------------------------- Dashboard specific Styles ---------------------------------------------------- -->
<style>
    .bg-gradient::after {
        background: radial-gradient(600px circle at var(--mouse-x) var(--mouse-y), rgba(0, 0, 0, 0.6), transparent 20%);
    }

    .dark .bg-gradient::after {
        background: radial-gradient(600px circle at var(--mouse-x) var(--mouse-y), rgba(255, 255, 255, 0.6), transparent 20%);
    }
</style>

<!-- ------------------------------------------------ Dashboard card section ---------------------------------------------------- -->

<section class="mx-auto mt-14 p-5">
    <h1 class="text-2xl text-gray-800 dark:text-white">داشبورد</h1>
    <div class="grid grid-cols-1 gap-5 mt-6 sm:grid-cols-2 lg:grid-cols-4">
        <div class="p-4 transition-shadow bg-white dark:bg-gray-800 rounded-lg shadow-sm hover:shadow-lg">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span class="text-gray-800 dark:text-white">مجموع کاربران</span>
                    <span class="text-lg font-semibold dark:text-white">100</span>
                </div>
                <img class="rounded-md w-16 h-16" src="<?= asset_url('icons/user.svg') ?>" alt="">
            </div>
            <div>
                <span class="inline-block px-2 text-sm text-white bg-green-500 ml-1 rounded">14%</span>
                <a href="#" class="text-blue-500 underline">مدیریت کاربران</a>
            </div>
        </div>
        <div class="p-4 transition-shadow bg-white dark:bg-gray-800 rounded-lg shadow-sm hover:shadow-lg">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span class="text-gray-800 dark:text-white">مجموع فاکتور های ثبت شده</span>
                    <span class="text-lg font-semibold dark:text-white">100,221</span>
                </div>
                <img class="rounded-md w-16 h-16" src="<?= asset_url('icons/invoice.svg') ?>" alt="">
            </div>
            <div>
                <span class="inline-block px-2 text-sm text-white bg-green-500 ml-1 rounded">14%</span>
                <a href="#" class="text-blue-500 underline">ثبت فاکتور جدید</a>
            </div>
        </div>
        <div class="p-4 transition-shadow bg-white dark:bg-gray-800 rounded-lg shadow-sm hover:shadow-lg">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span class="text-gray-800 dark:text-white">مجموع اقلام وارد شده</span>
                    <span class="text-lg font-semibold dark:text-white">100,221</span>
                </div>
                <img class="rounded-md w-16 h-16" src="<?= asset_url('icons/receive.svg') ?>" alt="">
            </div>
            <div>
                <span class="inline-block px-2 text-sm text-white bg-green-500 ml-1 rounded">14%</span>
                <a href="#" class="text-blue-500 underline">گزارش اقلام وارده</a>
            </div>
        </div>
        <div class="p-4 transition-shadow bg-white dark:bg-gray-800 rounded-lg shadow-sm hover:shadow-lg">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span class="text-gray-800 dark:text-white">مجموع اقلام به فروش رسیده</span>
                    <span class="text-lg font-semibold dark:text-white">100,221</span>
                </div>
                <img class="rounded-md w-16 h-16" src="<?= asset_url('icons/deliver.svg') ?>" alt="">
            </div>
            <div>
                <span class="inline-block px-2 text-sm text-white bg-green-500 ml-1 rounded">14%</span>
                <a href="#" class="text-blue-500 underline">گزارش اقلام خارجه</a>
            </div>
        </div>
    </div>
</section>

<!-- ---------------------------------------------- Dashboard users and calender ---------------------------------------------------- -->

<section class="mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 px-5 gap-5">
        <div class="bg-white dark:bg-gray-800 rounded-lg p-5">
            <div class="border border-dashed border-gray-800 dark:border-white flex flex-col items-center h-full rounded-lg">
                <div class="overflow-x-auto shadow-md dark:shadow-none sm:rounded-lg w-full h-full">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-800 dark:text-white h-full">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700">
                            <tr>
                                <th scope="col" class="text-gray-800 dark:text-white px-6 py-3">
                                    شهرت
                                </th>
                                <th scope="col" class="text-gray-800 dark:text-white px-6 py-3">
                                    مسئولیت
                                </th>
                                <th scope="col" class="text-gray-800 dark:text-white px-6 py-3">
                                    داخلی
                                </th>
                                <th scope="col" class="text-gray-800 dark:text-white px-6 py-3">
                                    مدت زمان مکالمه
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b dark:border-white/10 hover:bg-gray-50 dark:hover:bg-white/10 ">
                                <th scope="row" class="flex items-center px-6 py-4 text-gray-800 dark:text-white whitespace-nowrap">
                                    <img class="w-10 h-10 rounded-full" src="<?= asset_url('img/5.jpg') ?>" alt="Jese image">
                                    <div class="ps-3">
                                        <div class="text-base font-semibold">مهدی رضایی</div>
                                        <div class="font-normal text-gray-500 py-1">neil.sims@flowbite.com</div>
                                    </div>
                                </th>
                                <td class="px-6 py-4">
                                    توسعه دهنده وب
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                        ۱۰۱
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    ۱ ساعت و ۴۵ دقیقه
                                </td>
                            </tr>
                            <tr class="border-b dark:border-white/10 hover:bg-gray-50 dark:hover:bg-white/10 ">

                                <th scope="row" class="flex items-center px-6 py-4 text-gray-800 dark:text-white whitespace-nowrap">
                                    <img class="w-10 h-10 rounded-full" src="<?= asset_url('img/1.jpg') ?>" alt="Jese image">
                                    <div class="ps-3">
                                        <div class="text-base font-semibold">نیایش زحیمی</div>
                                        <div class="font-normal text-gray-500 py-1">neil.sims@flowbite.com</div>
                                    </div>
                                </th>
                                <td class="px-6 py-4">
                                    مدیر فروشات
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> ۱۰۲
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    ۱ ساعت و ۴۵ دقیقه
                                </td>
                            </tr>
                            <tr class="border-b dark:border-white/10 hover:bg-gray-50 dark:hover:bg-white/10 ">

                                <th scope="row" class="flex items-center px-6 py-4 text-gray-800 dark:text-white whitespace-nowrap">
                                    <img class="w-10 h-10 rounded-full" src="<?= asset_url('img/6.jpg') ?>" alt="Jese image">
                                    <div class="ps-3">
                                        <div class="text-base font-semibold">بابک صفری</div>
                                        <div class="font-normal text-gray-500 py-1">neil.sims@flowbite.com</div>
                                    </div>
                                </th>
                                <td class="px-6 py-4">
                                    مدیر فروشات
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                        ۱۰۳
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    ۱ ساعت و ۴۵ دقیقه
                                </td>
                            </tr>
                            <tr class="border-b dark:border-white/10 hover:bg-gray-50 dark:hover:bg-white/10 ">

                                <th scope="row" class="flex items-center px-6 py-4 text-gray-800 dark:text-white whitespace-nowrap">
                                    <img class="w-10 h-10 rounded-full" src="<?= asset_url('img/21.jpg') ?>" alt="Jese image">
                                    <div class="ps-3">
                                        <div class="text-base font-semibold">مریم امیردوست</div>
                                        <div class="font-normal text-gray-500 py-1">neil.sims@flowbite.com</div>
                                    </div>
                                </th>
                                <td class="px-6 py-4">
                                    بازاریاب
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                        ۱۰۴
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    ۱ ساعت و ۴۵ دقیقه
                                </td>
                            </tr>
                            <tr class="border-b dark:border-white/10 hover:bg-gray-50 dark:hover:bg-white/10 ">

                                <th scope="row" class="flex items-center px-6 py-4 text-gray-800 dark:text-white whitespace-nowrap">
                                    <img class="w-10 h-10 rounded-full" src="<?= asset_url('img/33.jpg') ?>" alt="Jese image">
                                    <div class="ps-3">
                                        <div class="text-base font-semibold">زینب سهیلی</div>
                                        <div class="font-normal text-gray-500 py-1">neil.sims@flowbite.com</div>
                                    </div>
                                </th>
                                <td class="px-6 py-4">
                                    بازاریاب
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                        ۱۰۵
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    ۱ ساعت و ۴۵ دقیقه
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-lg p-5">
            <div class="border border-dashed border-gray-900 dark:border-white flex flex-col items-center justify-center p-5 rounded-lg">
                <h1 class="text-2xl font-bold text-center text-gray-800 dark:text-white mb-2"><?= $today ?></h1>
                <p class="flex items-end mt-2 text-base text-center text-gray-500 gap-x-2">
                    <span class="ml-3"> دور گردون گر دو روزی بر مراد ما نرفت </span>
                    <span class="mr-3"> دائما یکسان نباشد حال دوران غم مخور</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-red-500 shrink-0">
                        <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                    </svg>
                </p>

                <div class="grid w-full max-w-xl grid-cols-7 gap-4 mx-auto mt-6">
                    <p class="flex items-center justify-center h-12 text-blue-300">شنبه</p>
                    <p class="flex items-center justify-center h-12 text-blue-300">یکشنبه</p>
                    <p class="flex items-center justify-center h-12 text-blue-300">دوشنبه</p>
                    <p class="flex items-center justify-center h-12 text-blue-300">سه شنبه</p>
                    <p class="flex items-center justify-center h-12 text-blue-300">چهار شنبه</p>
                    <p class="flex items-center justify-center h-12 text-blue-300">پنجشنبه</p>
                    <p class="flex items-center justify-center h-12 text-blue-300">جمعه</p>
                </div>

                <div class="grid w-full max-w-xl grid-cols-7 gap-6 mx-auto">
                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white dark:bg-gradient-dark">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">1</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">2</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">3</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">4</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">5</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">6</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">7</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">8</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">9</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">10</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">11</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">12</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">13</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">14</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">15</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">16</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">17</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">18</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">19</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">20</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">21</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">22</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">23</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">24</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">25</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">26</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">27</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">28</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">29</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">30</div>
                    </div>

                    <div class="relative w-full h-10 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-gray-800 dark:hover:bg-white">
                        <div class="absolute inset-[3px] z-20 flex items-center justify-center bg-white dark:bg-gray-800 text-gray-800 dark:text-white">31</div>
                    </div>
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

    document.body.onmousemove = e => {
        for (const date of document.getElementsByClassName("box")) {
            const rect = date.getBoundingClientRect(),
                x = e.clientX - rect.left,
                y = e.clientY - rect.top;

            date.style.setProperty("--mouse-x", `${x}px`);
            date.style.setProperty("--mouse-y", `${y}px`);
        };
    }
</script>

<!-- Component End  -->
<?php
require_once BASE_PATH . 'views/templates/heroFooter.php'
?>