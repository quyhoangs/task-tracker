<template>
  <div class="flex flex-wrap -mx-4">
    <div class="w-full md:w-1/5 bg-gray-800">
      <nav class="sidebar close">
        <header>
          <div class="image-text">
            <span class="image">
              <img src="logo.png" alt="">
            </span>

            <div class="text logo-text">
              <span class="name">Codinglab</span>
              <span class="profession">Web developer</span>
            </div>
          </div>

          <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
          <div class="menu">

            <li class="search-box">
              <i class='bx bx-search icon'></i>
              <input type="text" placeholder="Search...">
            </li>

            <ul class="menu-links">
              <li class="nav-link">
                <a href="#">
                  <i class='bx bx-home-alt icon'></i>
                  <span class="text nav-text">Dashboard</span>
                </a>
              </li>

              <li class="nav-link">
                <a href="#">
                  <i class='bx bx-bar-chart-alt-2 icon'></i>
                  <span class="text nav-text">Revenue</span>
                </a>
              </li>

              <li class="nav-link">
                <a href="#">
                  <i class='bx bx-bell icon'></i>
                  <span class="text nav-text">Notifications</span>
                </a>
              </li>

              <li class="nav-link">
                <a href="#">
                  <i class='bx bx-pie-chart-alt icon'></i>
                  <span class="text nav-text">Analytics</span>
                </a>
              </li>

              <li class="nav-link">
                <a href="#">
                  <i class='bx bx-heart icon'></i>
                  <span class="text nav-text">Likes</span>
                </a>
              </li>

              <li class="nav-link">
                <a href="#">
                  <i class='bx bx-wallet icon'></i>
                  <span class="text nav-text">Wallets</span>
                </a>
              </li>

            </ul>
          </div>

          <div class="bottom-content">
            <li class="">
              <a href="#">
                <i class='bx bx-log-out icon'></i>
                <span class="text nav-text">Logout</span>
              </a>
            </li>

            <li class="mode">
              <div class="sun-moon">
                <i class='bx bx-moon icon moon'></i>
                <i class='bx bx-sun icon sun'></i>
              </div>
              <span class="mode-text text">Dark mode</span>

              <div class="toggle-switch">
                <span class="switch"></span>
              </div>
            </li>

          </div>
        </div>

      </nav>

      <section class="home">
        <div class="text">Dashboard Sidebar</div>
      </section>

    </div>

    <div class="w-full md:w-4/5 p-4 bg-card min-h-full px-8 py-8">
      <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
          <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our Blog
            </h2>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">We use an agile approach to test assumptions
              and connect with the needs of your audience early and often.</p>
          </div>
          <div class="grid gap-8 lg:grid-cols-2">
            <article
              class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
              <div class="flex justify-between items-center mb-5 text-gray-500">
                <span
                  class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                  <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                    </path>
                  </svg>
                  Tutorial
                </span>
                <span class="text-sm">14 days ago</span>
              </div>
              <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">How to quickly
                  deploy a static website</a></h2>
              <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Static websites are now used to bootstrap lots
                of
                websites and are becoming the basis for a variety of tools that even influence both web designers and
                developers influence both web designers and developers.</p>
              <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4">
                  <img class="w-7 h-7 rounded-full"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                    alt="Jese Leos avatar" />
                  <span class="font-medium dark:text-white">
                    Jese Leos
                  </span>
                </div>
                <a href="#"
                  class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                  Read more
                  <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
                  </svg>
                </a>
              </div>
            </article>
            <article
              class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
              <div class="flex justify-between items-center mb-5 text-gray-500">
                <span
                  class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                  <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                      clip-rule="evenodd"></path>
                    <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                  </svg>
                  Article
                </span>
                <span class="text-sm">14 days ago</span>
              </div>
              <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">Our first
                  project
                  with React</a></h2>
              <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Static websites are now used to bootstrap lots
                of
                websites and are becoming the basis for a variety of tools that even influence both web designers and
                developers influence both web designers and developers.</p>
              <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4">
                  <img class="w-7 h-7 rounded-full"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                    alt="Bonnie Green avatar" />
                  <span class="font-medium dark:text-white">
                    Bonnie Green
                  </span>
                </div>
                <a href="#"
                  class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                  Read more
                  <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
                  </svg>
                </a>
              </div>
            </article>
          </div>
        </div>
      </section>
    </div>
  </div>
</template>

<script >

import './about-layout.js';
import '../../../../sass/components/about-layout.scss';

export default {
  name: 'HomeLayout',
};
</script>
