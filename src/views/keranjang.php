<div class="head">
    <a href="#">bantuan</a>
    <a href="#">bahasa indonesia</a>
</div>

<nav class="drop-shadow-md">
    <div class="nav-head nav-desk">
        <div class="brand">
            <a href="<?php echo BASE_URL; ?>/home/">

                <img class="brand-img" src="<?php echo BASE_URL; ?>/public/assets/1.png" alt="" />
            </a>
            <form action="" class="relative">
                <input class="search" type="text" placeholder="Lagi cari apa nich kak?" />
                <button class="absolute top-0 bottom-0 bg-transparent border border-0 right-[20px]"><img class="w-6" src="../public/assets/icon/search.png" alt="" srcset=""></button>

            </form>
        </div>
        <div class="link">
            <button id="keranjang" class="nav-link">
                <img src="../public/assets/icon/shopping_cart.png" class="m-auto" alt="" />
                <p>keranjang</p>
            </button>
            <a href="#" class="nav-link">
                <img src="../public/assets/icon/heart_plus.png" class="m-auto" alt="" />
                <p>Favorit</p>
            </a>
            <a href="#" class="nav-link m-auto">
                <img src="../public/assets/icon/forum.png" class="m-auto" alt="" />
                <p>pesan masuk</p>
            </a>
            <a href="<?php echo BASE_URL; ?>/user/signin">
                <button class="btn-violet-outlined"><?php echo isset($_SESSION['user']) ? 'Dashboard' : 'Jadi Seller'; ?></button>
            </a>
        </div>
    </div>
    <div class="nav-cat">
        <a href="<?php echo BASE_URL; ?>/home/itempercategory/pakaian">pakaian</a>
        <a href="<?php echo BASE_URL; ?>/home/itempercategory/aksesoris">aksesoris</a>
        <a href="<?php echo BASE_URL; ?>/home/itempercategory/makanan">makanan</a>
        <a href="<?php echo BASE_URL; ?>/home/itempercategory/minuman">minuman</a>
        <a href="<?php echo BASE_URL; ?>/home/itempercategory/tas">tas</a>
        <a href="<?php echo BASE_URL; ?>/home/itempercategory/tumblr">tumblr</a>
        <a href="<?php echo BASE_URL; ?>/home/itempercategory/stiker">stiker</a>
    </div>
    <div class="nav-mob">
        <button href="" class="collapse-btn">
            <img class="collapse-btn" src="../public/assets/icon/menu.png" alt="" width="30px" srcset="" />
        </button>
        <img src="../public/assets/1.png" alt="" width="100" />
        <button id="keranjang">
            <img src="../public/assets/icon/shopping_cart.png" alt="" width="30px" srcset="" />
        </button>
    </div>
    <div class="nav-collapse">
        <form action="" class="relative mb-5  ">
            <input class="search" type="text" placeholder="Lagi cari apa nich kak?" />
            <button class="absolute top-0 bottom-0 bg-transparent border border-0 right-[20px]"><img class="w-6" src="../public/assets/icon/search.png" alt="" srcset=""></button>

        </form>
        <div class="stack-menu px-2">
            <a href="#" class="nav-stack py-3">
                <p>favorit</p>
                <img src="../public/assets/icon/heart_plus.png" alt="" width="25px" />
            </a>
            <a href="#" class="nav-stack">
                <p>pesan masuk</p>
                <img src="../public/assets/icon/forum.png" alt="" width="25px" />
            </a>
            <a href="#" class="nav-stack">
                <a href="#">
                    <button class="bg-[color:var(--lightviolet)] rounded-md w-full py-2 text-[color:var(--violet)] hover:text-white capitalize hover:bg-[color:var(--violet)]">jadi seller</button>
                </a>
            </a>

        </div>
    </div>
</nav>




<section class="xl:px-32 px-[20px] w-full md:py-10 py-5">
    <div class=" w-full items-center">

        <h2 class="md:text-3xl text-xl font-medium">Keranjang Belanjamu</h2>
    </div>
    <div class="col-span-12 ">
        <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <div class="mt-4">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto">
                            <div class="py-2 align-middle inline-block min-w-full">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                                    <?php
                                    Flasher::flash();
                                    ?>
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead>
                                            <tr>
                                                <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    <div class="flex cursor-pointer">
                                                        <span class="mr-2">Nama barang</span>
                                                    </div>
                                                </th>
                                                <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    <div class="flex cursor-pointer">
                                                        <span class="mr-2">Harga</span>
                                                    </div>
                                                </th>
                                                <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    <div class="flex cursor-pointer">
                                                        <span class="mr-2">Jumlah</span>
                                                    </div>
                                                </th>
                                                <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    <div class="flex cursor-pointer">
                                                        <span class="mr-2">Foto Barang</span>
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
                                                <form id="formx" action="<?php echo BASE_URL; ?>/home/checkout/" method="post">
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                            <p><?php echo $d['item_name']; ?></p>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                            <p><?php echo $d['price'];; ?></p>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                            <input name="quantity" type="number" class="bg-gray-100 w-16 text-center py-1 px-2" value="1">
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                            <img class="h-full   top-0 object-cover w-32" src="<?php echo BASE_URL . '/' . $d['item_image'] ?>" />
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                            <input name="item_id" type="hidden" value="<?php echo $d['item_id']; ?>">
                                                            <input name="item_name" type="hidden" value="<?php echo $d['item_name']; ?>">
                                                            <input name="preorder" type="hidden" value="<?php echo $d['preorder_id']; ?>">
                                                            <input name="seller_id" type="hidden" value="<?php echo $d['seller_id']; ?>">
                                                            <input name="price" type="hidden" value="<?php echo $d['price']; ?>">
                                                            <input name="basket_id" type="hidden" value="<?php echo $d['id']; ?>">
                                                            <div class="flex space-x-10">
                                                                <button type="submit" class="text-red-500 hover:text-red-600">
                                                                    <p>Checkout</p>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </form>
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

</section>


<script>

</script>
<script src="<?php echo BASE_URL; ?>/public/js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>

</html>