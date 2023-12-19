<?php
require_once BASE_PATH . 'views/templates/heroHeader.php';
require_once BASE_PATH . 'views/inventory/components/navbar.php';
require_once BASE_PATH . 'views/inventory/components/aside.php';
?>
<style>
    /* Example custom styles */
    #persian-date-picker {
        background-color: #f0f0f0;
        color: #333;
    }

    .datepicker-cell {
        border: 1px solid #ccc;
    }

    /* Add more custom styles as needed */
</style>
<section class="">
    <div class="py-12 px-12 mx-auto max-w-3xl  bg-white dark:bg-gray-800 mt-5 rounded shadow">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">ثبت ورود کالای جدید</h2>
        <form action="#">
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <label for="partNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white after:content-['*'] after:mr-0.5 after:text-red-500">کد فنی کالا</label>
                    <input type="text" name="partNumber" id="partNumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder=" کد فنی قطعه را وارد نمایید..." required="">
                </div>
                <div class="w-full">
                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white after:content-['*'] after:mr-0.5 after:text-red-500">اصالت کالا</label>
                    <select id="brand" name="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="">اصالت کالای مد نظر را مشخص کنید.</option>
                        <option value="TV">TV/Monitors</option>
                        <option value="PC">PC</option>
                        <option value="GA">Gaming/Console</option>
                        <option value="PH">Phones</option>
                    </select>
                </div>
                <div class="w-full">
                    <label for="seller" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white after:content-['*'] after:mr-0.5 after:text-red-500">فروشنده</label>
                    <select id="seller" name="seller" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="">فروشنده کالای مد نظر را مشخص کنید.</option>
                        <option value="TV">TV/Monitors</option>
                        <option value="PC">PC</option>
                        <option value="GA">Gaming/Console</option>
                        <option value="PH">Phones</option>
                    </select>
                </div>
                <div class="w-full">
                    <label for="receiver" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white after:content-['*'] after:mr-0.5 after:text-red-500">تحویل دهنده</label>
                    <select id="receiver" name="receiver" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="">تحویل دهنده کالای مد نظر را مشخص کنید.</option>
                        <option value="TV">TV/Monitors</option>
                        <option value="PC">PC</option>
                        <option value="GA">Gaming/Console</option>
                        <option value="PH">Phones</option>
                    </select>
                </div>
                <div class="w-full">
                    <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white after:content-['*'] after:mr-0.5 after:text-red-500">تعداد کالا</label>
                    <input type="number" name="quantity" id="quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="۵" required="">
                </div>
                <div class="w-full">
                    <label for="passage" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">راهرو</label>
                    <input type="text" name="passage" id="passage" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="قرار گرفته در راهرو ؟" required="">
                </div>
                <div class="w-full">
                    <label for="shelf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">قفسه</label>
                    <input type="text" name="shelf" id="shelf" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="قرار گرفته در قفسه ؟" required="">
                </div>
                <div class="sm:col-span-2">
                    <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white after:content-['*'] after:mr-0.5 after:text-red-500">انبار</label>
                    <select id="stock" name="stock" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="">انبار وارده کالای مد نظر را مشخص کنید</option>
                        <option value="TV">TV/Monitors</option>
                        <option value="PC">PC</option>
                        <option value="GA">Gaming/Console</option>
                        <option value="PH">Phones</option>
                    </select>
                </div>
                <div class="w-full">
                    <span class="text-gray-800 dark:text-white my-3">آیا فاکتور دار؟</span>
                    <div class="flex items-center mb-4 gap-4">
                        <div class="flex py-2">
                            <input id="country-option-1" type="radio" name="hasFactor" value="1" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" checked>
                            <label for="country-option-1" class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                بلی
                            </label>
                        </div>

                        <div class="flex py-2">
                            <input id="country-option-2" type="radio" name="hasFactor" value="0" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" checked>
                            <label for="country-option-2" class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                خیر
                            </label>
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <span class="text-gray-800 dark:text-white my-3">آیا وارد انبار شده است؟</span>
                    <div class="flex items-center mb-4 gap-4">
                        <div class="flex py-2">
                            <input id="isInStock" type="radio" name="isInStock" value="1" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" checked>
                            <label for="isInStock" class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                بلی
                            </label>
                        </div>
                        <div class="flex py-2">
                            <input id="isInStock-2" type="radio" name="isInStock" value="0" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" checked>
                            <label for="isInStock-2" class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                خیر
                            </label>
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <label for="billNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">شماره فاکتور</label>
                    <input type="number" name="billNumber" id="billNumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="12" required="">
                </div>
                <div class="w-full">
                    <label for="billDate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">تاریخ فاکتور خرید</label>
                    <input type="text" name="billDate" id="billDate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="12" required="">
                </div>
                <div class="sm:col-span-2">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">توضیحات</label>
                    <textarea id="description" name="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="توضیحات مورد نیاز را اینجا وارد کنید..."></textarea>
                </div>
            </div>
            <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-indigo-500 hover:bg-indigo-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                ثبت ورود کالا
            </button>
        </form>
    </div>
</section>
<script>
    $(document).ready(function() {
        $("#billDate").pDatepicker({
            altField: '#persian-date-picker-alt',
            altFormat: 'YYYY-MM-DD',
            observer: true,
            format: 'YYYY-MM-DD',
            initialValue: false,
            viewMode: 'day',
            autoClose: true,
            position: 'auto',
            altFieldFormatter: function(unixDate) {
                return new persianDate(unixDate).format();
            },
        });
    });
</script>
<?php
require_once BASE_PATH . 'views/templates/heroFooter.php'
?>