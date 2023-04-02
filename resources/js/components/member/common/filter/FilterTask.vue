<template>
    <div class="bg-grey col-12 mt-3 mr-3  inline-block">
        <button type="button" class="btn btn-light mr-10 shadow-sm" data-toggle="collapse" data-target="#filters">Filters <i
                class="fa fa-filter"></i></button>


        <button id="dropdownUsersButton" data-dropdown-toggle="dropdownUsers" data-dropdown-placement="bottom"
            class="text-white bg-blue-300 hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-300"
            type="button">Project users <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg></button>
        <!-- Dropdown menu -->
        <div id="dropdownUsers" class="z-10 hidden bg-white rounded-lg shadow w-60 dark:bg-gray-700">
            <ul class="h-48 py-2 overflow-y-auto text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUsersButton">
                <li>
                    <a href="#"
                        class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <img class="w-6 h-6 mr-2 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                            alt="Jese image">
                        Jese Leos
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <img class="w-6 h-6 mr-2 rounded-full" src="/docs/images/people/profile-picture-2.jpg"
                            alt="Jese image">
                        Robert Gough
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <img class="w-6 h-6 mr-2 rounded-full" src="/docs/images/people/profile-picture-3.jpg"
                            alt="Jese image">
                        Bonnie Green
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <img class="w-6 h-6 mr-2 rounded-full" src="/docs/images/people/profile-picture-4.jpg"
                            alt="Jese image">
                        Leslie Livingston
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <img class="w-6 h-6 mr-2 rounded-full" src="/docs/images/people/profile-picture-5.jpg"
                            alt="Jese image">
                        Michael Gough
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <img class="w-6 h-6 mr-2 rounded-full" src="/docs/images/people/profile-picture-2.jpg"
                            alt="Jese image">
                        Joseph Mcfall
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <img class="w-6 h-6 mr-2 rounded-full" src="/docs/images/people/profile-picture-3.jpg"
                            alt="Jese image">
                        Roberta Casas
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <img class="w-6 h-6 mr-2 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                            alt="Jese image">
                        Neil Sims
                    </a>
                </li>
            </ul>
            <a href="#"
                class="flex items-center p-3 text-sm font-medium text-blue-600 border-t border-gray-200 rounded-b-lg bg-gray-50 dark:border-gray-600 hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-blue-500 hover:underline">
                <svg class="w-5 h-5 mr-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                    </path>
                </svg>
                Add new user
            </a>
        </div>

    </div>

    <div class="inline-block">

        <button id="dropdownBgHoverButton" data-dropdown-toggle="dropdownBgHover"
            class="text-white bg-blue-300 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">Category <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>

        <!-- Dropdown menu -->
        <div id="dropdownBgHover" class="z-10 hidden w-48 bg-white rounded-lg shadow dark:bg-gray-700">
            <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownBgHoverButton">
                <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                        <input id="checkbox-item-4" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="checkbox-item-4"
                            class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Default
                            checkbox</label>
                    </div>
                </li>
                <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                        <input checked id="checkbox-item-5" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="checkbox-item-5"
                            class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Checked
                            state</label>
                    </div>
                </li>
                <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                        <input id="checkbox-item-6" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="checkbox-item-6"
                            class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Default
                            checkbox</label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>


