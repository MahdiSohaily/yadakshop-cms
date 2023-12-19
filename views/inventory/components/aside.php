<!-- Sidebar -->
<aside id="sidebar" class=" fixed z-1 min-h-screen flex flex-col items-center w-60  text-gray-800 dark:text-white bg-white dark:bg-gray-800">
    <div class="flex justify-between items-center w-full px-3 mt-3">
        <span class="flex items-center">
            <svg class="w-8 h-8 fill-gray-800 dark:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" />
            </svg>
            <span class="ml-2 text-sm font-bold px-2">یدک شاپ</span>
        </span>

        <svg class="cursor-pointer fill-gray-800 dark:fill-white" onclick="toggleSidebar()" width="20px" height="20px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
            <path d="M195.2 195.2a64 64 0 0 1 90.496 0L512 421.504 738.304 195.2a64 64 0 0 1 90.496 90.496L602.496 512 828.8 738.304a64 64 0 0 1-90.496 90.496L512 602.496 285.696 828.8a64 64 0 0 1-90.496-90.496L421.504 512 195.2 285.696a64 64 0 0 1 0-90.496z" />
        </svg>
    </div>
    <div class="w-full">
        <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700">
            <a class="flex items-center w-full h-14 px-3 py-4 hover:bg-gray-100 dark:hover:bg-white/10 text-gray-800 dark:text-white" href="#">
                <svg class="w-6 h-6 fill-gray-800 dark:fill-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" id="dashboard" class="icon glyph">
                    <rect x="2" y="2" width="9" height="11" rx="2"></rect>
                    <rect x="13" y="2" width="9" height="7" rx="2"></rect>
                    <rect x="2" y="15" width="9" height="7" rx="2"></rect>
                    <rect x="13" y="11" width="9" height="11" rx="2"></rect>
                </svg>
                <span class="ml-2 text-sm px-2">صفحه اصلی</span>
            </a>
            <a class="flex items-center w-full h-14 px-3 py-4 hover:bg-gray-100 dark:hover:bg-white/10 text-gray-800 dark:text-white" href="#">
                <svg class="w-6 h-6 fill-gray-800 dark:fill-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.0002 1.98828C6.03023 1.98828 1.99023 6.02828 1.99023 10.9983C1.99023 15.9683 6.03023 20.0083 11.0002 20.0083C15.9702 20.0083 20.0102 15.9683 20.0102 10.9983C20.0102 6.02828 15.9702 1.98828 11.0002 1.98828ZM11.0002 13.2483H8.00023C7.59023 13.2483 7.25023 12.9083 7.25023 12.4983C7.25023 12.0883 7.59023 11.7483 8.00023 11.7483H11.0002C11.4102 11.7483 11.7502 12.0883 11.7502 12.4983C11.7502 12.9083 11.4102 13.2483 11.0002 13.2483ZM14.0002 10.2483H8.00023C7.59023 10.2483 7.25023 9.90828 7.25023 9.49828C7.25023 9.08828 7.59023 8.74828 8.00023 8.74828H14.0002C14.4102 8.74828 14.7502 9.08828 14.7502 9.49828C14.7502 9.90828 14.4102 10.2483 14.0002 10.2483Z"" />
                    <path d=" M21.9901 18.95C21.6601 18.34 20.9601 18 20.0201 18C19.3101 18 18.7001 18.29 18.3401 18.79C17.9801 19.29 17.9001 19.96 18.1201 20.63C18.5501 21.93 19.3001 22.22 19.7101 22.27C19.7701 22.28 19.8301 22.28 19.9001 22.28C20.3401 22.28 21.0201 22.09 21.6801 21.1C22.2101 20.33 22.3101 19.56 21.9901 18.95Z"" />
                </svg>
                <span class="ml-2 text-sm px-2">جستجوی اجناس</span>
            </a>
            <a class="flex items-center w-full h-14 px-3 py-4 hover:bg-gray-100 dark:hover:bg-white/10 text-gray-800 dark:text-white" href="#">
                <svg class="w-6 h-6 fill-gray-800 dark:fill-white" version="1.2" baseProfile="tiny" id="inventory" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 256 219.3" xml:space="preserve">
                    <path d="M118.8,209.6h-59v-59h22.7v18.8h13.5v-18.8h22.7V209.6z M195.9,209.6h-59v-59h22.7v18.8h13.5v-18.8h22.7V209.6z
                            M157.8,132.5h-59v-59h22.7v18.8h13.5V73.5h22.7V132.5z M246.6,78.9l-16.1-7.5v139.9h-18.2V62.6l-84.5-39.9L43.5,62.6v148.5H25.3
                            V71.3L9.2,78.9L1.4,62.4L127.8,2.7l126.7,59.6L246.6,78.9z" />
                </svg>
                <span class="ml-2 text-sm px-2">انبار گردانی</span>
            </a>
            <div class="dropdown_container w-full">
                <a class="flex items-center justify-between w-full h-14 px-3 py-4 hover:bg-gray-100 dark:hover:bg-white/10 text-gray-800 dark:text-white" href="#">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 stroke-current fill-gray-800 dark:fill-white" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="800px" height="800px" viewBox="0 0 47.05 47.049" xml:space="preserve">
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
                    </div>
                    <svg class="fill-gray-800 dark:fill-white" width="10px" height="10px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="m4.431 12.822 13 9A1 1 0 0 0 19 21V3a1 1 0 0 0-1.569-.823l-13 9a1.003 1.003 0 0 0 0 1.645z" />
                    </svg>
                </a>
                <div class="dropdown_menu bg-white dark:bg-gray-800 w-52">
                    <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal border-b border-gray-200 dark:border-white/10 focus:z-10 focus:ring-2 text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-white/10">

                        <svg class="w-4 h-4 me-2.5 fill-gray-800 dark:fill-white" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M405.333,85.333h-148v-64C277.333,9.536,267.776,0,256,0s-21.333,9.536-21.333,21.333v64h-148
                                            c-11.776,0-21.333,9.536-21.333,21.333v384c0,11.797,9.557,21.333,21.333,21.333h298.667c11.776,0,21.333-9.536,21.333-21.333
                                            v-384C426.667,94.869,417.109,85.333,405.333,85.333z M256,298.667c35.285,0,64,28.715,64,64s-28.715,64-64,64h-42.667
                                            c-11.776,0-21.333-9.536-21.333-21.333c0-11.797,9.557-21.333,21.333-21.333H256c11.755,0,21.333-9.557,21.333-21.333
                                            s-9.579-21.333-21.333-21.333c-35.285,0-64-28.715-64-64s28.715-64,64-64h42.667c11.776,0,21.333,9.536,21.333,21.333
                                            c0,11.797-9.557,21.333-21.333,21.333H256c-11.755,0-21.333,9.557-21.333,21.333S244.245,298.667,256,298.667z" />
                                </g>
                            </g>
                        </svg>
                        سامانه قیمت
                    </a>
                    <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal border-b border-gray-200 dark:border-white/10 focus:z-10 focus:ring-2 text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-white/10">
                        <svg class="w-4 h-4 me-2.5 fill-gray-800 dark:fill-white" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 222.667 222.667" xml:space="preserve">
                            <path d="M110.593,53.33c-26.119,0.383-47.445,21.112-48.552,47.19c-0.471,11.112,2.674,21.746,9.096,30.753
                                    c9.684,13.579,14.194,26.604,14.194,40.986v0.588c0,0.289,0.038,0.568,0.085,0.843v33.073c0,1.664,0.828,3.22,2.209,4.148
                                    l16.206,10.903c0.825,0.555,1.797,0.852,2.791,0.852c0.003,0,0.006,0,0.008,0l9.581-0.018c0.998-0.002,1.972-0.302,2.797-0.862
                                    l16.048-10.886c1.372-0.931,2.193-2.48,2.193-4.138v-33.068c0.048-0.277,0.085-0.557,0.085-0.848v-0.593
                                    c0-14.577,4.446-27.51,13.992-40.7c6.112-8.446,9.343-18.437,9.343-28.893C160.67,75.21,138.121,52.902,110.593,53.33z
                                    M117.537,177.848l-22.12,6.889v-6.889H117.537z M95.417,195.21l31.833-9.914v4.388l-31.833,9.915V195.21z M114.662,212.652
                                    l-6.518,0.012l-6.662-4.482l25.768-8.025v3.957L114.662,212.652z M106.333,39.828V5c0-2.762,2.239-5,5-5s5,2.238,5,5v34.828
                                    c0,2.762-2.239,5-5,5S106.333,42.59,106.333,39.828z M219.732,96.984c0,2.762-2.239,5-5,5h-30.105c-2.761,0-5-2.238-5-5s2.239-5,5-5
                                    h30.105C217.493,91.984,219.732,94.223,219.732,96.984z M38.041,101.984H7.935c-2.761,0-5-2.238-5-5s2.239-5,5-5h30.105
                                    c2.761,0,5,2.238,5,5S40.802,101.984,38.041,101.984z M62.946,55.101c-0.977,0.977-2.256,1.465-3.536,1.465
                                    s-2.559-0.488-3.536-1.465L34.172,33.397c-1.953-1.952-1.953-5.118,0-7.07c1.953-1.953,5.118-1.953,7.071,0L62.946,48.03
                                    C64.899,49.982,64.899,53.148,62.946,55.101z M166.792,55.101c-0.977,0.977-2.256,1.465-3.536,1.465s-2.559-0.488-3.536-1.465
                                    c-1.953-1.952-1.953-5.118,0-7.07l21.703-21.703c1.953-1.953,5.118-1.953,7.071,0c1.953,1.952,1.953,5.118,0,7.07L166.792,55.101z
                                    M194.073,162.346c1.953,1.952,1.953,5.118,0,7.07c-0.977,0.977-2.256,1.465-3.536,1.465c-1.28,0-2.559-0.488-3.536-1.465
                                    l-20.778-20.778c-1.953-1.952-1.953-5.118,0-7.07c1.954-1.953,5.119-1.952,7.071,0L194.073,162.346z M56.443,141.567
                                    c1.953,1.952,1.953,5.118,0,7.07l-20.778,20.778c-0.977,0.977-2.256,1.465-3.536,1.465s-2.559-0.488-3.536-1.465
                                    c-1.953-1.952-1.953-5.118,0-7.07l20.778-20.778C51.325,139.614,54.49,139.614,56.443,141.567z" />
                        </svg>
                        قیمت موبیز
                    </a>
                </div>
            </div>
            <div class="dropdown_container w-full">
                <a class="flex items-center justify-between w-full h-14 px-3 py-4 hover:bg-gray-100 dark:hover:bg-white/10 text-gray-800 dark:text-white" href="#">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 fill-gray-800 dark:fill-white" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 472.615 472.615" xml:space="preserve">
                            <g>
                                <polygon points="358.54,78.737 384.495,52.785 370.572,38.862 320.846,88.583 370.572,138.314 384.495,124.39 358.537,98.429 
			                                        423.385,98.429 423.385,255.968 443.077,255.968 443.077,78.737 		" />
                            </g>
                            <g>
                                <polygon points="102.043,360.401 88.12,374.323 114.078,400.285 49.231,400.285 49.231,252.592 29.538,252.592 29.538,419.977 
			                                        114.076,419.977 88.12,445.929 102.043,459.853 151.77,410.131 		" />
                            </g>
                            <g>
                                <polygon points="132.726,39.385 100.726,0 0,0 0,226.462 285.538,226.462 285.538,39.385 		" />
                            </g>
                            <g>
                                <polygon points="319.803,285.538 287.803,246.154 187.077,246.154 187.077,472.615 472.615,472.615 472.615,285.538 		" />
                            </g>
                        </svg>
                        <span class="ml-2 text-sm px-2">انتقال به انبار</span>
                    </div>
                    <svg class="fill-gray-800 dark:fill-white" width="10px" height="10px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="m4.431 12.822 13 9A1 1 0 0 0 19 21V3a1 1 0 0 0-1.569-.823l-13 9a1.003 1.003 0 0 0 0 1.645z" />
                    </svg>
                </a>
                <div class="dropdown_menu bg-white dark:bg-gray-800 w-52">
                    <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal border-b border-gray-200 dark:border-white/10 focus:z-10 focus:ring-2 text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-white/10">
                        <svg class="w-4 h-4 me-2.5 fill-gray-800 dark:fill-white" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                            <g>
                                <path d="M304.909,400.916L277.325,428.5V275.498l27.584,27.584c4.16,4.16,9.621,6.251,15.083,6.251s10.923-2.091,15.083-6.251
                                    c8.341-8.341,8.341-21.824,0-30.165l-63.979-63.979c-1.984-1.984-4.331-3.541-6.955-4.629c-5.205-2.155-11.093-2.155-16.299,0
                                    c-2.624,1.088-4.971,2.645-6.955,4.629l-63.979,63.979c-8.341,8.341-8.341,21.824,0,30.165c8.341,8.341,21.824,8.341,30.165,0
                                    l27.584-27.584V428.5l-27.584-27.584c-8.341-8.341-21.824-8.341-30.165,0c-8.341,8.341-8.341,21.824,0,30.165l63.979,63.979
                                    c1.984,1.984,4.331,3.541,6.955,4.629c2.603,1.067,5.376,1.643,8.149,1.643c2.773,0,5.547-0.576,8.149-1.643
                                    c2.624-1.088,4.971-2.645,6.955-4.629l63.979-63.979c8.341-8.341,8.341-21.824,0-30.165
                                    C326.733,392.575,313.25,392.575,304.909,400.916z" />
                                <path d="M446.784,164.78c-9.749-73.387-76.949-154.112-157.76-154.112c-43.328,0-87.381,21.291-116.8,55.445
                                    c-9.408-3.435-19.371-5.205-29.525-5.205c-45.973,0-83.648,36.224-85.952,81.643C22.784,164.438,0,204.865,0,245.334
                                    c0,25.344,8.405,53.461,23.061,77.12c19.413,31.381,55.019,50.88,92.907,50.88h28.651c0.747-0.832,1.323-1.792,2.133-2.581
                                    c12.075-12.096,28.139-18.752,45.248-18.752c-17.109,0-33.173-6.677-45.248-18.752C134.656,321.174,128,305.089,128,288.001
                                    s6.656-33.173,18.752-45.248l63.979-63.979c5.888-5.952,12.949-10.645,20.843-13.909c7.701-3.2,15.957-4.843,24.427-4.843
                                    c8.469,0,16.704,1.643,24.533,4.885c7.787,3.221,14.827,7.915,20.8,13.952l63.915,63.893
                                    C377.344,254.828,384,270.913,384,288.001s-6.656,33.173-18.752,45.248c-12.096,12.075-28.16,18.752-45.248,18.752
                                    c17.088,0,33.152,6.656,45.248,18.752c0.789,0.789,1.365,1.749,2.112,2.581h35.093c55.36,0,103.168-41.216,108.843-93.845
                                    c0.469-4.203,0.704-8.491,0.704-12.821C512,217.686,486.912,179.35,446.784,164.78z" />
                            </g>
                        </svg>
                        انتقال به انبار
                    </a>
                    <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal border-b border-gray-200 dark:border-white/10 focus:z-10 focus:ring-2 text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-white/10">
                        <svg class="w-4 h-4 me-2.5 fill-gray-800 dark:fill-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="m20 8-6-6H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8zM9 19H7v-9h2v9zm4 0h-2v-6h2v6zm4 0h-2v-3h2v3zM14 9h-1V4l5 5h-4z" />
                        </svg>
                        گزارش انتقالات
                    </a>
                    <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal border-b border-gray-200 dark:border-white/10 focus:z-10 focus:ring-2 text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-white/10">
                        <svg class="w-4 h-4 me-2.5 fill-gray-800 dark:fill-white" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M196 16c-16.62 0-30 13.38-30 30v120H46c-16.62 0-30 13.38-30 30v120c0 16.62 13.38 30 30 30h120v120c0 16.62 13.38 30 30 30h120c16.62 0 30-13.38 30-30V346h120c16.62 0 30-13.38 30-30V196c0-16.62-13.38-30-30-30H346V46c0-16.62-13.38-30-30-30zm0 135h120l-60 60zm0 75h120l-60 60zm0 75h120l-60 60z" />
                        </svg>
                        نیاز به انتقال
                    </a>
                    <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal border-b border-gray-200 dark:border-white/10 focus:z-10 focus:ring-2 text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-white/10">
                        <svg class="w-4 h-4 me-2.5 fill-gray-800 dark:fill-white" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 455 455" xml:space="preserve">
                            <polygon points="260,160.001 195,225.001 0,30.001 0,424.999 455,424.999 455,354.999 " />
                        </svg>
                        گزارش کسرات
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center w-full border-t border-gray-700">
            <a class="relative flex items-center w-full h-14 px-3 py-4 hover:bg-gray-100 dark:hover:bg-white/10 text-gray-800 dark:text-white" href="#">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                </svg>
                <span class="ml-2 text-sm px-2">Messages</span>
                <span class="absolute top-0 left-0 w-2 h-2 ml-2 bg-indigo-500 rounded-full"></span>
            </a>
        </div>
    </div>
    <form class="flex items-center justify-center w-full h-14 mt-auto" action="<?= site_url('logout') ?>" method="post">
        <button type="submit" class="flex items-center justify-center w-full h-14 mt-auto bg-gray-600 hover:bg-gray-100 dark:hover:bg-white/10 text-gray-800 dark:text-white">
            <img src="<?= asset_url('icons/logout.svg') ?>" alt="">
            <span class="ml-2 text-sm px-2"> خروج از حساب</span>
        </button>
    </form>
</aside>