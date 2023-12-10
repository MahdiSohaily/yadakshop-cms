<header class="fixed top-0 left-0 right-0 flex align-center justify-between px-5 h-15 text-white bg-gray-800 shadow-lg">
    <ul class="flex">
        <li class="flex items-center">
            <a class="flex items-center py-4 hover:text-gray-200 p-3 ml-5" href="#open" onclick="toggleSidebar()">
                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_429_11066)">
                        <path d="M3 6.00092H21M3 12.0009H21M3 18.0009H21" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                        <clipPath id="clip0_429_11066">
                            <rect width="24" height="24" fill="white" transform="translate(0 0.000915527)" />
                        </clipPath>
                    </defs>
                </svg>
            </a>
        </li>
        <li class="flex items-center">
            <a class="flex items-center py-4 hover:text-gray-200 rounded p-2 ml-2 <?= $page_title == 'ورود کالا' ? 'bg-gray-700 ' : '' ?>" href="">
                <svg version="1.1" id="Uploaded to svgrepo.com" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 32 32" xml:space="preserve">
                    <style type="text/css">
                        .stone_een {
                            fill: #fff;
                        }
                    </style>
                    <path class="stone_een" d="M27.857,27.864C27.935,29.572,26.571,31,24.861,31H7.139c-1.71,0-3.075-1.428-2.997-3.136L4.957,9.955
	C4.981,9.42,5.421,9,5.956,9h20.089c0.535,0,0.975,0.42,0.999,0.955L27.857,27.864z M16.185,1.003C12.787,0.901,10,3.625,10,7v1h2V7
	c0-2.209,1.791-4,4-4s4,1.791,4,4v1h2V7.252C22,3.966,19.468,1.101,16.185,1.003z" />
                </svg>
                <span class="text-sm px-2"> ورود کالا</span>
            </a>
        </li>
        <li class="flex items-center">
            <a class="flex items-center py-4 hover:text-gray-200 rounded p-2 ml-2 <?= $page_title == 'خروج کالا' ? 'bg-gray-700 ' : '' ?>" href="">
                <svg version="1.1" id="Uploaded to svgrepo.com" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 32 32" xml:space="preserve">
                    <style type="text/css">
                        .stone_een {
                            fill: #fff;
                        }

                        .st0 {
                            fill: #fff;
                        }
                    </style>
                    <path class="stone_een" d="M27.882,23L26.312,9.649C26.134,8.139,24.854,7,23.332,7H22v2h0.5C22.776,9,23,9.224,23,9.5
	S22.776,10,22.5,10h-11C11.224,10,11,9.776,11,9.5S11.224,9,11.5,9H12V7h-1.332C9.146,7,7.866,8.139,7.688,9.649L6.118,23H27.882z
	 M20,13c0.552,0,1,0.448,1,1c0,0.552-0.448,1-1,1s-1-0.448-1-1C19,13.448,19.448,13,20,13z M20,16c0.552,0,1,0.448,1,1
	c0,0.552-0.448,1-1,1s-1-0.448-1-1C19,16.448,19.448,16,20,16z M20,19c0.552,0,1,0.448,1,1c0,0.552-0.448,1-1,1s-1-0.448-1-1
	C19,19.448,19.448,19,20,19z M17,13c0.552,0,1,0.448,1,1c0,0.552-0.448,1-1,1s-1-0.448-1-1C16,13.448,16.448,13,17,13z M17,16
	c0.552,0,1,0.448,1,1c0,0.552-0.448,1-1,1s-1-0.448-1-1C16,16.448,16.448,16,17,16z M17,19c0.552,0,1,0.448,1,1c0,0.552-0.448,1-1,1
	s-1-0.448-1-1C16,19.448,16.448,19,17,19z M14,13c0.552,0,1,0.448,1,1c0,0.552-0.448,1-1,1s-1-0.448-1-1C13,13.448,13.448,13,14,13z
	 M14,16c0.552,0,1,0.448,1,1c0,0.552-0.448,1-1,1s-1-0.448-1-1C13,16.448,13.448,16,14,16z M14,19c0.552,0,1,0.448,1,1
	c0,0.552-0.448,1-1,1s-1-0.448-1-1C13,19.448,13.448,19,14,19z M20,1h-6c-0.552,0-1,0.448-1,1v5v2h8V7V2C21,1.448,20.552,1,20,1z
	 M18.5,7h-3C15.224,7,15,6.776,15,6.5S15.224,6,15.5,6h3C18.776,6,19,6.224,19,6.5S18.776,7,18.5,7z M18.5,5h-3
	C15.224,5,15,4.776,15,4.5S15.224,4,15.5,4h3C18.776,4,19,4.224,19,4.5S18.776,5,18.5,5z M6,28c0,1.657,1.343,3,3,3h16
	c1.657,0,3-1.343,3-3v-4H6V28z M14.5,27h5c0.276,0,0.5,0.224,0.5,0.5S19.776,28,19.5,28h-5c-0.276,0-0.5-0.224-0.5-0.5
	S14.224,27,14.5,27z" />
                </svg>
                <span class="text-sm px-2"> خروج کالا</span>
            </a>
        </li>
        <li class="flex items-center relative tooltip_container">
            <a class="flex items-center py-4 hover:text-gray-200 bg-gray-700 rounded p-3 ml-2 <?= $page_title == 'گزارش ورود' ? 'bg-gray-700 ' : '' ?>" href="">
                <svg fill="#fff" height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 296.999 296.999" xml:space="preserve">
                    <g>
                        <g>
                            <g>
                                <path d="M45.432,35.049c-0.008,0-0.017,0-0.025,0c-2.809,0-5.451,1.095-7.446,3.085c-2.017,2.012-3.128,4.691-3.128,7.543
				v159.365c0,5.844,4.773,10.61,10.641,10.625c24.738,0.059,66.184,5.215,94.776,35.136V84.023c0-1.981-0.506-3.842-1.461-5.382
				C115.322,40.849,70.226,35.107,45.432,35.049z" />
                                <path d="M262.167,205.042V45.676c0-2.852-1.111-5.531-3.128-7.543c-1.995-1.99-4.639-3.085-7.445-3.085c-0.009,0-0.018,0-0.026,0
				c-24.793,0.059-69.889,5.801-93.357,43.593c-0.955,1.54-1.46,3.401-1.46,5.382v166.779
				c28.592-29.921,70.038-35.077,94.776-35.136C257.394,215.651,262.167,210.885,262.167,205.042z" />
                                <path d="M286.373,71.801h-7.706v133.241c0,14.921-12.157,27.088-27.101,27.125c-20.983,0.05-55.581,4.153-80.084,27.344
				c42.378-10.376,87.052-3.631,112.512,2.171c3.179,0.724,6.464-0.024,9.011-2.054c2.538-2.025,3.994-5.052,3.994-8.301V82.427
				C297,76.568,292.232,71.801,286.373,71.801z" />
                                <path d="M18.332,205.042V71.801h-7.706C4.768,71.801,0,76.568,0,82.427v168.897c0,3.25,1.456,6.276,3.994,8.301
				c2.545,2.029,5.827,2.78,9.011,2.054c25.46-5.803,70.135-12.547,112.511-2.171c-24.502-23.19-59.1-27.292-80.083-27.342
				C30.49,232.13,18.332,219.963,18.332,205.042z" />
                            </g>
                        </g>
                    </g>
                </svg>
                <span class="text-sm px-2"> گزارش ورود </span>
            </a>


            <div class="tooltip absolute bg-gray-800 w-52 rounded-b-lg  border border-gray-600 text-white">
                <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal border-b focus:z-10 focus:ring-2  border-gray-600 hover:bg-gray-600 hover:text-white focus:ring-gray-500 focus:text-white">
                    <svg fill="#fff" class="w-4 h-4 me-2.5" aria-hidden="true" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1694.176 451.765H225.942V282.353c0-31.624 24.846-56.471 56.47-56.471h169.411v56.471c0 31.623 24.848 56.471 56.471 56.471 31.624 0 56.471-24.848 56.471-56.471v-56.471h790.589v56.471c0 31.623 24.846 56.471 56.47 56.471 31.623 0 56.47-24.848 56.47-56.471v-56.471h169.412c31.623 0 56.47 24.847 56.47 56.471v169.412Zm-477.74 849.317c0 134.4-105.035 231.529-258.636 231.529-128.753 0-221.364-53.082-283.482-128.752l90.353-83.577c53.082 62.118 112.941 96 195.388 96 72.282 0 127.624-42.917 127.624-109.554v-2.257c0-72.284-66.636-112.942-170.542-112.942h-59.859l-21.459-80.188L1035.73 902.4H716.106V790.588h489.035v96L998.459 1094.4c111.812 13.553 217.977 70.024 217.977 204.423v2.259Zm421.27-1188.141h-169.412v-56.47c0-31.624-24.847-56.471-56.47-56.471-31.624 0-56.47 24.847-56.47 56.471v56.47H564.765v-56.47C564.765 24.847 539.918 0 508.294 0c-31.623 0-56.471 24.847-56.471 56.471v56.47H282.412C188.671 112.941 113 188.612 113 282.353V1920h1694.118V282.353c0-93.741-75.671-169.412-169.412-169.412Z" fill-rule="evenodd" />
                    </svg>
                    ۳ روز اخیر
                </a>
                <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal border-b focus:z-10 focus:ring-2  border-gray-600 hover:bg-gray-600 hover:text-white focus:ring-gray-500 focus:text-white">
                    <svg fill="#000" class="w-4 h-4 me-2.5 bg-white" aria-hidden="true" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                        <path d="M149.3,0h-42.7v64h42.7V0z M405.3,0h-42.7v64h42.7V0z M234.7,384H192V192l-85.3,21.3v32l42.7-10.7V384h-42.7v21.3h128V384z
	 M426.7,0v85.3h-85.3V0H170.7v85.3H85.3V0H0v512h512V0H426.7z M469.3,469.3H42.7V128h426.7V469.3z M320,405.3
	c53.3,0,85.3-42.7,85.3-106.7S373.3,192,320,192c-53.4,0-85.3,42.7-85.3,106.7S266.7,405.3,320,405.3z M320,224
	c21.3,0,32,32,32,74.7s-10.7,74.7-32,74.7s-32-32-32-74.7S298.7,224,320,224z" />
                    </svg>
                    ۱۰ روز اخیر
                </a>
                <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal border-b focus:z-10 focus:ring-2  border-gray-600 hover:bg-gray-600 hover:text-white focus:ring-gray-500 focus:text-white">
                    <svg class="w-4 h-4 me-2.5" fill="#fff" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: #fff;
                            }
                        </style>
                        <g>
                            <path class="st0" d="M427.001,44.899h-2.714v27.229c0,17.038-13.861,30.907-30.914,30.907c-17.038,0-30.914-13.87-30.914-30.907
		V44.899h-75.552v27.229c0,17.038-13.876,30.907-30.914,30.907s-30.914-13.87-30.914-30.907V44.899h-75.552v27.229
		c0,17.038-13.876,30.907-30.914,30.907c-17.038,0-30.914-13.87-30.914-30.907V44.899h-2.698c-37.082,0-67.133,30.058-67.133,67.133
		v51.283h476.268v-51.283C494.134,74.958,464.067,44.899,427.001,44.899z" />
                            <path class="st0" d="M118.627,89.297c9.483,0,17.176-7.686,17.176-17.169v-54.96C135.804,7.686,128.11,0,118.627,0
		s-17.176,7.686-17.176,17.169v54.96C101.451,81.611,109.145,89.297,118.627,89.297z" />
                            <path class="st0" d="M256.007,89.297c9.483,0,17.177-7.686,17.177-17.169v-54.96C273.184,7.686,265.49,0,256.007,0
		c-9.482,0-17.176,7.686-17.176,17.169v54.96C238.831,81.611,246.525,89.297,256.007,89.297z" />
                            <path class="st0" d="M393.388,89.297c9.482,0,17.176-7.686,17.176-17.169v-54.96C410.564,7.686,402.87,0,393.388,0
		c-9.482,0-17.176,7.686-17.176,17.169v54.96C376.212,81.611,383.906,89.297,393.388,89.297z" />
                            <path class="st0" d="M17.866,444.867c0,37.074,30.051,67.133,67.133,67.133h342.002c37.066,0,67.133-30.058,67.133-67.133v-257.87
		H17.866V444.867z M295.557,287.304c0-1.85,0.702-3.277,2.22-4.479l23.283-16.884c1.426-1.14,2.93-1.642,4.965-1.642h18.125
		c2.336,0,4.032,1.696,4.032,4.048v140.641c0,2.352-1.696,4.048-4.032,4.048h-19.613c-2.352,0-4.056-1.696-4.056-4.048V298.166
		l-19.55,13.731c-0.802,0.516-1.558,0.77-2.29,0.77c-0.964,0-1.842-0.447-2.398-1.218c-0.455-0.632-0.686-1.442-0.686-2.405V287.304
		z M166.864,377.765l18.935-4.363l0.732-0.054c1.789,0,3.269,1.094,3.863,2.86c1.82,5.219,6.885,14.03,20.129,14.03
		c11.78,0,19.389-7.702,19.389-19.613c0-13.406-8.334-21.732-21.74-21.732h-6.176c-2.351,0-4.04-1.704-4.04-4.047v-16.829
		c0-2.359,1.689-4.056,4.04-4.056h5.751c11.649,0,19.181-7.532,19.181-19.181c0-10.9-6.691-17.685-17.47-17.685
		c-9.074,0-14.979,4.556-17.554,13.522c-0.624,1.904-1.997,2.945-3.808,2.945l-0.902-0.084l-18.232-4.287
		c-0.964-0.154-1.889-0.717-2.491-1.558c-0.632-0.878-0.87-2.011-0.678-3.176c3.562-19.451,21.448-32.502,44.521-32.502
		c27.052,0,44.53,16.475,44.53,41.977c0,12.212-5.22,22.766-14.764,30.02c9.198,5.428,17.747,18.642,17.747,35.618
		c0,26.967-19.459,45.808-47.304,45.808c-24.215,0-42.086-12.497-46.626-32.603C163.511,380.456,164.714,378.475,166.864,377.765z" />
                        </g>
                    </svg>
                    ۳۰ روز اخیر
                </a>
                <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal rounded-b-lg focus:z-10 focus:ring-2  border-gray-600 hover:bg-gray-600 hover:text-white focus:ring-gray-500 focus:text-white">
                    <svg class="w-4 h-4 me-2.5" fill="#fff" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: #fff;
                            }
                        </style>
                        <g>
                            <path class="st0" d="M427.001,44.899h-2.714v27.229c0,17.038-13.861,30.907-30.914,30.907c-17.038,0-30.914-13.87-30.914-30.907
		V44.899h-75.552v27.229c0,17.038-13.876,30.907-30.914,30.907s-30.914-13.87-30.914-30.907V44.899h-75.552v27.229
		c0,17.038-13.876,30.907-30.914,30.907c-17.038,0-30.914-13.87-30.914-30.907V44.899h-2.698c-37.082,0-67.133,30.058-67.133,67.133
		v51.283h476.268v-51.283C494.134,74.958,464.067,44.899,427.001,44.899z" />
                            <path class="st0" d="M118.627,89.297c9.483,0,17.176-7.686,17.176-17.169v-54.96C135.804,7.686,128.11,0,118.627,0
		s-17.176,7.686-17.176,17.169v54.96C101.451,81.611,109.145,89.297,118.627,89.297z" />
                            <path class="st0" d="M256.007,89.297c9.483,0,17.177-7.686,17.177-17.169v-54.96C273.184,7.686,265.49,0,256.007,0
		c-9.482,0-17.176,7.686-17.176,17.169v54.96C238.831,81.611,246.525,89.297,256.007,89.297z" />
                            <path class="st0" d="M393.388,89.297c9.482,0,17.176-7.686,17.176-17.169v-54.96C410.564,7.686,402.87,0,393.388,0
		c-9.482,0-17.176,7.686-17.176,17.169v54.96C376.212,81.611,383.906,89.297,393.388,89.297z" />
                            <path class="st0" d="M17.866,444.867c0,37.074,30.051,67.133,67.133,67.133h342.002c37.066,0,67.133-30.058,67.133-67.133v-257.87
		H17.866V444.867z M295.557,287.304c0-1.85,0.702-3.277,2.22-4.479l23.283-16.884c1.426-1.14,2.93-1.642,4.965-1.642h18.125
		c2.336,0,4.032,1.696,4.032,4.048v140.641c0,2.352-1.696,4.048-4.032,4.048h-19.613c-2.352,0-4.056-1.696-4.056-4.048V298.166
		l-19.55,13.731c-0.802,0.516-1.558,0.77-2.29,0.77c-0.964,0-1.842-0.447-2.398-1.218c-0.455-0.632-0.686-1.442-0.686-2.405V287.304
		z M166.864,377.765l18.935-4.363l0.732-0.054c1.789,0,3.269,1.094,3.863,2.86c1.82,5.219,6.885,14.03,20.129,14.03
		c11.78,0,19.389-7.702,19.389-19.613c0-13.406-8.334-21.732-21.74-21.732h-6.176c-2.351,0-4.04-1.704-4.04-4.047v-16.829
		c0-2.359,1.689-4.056,4.04-4.056h5.751c11.649,0,19.181-7.532,19.181-19.181c0-10.9-6.691-17.685-17.47-17.685
		c-9.074,0-14.979,4.556-17.554,13.522c-0.624,1.904-1.997,2.945-3.808,2.945l-0.902-0.084l-18.232-4.287
		c-0.964-0.154-1.889-0.717-2.491-1.558c-0.632-0.878-0.87-2.011-0.678-3.176c3.562-19.451,21.448-32.502,44.521-32.502
		c27.052,0,44.53,16.475,44.53,41.977c0,12.212-5.22,22.766-14.764,30.02c9.198,5.428,17.747,18.642,17.747,35.618
		c0,26.967-19.459,45.808-47.304,45.808c-24.215,0-42.086-12.497-46.626-32.603C163.511,380.456,164.714,378.475,166.864,377.765z" />
                        </g>
                    </svg>
                    ۶۰ روز اخیر
                </a>
            </div>
        </li>
        <li class="flex items-center relative tooltip_container">
            <a class="flex items-center py-4 hover:text-gray-200 rounded p-2 ml-2 <?= $page_title == 'گزارش خروج' ? 'bg-gray-700 ' : '' ?>" href="">
                <svg fill="#fff" height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 296.999 296.999" xml:space="preserve">
                    <g>
                        <g>
                            <g>
                                <path d="M45.432,35.049c-0.008,0-0.017,0-0.025,0c-2.809,0-5.451,1.095-7.446,3.085c-2.017,2.012-3.128,4.691-3.128,7.543
				v159.365c0,5.844,4.773,10.61,10.641,10.625c24.738,0.059,66.184,5.215,94.776,35.136V84.023c0-1.981-0.506-3.842-1.461-5.382
				C115.322,40.849,70.226,35.107,45.432,35.049z" />
                                <path d="M262.167,205.042V45.676c0-2.852-1.111-5.531-3.128-7.543c-1.995-1.99-4.639-3.085-7.445-3.085c-0.009,0-0.018,0-0.026,0
				c-24.793,0.059-69.889,5.801-93.357,43.593c-0.955,1.54-1.46,3.401-1.46,5.382v166.779
				c28.592-29.921,70.038-35.077,94.776-35.136C257.394,215.651,262.167,210.885,262.167,205.042z" />
                                <path d="M286.373,71.801h-7.706v133.241c0,14.921-12.157,27.088-27.101,27.125c-20.983,0.05-55.581,4.153-80.084,27.344
				c42.378-10.376,87.052-3.631,112.512,2.171c3.179,0.724,6.464-0.024,9.011-2.054c2.538-2.025,3.994-5.052,3.994-8.301V82.427
				C297,76.568,292.232,71.801,286.373,71.801z" />
                                <path d="M18.332,205.042V71.801h-7.706C4.768,71.801,0,76.568,0,82.427v168.897c0,3.25,1.456,6.276,3.994,8.301
				c2.545,2.029,5.827,2.78,9.011,2.054c25.46-5.803,70.135-12.547,112.511-2.171c-24.502-23.19-59.1-27.292-80.083-27.342
				C30.49,232.13,18.332,219.963,18.332,205.042z" />
                            </g>
                        </g>
                    </g>
                </svg>
                <span class="text-sm px-2"> گزارش خروج </span>
            </a>
            <div class="tooltip absolute bg-gray-800 w-52 rounded-b-lg  border border-gray-600 text-white">
                <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal border-b focus:z-10 focus:ring-2  border-gray-600 hover:bg-gray-600 hover:text-white focus:ring-gray-500 focus:text-white">
                    <svg fill="#fff" class="w-4 h-4 me-2.5" aria-hidden="true" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1694.176 451.765H225.942V282.353c0-31.624 24.846-56.471 56.47-56.471h169.411v56.471c0 31.623 24.848 56.471 56.471 56.471 31.624 0 56.471-24.848 56.471-56.471v-56.471h790.589v56.471c0 31.623 24.846 56.471 56.47 56.471 31.623 0 56.47-24.848 56.47-56.471v-56.471h169.412c31.623 0 56.47 24.847 56.47 56.471v169.412Zm-477.74 849.317c0 134.4-105.035 231.529-258.636 231.529-128.753 0-221.364-53.082-283.482-128.752l90.353-83.577c53.082 62.118 112.941 96 195.388 96 72.282 0 127.624-42.917 127.624-109.554v-2.257c0-72.284-66.636-112.942-170.542-112.942h-59.859l-21.459-80.188L1035.73 902.4H716.106V790.588h489.035v96L998.459 1094.4c111.812 13.553 217.977 70.024 217.977 204.423v2.259Zm421.27-1188.141h-169.412v-56.47c0-31.624-24.847-56.471-56.47-56.471-31.624 0-56.47 24.847-56.47 56.471v56.47H564.765v-56.47C564.765 24.847 539.918 0 508.294 0c-31.623 0-56.471 24.847-56.471 56.471v56.47H282.412C188.671 112.941 113 188.612 113 282.353V1920h1694.118V282.353c0-93.741-75.671-169.412-169.412-169.412Z" fill-rule="evenodd" />
                    </svg>
                    ۳ روز اخیر
                </a>
                <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal border-b focus:z-10 focus:ring-2  border-gray-600 hover:bg-gray-600 hover:text-white focus:ring-gray-500 focus:text-white">
                    <svg fill="#000" class="w-4 h-4 me-2.5 bg-white" aria-hidden="true" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                        <path d="M149.3,0h-42.7v64h42.7V0z M405.3,0h-42.7v64h42.7V0z M234.7,384H192V192l-85.3,21.3v32l42.7-10.7V384h-42.7v21.3h128V384z
	 M426.7,0v85.3h-85.3V0H170.7v85.3H85.3V0H0v512h512V0H426.7z M469.3,469.3H42.7V128h426.7V469.3z M320,405.3
	c53.3,0,85.3-42.7,85.3-106.7S373.3,192,320,192c-53.4,0-85.3,42.7-85.3,106.7S266.7,405.3,320,405.3z M320,224
	c21.3,0,32,32,32,74.7s-10.7,74.7-32,74.7s-32-32-32-74.7S298.7,224,320,224z" />
                    </svg>
                    ۱۰ روز اخیر
                </a>
                <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal border-b focus:z-10 focus:ring-2  border-gray-600 hover:bg-gray-600 hover:text-white focus:ring-gray-500 focus:text-white">
                    <svg class="w-4 h-4 me-2.5" fill="#fff" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: #fff;
                            }
                        </style>
                        <g>
                            <path class="st0" d="M427.001,44.899h-2.714v27.229c0,17.038-13.861,30.907-30.914,30.907c-17.038,0-30.914-13.87-30.914-30.907
		V44.899h-75.552v27.229c0,17.038-13.876,30.907-30.914,30.907s-30.914-13.87-30.914-30.907V44.899h-75.552v27.229
		c0,17.038-13.876,30.907-30.914,30.907c-17.038,0-30.914-13.87-30.914-30.907V44.899h-2.698c-37.082,0-67.133,30.058-67.133,67.133
		v51.283h476.268v-51.283C494.134,74.958,464.067,44.899,427.001,44.899z" />
                            <path class="st0" d="M118.627,89.297c9.483,0,17.176-7.686,17.176-17.169v-54.96C135.804,7.686,128.11,0,118.627,0
		s-17.176,7.686-17.176,17.169v54.96C101.451,81.611,109.145,89.297,118.627,89.297z" />
                            <path class="st0" d="M256.007,89.297c9.483,0,17.177-7.686,17.177-17.169v-54.96C273.184,7.686,265.49,0,256.007,0
		c-9.482,0-17.176,7.686-17.176,17.169v54.96C238.831,81.611,246.525,89.297,256.007,89.297z" />
                            <path class="st0" d="M393.388,89.297c9.482,0,17.176-7.686,17.176-17.169v-54.96C410.564,7.686,402.87,0,393.388,0
		c-9.482,0-17.176,7.686-17.176,17.169v54.96C376.212,81.611,383.906,89.297,393.388,89.297z" />
                            <path class="st0" d="M17.866,444.867c0,37.074,30.051,67.133,67.133,67.133h342.002c37.066,0,67.133-30.058,67.133-67.133v-257.87
		H17.866V444.867z M295.557,287.304c0-1.85,0.702-3.277,2.22-4.479l23.283-16.884c1.426-1.14,2.93-1.642,4.965-1.642h18.125
		c2.336,0,4.032,1.696,4.032,4.048v140.641c0,2.352-1.696,4.048-4.032,4.048h-19.613c-2.352,0-4.056-1.696-4.056-4.048V298.166
		l-19.55,13.731c-0.802,0.516-1.558,0.77-2.29,0.77c-0.964,0-1.842-0.447-2.398-1.218c-0.455-0.632-0.686-1.442-0.686-2.405V287.304
		z M166.864,377.765l18.935-4.363l0.732-0.054c1.789,0,3.269,1.094,3.863,2.86c1.82,5.219,6.885,14.03,20.129,14.03
		c11.78,0,19.389-7.702,19.389-19.613c0-13.406-8.334-21.732-21.74-21.732h-6.176c-2.351,0-4.04-1.704-4.04-4.047v-16.829
		c0-2.359,1.689-4.056,4.04-4.056h5.751c11.649,0,19.181-7.532,19.181-19.181c0-10.9-6.691-17.685-17.47-17.685
		c-9.074,0-14.979,4.556-17.554,13.522c-0.624,1.904-1.997,2.945-3.808,2.945l-0.902-0.084l-18.232-4.287
		c-0.964-0.154-1.889-0.717-2.491-1.558c-0.632-0.878-0.87-2.011-0.678-3.176c3.562-19.451,21.448-32.502,44.521-32.502
		c27.052,0,44.53,16.475,44.53,41.977c0,12.212-5.22,22.766-14.764,30.02c9.198,5.428,17.747,18.642,17.747,35.618
		c0,26.967-19.459,45.808-47.304,45.808c-24.215,0-42.086-12.497-46.626-32.603C163.511,380.456,164.714,378.475,166.864,377.765z" />
                        </g>
                    </svg>
                    ۳۰ روز اخیر
                </a>
                <a href="#" class="relative inline-flex items-center w-full px-4 py-3 text-sm font-normal rounded-b-lg focus:z-10 focus:ring-2  border-gray-600 hover:bg-gray-600 hover:text-white focus:ring-gray-500 focus:text-white">
                    <svg class="w-4 h-4 me-2.5" fill="#fff" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: #fff;
                            }
                        </style>
                        <g>
                            <path class="st0" d="M427.001,44.899h-2.714v27.229c0,17.038-13.861,30.907-30.914,30.907c-17.038,0-30.914-13.87-30.914-30.907
		V44.899h-75.552v27.229c0,17.038-13.876,30.907-30.914,30.907s-30.914-13.87-30.914-30.907V44.899h-75.552v27.229
		c0,17.038-13.876,30.907-30.914,30.907c-17.038,0-30.914-13.87-30.914-30.907V44.899h-2.698c-37.082,0-67.133,30.058-67.133,67.133
		v51.283h476.268v-51.283C494.134,74.958,464.067,44.899,427.001,44.899z" />
                            <path class="st0" d="M118.627,89.297c9.483,0,17.176-7.686,17.176-17.169v-54.96C135.804,7.686,128.11,0,118.627,0
		s-17.176,7.686-17.176,17.169v54.96C101.451,81.611,109.145,89.297,118.627,89.297z" />
                            <path class="st0" d="M256.007,89.297c9.483,0,17.177-7.686,17.177-17.169v-54.96C273.184,7.686,265.49,0,256.007,0
		c-9.482,0-17.176,7.686-17.176,17.169v54.96C238.831,81.611,246.525,89.297,256.007,89.297z" />
                            <path class="st0" d="M393.388,89.297c9.482,0,17.176-7.686,17.176-17.169v-54.96C410.564,7.686,402.87,0,393.388,0
		c-9.482,0-17.176,7.686-17.176,17.169v54.96C376.212,81.611,383.906,89.297,393.388,89.297z" />
                            <path class="st0" d="M17.866,444.867c0,37.074,30.051,67.133,67.133,67.133h342.002c37.066,0,67.133-30.058,67.133-67.133v-257.87
		H17.866V444.867z M295.557,287.304c0-1.85,0.702-3.277,2.22-4.479l23.283-16.884c1.426-1.14,2.93-1.642,4.965-1.642h18.125
		c2.336,0,4.032,1.696,4.032,4.048v140.641c0,2.352-1.696,4.048-4.032,4.048h-19.613c-2.352,0-4.056-1.696-4.056-4.048V298.166
		l-19.55,13.731c-0.802,0.516-1.558,0.77-2.29,0.77c-0.964,0-1.842-0.447-2.398-1.218c-0.455-0.632-0.686-1.442-0.686-2.405V287.304
		z M166.864,377.765l18.935-4.363l0.732-0.054c1.789,0,3.269,1.094,3.863,2.86c1.82,5.219,6.885,14.03,20.129,14.03
		c11.78,0,19.389-7.702,19.389-19.613c0-13.406-8.334-21.732-21.74-21.732h-6.176c-2.351,0-4.04-1.704-4.04-4.047v-16.829
		c0-2.359,1.689-4.056,4.04-4.056h5.751c11.649,0,19.181-7.532,19.181-19.181c0-10.9-6.691-17.685-17.47-17.685
		c-9.074,0-14.979,4.556-17.554,13.522c-0.624,1.904-1.997,2.945-3.808,2.945l-0.902-0.084l-18.232-4.287
		c-0.964-0.154-1.889-0.717-2.491-1.558c-0.632-0.878-0.87-2.011-0.678-3.176c3.562-19.451,21.448-32.502,44.521-32.502
		c27.052,0,44.53,16.475,44.53,41.977c0,12.212-5.22,22.766-14.764,30.02c9.198,5.428,17.747,18.642,17.747,35.618
		c0,26.967-19.459,45.808-47.304,45.808c-24.215,0-42.086-12.497-46.626-32.603C163.511,380.456,164.714,378.475,166.864,377.765z" />
                        </g>
                    </svg>
                    ۶۰ روز اخیر
                </a>
            </div>
        </li>
        <li class="flex items-center">
            <a class="flex items-center py-4 hover:text-gray-200 rounded p-2 ml-2 <?= $page_title == 'موجودی کالا' ? 'bg-gray-700 ' : '' ?>" href="">
                <svg width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" id="store" class="icon glyph">
                    <path d="M20,14.81V20a2,2,0,0,1-2,2H6a2,2,0,0,1-2-2V14.81A4.25,4.25,0,0,0,5.25,15a4.3,4.3,0,0,0,2.25-.64,4.28,4.28,0,0,0,4.5,0,4.28,4.28,0,0,0,4.5,0,4.3,4.3,0,0,0,2.25.64A4.25,4.25,0,0,0,20,14.81ZM21.76,9,20.17,3.45A2,2,0,0,0,18.25,2H5.75A2,2,0,0,0,3.83,3.45L2.24,9A6.48,6.48,0,0,0,2,10.75a3.25,3.25,0,0,0,5.5,2.34,3.24,3.24,0,0,0,4.5,0,3.24,3.24,0,0,0,4.5,0A3.25,3.25,0,0,0,22,10.75,6.48,6.48,0,0,0,21.76,9Z" style="fill:#fff"></path>
                </svg>
                <span class="text-sm px-2"> موجودی کالا</span>
            </a>
        </li>
        <li class="flex items-center">
            <a class="flex items-center py-4 hover:text-gray-200 rounded p-2 ml-2 <?= $page_title == 'مرکز تماس' ? 'bg-gray-700 ' : '' ?>" href="">
                <svg height="20px" width="20px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                    <style type="text/css">
                        .st0 {
                            fill: #fff;
                        }
                    </style>
                    <g>
                        <path class="st0" d="M256,47.18C127.063,47.18,0,97.628,0,155.555c0,49.742,0,54.334,0,54.644c0,13.168,10.67,23.838,23.838,23.838
		h90.602c13.168,0,23.837-10.67,23.837-23.838v-41.116c0-12,8.93-22.132,20.83-23.647c0,0,32.619-6.7,96.893-6.7
		s96.892,6.7,96.892,6.7c11.901,1.514,20.83,11.647,20.83,23.647V210.2c0,13.168,10.67,23.838,23.837,23.838h90.602
		c13.168,0,23.838-10.67,23.838-23.838c0-0.311,0-4.903,0-54.644C512,97.628,384.938,47.18,256,47.18z" />
                        <path class="st0" d="M348.499,210.2v-39.913l-0.687-0.142c-0.247-0.049-31.55-6.184-91.812-6.184
		c-60.262,0-91.564,6.134-91.876,6.198l-0.622,0.127V210.2c0,27.057-22.012,49.062-49.062,49.062H51.39v141.992
		c0,35.109,28.458,63.566,63.56,63.566H397.05c35.102,0,63.56-28.458,63.56-63.566V259.262h-63.05
		C370.51,259.262,348.499,237.257,348.499,210.2z M331.057,368.105v33.92h-33.913v-33.92H331.057z M331.057,314.465v33.921h-33.913
		v-33.921H331.057z M331.057,260.833v33.913h-33.913v-33.913H331.057z M272.96,368.105v33.92h-33.913v-33.92H272.96z
		 M272.96,314.465v33.921h-33.913v-33.921H272.96z M239.047,294.746v-33.913h33.913v33.913H239.047z M214.863,368.105v33.92H180.95
		v-33.92H214.863z M214.863,314.465v33.921H180.95v-33.921H214.863z M214.863,260.833v33.913H180.95v-33.913H214.863z" />
                    </g>
                </svg>
                <span class="text-sm px-2"> مرکز تماس</span>
            </a>
        </li>
    </ul>
    <ul class="flex gap-3 sm:hidden">
        <li class="flex items-center">
            <a href="#">
                py-4 <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.3399 14.49L18.3399 12.83C18.1299 12.46 17.9399 11.76 17.9399 11.35V8.82C17.9399 6.47 16.5599 4.44 14.5699 3.49C14.0499 2.57 13.0899 2 11.9899 2C10.8999 2 9.91994 2.59 9.39994 3.52C7.44994 4.49 6.09994 6.5 6.09994 8.82V11.35C6.09994 11.76 5.90994 12.46 5.69994 12.82L4.68994 14.49C4.28994 15.16 4.19994 15.9 4.44994 16.58C4.68994 17.25 5.25994 17.77 5.99994 18.02C7.93994 18.68 9.97994 19 12.0199 19C14.0599 19 16.0999 18.68 18.0399 18.03C18.7399 17.8 19.2799 17.27 19.5399 16.58C19.7999 15.89 19.7299 15.13 19.3399 14.49Z" fill="#fff" />
                    <path d="M14.8297 20.01C14.4097 21.17 13.2997 22 11.9997 22C11.2097 22 10.4297 21.68 9.87969 21.11C9.55969 20.81 9.31969 20.41 9.17969 20C9.30969 20.02 9.43969 20.03 9.57969 20.05C9.80969 20.08 10.0497 20.11 10.2897 20.13C10.8597 20.18 11.4397 20.21 12.0197 20.21C12.5897 20.21 13.1597 20.18 13.7197 20.13C13.9297 20.11 14.1397 20.1 14.3397 20.07C14.4997 20.05 14.6597 20.03 14.8297 20.01Z" fill="#fff" />
                </svg>
            </a>
        </li>
        <li class="flex items-center">
            <a href="#">
                py-4 <svg width="20px" height="20px" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.5 1C0.671573 1 0 1.67157 0 2.5V10.5C0 11.3284 0.671574 12 1.5 12L13.5 12C14.3284 12 15 11.3284 15 10.5V2.5C15 1.67157 14.3284 1 13.5 1H1.5Z" fill="#fff" />
                    <path d="M4 15H11V14H4V15Z" fill="#fff" />
                </svg>
            </a>
        </li>
        <li class="flex items-center">
            <img class="w-10 rounded-fu py-4ll border-2 border-white" title="username" src="<?= asset_url('img/default.jpg') ?>" alt="">
        </li>
    </ul>
</header>
<main>