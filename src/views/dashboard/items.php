<!DOCTYPE html>
<html x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- Favicon -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                <div class="flex flex-col gap-10 mb-4 pb-10 px-8 mx-4 rounded-3xl bg-gray-100 border-4 border-[color:var(--violet)] min-h-[80vh]">

                    <h3 class="text-gray-700 text-3xl font-medium pt-10 ">Daftar Barang</h3>
                    <div class="col-span-12 flex <?php echo (isset($_SESSION['flasher'])) ? 'justify-between' : 'justify-end'; ?>">
                        <?php
                        Flasher::flash();
                        ?>
                        <a href="<?php echo BASE_URL; ?>/dashboard/addbarang">
                            <button class="px-6 py-3 bg-pink-600 rounded-xl text-white font-medium text-sm tracking-wide hover:bg-pink-500 ml-3">Tambah Barang</button>
                        </a>
                    </div>
                    <div class="col-span-12 ">
                        <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
                            <div class="bg-white p-4 shadow-lg rounded-lg">
                                <div class="mt-4">
                                    <div class="flex flex-col">
                                        <div class="-my-2 overflow-x-auto">
                                            <div class="py-2 align-middle inline-block min-w-full">
                                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                                                    <table class="min-w-full divide-y divide-gray-200">
                                                        <thead>
                                                            <tr>
                                                                <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                    <div class="flex cursor-pointer">
                                                                        <span class="mr-2 uppercase">nama barang</span>
                                                                    </div>
                                                                </th>
                                                                <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                    <div class="flex cursor-pointer">
                                                                        <span class="mr-2">sellable stock</span>
                                                                    </div>
                                                                </th>
                                                                <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                    <div class="flex cursor-pointer">
                                                                        <span class="mr-2">reserved stock</span>
                                                                    </div>
                                                                </th>
                                                                <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                    <div class="flex cursor-pointer">
                                                                        <span class="mr-2 uppercase">total stock</span>
                                                                    </div>
                                                                </th>
                                                                <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                    <div class="flex cursor-pointer">
                                                                        <span class="mr-2">ACTION</span>
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="bg-white divide-y divide-gray-200">
                                                            <?php foreach ($data as $d) : ?>
                                                                <tr>
                                                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                        <p><?php echo $d['item_name']; ?></p>
                                                                        <p class="text-xs text-gray-400"><?php echo ucfirst($d['category_name']); ?>
                                                                        </p>
                                                                    </td>
                                                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                        <p><?php printf($d['sellable'] != null ? $d['sellable'] : $d['stock']); ?></p>
                                                                    </td>
                                                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                        <p><?php printf($d['reserved'] != null ? $d['reserved'] : 0); ?></p>

                                                                    </td>
                                                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                        <p><?php printf($d['stock']); ?></p>
                                                                    </td>

                                                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                        <div class="flex space-x-4">
                                                                            <a href="<?php echo BASE_URL; ?>/dashboard/editview/<?php echo $d['item_id']; ?>" class="text-blue-500 hover:text-blue-600">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                                </svg>
                                                                                <p>Edit</p>
                                                                            </a>
                                                                            <form id="formx" action="<?php echo BASE_URL; ?>/dashboard/deleteBarang/" method="post">
                                                                                <input name="id" type="text" class="hidden" value="<?php echo $d['item_id']; ?>">
                                                                                <button type="submit" class="text-red-500 hover:text-red-600">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                                    </svg>
                                                                                    <p>Delete</p>
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach ?>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script>
        const del = document.querySelectorAll('#formx');
        // console.log(del.)
        del.forEach(form => {
            form.addEventListener('submit', e => {
                e.preventDefault(); // Prevent form submission
                Swal.fire({
                    title: 'Confirmation',
                    text: 'Apakah anda yakin akan menghapus barang ini?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Hapus',
                    cancelButtonText: 'Cancel',
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        })

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