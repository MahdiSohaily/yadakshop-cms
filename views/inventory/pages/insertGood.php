<?php
require_once BASE_PATH . 'views/templates/heroHeader.php';
require_once BASE_PATH . 'views/inventory/components/navbar.php';
require_once BASE_PATH . 'views/inventory/components/aside.php';
?>
<section class="">
    <div class="py-12 px-12 mx-auto max-w-3xl bg-white dark:bg-gray-800 mt-5 rounded shadow">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">ثبت ورود کالای جدید</h2>
        <form action="#">
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2 relative">
                    <label for="partNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white after:content-['*'] after:mr-0.5 after:text-red-500">کد فنی کالا</label>
                    <input type="text" onkeyup="searchForPart(this.value)" name="partNumber" id="partNumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder=" کد فنی قطعه را وارد نمایید..." required="">
                    <div id="part_result" class="hidden absolute w-full bg-white dark:bg-gray-600 p-5 border-gray-300 dark:border-white rounded mt-2 shadow-md"></div>
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
    const url = "<?= site_url('parts/search') ?>";
    const part_result = document.getElementById("part_result");

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

    function searchForPart(pattern) {
        if (pattern.length > 6) {
            pattern = pattern.replace(/\s/g, "");
            pattern = pattern.replace(/-/g, "");
            pattern = pattern.replace(/_/g, "");

            part_result.style.display = 'block';

            part_result.innerHTML = `<div class="flex justify-center items-center">
            <svg class="animate-spin stroke-gray-800 dark:stroke-white inline-block mx-auto" width="40px" height="40px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2.99988V5.99988M12 20.9999V17.9999M4.20577 16.4999L6.80385 14.9999M21 11.9999H18M16.5 19.7941L15 17.196M3 11.9999H6M7.5 4.20565L9 6.80373M7.5 19.7941L9 17.196M19.7942 16.4999L17.1962 14.9999M4.20577 7.49988L6.80385 8.99988"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            </div>`;
            let params = new URLSearchParams();
            params.append("pattern", pattern);

            axios
                .post(url, params)
                .then(function(response) {
                    const data = response.data;
                    part_result.innerHTML = '';
                    for (const item of data) {
                        part_result.innerHTML += `
                        <div class="flex items-center justify-between bg-gray-100 dark:bg-white/10 cursor-pointer rounded p-2 m-2">
                            <span class="text-sm text-gray-800 dark:text-white">${item.partnumber}</span>
                            <span>
                                <svg class="stroke-gray-800 dark:stroke-white" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.976 21C4.05476 21 3 19.9452 3 15.024" stroke-width="2" stroke-linecap="round"/>
                                <path d="M21 15.024C21 19.9452 19.9452 21 15.024 21" stroke-width="2" stroke-linecap="round"/>
                                <path d="M15.024 3C19.9452 3 21 4.05476 21 8.976" stroke-width="2" stroke-linecap="round"/>
                                <path d="M3 8.976C3 4.05476 4.05476 3 8.976 3" stroke-width="2" stroke-linecap="round"/>
                                <path d="M12 9.5L12 14.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.5 12L9.5 12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </div>
                        `;
                    }
                })
                .catch(function(error) {
                    console.log(error.message);
                });
        } else {
            part_result.innerHTML = "";
        }




    }
</script>
<?php
require_once BASE_PATH . 'views/templates/heroFooter.php'
?>