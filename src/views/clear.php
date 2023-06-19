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
            <img class="collapse-btn" src="../public/assets/icon/menu.png" alt="" width="30px" srcset="" />
        </button>
        <img src="../public/assets/1.png" alt="" width="100" />
        <button id="keranjang">
            <img src="../public/assets/icon/shopping_cart.png" alt="" width="30px" srcset="" />
        </button>
    </div>
</nav>
<section class=" w-full h-[100vh] flex flex-col gap-5 items-center justify-center my-10 ">

    <img class="max-h-[50vh]" src="<?php echo BASE_URL; ?>/public/assets/payment.png" alt="">
    <h2 class="font-medium text-2xl text-center">Horayyy!! Transaksimu sudah diproses, <br>pesanan kamu sudah disimpan dalam data penjual</h2>
    <a href="/<?php echo BASE_URL; ?>/home/" class="text-[color:var(--violet)] text-lg">
        Kembali ke Home
    </a>
</section>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>