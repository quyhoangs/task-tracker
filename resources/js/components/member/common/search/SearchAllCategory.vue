<template>
    <div class="rounded ">
        <div class="lg:max-w-[452px] w-full bg-white rounded ">
            <div class="relative rounded-full">
                <svg class="absolute z-20 cursor-pointer top-[13px] left-4" width="16" height="16" viewBox="0 0 16 16"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M14.2716 13.1684L11.3313 10.2281C12.0391 9.28574 12.4213 8.13865 12.42 6.96C12.42 3.94938 9.97063 1.5 6.96 1.5C3.94938 1.5 1.5 3.94938 1.5 6.96C1.5 9.97063 3.94938 12.42 6.96 12.42C8.13865 12.4213 9.28574 12.0391 10.2281 11.3313L13.1684 14.2716C13.3173 14.4046 13.5114 14.4756 13.711 14.47C13.9105 14.4645 14.1004 14.3827 14.2415 14.2415C14.3827 14.1004 14.4645 13.9105 14.47 13.711C14.4756 13.5114 14.4046 13.3173 14.2716 13.1684ZM3.06 6.96C3.06 6.18865 3.28873 5.43463 3.71727 4.79328C4.14581 4.15192 4.7549 3.65205 5.46754 3.35687C6.18017 3.06169 6.96433 2.98446 7.72085 3.13494C8.47738 3.28542 9.17229 3.65686 9.71772 4.20228C10.2631 4.74771 10.6346 5.44262 10.7851 6.19915C10.9355 6.95567 10.8583 7.73983 10.5631 8.45247C10.268 9.1651 9.76808 9.77419 9.12673 10.2027C8.48537 10.6313 7.73135 10.86 6.96 10.86C5.92604 10.8588 4.93478 10.4475 4.20365 9.71635C3.47253 8.98522 3.06124 7.99396 3.06 6.96Z"
                        fill="#4B5563" />
                </svg>
                <input
                    class="relative leading-none text-gray-600 bg-white lg:max-w-[452px] w-full outline-none border text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block pl-10 p-2.5"
                    type="text" name="" id="" placeholder="Search Task, File, Comment..." />
            </div>

            <div class="hidden">
                <div class="py-4 bg-gray-200"></div>
                <div class="mt-2">
                    <div class="relative">
                        <svg class="absolute z-20 cursor-pointer top-[18px] left-4" width="16" height="16"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.2716 13.1684L11.3313 10.2281C12.0391 9.28574 12.4213 8.13865 12.42 6.96C12.42 3.94938 9.97063 1.5 6.96 1.5C3.94938 1.5 1.5 3.94938 1.5 6.96C1.5 9.97063 3.94938 12.42 6.96 12.42C8.13865 12.4213 9.28574 12.0391 10.2281 11.3313L13.1684 14.2716C13.3173 14.4046 13.5114 14.4756 13.711 14.47C13.9105 14.4645 14.1004 14.3827 14.2415 14.2415C14.3827 14.1004 14.4645 13.9105 14.47 13.711C14.4756 13.5114 14.4046 13.3173 14.2716 13.1684ZM3.06 6.96C3.06 6.18865 3.28873 5.43463 3.71727 4.79328C4.14581 4.15192 4.7549 3.65205 5.46754 3.35687C6.18017 3.06169 6.96433 2.98446 7.72085 3.13494C8.47738 3.28542 9.17229 3.65686 9.71772 4.20228C10.2631 4.74771 10.6346 5.44262 10.7851 6.19915C10.9355 6.95567 10.8583 7.73983 10.5631 8.45247C10.268 9.1651 9.76808 9.77419 9.12673 10.2027C8.48537 10.6313 7.73135 10.86 6.96 10.86C5.92604 10.8588 4.93478 10.4475 4.20365 9.71635C3.47253 8.98522 3.06124 7.99396 3.06 6.96Z"
                                fill="#4B5563" />
                        </svg>
                        <p onclick="eraseText_search_2();"
                            class="absolute z-20 text-xs font-medium leading-3 text-gray-600 underline right-4 top-[18px] cursor-pointer">
                            Clear
                        </p>
                        <input id="output_search_2"
                            class="relative text-sm leading-none text-gray-600 bg-white rounded lg:max-w-[452px] w-full px-10 py-4 outline-none"
                            type="text" name="" placeholder="Grap..." />
                    </div>
                    <ul class="flex flex-wrap items-center pb-4 text-gray-600 border-b border-gray-100 lg:gap-x-6 gap-x-2">
                        <div class="flex alertBtn group" onclick="Shows_search_2();">
                            <li
                                class="text-xs px-3 py-2 ml-[5px] font-medium text-gray-600 transition duration-200 rounded cursor-pointer alertBtn group-hover:text-indigo-700">
                                All
                            </li>
                            <p
                                class="text-xs font-medium leading-3 text-gray-600 px-1 py-0.5 bg-gray-50 rounded w-3.5 h-full mt-2 group-hover:bg-indigo-50 group-hover:text-indigo-700">
                                9
                            </p>
                        </div>
                        <div class="flex updateBtn group" onclick="peopleShow_search_2();">
                            <svg class="mt-[10px] cursor-pointer text-[#4B5563] group-hover:text-indigo-700" width="14"
                                height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.40621 3.9375C9.29902 5.38316 8.20309 6.5625 6.99996 6.5625C5.79684 6.5625 4.69898 5.38344 4.59371 3.9375C4.48434 2.43359 5.55074 1.3125 6.99996 1.3125C8.44918 1.3125 9.51559 2.46094 9.40621 3.9375Z"
                                    stroke="Currentcolor" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M7 8.3125C4.6211 8.3125 2.20665 9.625 1.75985 12.1023C1.70598 12.4009 1.87497 12.6875 2.18751 12.6875H11.8125C12.1253 12.6875 12.2943 12.4009 12.2404 12.1023C11.7934 9.625 9.37891 8.3125 7 8.3125Z"
                                    stroke="Currentcolor" stroke-miterlimit="10" />
                            </svg>
                            <li
                                class="text-xs px-3 py-2 ml-[5px] font-medium text-gray-600 transition duration-200 rounded cursor-pointer updateBtn group-hover:text-indigo-700">
                                People
                            </li>
                            <p
                                class="text-xs font-medium leading-3 text-gray-600 px-1 py-0.5 bg-gray-50 rounded h-full mt-2 group-hover:bg-indigo-50 group-hover:text-indigo-700">
                                4
                            </p>
                        </div>
                        <div class="flex logBtn group" onclick="peopleShow2_search_2();">
                            <svg class="mt-[10px] text-[#4B5563] group-hover:text-indigo-700 cursor-pointer" width="14"
                                height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.375 6.0498V11.375C11.375 11.7231 11.2367 12.0569 10.9906 12.3031C10.7444 12.5492 10.4106 12.6875 10.0625 12.6875H3.9375C3.5894 12.6875 3.25556 12.5492 3.00942 12.3031C2.76328 12.0569 2.625 11.7231 2.625 11.375V2.625C2.625 2.2769 2.76328 1.94306 3.00942 1.69692C3.25556 1.45078 3.5894 1.3125 3.9375 1.3125H6.6377C6.86968 1.31254 7.09215 1.40469 7.25621 1.56871L11.1188 5.43129C11.2828 5.59535 11.375 5.81782 11.375 6.0498Z"
                                    stroke="#4B5563" stroke-linejoin="round" />
                                <path
                                    d="M7 1.53125V4.8125C7 5.04456 7.09219 5.26712 7.25628 5.43122C7.42038 5.59531 7.64294 5.6875 7.875 5.6875H11.1562"
                                    stroke="Currentcolor" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M4.8125 7.875H9.1875" stroke="Currentcolor" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M4.8125 10.0625H9.1875" stroke="Currentcolor" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <li
                                class="px-3 py-2 text-xs font-medium text-gray-600 transition duration-200 rounded cursor-pointer logBtn group-hover:text-indigo-700">
                                Files
                            </li>
                            <p
                                class="text-xs font-medium leading-3 text-gray-600 px-1 py-0.5 bg-gray-50 rounded w-3.5 h-full mt-2 group-hover:bg-indigo-50 group-hover:text-indigo-700">
                                3
                            </p>
                        </div>
                        <div class="flex ml-4 group lg:ml-0 md:ml-0">
                            <svg class="mt-[10px] cursor-pointer text-gray-600 group-hover:text-indigo-700" width="15"
                                height="15" viewBox="0 0 14 14" fill="none" stroke="Currentcolor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.90846 5.25V9.1834C5.913 9.47102 6.03045 9.74533 6.23546 9.94713C6.44047 10.1489 6.7166 10.262 7.00426 10.262C7.29192 10.262 7.56805 10.1489 7.77306 9.94713C7.97807 9.74533 8.09552 9.47102 8.10006 9.1834L8.10361 4.02773C8.1066 3.78189 8.06075 3.53791 7.96874 3.30992C7.87672 3.08193 7.74037 2.87447 7.56758 2.69957C7.39479 2.52467 7.189 2.38581 6.96214 2.29104C6.73529 2.19626 6.49187 2.14746 6.24602 2.14746C6.00016 2.14746 5.75675 2.19626 5.52989 2.29104C5.30303 2.38581 5.09725 2.52467 4.92446 2.69957C4.75167 2.87447 4.61531 3.08193 4.5233 3.30992C4.43128 3.53791 4.38544 3.78189 4.38842 4.02773V9.21812C4.38341 9.56423 4.44725 9.90788 4.57624 10.2291C4.70522 10.5503 4.89677 10.8427 5.13975 11.0892C5.38273 11.3357 5.6723 11.5315 5.99161 11.6651C6.31092 11.7987 6.65361 11.8675 6.99975 11.8675C7.34589 11.8675 7.68857 11.7987 8.00789 11.6651C8.3272 11.5315 8.61676 11.3357 8.85974 11.0892C9.10272 10.8427 9.29427 10.5503 9.42326 10.2291C9.55224 9.90788 9.61608 9.56423 9.61107 9.21812V4.36789"
                                    stroke="Currentcolor" stroke-miterlimit="10" stroke-linecap="round" />
                            </svg>
                            <li
                                class="px-3 py-2 text-xs font-medium text-gray-600 transition duration-200 rounded cursor-pointer alertBtn group-hover:text-indigo-700">
                                Tasks
                            </li>
                            <p
                                class="text-xs font-medium leading-3 text-gray-600 px-1 py-0.5 bg-gray-50 rounded w-3.5 h-full mt-2 group-hover:text-indigo-700 group-hover:bg-indigo-50">
                                2
                            </p>
                        </div>
                    </ul>
                    <!-- end -->
                </div>
                <div aria-label="people-task-file1" class="block" id="hidee_search_2">
                    <div class="flex px-4 mt-5 gap-x-4">
                        <div>
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="30" height="30" rx="4" fill="#C4C4C4" />
                                <rect width="30" height="30" rx="4" fill="url(#pattern0)" />
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_1225_1572"
                                            transform="translate(0 -0.125326) scale(0.00261097)" />
                                    </pattern>
                                    <image id="image0_1225_1572" width="383" height="479"
                                        xlink:href="data:image/jpeg;base64,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" />
                                </defs>
                            </svg>
                        </div>
                        <div class="">
                            <p class="text-sm font-medium leading-none text-gray-800 mb-[4px]">
                                Cassandra Cartwright
                            </p>
                            <p class="text-xs leading-3 text-gray-600">Online</p>
                        </div>
                    </div>
                    <hr class="my-5 border-gray-100" />
                    <div class="flex px-4 mt-5 gap-x-4">
                        <div>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="32" height="32" rx="4" fill="#E0E7FF" />
                                <path
                                    d="M21.3438 10.375H15.8632C15.6968 10.3755 15.5339 10.3266 15.3953 10.2344L14.418 9.58082C14.0943 9.36441 13.7136 9.24924 13.3243 9.25H10.6562C10.1343 9.25056 9.63384 9.45816 9.26475 9.82725C8.89566 10.1963 8.68806 10.6968 8.6875 11.2188V12.0625H23.3125C23.3125 10.9769 22.4294 10.375 21.3438 10.375Z"
                                    fill="#4338CA" />
                                <path
                                    d="M21.8975 22.75H10.1026C9.58602 22.7494 9.09036 22.5458 8.72253 22.1831C8.35469 21.8204 8.14415 21.3277 8.13631 20.8111L7.56889 15.0195V15.0096C7.55031 14.7775 7.57997 14.5441 7.65602 14.3239C7.73206 14.1038 7.85284 13.9019 8.01075 13.7307C8.16866 13.5595 8.36029 13.4229 8.57358 13.3294C8.78686 13.236 9.01719 13.1876 9.25006 13.1875H22.7536C22.9864 13.1877 23.2166 13.2361 23.4298 13.3297C23.643 13.4232 23.8346 13.5598 23.9924 13.731C24.1503 13.9021 24.271 14.1041 24.347 14.3241C24.423 14.5442 24.4526 14.7776 24.434 15.0096V15.0195L23.8638 20.8111C23.856 21.3277 23.6454 21.8204 23.2776 22.1831C22.9098 22.5458 22.4141 22.7494 21.8975 22.75Z"
                                    fill="#4338CA" />
                            </svg>
                        </div>
                        <div class="">
                            <p class="text-sm font-medium leading-none text-gray-800 mb-[4px]">
                                Batch 6 Icons Folder
                            </p>
                            <p class="text-xs leading-3 text-gray-600">
                                in Porduct - Edited 16m ago
                            </p>
                        </div>
                    </div>
                    <hr class="my-5 border-gray-100" />
                    <div class="flex px-4 mt-5 gap-x-4">
                        <div>
                            <img class="object-contain" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/genrld3333.png"
                                alt="genr" />
                        </div>
                        <div class="">
                            <p class="text-sm font-medium leading-none text-gray-800 mb-[4px]">
                                Gerald Bayer
                            </p>
                            <p class="text-xs leading-3 text-gray-600">Online</p>
                        </div>
                    </div>
                    <hr class="my-5 border-gray-100" />
                    <div class="flex px-4 mt-5 gap-x-4">
                        <div>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="32" height="32" rx="4" fill="#E0E7FF" />
                                <path
                                    d="M23.1697 8.87208C23.1183 8.81563 23.0561 8.77019 22.9866 8.73849C22.9172 8.7068 22.8421 8.6895 22.7658 8.68766C22.6895 8.68582 22.6136 8.69947 22.5427 8.72779C22.4718 8.7561 22.4074 8.79849 22.3534 8.85239L21.9185 9.28517C21.8658 9.3379 21.8362 9.40941 21.8362 9.48397C21.8362 9.55853 21.8658 9.63004 21.9185 9.68278L22.3172 10.0807C22.3433 10.107 22.3744 10.1278 22.4086 10.1421C22.4428 10.1563 22.4795 10.1636 22.5165 10.1636C22.5535 10.1636 22.5902 10.1563 22.6244 10.1421C22.6586 10.1278 22.6897 10.107 22.7158 10.0807L23.1398 9.65888C23.3543 9.44477 23.3743 9.09603 23.1697 8.87208Z"
                                    fill="#4338CA" />
                                <path
                                    d="M21.0393 10.1636L14.6929 16.4988C14.6544 16.5371 14.6265 16.5847 14.6117 16.637L14.3181 17.5113C14.3111 17.535 14.3106 17.5602 14.3167 17.5842C14.3228 17.6082 14.3352 17.6301 14.3527 17.6476C14.3702 17.6651 14.3921 17.6775 14.4161 17.6836C14.4401 17.6897 14.4653 17.6892 14.489 17.6822L15.3626 17.3886C15.4149 17.3738 15.4625 17.3459 15.5008 17.3074L21.8359 10.9603C21.8946 10.9011 21.9274 10.8211 21.9274 10.7377C21.9274 10.6544 21.8946 10.5744 21.8359 10.5152L21.4861 10.1636C21.4268 10.1045 21.3465 10.0713 21.2627 10.0713C21.179 10.0713 21.0986 10.1045 21.0393 10.1636Z"
                                    fill="#4338CA" />
                                <path
                                    d="M20.5823 13.8084L16.2971 18.102C16.1315 18.268 15.9279 18.3912 15.704 18.4609L14.7934 18.7657C14.5773 18.8268 14.3489 18.8291 14.1316 18.7724C13.9143 18.7158 13.7161 18.6022 13.5573 18.4434C13.3985 18.2846 13.285 18.0864 13.2283 17.8691C13.1716 17.6518 13.1739 17.4234 13.235 17.2073L13.5398 16.2967C13.6093 16.0729 13.7322 15.8693 13.898 15.7036L18.1916 11.4177C18.231 11.3784 18.2578 11.3283 18.2687 11.2738C18.2796 11.2192 18.274 11.1627 18.2528 11.1113C18.2315 11.0598 18.1955 11.0159 18.1492 10.985C18.103 10.954 18.0486 10.9375 17.993 10.9375H10.6562C10.1341 10.9375 9.63335 11.1449 9.26413 11.5141C8.89492 11.8833 8.6875 12.3841 8.6875 12.9062V21.3438C8.6875 21.8659 8.89492 22.3667 9.26413 22.7359C9.63335 23.1051 10.1341 23.3125 10.6562 23.3125H19.0938C19.6159 23.3125 20.1167 23.1051 20.4859 22.7359C20.8551 22.3667 21.0625 21.8659 21.0625 21.3438V14.007C21.0625 13.9514 21.046 13.897 21.015 13.8508C20.9841 13.8045 20.9402 13.7685 20.8887 13.7472C20.8373 13.726 20.7808 13.7204 20.7262 13.7313C20.6717 13.7422 20.6216 13.769 20.5823 13.8084Z"
                                    fill="#4338CA" />
                            </svg>
                        </div>
                        <div class="">
                            <p class="text-sm font-medium leading-none text-gray-800 mb-[4px]">
                                Create Header Components
                            </p>
                            <p class="text-xs leading-3 text-gray-600">
                                in UI Design - Assinged By Carlton Fadel
                            </p>
                        </div>
                    </div>
                    <hr class="my-5 border-gray-100" />
                    <div class="flex px-4 mt-5 gap-x-4">
                        <div>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="32" height="32" rx="4" fill="#E0E7FF" />
                                <path
                                    d="M21.625 9.25H10.375C9.77846 9.25065 9.20654 9.48791 8.78473 9.90973C8.36291 10.3315 8.12565 10.9035 8.125 11.5V20.5C8.12565 21.0965 8.36291 21.6685 8.78473 22.0903C9.20654 22.5121 9.77846 22.7493 10.375 22.75H21.625C22.2215 22.7493 22.7935 22.5121 23.2153 22.0903C23.6371 21.6685 23.8743 21.0965 23.875 20.5V11.5C23.8743 10.9035 23.6371 10.3315 23.2153 9.90973C22.7935 9.48791 22.2215 9.25065 21.625 9.25ZM18.8125 11.5C19.1463 11.5 19.4725 11.599 19.75 11.7844C20.0275 11.9698 20.2438 12.2334 20.3715 12.5417C20.4993 12.8501 20.5327 13.1894 20.4676 13.5167C20.4025 13.8441 20.2417 14.1447 20.0057 14.3807C19.7697 14.6167 19.4691 14.7775 19.1417 14.8426C18.8144 14.9077 18.4751 14.8743 18.1667 14.7465C17.8584 14.6188 17.5948 14.4025 17.4094 14.125C17.224 13.8475 17.125 13.5213 17.125 13.1875C17.1255 12.7401 17.3034 12.3111 17.6198 11.9948C17.9361 11.6784 18.3651 11.5005 18.8125 11.5ZM10.375 21.625C10.0766 21.625 9.79048 21.5065 9.5795 21.2955C9.36853 21.0845 9.25 20.7984 9.25 20.5V18.1224L12.5842 15.1587C12.9059 14.8734 13.3243 14.7215 13.7541 14.7339C14.1839 14.7463 14.5928 14.9221 14.8975 15.2255L17.1809 17.504L13.0599 21.625H10.375ZM22.75 20.5C22.75 20.7984 22.6315 21.0845 22.4205 21.2955C22.2095 21.5065 21.9234 21.625 21.625 21.625H14.6511L18.9197 17.3563C19.222 17.0993 19.6055 16.9577 20.0022 16.9567C20.3989 16.9557 20.7832 17.0953 21.0868 17.3507L22.75 18.7366V20.5Z"
                                    fill="#4338CA" />
                            </svg>
                        </div>
                        <div class="">
                            <p class="text-sm font-medium leading-none text-gray-800 mb-[4px]">
                                Website Screenshots.jpg
                            </p>
                            <p class="text-xs leading-3 text-gray-600">
                                in Photos - Added 26m ago
                            </p>
                        </div>
                    </div>
                    <hr class="my-5 border-gray-100" />
                    <div class="flex px-4 mt-5 gap-x-4">
                        <div>
                            <img class="object-contain" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/ew3332323.png"
                                alt="we" />
                        </div>
                        <div class="">
                            <p class="text-sm font-medium leading-none text-gray-800 mb-[4px]">
                                Susan Rogahn
                            </p>
                            <p class="text-xs leading-3 text-gray-600">Offline</p>
                        </div>
                    </div>
                    <hr class="my-5 border-gray-100" />
                    <div class="flex px-4 mt-5 gap-x-4">
                        <div>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="32" height="32" rx="4" fill="#E0E7FF" />
                                <path
                                    d="M23.3125 16C23.3125 11.9616 20.0384 8.6875 16 8.6875C11.9616 8.6875 8.6875 11.9616 8.6875 16C8.6875 20.0384 11.9616 23.3125 16 23.3125C20.0384 23.3125 23.3125 20.0384 23.3125 16ZM14.4531 18.6065V13.3935C14.4532 13.2867 14.4837 13.1821 14.5411 13.092C14.5984 13.0018 14.6802 12.9299 14.777 12.8846C14.8737 12.8393 14.9813 12.8224 15.0873 12.836C15.1932 12.8496 15.2931 12.8931 15.3753 12.9614L18.5073 15.5676C18.5708 15.6204 18.6219 15.6865 18.6569 15.7612C18.6919 15.8359 18.7101 15.9175 18.7101 16C18.7101 16.0825 18.6919 16.1641 18.6569 16.2388C18.6219 16.3135 18.5708 16.3796 18.5073 16.4324L15.3753 19.0386C15.2931 19.1069 15.1932 19.1504 15.0873 19.164C14.9813 19.1776 14.8737 19.1607 14.777 19.1154C14.6802 19.0701 14.5984 18.9982 14.5411 18.908C14.4837 18.8179 14.4532 18.7133 14.4531 18.6065Z"
                                    fill="#4338CA" />
                            </svg>
                        </div>
                        <div class="">
                            <p class="text-sm font-medium leading-none text-gray-800 mb-[4px]">
                                Intro Animation.avi
                            </p>
                            <p class="text-xs leading-3 text-gray-600">
                                in Photos - Edited 30m ago
                            </p>
                        </div>
                    </div>
                </div>
                <div aria-label="people-task-file2" class="hidden" id="people_search_2">
                    <div class="flex px-4 mt-5 gap-x-4">
                        <div>
                            <img class="object-contain" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/casen4444.png"
                                alt="cas" />
                        </div>
                        <div class="">
                            <p class="text-sm font-medium leading-none text-gray-800 mb-[4px]">
                                Cassandra Cartwright
                            </p>
                            <p class="text-xs leading-3 text-gray-600">Online</p>
                        </div>
                    </div>
                    <hr class="my-5 border-gray-100" />
                    <div class="flex px-4 mt-5 gap-x-4">
                        <div>
                            <img class="object-contain" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/genrld3333.png"
                                alt="genr" />
                        </div>
                        <div class="">
                            <p class="text-sm font-medium leading-none text-gray-800 mb-[4px]">
                                Gerald Bayer
                            </p>
                            <p class="text-xs leading-3 text-gray-600">Online</p>
                        </div>
                    </div>
                    <hr class="my-5 border-gray-100" />
                    <div class="flex px-4 mt-5 gap-x-4">
                        <div>
                            <img class="object-contain" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/ew3332323.png"
                                alt="we" />
                        </div>
                        <div class="">
                            <p class="text-sm font-medium leading-none text-gray-800 mb-[4px]">
                                Susan Rogahn
                            </p>
                            <p class="text-xs leading-3 text-gray-600">Offline</p>
                        </div>
                    </div>
                    <hr class="my-5 border-gray-100" />
                </div>
                <div aria-label="people-task-file3" class="hidden" id="people2_search_2">
                    <div class="flex px-4 mt-5 gap-x-4">
                        <div>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="32" height="32" rx="4" fill="#E0E7FF" />
                                <path
                                    d="M23.3125 16C23.3125 11.9616 20.0384 8.6875 16 8.6875C11.9616 8.6875 8.6875 11.9616 8.6875 16C8.6875 20.0384 11.9616 23.3125 16 23.3125C20.0384 23.3125 23.3125 20.0384 23.3125 16ZM14.4531 18.6065V13.3935C14.4532 13.2867 14.4837 13.1821 14.5411 13.092C14.5984 13.0018 14.6802 12.9299 14.777 12.8846C14.8737 12.8393 14.9813 12.8224 15.0873 12.836C15.1932 12.8496 15.2931 12.8931 15.3753 12.9614L18.5073 15.5676C18.5708 15.6204 18.6219 15.6865 18.6569 15.7612C18.6919 15.8359 18.7101 15.9175 18.7101 16C18.7101 16.0825 18.6919 16.1641 18.6569 16.2388C18.6219 16.3135 18.5708 16.3796 18.5073 16.4324L15.3753 19.0386C15.2931 19.1069 15.1932 19.1504 15.0873 19.164C14.9813 19.1776 14.8737 19.1607 14.777 19.1154C14.6802 19.0701 14.5984 18.9982 14.5411 18.908C14.4837 18.8179 14.4532 18.7133 14.4531 18.6065Z"
                                    fill="#4338CA" />
                            </svg>
                        </div>
                        <div class="">
                            <p class="text-sm font-medium leading-none text-gray-800 mb-[4px]">
                                Intro Animation.avi
                            </p>
                            <p class="text-xs leading-3 text-gray-600">
                                in Photos - Edited 30m ago
                            </p>
                        </div>
                    </div>
                    <hr class="my-5 border-gray-100" />
                    <div class="flex px-4 mt-5 gap-x-4">
                        <div>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="32" height="32" rx="4" fill="#E0E7FF" />
                                <path
                                    d="M23.3125 16C23.3125 11.9616 20.0384 8.6875 16 8.6875C11.9616 8.6875 8.6875 11.9616 8.6875 16C8.6875 20.0384 11.9616 23.3125 16 23.3125C20.0384 23.3125 23.3125 20.0384 23.3125 16ZM14.4531 18.6065V13.3935C14.4532 13.2867 14.4837 13.1821 14.5411 13.092C14.5984 13.0018 14.6802 12.9299 14.777 12.8846C14.8737 12.8393 14.9813 12.8224 15.0873 12.836C15.1932 12.8496 15.2931 12.8931 15.3753 12.9614L18.5073 15.5676C18.5708 15.6204 18.6219 15.6865 18.6569 15.7612C18.6919 15.8359 18.7101 15.9175 18.7101 16C18.7101 16.0825 18.6919 16.1641 18.6569 16.2388C18.6219 16.3135 18.5708 16.3796 18.5073 16.4324L15.3753 19.0386C15.2931 19.1069 15.1932 19.1504 15.0873 19.164C14.9813 19.1776 14.8737 19.1607 14.777 19.1154C14.6802 19.0701 14.5984 18.9982 14.5411 18.908C14.4837 18.8179 14.4532 18.7133 14.4531 18.6065Z"
                                    fill="#4338CA" />
                            </svg>
                        </div>
                        <div class="">
                            <p class="text-sm font-medium leading-none text-gray-800 mb-[4px]">
                                Intro Animation.avi
                            </p>
                            <p class="text-xs leading-3 text-gray-600">
                                in Photos - Edited 30m ago
                            </p>
                        </div>
                    </div>
                    <hr class="my-5 border-gray-100" />
                    <div class="flex px-4 mt-5 gap-x-4">
                        <div>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="32" height="32" rx="4" fill="#E0E7FF" />
                                <path
                                    d="M23.3125 16C23.3125 11.9616 20.0384 8.6875 16 8.6875C11.9616 8.6875 8.6875 11.9616 8.6875 16C8.6875 20.0384 11.9616 23.3125 16 23.3125C20.0384 23.3125 23.3125 20.0384 23.3125 16ZM14.4531 18.6065V13.3935C14.4532 13.2867 14.4837 13.1821 14.5411 13.092C14.5984 13.0018 14.6802 12.9299 14.777 12.8846C14.8737 12.8393 14.9813 12.8224 15.0873 12.836C15.1932 12.8496 15.2931 12.8931 15.3753 12.9614L18.5073 15.5676C18.5708 15.6204 18.6219 15.6865 18.6569 15.7612C18.6919 15.8359 18.7101 15.9175 18.7101 16C18.7101 16.0825 18.6919 16.1641 18.6569 16.2388C18.6219 16.3135 18.5708 16.3796 18.5073 16.4324L15.3753 19.0386C15.2931 19.1069 15.1932 19.1504 15.0873 19.164C14.9813 19.1776 14.8737 19.1607 14.777 19.1154C14.6802 19.0701 14.5984 18.9982 14.5411 18.908C14.4837 18.8179 14.4532 18.7133 14.4531 18.6065Z"
                                    fill="#4338CA" />
                            </svg>
                        </div>
                        <div class="">
                            <p class="text-sm font-medium leading-none text-gray-800 mb-[4px]">
                                Intro Animation.avi
                            </p>
                            <p class="text-xs leading-3 text-gray-600">
                                in Photos - Edited 30m ago
                            </p>
                        </div>
                    </div>
                    <hr class="my-5 border-gray-100" />
                </div>
            </div>

        </div>
    </div>
</template>


<script>
function peopleShow_search_2() {
    document.getElementById("hidee_search_2").style.display = "none";
    document.getElementById("people_search_2").style.display = "block";
    document.getElementById("people2_search_2").style.display = "none";
}
function peopleShow2_search_2() {
    document.getElementById("hidee_search_2").style.display = "none";
    document.getElementById("people_search_2").style.display = "none";
    document.getElementById("people2_search_2").style.display = "block";
}
function Shows_search_2() {
    document.getElementById("hidee_search_2").style.display = "block";
    document.getElementById("people_search_2").style.display = "none";
    document.getElementById("people2_search_2").style.display = "none";
}
function eraseText_search_2() {
    document.getElementById("output_search_2").value = "";
}
</script>
