<?php
$x = [
    ["name" => "gelang", "img" => "../public/assets/categories/gelang.png"],
    ["name" => "lanyard", "img" => "../public/assets/categories/lanyard.png"],
    ["name" => "kaos", "img" => "../public/assets/categories/kaos.png"],
    ["name" => "hoodie", "img" => "../public/assets/categories/hoddie.png"],
    ["name" => "korsa", "img" => "../public/assets/categories/korsa.png"],
    ["name" => "jaket", "img" => "../public/assets/categories/jaket.png"],
    ["name" => "gelang", "img" => "../public/assets/categories/gelang.png"],
    ["name" => "gelang", "img" => "../public/assets/categories/gelang.png"],
    ["name" => "gelang", "img" => "../public/assets/categories/gelang.png"],
];
?>
<script>
    let storage1 = JSON.parse(localStorage.getItem("itemid"));
    if (storage1 == null) {
        const data = {
            data: []
        };
        localStorage.setItem("itemid", JSON.stringify(data));
    }
</script>

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
                <button class="absolute top-0 bottom-0 bg-transparent border border-0 right-[20px]"><img class="w-6" src="<?php echo BASE_URL; ?>/public/assets/icon/search.png" alt="" srcset=""></button>

            </form>
        </div>
        <div class="link">
            <a href="<?php echo BASE_URL; ?>/home/keranjang" id="keranjang" class="nav-link">
                <img src="<?php echo BASE_URL; ?>/public/assets/icon/shopping_cart.png" class="m-auto" alt="" />
                <p>keranjang</p>
            </a>
            <a href="#" class="nav-link">
                <img src="<?php echo BASE_URL; ?>/public/assets/icon/heart_plus.png" class="m-auto" alt="" />
                <p>Favorit</p>
            </a>
            <a href="#" class="nav-link m-auto">
                <img src="<?php echo BASE_URL; ?>/public/assets/icon/forum.png" class="m-auto" alt="" />
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
            <img class="collapse-btn" src="<?php echo BASE_URL; ?>/public/assets/icon/menu.png" alt="" width="30px" srcset="" />
        </button>
        <img src="<?php echo BASE_URL; ?>/public/assets/1.png" alt="" width="100" />
        <button id="keranjang">
            <img src="<?php echo BASE_URL; ?>/public/assets/icon/shopping_cart.png" alt="" width="30px" srcset="" />
        </button>
    </div>
    <div class="nav-collapse">
        <form action="" class="relative mb-5  ">
            <input class="search" type="text" placeholder="Lagi cari apa nich kak?" />
            <button class="absolute top-0 bottom-0 bg-transparent border border-0 right-[20px]"><img class="w-6" src="<?php echo BASE_URL; ?>/public/assets/icon/search.png" alt="" srcset=""></button>

        </form>
        <div class="stack-menu px-2">
            <a href="#" class="nav-stack py-3">
                <p>favorit</p>
                <img src="<?php echo BASE_URL; ?>/public/assets/icon/heart_plus.png" alt="" width="25px" />
            </a>
            <a href="#" class="nav-stack">
                <p>pesan masuk</p>
                <img src="<?php echo BASE_URL; ?>/public/assets/icon/forum.png" alt="" width="25px" />
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
    <div class="flex justify-between w-full items-center">

        <h2 class="md:text-3xl text-xl font-medium capitalize">Produk <?php echo Helper::parseURL()[2]; ?></h2>

    </div>

    <div class="flex flex-wrap gap-5 my-5">
        <?php foreach ($data[0] as $d) : ?>
            <?php
            if (!in_array($d['preorder_id'], $data[1])) :
            ?>
                <div class="md:w-72 w-38 m-2 block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <div class="relative overflow-hidden bg-fill bg-no-repeat md:h-48 h-32" data-te-ripple-init data-te-ripple-color="light">
                        <img class="rounded-t-lg object-cover w-full" src="<?php echo BASE_URL; ?>/<?php echo $d['item_image']; ?>" alt="" />
                        <a href="#!">
                            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                        </a>
                    </div>
                    <div class="md:p-6 p-3 flex flex-col justify-between md:h-[250px]">
                        <div>
                            <h5 class="mb-2 md:text-lg text-xs font-semibold leading-tight text-neutral-800 dark:text-neutral-50">
                                <?php echo $d['item_name']; ?>
                            </h5>
                            <h4 class="mb-2 md:text-lg text-xs font-semibold text-[color:var(--violet)] leading-tight">
                                Rp <?php echo number_format($d['price'], 2, '.', ','); ?>

                            </h4>
                            <div class="md:flex mb-2 justify-between">
                                <div class="mb-2 sm:mb-0 store flex items-center gap-2 md:text-lg text-xs"> <span><img src="<?php echo BASE_URL; ?>/public/assets/icon/storefront.png" alt="" srcset=""></span>
                                    <p class="md:text-lg text-xs"><?php echo $d['seller_name']; ?></p>
                                </div>
                                <div class="rate flex items-center gap-2 md:text-lg text-xs"><span><img src="<?php echo BASE_URL; ?>/public/assets/icon/star_rate.png" alt="" srcset=""></span> 4 / 5</div>
                            </div>

                            <div class="flex mb-2 gap-2 items-center">
                                <img src="<?php echo BASE_URL; ?>/public/assets/icon/alarm.png" alt="" srcset="">
                                <h5 class=" md:text-base text-xs font-semibold leading-tight text-neutral-800 dark:text-neutral-50">
                                    <?php
                                    $dateObj = date_create_from_format("Y-m-d", $d['cutoff_date']);
                                    $formattedDate = date_format($dateObj, "d-m-Y");
                                    $monthNumber = date_format($dateObj, "m");
                                    $monthName = date("F", strtotime("2000-$monthNumber-01"));
                                    $formattedDate = str_replace(date("m", strtotime($d['cutoff_date'])), $monthName, $formattedDate);
                                    echo str_replace("-", " ", $formattedDate);
                                    ?>
                                </h5>
                            </div>
                        </div>

                        <button id="addToChart" data-preorder="<?php echo $d['preorder_id']; ?>" type="button" class="addToChart w-full inline-block rounded bg-[color:var(--violet)] px-6 pb-2 pt-2.5  font-medium capitalize leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-[color:var(--violet)]-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-[color:var(--violet)]-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-[color:var(--violet)]-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                            <p class="text-xs" data-preorder="<?php echo $d['preorder_id']; ?>">
                                Tambah <span data-preorder="<?php echo $d['preorder_id']; ?>" class="md:inline hidden">ke Keranjang</span>
                            </p>
                        </button>
                    </div>
                </div>

            <?php
            endif;
            ?>
        <?php endforeach ?>
    </div>
</section>




<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    let swiper = new Swiper(".mySwiper", {

        breakpoints: {
            "@0.00": {
                slidesPerView: 2,
                spaceBetween: 1,
                slidesPerGroup: 2,
            },

            "@1.00": {
                slidesPerView: 3,
                spaceBetween: 40,
                slidesPerGroup: 3,
            },
            "@1.50": {
                slidesPerView: 4,
                spaceBetween: 50,
                slidesPerGroup: 4,
            },
            "@1.75": {
                slidesPerView: 5,
                spaceBetween: 50,
                slidesPerGroup: 5,
            },
        },

        // centeredSlides: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    const a = document.querySelectorAll(".addToChart");
    a.forEach((x) => {
        x.addEventListener("click", (e) => {
            axios({
                    method: 'post',
                    url: 'http://localhost/jajan/baskets/insertChart/',
                    data: {
                        data: e.target.dataset.preorder
                    },
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    }
                }).then(function(response) {
                    var responseData = response.data;
                    console.log(responseData);
                })
                .catch(function(error) {
                    console.log('Request failed:', error);
                });
            x.disabled = true;
            x.classList.remove('bg-[color:var(--violet)]')
            x.classList.remove('text-white')
            x.classList.add('bg-white')
            x.classList.add('text-[color:var(--violet)]')
            x.innerHTML = "<p class='text-xs'>Telah ditambahkan</p>"
        });
    });
</script>
<script src="<?php echo BASE_URL; ?>/public/js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>

</html>