<template>
    <div class="flex flex-wrap -mx-4 ">
        <!-- 1 -->
        <div class="w-full md:w-1/4 p-2 bg-card">
            <div class="inline-block w-3 h-3 bg-red-500 rounded-full"></div>
            <span class="inline-block text-xl mr-2 px-1.5 py-0.5 rounded">
                New Task
                <span class="bg-green-600 text-xs font-medium px-2 inline-flex items-center justify-center h-4 w-4 rounded-full ">
                    50
                </span>
            </span>

            <button class="inline-block font-bold rounded text-sm text-accent float-right text-teal-600 hover:underline">
                Add task +
            </button>

            <div class="mt-1">
                <div class="block bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 mb-3 p-3 ">

                    <!-- ID task and dropdown -->
                    <div class="overflow-auto">
                        <p class="float-left text-xs text-accent font-bold">#2536</p>
                        <button
                            class='mt-[-18px] float-right items-center text-xl hover:cursor-pointer bg-lightPrimary p-2 text-brand-500 hover:bg-gray-100 dark:bg-navy-700 dark:text-white dark:hover:bg-white/20 dark:active:bg-white/10 rounded-lg'>
                            <svg stroke="black" fill="black" stroke-width="0" viewBox="0 0 16 16" class="h-6 w-6"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                </path>
                            </svg>
                        </button>
                    </div>

                    <!-- Content Task -->
                    <div class="flex">
                        <p class="text-accent text-xl text-gray-700 ">This is task title , should limit charactor 50 should
                            be
                            here</p>
                    </div>

                    <!-- For Est time-->
                    <div>
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                            class="h-5 w-5  text-gray-500 inline-block" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                        <div class="text-xs text-gray-500 inline-block mr-10  ">Est: 4h</div>

                        <svg class=" bg-red-400 rounded-full inline-block " width="20px" version="1.1" id="_x32_"
                            xmlns="http://www.w3.org/2000/svg" stroke="red" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512" xml:space="preserve">

                            <g>
                                <path class="st0"
                                    d="M190.5,213.96c-3.887,5.298-3.314,12.346,1.299,15.726l55.58,42.879l0.774,0.444l0.347,0.193 c4.806,2.677,11.17,1.258,15.411-3.412l0.371-0.354l68.121-80.597c3.879-4.347,3.944-10.605,0.17-13.96 c-3.782-3.363-9.984-2.556-13.847,1.79l-63.678,68.024l-49.161-34.235C201.29,207.073,194.395,208.645,190.5,213.96z" />
                                <path class="st0"
                                    d="M60.152,245.726c-0.249,3.371-0.314,6.806-0.314,10.234c0,3.5,0.064,6.871,0.314,10.242h40.694 c-0.364-3.371-0.436-6.798-0.436-10.242c0-3.427,0.072-6.862,0.436-10.234H60.152z" />
                                <path class="st0"
                                    d="M165.419,82.016c-5.072,2.565-10.016,5.404-14.814,8.517l20.29,35.234l1.492-1.008 c3.846-2.436,7.774-4.734,11.758-6.766l1.557-0.75L165.419,82.016z" />
                                <path class="st0"
                                    d="M90.548,150.596c-3.112,4.799-5.952,9.734-8.516,14.807l35.234,20.282l8.524-14.798L90.548,150.596z" />
                                <path class="st0"
                                    d="M125.79,340.976l-1.024-1.492c-2.428-3.79-4.726-7.71-6.758-11.766l-0.814-1.548l-35.161,20.282 c2.5,5.073,5.403,10.008,8.516,14.806L125.79,340.976z" />
                                <path class="st0"
                                    d="M172.387,387.097l-1.492-1.016l-20.29,35.241c4.798,3.113,9.742,6.016,14.814,8.589l20.283-35.234l-1.557-0.75 C180.161,391.903,176.234,389.605,172.387,387.097z" />
                                <path class="st0"
                                    d="M361.282,90.532c-4.798-3.113-9.678-5.952-14.734-8.517l-20.363,35.162l14.806,8.588L361.282,90.532z" />
                                <path class="st0"
                                    d="M266.209,100.838V60.201c-3.371-0.306-6.798-0.371-10.242-0.371c-3.428,0-6.855,0.064-10.234,0.371v40.637 v0.428h20.476V100.838z" />
                                <path class="st0"
                                    d="M386.064,170.863l7.847,13.541l0.742,1.322l0.25-0.169l35.016-20.145c-2.564-5.121-5.451-9.992-8.588-14.783 L386.064,170.863z" />
                                <path class="st0"
                                    d="M448.992,266.072c0.17,0.089,0.17,0.089,0.17,0.169h2.637c0.25-3.386,0.331-6.854,0.331-10.322 c0-3.387-0.081-6.854-0.331-10.161h-25.186c0.331,0.249,0.662,0.58,0.992,0.83L448.992,266.072z" />
                                <path class="st0"
                                    d="M256,0C114.54,0,0,114.54,0,256c0,141.379,114.54,255.919,256,256c15.282,0,30.306-1.403,44.847-3.96 c-12.637-7.847-23.782-17.839-33.032-29.403c-3.887,0.249-7.847,0.33-11.815,0.33c-61.686-0.081-117.258-24.935-157.725-65.323 C57.895,373.266,33.032,317.605,33.032,256c0-61.685,24.862-117.266,65.242-157.726C138.741,57.887,194.314,33.032,256,33.032 c61.605,0,117.186,24.855,157.654,65.242c40.378,40.46,65.234,96.04,65.314,157.726c0,14.621-1.484,28.903-4.129,42.693 c9.58,14.952,16.604,30.726,20.975,46.912C506.306,317.685,512,287.548,512,256C511.919,114.54,397.379,0,256,0z" />
                                <path class="st0"
                                    d="M412.702,268.621c-19.315-15.452-26.855-32.484-29.759-44.621c-2.33-9.718-1.105-10.774-1.105-10.774 c-0.096-1.153-0.83-2.153-1.879-2.637c-1.064-0.508-2.29-0.396-3.242,0.266c0,0-3.742,0.807-9.838,6.726 c-13.887,13.467-29.573,35.967-19.242,66.701c11.121,32.976,5.234,39.887-0.572,39.444c-7.532-0.589-8.694-5.226-7.492-19.686 c1.403-16.887-13.92-31.323-13.92-31.323s-23.814,37.855-42.371,64.928c-10.968,15.992-16.226,36.338-16.226,54.887h-0.371 c0,57.08,46.266,103.346,103.339,103.346c57.072,0,103.322-46.266,103.322-103.346C477.282,342.976,450.354,298.75,412.702,268.621 z M370.209,466.782c-31.492,0-57.008-25.524-57.008-57.008c0-10.71,2.968-20.75,8.097-29.306 c4.436,16.491,19.484,28.621,37.363,28.621c21.371,0,38.694-17.315,38.694-38.662c0-4.089-0.646-8.024-1.815-11.709 c18.758,9.322,31.661,28.67,31.661,51.056C427.201,441.258,401.693,466.782,370.209,466.782z" />
                            </g>
                        </svg>
                        <div class="ml-1 text-xs text-gray-500 inline-block "> OverDue :1h</div>
                    </div>

                    <!-- Tag Category -->
                    <div>
                        <svg class="h-5 w-5  text-gray-500 inline-block" fill="none" stroke="currentColor"
                            stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z"></path>
                        </svg>
                        <button class=" bg-blue-700 rounded-full text-xs text-white  ml-1 ">
                            <span class="mr-4 ml-4">Bug</span>
                        </button>

                        <button class=" bg-red-700 rounded-full text-xs text-white  ml-1 ">
                            <span class="mr-4 ml-4">BackEnd</span>
                        </button>

                        <button class=" bg-pink-500 rounded-full text-xs text-white  ml-1 ">
                            <span class="mr-4 ml-4">HotFix</span>
                        </button>

                        <button class=" bg-green-500 rounded-full text-xs text-white  ml-1 ">
                            <span class="mr-4 ml-4">New Task</span>
                        </button>

                    </div>
                    <!-- Details task -->
                    <div>
                        <p class="text-gray-500 ">Here are the biggest enterprise technology acquisitions of 2021 ....</p>
                    </div>

                    <!-- Task Progress -->
                    <div class="relative pt-1">
                        <div class="flex mb-2 items-center justify-between">
                            <div>
                                <span
                                    class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-green-600 bg-green-200">
                                    Task in progress
                                </span>
                            </div>
                            <div class="text-right">
                                <span class="text-xs font-semibold inline-block text-green-600">
                                    30%
                                </span>
                            </div>
                        </div>
                        <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-green-200">
                            <div style="width:30%"
                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500">
                            </div>
                        </div>
                    </div>

                    <div class="flex">
                        <p class="text-accent text-sm font-semibold text-gray-700 ">Assign</p>
                    </div>

                    <div class="flex flex-wrap -space-x-2">
                        <!-- Avatar Member invited-->
                        <img alt="" class="ml-3 mt-4 w-8 h-8 border rounded-full border-white"
                            src="https://source.unsplash.com/40x40/?portrait?4">
                        <img alt="" class="ml-3 mt-4 w-8 h-8 border rounded-full border-white"
                            src="https://source.unsplash.com/40x40/?portrait?2">
                        <div
                            class="flex items-center justify-center ml-3 mt-4 w-8 h-8 border rounded-full border-white bg-slate-300 text-white font-bold">
                            +3
                        </div>
                        <!-- Count Commont,file -->
                        <div class="flex items-center justify-center mt-2 ">
                            <svg class="h-5 w-5  text-gray-500 inline-block ml-12" fill="none" stroke="currentColor"
                                stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155">
                                </path>
                            </svg>
                            <div class="text-xs text-gray-500 inline-block mr-2  ">15</div>

                            <svg class="h-5 w-5  text-gray-500 inline-block" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512">
                                <path
                                    d="M364.2 83.8c-24.4-24.4-64-24.4-88.4 0l-184 184c-42.1 42.1-42.1 110.3 0 152.4s110.3 42.1 152.4 0l152-152c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-152 152c-64 64-167.6 64-231.6 0s-64-167.6 0-231.6l184-184c46.3-46.3 121.3-46.3 167.6 0s46.3 121.3 0 167.6l-176 176c-28.6 28.6-75 28.6-103.6 0s-28.6-75 0-103.6l144-144c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-144 144c-6.7 6.7-6.7 17.7 0 24.4s17.7 6.7 24.4 0l176-176c24.4-24.4 24.4-64 0-88.4z" />
                            </svg>
                            <div class="text-xs text-gray-500 inline-block  ">10</div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>

    </div>
</template>
