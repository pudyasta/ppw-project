<?php

?>
<section class="flex w-full h-[100vh] items-center justify-around">
    <div class="img lg:block hidden">
        <img src="<?php echo BASE_URL; ?>/public/assets/banner/gambar_lain/pay.png" alt="" class="w-[70vh]">
    </div>
    <div class="contain">
        <div class=" text-center">
            <h1 class="judul-daftar">Satu Langkah Lagi!</h1>
            <h6 class="judul-item my-3">Masukkan nomor rekening pertama kamu sebagai metode pembayaran nanti yaa!</h6>
        </div>
        <?php
        Flasher::flash();
        ?>
        <form action="<?php echo BASE_URL; ?>/user/postinsertpayment" method="post">
            <div class="mt-10">

                <select name="vendor_id" data-te-select-init data-te-select-size="lg">
                    <?php foreach ($data as $d) : ?>
                        <option value="<?php echo $d['payment_vendor_id']; ?>"><?php echo $d['vendor_name']; ?></option>
                    <?php endforeach ?>
                </select>
                <label data-te-select-label-ref>Nama Vendor</label>
            </div>

            <div class="relative my-8" data-te-input-wrapper-init>
                <input name="number" type="text" class="peer focus:border-[color:var(--violet)] block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-4 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleFormControlInputText" placeholder="Example label" />

                <label for="exampleFormControlInputText" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-4 leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.4rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.4rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Nomor
                </label>
            </div>
            <button type="submit" class="w-full inline-block rounded-lg bg-[color:var(--violet)] px-6 py-3 font-medium capitalize leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-[color:var(--violet)]-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-[color:var(--violet)]-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-[color:var(--violet)]-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                Simpan
            </button>
        </form>
    </div>

</section>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>