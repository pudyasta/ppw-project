<!DOCTYPE html>
<html x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- Favicon -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body>
    <div class="flex h-screen bg-gray-800 " :class="{ 'overflow-hidden': isSideMenuOpen }">
        <?php include 'sidebar.php' ?>
        <div class="flex flex-col flex-1 w-full overflow-y-auto">
            <header class="z-40 py-4  bg-gray-800  ">
                <div class="flex items-center justify-end h-8 px-6 mx-auto">
                    <!-- Mobile hamburger -->
                    <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple" @click="toggleSideMenu" aria-label="Menu">
                        <x-heroicon-o-menu class="w-6 h-6 text-white" />
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                    </button>

                    <ul class="flex items-center flex-shrink-0 space-x-6">
                        <!-- Profile menu -->
                        <li class="relative">
                            <button class="p-2 bg-white text-[color:var(--violet)] align-middle rounded-full hover:text-white hover:bg-[color:var(--violet)] focus:outline-none " @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account" aria-haspopup="true">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                            </button>
                            <template x-if="isProfileMenuOpen">
                                <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click.away="closeProfileMenu" @keydown.escape="closeProfileMenu" class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border rounded-md shadow-md" aria-label="submenu">
                                    <li class="flex">
                                        <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li class="flex">
                                        <form class="w-full" action="<?php echo BASE_URL; ?>/user/logout" method="post">
                                            <button type="submit" class="w-full inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                                </svg>
                                                <span>Log out</span>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </template>
                        </li>
                    </ul>
                </div>
            </header>

            <main class="target-ajax">
                <div class="grid mb-4 pb-10 px-8 mx-4 rounded-3xl bg-gray-100 border-4 border-[color:var(--violet)] min-h-[80vh]">
                    @extends('_layouts.master')

                    @section('body')
                    <h3 class="text-gray-700 text-3xl font-medium">UI Elements</h3>

                    <div class="mt-4">
                        <h4 class="text-gray-600">Alerts</h4>

                        <div class="mt-4">
                            <div class="rounded-md bg-white py-4 px-4 overflow-x-auto whitespace-no-wrap">
                                <div class="inline-flex max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden ml-3">
                                    <div class="flex justify-center items-center w-12 bg-green-500">
                                        <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z" />
                                        </svg>
                                    </div>

                                    <div class="-mx-3 py-2 px-4">
                                        <div class="mx-3">
                                            <span class="text-green-500 font-semibold">Success</span>
                                            <p class="text-gray-600 text-sm">Your account was registered!</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="inline-flex max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden ml-3">
                                    <div class="flex justify-center items-center w-12 bg-blue-500">
                                        <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z" />
                                        </svg>
                                    </div>

                                    <div class="-mx-3 py-2 px-4">
                                        <div class="mx-3">
                                            <span class="text-blue-500 font-semibold">Info</span>
                                            <p class="text-gray-600 text-sm">This channel archived by owner !</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="inline-flex max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden ml-3">
                                    <div class="flex justify-center items-center w-12 bg-yellow-500">
                                        <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z" />
                                        </svg>
                                    </div>

                                    <div class="-mx-3 py-2 px-4">
                                        <div class="mx-3">
                                            <span class="text-yellow-500 font-semibold">Warning</span>
                                            <p class="text-gray-600 text-sm">Your image size is to large !</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="inline-flex max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden ml-3">
                                    <div class="flex justify-center items-center w-12 bg-red-500">
                                        <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z" />
                                        </svg>
                                    </div>

                                    <div class="-mx-3 py-2 px-4">
                                        <div class="mx-3">
                                            <span class="text-red-500 font-semibold">Error</span>
                                            <p class="text-gray-600 text-sm">Your email is already used!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h4 class="text-gray-600">Radio Buttons</h4>

                        <div class="mt-4">
                            <div class="flex rounded-md bg-white py-4 px-4 overflow-x-auto">
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio h-5 w-5 text-gray-600" checked><span class="ml-2 text-gray-700">label</span>
                                </label>

                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" class="form-radio h-5 w-5 text-red-600" checked><span class="ml-2 text-gray-700">label</span>
                                </label>

                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" class="form-radio h-5 w-5 text-orange-600" checked><span class="ml-2 text-gray-700">label</span>
                                </label>

                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" class="form-radio h-5 w-5 text-yellow-600" checked><span class="ml-2 text-gray-700">label</span>
                                </label>

                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" class="form-radio h-5 w-5 text-green-600" checked><span class="ml-2 text-gray-700">label</span>
                                </label>

                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" class="form-radio h-5 w-5 text-teal-600" checked><span class="ml-2 text-gray-700">label</span>
                                </label>

                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" class="form-radio h-5 w-5 text-blue-600" checked><span class="ml-2 text-gray-700">label</span>
                                </label>

                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" class="form-radio h-5 w-5 text-indigo-600" checked><span class="ml-2 text-gray-700">label</span>
                                </label>

                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" class="form-radio h-5 w-5 text-purple-600" checked><span class="ml-2 text-gray-700">label</span>
                                </label>

                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" class="form-radio h-5 w-5 text-pink-600" checked><span class="ml-2 text-gray-700">label</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h4 class="text-gray-600">Checkboxes</h4>

                        <div class="mt-4">
                            <div class="flex rounded-md bg-white py-4 px-4 overflow-x-auto">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600" checked><span class="ml-2 text-gray-700">label</span>
                                </label>

                                <label class="inline-flex items-center ml-3">
                                    <input type="checkbox" class="form-checkbox h-5 w-5 text-red-600" checked><span class="ml-2 text-gray-700">label</span>
                                </label>

                                <label class="inline-flex items-center ml-3">
                                    <input type="checkbox" class="form-checkbox h-5 w-5 text-orange-600" checked><span class="ml-2 text-gray-700">label</span>
                                </label>

                                <label class="inline-flex items-center ml-3">
                                    <input type="checkbox" class="form-checkbox h-5 w-5 text-yellow-600" checked><span class="ml-2 text-gray-700">label</span>
                                </label>

                                <label class="inline-flex items-center ml-3">
                                    <input type="checkbox" class="form-checkbox h-5 w-5 text-green-600" checked><span class="ml-2 text-gray-700">label</span>
                                </label>

                                <label class="inline-flex items-center ml-3">
                                    <input type="checkbox" class="form-checkbox h-5 w-5 text-teal-600" checked><span class="ml-2 text-gray-700">label</span>
                                </label>

                                <label class="inline-flex items-center ml-3">
                                    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" checked><span class="ml-2 text-gray-700">label</span>
                                </label>

                                <label class="inline-flex items-center ml-3">
                                    <input type="checkbox" class="form-checkbox h-5 w-5 text-indigo-600" checked><span class="ml-2 text-gray-700">label</span>
                                </label>

                                <label class="inline-flex items-center ml-3">
                                    <input type="checkbox" class="form-checkbox h-5 w-5 text-purple-600" checked><span class="ml-2 text-gray-700">label</span>
                                </label>

                                <label class="inline-flex items-center ml-3">
                                    <input type="checkbox" class="form-checkbox h-5 w-5 text-pink-600" checked><span class="ml-2 text-gray-700">label</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h4 class="text-gray-600">Buttons</h4>

                        <div class="mt-4">
                            <div class="flex rounded-md bg-white py-4 px-4 overflow-x-auto">
                                <button class="px-6 py-3 bg-gray-600 rounded-md text-white font-medium tracking-wide hover:bg-gray-500">Button</button>
                                <button class="px-6 py-3 bg-red-600 rounded-md text-white font-medium tracking-wide hover:bg-red-500 ml-3">Button</button>
                                <button class="px-6 py-3 bg-orange-600 rounded-md text-white font-medium tracking-wide hover:bg-orange-500 ml-3">Button</button>
                                <button class="px-6 py-3 bg-yellow-600 rounded-md text-white font-medium tracking-wide hover:bg-yellow-500 ml-3">Button</button>
                                <button class="px-6 py-3 bg-green-600 rounded-md text-white font-medium tracking-wide hover:bg-green-500 ml-3">Button</button>
                                <button class="px-6 py-3 bg-teal-600 rounded-md text-white font-medium tracking-wide hover:bg-teal-500 ml-3">Button</button>
                                <button class="px-6 py-3 bg-blue-600 rounded-md text-white font-medium tracking-wide hover:bg-blue-500 ml-3">Button</button>
                                <button class="px-6 py-3 bg-indigo-600 rounded-md text-white font-medium tracking-wide hover:bg-indigo-500 ml-3">Button</button>
                                <button class="px-6 py-3 bg-purple-600 rounded-md text-white font-medium tracking-wide hover:bg-purple-500 ml-3">Button</button>
                                <button class="px-6 py-3 bg-pink-600 rounded-md text-white font-medium tracking-wide hover:bg-pink-500 ml-3">Button</button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h4 class="text-gray-600">Pagnations</h4>

                        <div class="mt-4">
                            <div class="flex rounded-md bg-white py-4 px-4 overflow-x-auto">
                                <div class="flex rounded mr-4">
                                    <a href="#" class="py-2 px-3 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 ml-0 rounded-l hover:bg-indigo-500 hover:text-white"><span>Previous</a></a>
                                    <a href="#" class="py-2 px-3 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-indigo-500 hover:text-white"><span>1</span></a>
                                    <a href="#" class="py-2 px-3 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-indigo-500 hover:text-white"><span>2</span></a>
                                    <a href="#" class="py-2 px-3 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-indigo-500 hover:text-white"><span>3</span></a>
                                    <a href="#" class="py-2 px-3 leading-tight bg-white border border-gray-200 text-blue-700 rounded-r hover:bg-indigo-500 hover:text-white"><span>Next</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endsection
                </div>
            </main>
        </div>
    </div>
    <script>
        function data() {
            return {

                isSideMenuOpen: false,
                toggleSideMenu() {
                    this.isSideMenuOpen = !this.isSideMenuOpen
                },
                closeSideMenu() {
                    this.isSideMenuOpen = false
                },
                isNotificationsMenuOpen: false,
                toggleNotificationsMenu() {
                    this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen
                },
                closeNotificationsMenu() {
                    this.isNotificationsMenuOpen = false
                },
                isProfileMenuOpen: false,
                toggleProfileMenu() {
                    this.isProfileMenuOpen = !this.isProfileMenuOpen
                },
                closeProfileMenu() {
                    this.isProfileMenuOpen = false
                },
                isPagesMenuOpen: false,
                togglePagesMenu() {
                    this.isPagesMenuOpen = !this.isPagesMenuOpen
                },

            }
        }
    </script>