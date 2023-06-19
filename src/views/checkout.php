<nav class="drop-shadow-md absolute w-full">
    <div class="nav-head nav-desk">
        <div class="brand">
            <a href="<?php echo BASE_URL; ?>/home/">

                <img class="brand-img" src="<?php echo BASE_URL; ?>/public/assets/1.png" alt="" />
            </a>
        </div>

    </div>

    <div class="nav-mob">
        <button href="" class="collapse-btn">
            <img class="collapse-btn" src="<?php echo BASE_URL; ?>/public/assets/icon/menu.png" alt="" width="30px" srcset="" />
        </button>
        <img src="<?php echo BASE_URL; ?>/public/assets/1.png" alt="" width="100" />
        <button id="keranjang">
            <img src="<?php echo BASE_URL; ?>/public/assets/icon/shopping_cart.png" alt="" width="30px" srcset="" />
        </button>
    </div>
</nav>
<section class=" w-full h-[100vh] items-center justify-around md:mt-0 mt-32">
    <form action="<?php echo BASE_URL; ?>/home/checkoutpost" method="post" class="lg:grid my-10 grid-cols-2 gap-x-20 px-32 w-full h-[100vh] items-center justify-around" enctype="multipart/form-data">

        <div class="contain">
            <div class=" text-center">
                <h1 class="judul-daftar">Selesaikan Transaksimu</h1>
                <h6 class="judul-item">Untuk menyelesaikan transaksi harap mengisi data diri dulu yaa</h6>
            </div>
            <?php
            Flasher::flash();
            ?>
            <div class="relative my-8" data-te-input-wrapper-init>
                <input name="nama" type="text" class="peer focus:border-[color:var(--violet)] block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-4 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleFormControlInputText" placeholder="Example label" value="<?php echo $data[0]['item_name']; ?>" disabled />

                <label for="exampleFormControlInputText" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-4 leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.4rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.4rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Nama Barang
                </label>
            </div>
            <div class="relative my-8" data-te-input-wrapper-init>
                <input required name="name" type="text" class="peer focus:border-[color:var(--violet)] block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-4 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleFormControlInputText" placeholder="Example label" />

                <label for="exampleFormControlInputText" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-4 leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.4rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.4rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Nama Pelanggan
                </label>
            </div>
            <div class="relative my-8" data-te-input-wrapper-init>
                <input required name="email" type="email" class="peer focus:border-[color:var(--violet)] block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-4 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleFormControlInputText" placeholder="Example label" />

                <label for="exampleFormControlInputText" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-4 leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.4rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.4rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Email
                </label>
            </div>
            <div class="relative my-8" data-te-input-wrapper-init>
                <input required name="phone" type="text" class="peer focus:border-[color:var(--violet)] block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-4 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleFormControlInputText" placeholder="Example label" />

                <label for="exampleFormControlInputText" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-4 leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.4rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.4rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Nomor Telepon
                </label>
            </div>
            <div class="relative my-8" data-te-input-wrapper-init>
                <input name="quantity" type="number" class="peer focus:border-[color:var(--violet)] block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-4 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleFormControlInputText" placeholder="Example label" value="<?php echo $data[0]['quantity']; ?>" disabled />

                <label for="exampleFormControlInputText" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-4 leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.4rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.4rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Jumlah Barang
                </label>
            </div>
            <div class="relative my-8" data-te-input-wrapper-init>
                <input name="nama" type="text" class="peer focus:border-[color:var(--violet)] block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-4 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleFormControlInputText" placeholder="Example label" value="<?php echo (intval($data[0]['price']) * $data[0]['quantity']); ?>" disabled />

                <label for="exampleFormControlInputText" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-4 leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.4rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.4rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Total Harga
                </label>
            </div>





        </div>
        <div class="">
            <h2 class="text-xl font-medium text-center">Pembayaran kepada penjual dapat dilakukan dengan melakukan transfer sesuai nominal pada rekening berikut</h2>
            <h3 class="text-3xl font-semibold text-center my-5"><?php echo $data[1][0]['payment_number']; ?></h3>
            <h2 class="text-xl font-medium text-center"><?php echo $data[1][0]['vendor_name']; ?></h2>
            <div class="relative my-8">
                <label for="formFileLg" class="mb-2 inline-block text-neutral-700 dark:text-neutral-200">Bukti Pembayaran</label>
                <input required name="image" class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] font-normal leading-[2.15] text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary" id="formFileLg" type="file" />
            </div>
            <button type="submit" class="w-full inline-block rounded-lg bg-[color:var(--violet)] px-6 py-3 font-medium capitalize leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-[color:var(--violet)]-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-[color:var(--violet)]-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-[color:var(--violet)]-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                Checkout
            </button>
        </div>
        <input name="preorder_id" type="hidden" value="<?php echo $data[0]['preorder']; ?>">
        <input name="quantity" type="hidden" value="<?php echo $data[0]['quantity']; ?>">
        <input name="item_id" type="hidden" value="<?php echo $data[0]['item_id']; ?>">
        <input name="basket_id" type="hidden" value="<?php echo $data[0]['basket_id']; ?>">
    </form>
    <div class="h-24 md:hidden block"></div>

</section>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>