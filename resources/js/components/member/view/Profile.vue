<template>
    <div class="flex">
        <div class="flex-shrink-0">
            <!-- Left sidebar content -->
            <LeftSidebar></LeftSidebar>
        </div>
        <div class="flex-1 relative p-7 ml-5">
            <!-- Nội dung lên trên cùng bên trái của ảnh bìa -->
            <div class="mt-5 ml-5 absolute top-0 left-0 p-4">
                <span class="text-white font-bold text-xl">Pages > Profile</span>
            </div>

            <!-- Icon thông báo và cài đặt phía trên cùng bên phải -->
            <div class="absolute top-0 right-0 flex items-center p-4">
                
                <div>
                    <!-- Icon cài đặt -->
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
            </div>

            
            

            <!-- Khung nav -->
            <nav class="absolute z-20 flex flex-wrap items-center justify-between w-full px-6 py-2 text-white transition-all shadow-none duration-250 ease-soft-in lg:flex-nowrap lg:justify-start" navbar-profile="" navbar-scroll="true">
                <div class="flex items-center justify-between w-full px-6 py-1 mx-auto flex-wrap-inherit">
                <nav>
                
                <ol class="flex flex-wrap pt-1 pl-2 pr-4 mr-12 bg-transparent rounded-lg sm:mr-16">
                <li class="leading-normal text-sm">
                <a class="opacity-50" href="javascript:;">Pages</a>
                </li>
                <li class="text-sm pl-2 capitalize leading-normal before:float-left before:pr-2 before:content-['/']" aria-current="page">Profile</li>
                </ol>
                <h6 class="mb-2 ml-2 font-bold text-white capitalize">Profile</h6>
                </nav>
                <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                <div class="flex items-center md:ml-auto md:pr-4">
                <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                <span class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                <i class="fas fa-search" aria-hidden="true"></i>
                </span>
                <input type="text" class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="Type here...">
                </div>
                </div>
                <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                
                
                <li class="flex items-center">
                <a href="" class="block px-0 py-2 font-semibold text-white transition-all ease-soft-in-out text-sm">
                <i class="fa fa-user sm:mr-1" aria-hidden="true"></i>
                <span class="hidden sm:inline">Sign In</span>
                </a>
                </li>
                <li class="flex items-center pl-4 xl:hidden">
                <a href="javascript:;" class="block p-0 text-white transition-all ease-soft-in-out text-sm" sidenav-trigger="">
                <div class="w-4.5 overflow-hidden">
                <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                <i class="ease-soft relative block h-0.5 rounded-sm bg-white transition-all"></i>
                </div>
                </a>
                </li>
                <li class="flex items-center px-4">
                <a href="javascript:;" class="p-0 text-white transition-all text-sm ease-soft-in-out">
                <i fixed-plugin-button-nav="" class="cursor-pointer fa fa-cog" aria-hidden="true"></i>
                
                </a>
                </li>
                
                <li class="relative flex items-center pr-2">
                <p class="hidden transform-dropdown-show"></p>
                <a dropdown-trigger="" href="javascript:;" class="block p-0 text-white transition-all text-sm ease-nav-brand" aria-expanded="false">
                <i class="cursor-pointer fa fa-bell" aria-hidden="true"></i>
                </a>
                <ul dropdown-menu="" class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7.5 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
                
                <li class="relative mb-2">
                <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 lg:transition-colors" href="javascript:;">
                <div class="flex py-1">
                <div class="my-auto">
                <img src="" class="inline-flex items-center justify-center mr-4 text-white text-sm h-9 w-9 max-w-none rounded-xl">
                </div>
                <div class="flex flex-col justify-center">
                <h6 class="mb-1 font-normal leading-normal text-sm"><span class="font-semibold">New message</span> from Laur</h6>
                <p class="mb-0 leading-tight text-xs text-slate-400">
                <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                13 minutes ago
                </p>
                </div>
                </div>
                </a>
                </li>
                <li class="relative mb-2">
                <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 duration-300 lg:transition-colors" href="javascript:;">
                <div class="flex py-1">
                <div class="my-auto">
                <img src="" class="inline-flex items-center justify-center mr-4 text-white text-sm bg-gradient-to-tl from-gray-900 to-slate-800 h-9 w-9 max-w-none rounded-xl">
                </div>
                <div class="flex flex-col justify-center">
                <h6 class="mb-1 font-normal leading-normal text-sm"><span class="font-semibold">New album</span> by Travis Scott</h6>
                <p class="mb-0 leading-tight text-xs text-slate-400">
                <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                1 day
                </p>
                </div>
                </div>
                </a>
                </li>
                <li class="relative">
                <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 duration-300 lg:transition-colors" href="javascript:;">
                <div class="flex py-1">
                <div class="inline-flex items-center justify-center my-auto mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm bg-gradient-to-tl from-slate-600 to-slate-300 h-9 w-9 rounded-xl">
                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>credit-card</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                <g transform="translate(1716.000000, 291.000000)">
                <g transform="translate(453.000000, 454.000000)">
                <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                </g>
                </g>
                </g>
                </g>
                </svg>
                </div>
                <div class="flex flex-col justify-center">
                <h6 class="mb-1 font-normal leading-normal text-sm">Payment successfully completed</h6>
                <p class="mb-0 leading-tight text-xs text-slate-400">
                <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                2 days
                </p>
                </div>
                </div>
                </a>
                </li>
                </ul>
                </li>
                </ul>
                </div>
                </div>
            </nav>

            <!-- Ảnh bìa -->
            <div class="w-full h-100 rounded-3xl overflow-hidden">
                <img src="../../../../../public/images/coved/curved0.jpg" alt="Ảnh bìa" class="object-cover w-full h-full">
            </div>

            
            
            <!--  Test Avatar bỏ khung-->
            <div class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 -mt-16 overflow-hidden break-words border-0 shadow-blur rounded-2xl bg-white/80 bg-clip-border backdrop-blur-2xl backdrop-saturate-200">
                <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-auto max-w-full px-3">
                <div class="text-base ease-soft-in-out h-18.5 w-18.5 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
                <img src="../../../../../public/images/project/bruce-mars.jpg" alt="Ảnh đại diện" class="w-20 h-20 rounded-full border-4 border-white -mt-0">
                </div>
                </div>
                <div class="flex-shrink-0 mt-2.5 mb-5">
                    <div class="flex flex-col md:flex-row items-center">
                        <h2 class="text-gray-900 text-lg font-bold">Bruce Mars</h2>
                        <!-- <div class="text-2xl font-bold text-gray-800">Bruce Mars </div> -->
                        <div class="ml-2 mt-2 md:mt-0">
                            <button
                                class="flex items-center justify-center w-20 h-8 rounded-full text-white bg-green-500 hover:bg-green-600">
                                + Invite
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row items-center mt-2">
                        <div class="text-sm text-gray-500">Laravel Developer</div>
                        <div class="ml-2 text-sm text-gray-500">New York, USA</div>
                    </div>
                </div>
                <!-- Thẻ div ở giữa -->
                <div class="flex flex-grow flex-col md:flex-row justify-center items-center  mr-[175px] ">
                    <div class="flex flex-col items-center">
                        <div class="text-2xl font-bold text-gray-800">129</div>
                        <div class="text-sm text-gray-500">Posts</div>
                    </div>
                    <div class="flex flex-col items-center mx-5">
                        <div class="text-2xl font-bold text-gray-800">2.4K</div>
                        <div class="text-sm text-gray-500">Followers</div>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="text-2xl font-bold text-gray-800">1.2K</div>
                        <div class="text-sm text-gray-500">Following</div>
                    </div>
                </div>
                <div class="w-full max-w-full px-3 mx-auto mt-4 sm:my-auto sm:mr-0 md:w-1/2 md:flex-none lg:w-4/12">
                <div class="relative right-0">
                <ul class="relative flex flex-wrap p-1 list-none bg-transparent rounded-xl" nav-pills="" role="tablist">
                <li class="z-30 flex-auto text-center">
                <a class="z-30 block w-full px-0 py-1 mb-0 transition-all border-0 rounded-lg ease-soft-in-out bg-inherit text-slate-700" nav-link="" active="" href="javascript:;" role="tab" aria-selected="true">
                <svg class="text-slate-700" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                <g transform="translate(1716.000000, 291.000000)">
                <g transform="translate(603.000000, 0.000000)">
                <path class="fill-slate-800" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                <path class="fill-slate-800" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                <path class="fill-slate-800" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                </g>
                </g>
                </g>
                </g>
                </svg>
                <span class="ml-1">App</span>
                </a>
                </li>
                <li class="z-30 flex-auto text-center">
                <a class="z-30 block w-full px-0 py-1 mb-0 transition-all border-0 rounded-lg ease-soft-in-out bg-inherit text-slate-700" nav-link="" href="javascript:;" role="tab" aria-selected="false">
                <svg class="text-slate-700" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                <g transform="translate(1716.000000, 291.000000)">
                <g transform="translate(154.000000, 300.000000)">
                <path class="fill-slate-800" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                <path class="fill-slate-800" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                </g>
                </g>
                </g>
                </g>
                </svg>
                <span class="ml-1">Messages</span>
                </a>
                </li>
                <li class="z-30 flex-auto text-center">
                <a class="z-30 block w-full px-0 py-1 mb-0 transition-colors border-0 rounded-lg ease-soft-in-out bg-inherit text-slate-700" nav-link="" href="javascript:;" role="tab" aria-selected="false">
                <svg class="text-slate-700" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>settings</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                <g transform="translate(1716.000000, 291.000000)">
                <g transform="translate(304.000000, 151.000000)">
                <polygon class="fill-slate-800" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                <path class="fill-slate-800" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                <path class="fill-slate-800" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                </g>
                </g>
                </g>
                </g>
                </svg>
                <span class="ml-1">Settings</span>
                </a>
                </li>
                <div class="z-10 absolute text-slate-700 rounded-lg bg-inherit flex-auto text-center bg-none border-0 block" moving-tab="" nav-link="" style="box-shadow: rgb(221, 221, 221) 0px 1px 5px 1px; padding: 0px; transition: all 0.5s ease 0s; transform: translate3d(0px, 0px, 0px); width: 93px;"><a class="z-30 block w-full px-0 py-1 mb-0 transition-all border-0 rounded-lg ease-soft-in-out text-slate-700 bg-white text-white shadow-soft-xxs" nav-link="" active="" href="javascript:;" role="tab" aria-selected="true" style="animation: 0.2s ease 0s 1 normal none running none;">-</a></div></ul>
                </div>
                </div>
                </div>
            </div>
        

            <!-- Platform Settings -->
            <div class="flex justify-between">
                <!-- Thẻ div ở bên trái -->
                <div class="flex-shrink-0 mt-2.5 mb-5"></div>
                
                <!-- Thẻ div ở bên phải -->
                <div class="flex-shrink-0">
                    <!-- Nội dung của div ở bên phải -->
                </div>
            </div>

            <!-- Tab :Persion info , Working status , Password, Language and region , Session History  -->
            <div>
                <ul class="grid grid-flow-col text-center text-gray-500 bg-gray-100 rounded-full p-1 mb-3">
                    <li>
                        <tab-item label="Person Info" :route="{ name: 'PersonInfo' }"></tab-item>
                    </li>
                    <li>
                        <tab-item label="Working Status" :route="{ name: 'WorkingStatus' }"></tab-item>
                    </li>
                    <li>
                        <tab-item label="Password" :route="{ name: 'Password' }"></tab-item>
                    </li>
                    <li>
                        <tab-item label="Language and Region" :route="{ name: 'LanguageRegion' }"></tab-item>
                    </li>
                    <li>
                        <tab-item label="Session History" :route="{ name: 'SessionHistory' }"></tab-item>
                    </li>
                </ul>

                <router-view></router-view>
            </div>
        </div>



        
    </div>
    
</template>

<script>
import LeftSidebar from '../common/sidebar/LeftSidebar.vue';
// Định nghĩa base cho router được chọn
import TabItem from '../common/tabs/TabItem.vue';
import SearchAllCategory from '../common/search/SearchAllCategory.vue';

export default {
    name: 'Profile',
    components: {
        LeftSidebar,
        TabItem,
        SearchAllCategory
    },

};
</script>
