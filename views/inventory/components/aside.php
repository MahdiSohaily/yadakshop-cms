<!-- Sidebar -->
<aside id="sidebar" class=" fixed z-1 min-h-screen flex flex-col items-center w-60  overflow-hidden text-white bg-gray-800 shadow-lime-800">
    <div class="flex justify-between items-center w-full px-3 mt-3">
        <span class="flex items-center">
            <svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" />
            </svg>
            <span class="ml-2 text-sm font-bold px-2">یدک شاپ</span>
        </span>

        <svg class="cursor-pointer" width="20px" height="20px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" onclick="toggleSidebar()">
            <path fill="#fff" d="M195.2 195.2a64 64 0 0 1 90.496 0L512 421.504 738.304 195.2a64 64 0 0 1 90.496 90.496L602.496 512 828.8 738.304a64 64 0 0 1-90.496 90.496L512 602.496 285.696 828.8a64 64 0 0 1-90.496-90.496L421.504 512 195.2 285.696a64 64 0 0 1 0-90.496z" />
        </svg>
    </div>
    <div class="w-full px-2">
        <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700">
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300 <?= $page_title == 'داشبورد' ? 'text-gray-200 bg-gray-700' : '' ?>" href="#">
                <svg class="w-6 h-6 stroke-current" fill="#fff" width="800px" height="800px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" id="dashboard" class="icon glyph">
                    <rect x="2" y="2" width="9" height="11" rx="2"></rect>
                    <rect x="13" y="2" width="9" height="7" rx="2"></rect>
                    <rect x="2" y="15" width="9" height="7" rx="2"></rect>
                    <rect x="13" y="11" width="9" height="11" rx="2"></rect>
                </svg>
                <span class="ml-2 text-sm px-2">صفحه اصلی</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
                    <svg class="w-6 h-6 stroke-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.0002 1.98828C6.03023 1.98828 1.99023 6.02828 1.99023 10.9983C1.99023 15.9683 6.03023 20.0083 11.0002 20.0083C15.9702 20.0083 20.0102 15.9683 20.0102 10.9983C20.0102 6.02828 15.9702 1.98828 11.0002 1.98828ZM11.0002 13.2483H8.00023C7.59023 13.2483 7.25023 12.9083 7.25023 12.4983C7.25023 12.0883 7.59023 11.7483 8.00023 11.7483H11.0002C11.4102 11.7483 11.7502 12.0883 11.7502 12.4983C11.7502 12.9083 11.4102 13.2483 11.0002 13.2483ZM14.0002 10.2483H8.00023C7.59023 10.2483 7.25023 9.90828 7.25023 9.49828C7.25023 9.08828 7.59023 8.74828 8.00023 8.74828H14.0002C14.4102 8.74828 14.7502 9.08828 14.7502 9.49828C14.7502 9.90828 14.4102 10.2483 14.0002 10.2483Z" fill="#fff" />
                        <path d="M21.9901 18.95C21.6601 18.34 20.9601 18 20.0201 18C19.3101 18 18.7001 18.29 18.3401 18.79C17.9801 19.29 17.9001 19.96 18.1201 20.63C18.5501 21.93 19.3001 22.22 19.7101 22.27C19.7701 22.28 19.8301 22.28 19.9001 22.28C20.3401 22.28 21.0201 22.09 21.6801 21.1C22.2101 20.33 22.3101 19.56 21.9901 18.95Z" fill="#fff" />
                    </svg>
                    <span class="ml-2 text-sm px-2">جستجوی اجناس</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 hover:bg-gray-700 rounded" href="#">
                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <span class="ml-2 text-sm px-2">مدیریت فایل</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
                <svg fill="#fff" class="w-6 h-6 stroke-current" version="1.2" baseProfile="tiny" id="inventory" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 256 219.3" xml:space="preserve">
                    <path d="M118.8,209.6h-59v-59h22.7v18.8h13.5v-18.8h22.7V209.6z M195.9,209.6h-59v-59h22.7v18.8h13.5v-18.8h22.7V209.6z
	 M157.8,132.5h-59v-59h22.7v18.8h13.5V73.5h22.7V132.5z M246.6,78.9l-16.1-7.5v139.9h-18.2V62.6l-84.5-39.9L43.5,62.6v148.5H25.3
	V71.3L9.2,78.9L1.4,62.4L127.8,2.7l126.7,59.6L246.6,78.9z" />
                </svg>
                <span class="ml-2 text-sm px-2">انبار گردانی</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
                <svg class="w-6 h-6 stroke-current" fill="#fff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="800px" height="800px" viewBox="0 0 47.05 47.049" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M43.656,16.982c-0.729-2.255,0.268-5.41-1.098-7.287C41.179,7.8,37.859,7.78,35.964,6.4
			c-1.876-1.365-2.914-4.523-5.168-5.255c-2.174-0.706-4.86,1.216-7.271,1.216c-2.41,0-5.097-1.922-7.271-1.216
			C14,1.876,12.962,5.035,11.085,6.4C9.19,7.78,5.872,7.8,4.493,9.695c-1.365,1.877-0.369,5.032-1.1,7.287
			C2.686,19.156,0,21.113,0,23.525c0,2.41,2.686,4.367,3.393,6.542c0.73,2.254-0.267,5.41,1.1,7.287
			c1.379,1.895,4.698,1.915,6.593,3.294c1.876,1.365,2.914,4.523,5.168,5.257c2.175,0.705,4.86-1.217,7.271-1.217
			c2.411,0,5.097,1.922,7.271,1.217c2.254-0.732,3.292-3.892,5.168-5.256c1.896-1.379,5.214-1.4,6.595-3.295
			c1.364-1.876,0.367-5.032,1.098-7.286c0.707-2.175,3.394-4.133,3.394-6.543C47.049,21.113,44.363,19.157,43.656,16.982z
			 M23.525,40.102c-9.155,0-16.577-7.423-16.577-16.577c0-9.156,7.422-16.578,16.577-16.578c9.156,0,16.577,7.422,16.577,16.578
			C40.102,32.679,32.681,40.102,23.525,40.102z" />
                            <path d="M23.525,9.062c-7.975,0-14.463,6.488-14.463,14.463s6.488,14.463,14.463,14.463S37.988,31.5,37.988,23.525
			S31.5,9.062,23.525,9.062z M23.525,35.626c-6.673,0-12.102-5.429-12.102-12.102c0-6.673,5.429-12.102,12.102-12.102
			c6.672,0,12.102,5.428,12.102,12.102C35.627,30.198,30.197,35.626,23.525,35.626z" />
                            <path d="M24.859,21.932c-1.836-0.692-2.593-1.146-2.593-1.858c0-0.605,0.454-1.211,1.858-1.211c0.853,0,1.536,0.149,2.073,0.323
			c0.269,0.087,0.562,0.057,0.808-0.084c0.246-0.141,0.42-0.38,0.479-0.656l0.107-0.5c0.105-0.492-0.17-0.983-0.645-1.151
			c-0.502-0.179-1.176-0.312-2.422-0.352v-0.917c0-0.552-0.449-1-1-1c-0.552,0-1,0.448-1,1v1.067c-2,0.455-3.609,1.945-3.609,3.848
			c0,2.096,1.601,3.177,3.913,3.956c1.6,0.54,2.302,1.059,2.302,1.88c0,0.864-0.837,1.34-2.068,1.34c-0.935,0-1.81-0.201-2.558-0.48
			c-0.266-0.1-0.563-0.081-0.814,0.052c-0.252,0.132-0.437,0.364-0.507,0.641l-0.135,0.538c-0.128,0.509,0.158,1.029,0.657,1.193
			c0.909,0.299,2.093,0.518,2.821,0.564v1.402c0,0.552,0.448,1,1,1c0.552,0,1-0.448,1-1v-1.555c3-0.434,3.896-2.073,3.896-3.997
			C28.421,24.029,27.432,22.838,24.859,21.932z" />
                        </g>
                    </g>
                </svg>
                <span class="ml-2 text-sm px-2">سامانه قیمت</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
                <svg class="w-6 h-6 stroke-current" fill="#fff" height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 472.615 472.615" xml:space="preserve">
                    <g>
                        <g>
                            <polygon points="358.54,78.737 384.495,52.785 370.572,38.862 320.846,88.583 370.572,138.314 384.495,124.39 358.537,98.429 
			423.385,98.429 423.385,255.968 443.077,255.968 443.077,78.737 		" />
                        </g>
                    </g>
                    <g>
                        <g>
                            <polygon points="102.043,360.401 88.12,374.323 114.078,400.285 49.231,400.285 49.231,252.592 29.538,252.592 29.538,419.977 
			114.076,419.977 88.12,445.929 102.043,459.853 151.77,410.131 		" />
                        </g>
                    </g>
                    <g>
                        <g>
                            <polygon points="132.726,39.385 100.726,0 0,0 0,226.462 285.538,226.462 285.538,39.385 		" />
                        </g>
                    </g>
                    <g>
                        <g>
                            <polygon points="319.803,285.538 287.803,246.154 187.077,246.154 187.077,472.615 472.615,472.615 472.615,285.538 		" />
                        </g>
                    </g>
                </svg>
                <span class="ml-2 text-sm px-2">انتقال به انبار</span>
            </a>
        </div>
        <div class="flex flex-col items-center w-full mt-2 border-t border-gray-700">

            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                </svg>
                <span class="ml-2 text-sm px-2">انبارگردانی</span>
            </a>
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
            <svg fill="#fff" height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                <g>
                    <g>
                        <path d="M256,0C114.84,0,0,114.84,0,256s114.84,256,256,256s256-114.84,256-256S397.16,0,256,0z M237.268,95.557
			c0-10.345,8.387-18.732,18.732-18.732s18.732,8.387,18.732,18.732v99.234c0,10.345-8.387,18.732-18.732,18.732
			s-18.732-8.387-18.732-18.732V95.557z M256,399.61c-79.186,0-143.61-64.423-143.61-143.61c0-45.857,22.245-89.352,59.506-116.351
			c8.376-6.072,20.088-4.2,26.159,4.177c6.07,8.377,4.2,20.089-4.177,26.159c-27.567,19.976-44.025,52.13-44.025,86.015
			c0,58.529,47.617,106.146,106.146,106.146S362.146,314.529,362.146,256c0-34.897-17.238-67.604-46.112-87.49
			c-8.52-5.868-10.671-17.532-4.803-26.052c5.867-8.522,17.532-10.671,26.051-4.803C376.31,164.533,399.61,208.775,399.61,256
			C399.61,335.186,335.186,399.61,256,399.61z" />
                    </g>
                </g>
            </svg>
            <span class="ml-2 text-sm px-2"> خروج از حساب</span>
        </button>
    </form>
</aside>