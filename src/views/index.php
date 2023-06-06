<?php
$data = [
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


<div class="head">
  <a href="#">bantuan</a>
  <a href="#">bahasa indonesia</a>
</div>

<nav class="drop-shadow-md">
  <div class="nav-head nav-desk">
    <div class="brand">
      <a href="/">
        <img class="brand-img" src="../public/assets/1.png" alt="" />
      </a>
      <form action="" class="relative">
        <input class="search" type="text" placeholder="Lagi cari apa nich kak?" />
        <button class="absolute top-0 bottom-0 bg-transparent border border-0 right-[20px]"><img class="w-6" src="../public/assets/icon/search.png" alt="" srcset=""></button>

      </form>
    </div>
    <div class="link">
      <a href="#" class="nav-link">
        <img src="../public/assets/icon/shopping_cart.png" class="m-auto" alt="" />
        <p>keranjang</p>
      </a>
      <a href="#" class="nav-link">
        <img src="../public/assets/icon/heart_plus.png" class="m-auto" alt="" />
        <p>Favorit</p>
      </a>
      <a href="#" class="nav-link m-auto">
        <img src="../public/assets/icon/forum.png" class="m-auto" alt="" />
        <p>pesan masuk</p>
      </a>
      <a href="<?php echo BASE_URL; ?>/user/signin">
        <button class="btn-violet-outlined">jadi seller</button>
      </a>
    </div>
  </div>
  <div class="nav-cat">
    <a href="">pakaian</a>
    <a href="">aksesoris</a>
    <a href="">makanan</a>
    <a href="">minuman</a>
    <a href="">tas</a>
    <a href="">tumblr</a>
    <a href="">stiker & poster</a>
  </div>
  <div class="nav-mob">
    <button href="" class="collapse-btn">
      <img class="collapse-btn" src="../public/assets/icon/menu.png" alt="" width="30px" srcset="" />
    </button>
    <img src="../public/assets/1.png" alt="" width="100" />
    <a href="">
      <img src="../public/assets/icon/shopping_cart.png" alt="" width="30px" srcset="" />
    </a>
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
<!-- Jumbotron -->
<div id="carouselExampleIndicators" class="relative " data-te-carousel-init data-te-carousel-slide>
  <!--Carousel indicators-->
  <div class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0" data-te-carousel-indicators>
    <button type="button" data-te-target="#carouselExampleIndicators" data-te-slide-to="0" data-te-carousel-active class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent md:block hidden  bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-te-target="#carouselExampleIndicators" data-te-slide-to="1" class=" md:block hidden mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none" aria-label="Slide 2"></button>
    <button type="button" data-te-target="#carouselExampleIndicators" data-te-slide-to="2" class="md:block hidden mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none" aria-label="Slide 3"></button>
  </div>

  <!--Carousel items-->
  <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
    <!--First item-->
    <div class="relative float-left -mr-[100%] w-full  transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item data-te-carousel-active>
      <img src="../public/assets/banner/carousel/1.png" class="h-full min-h-[15vh]  max-h-[60vh]  object-fill  block w-full" alt="Wild Landscape" />
    </div>
    <!--Second item-->
    <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item>
      <img src="../public/assets/banner/carousel/2.png" class="min-h-[15vh]  max-h-[60vh]  object-fill block w-full" alt="Camera" />
    </div>
    <!--Third item-->
    <div class="relative float-left -mr-[100%] hidden  w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item>
      <img src="../public/assets/banner/carousel/3.png" class="min-h-[15vh]  max-h-[60vh]  object-fill  block w-full" alt="Exotic Fruits" />
    </div>
  </div>

  <!--Carousel controls - prev item-->
  <button class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-te-target="#carouselExampleIndicators" data-te-slide="prev">
    <span class="inline-block h-8 w-8">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>
    </span>
    <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
  </button>
  <!--Carousel controls - next item-->
  <button class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-te-target="#carouselExampleIndicators" data-te-slide="next">
    <span class="inline-block h-8 w-8">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
      </svg>
    </span>
    <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
  </button>
</div>

<div class="xl:px-32 px-[20px] w-full sm:py-16 pt-5">
  <h2 class="md:text-3xl text-xl font-medium">Kategori</h2>
  <div class="grid w-full md:grid-cols-6 md:grid-rows-1 md:gap-10 gap-4  my-5  relative ">
    <div class="md:grid hidden md:grid-rows-5 gap-2">
      <a href="/fashion" class="">
        <span class="md:text-lg text-sm border-[color:var(--violet)] border-2 text-[color:var(--violet)] md:w-full md:py-4  block rounded-lg px-3 font-semibold ">
          Fashion
        </span>
      </a>

    </div>
    <div class="category xl:flex grid lg:grid-cols-6 grid-cols-5   col-span-5 md:gap-5 gap-y-5 gap-x-3">
      <?php foreach ($data as $d) : ?>
        <div class="md:[&:nth-child(n+7)]:hidden  lg:h-full min-h-24 w-full  md:grid-rows-1 grid grid-rows-4 md:text-left text-center md:rounded-xl rounded-md z-0
          ">
          <div class="h-full relative overflow-hidden md:rounded-xl rounded-md row-span-3">
            <a href="/main" class="relative block items-center h-full ">
              <h2 class="absolute top-[40%] text-white  lg:font-semibold font-medium lg:text-2xl xl:text-3xl  z-20 mx-4 capitalize md:block hidden">
                <?php echo $d['name']; ?>
              </h2>
              <div class="h-full relative  before:content-[''] before:h-full before:w-full before:bg-black/25 md:before:absolute before:top-0 before:left-0 before:z-10 before:block ">
                <img class="h-full w-full absolute top-0 object-cover" src="<?php echo $d['img'] ?>" />
              </div>
            </a>
          </div>
          <div class="h-full">
            <h2 class="relative text-black font-medium lg:text-3xl md:text-2xl sm:text-lg text-xs z-10 capitalize md:hidden block mt-1">
              <?php echo $d['name']; ?>
            </h2>
          </div>
        </div>
      <?php endforeach ?>


    </div>
  </div>
</div>

<section class="xl:px-32 px-[20px] w-full md:py-10 py-5">
  <div class="flex justify-between w-full items-center">

    <h2 class="md:text-3xl text-xl font-medium">Produk Baru</h2>
    <a href="#" class=" md:text-lg text-xs font-semibold text-[color:var(--violet)] ">
      Lihat Produk Lainnya
    </a>
  </div>
  <div class="swiper mySwiper md:py-10 pb-10 pt-4">
    <div class="swiper-wrapper">
      <?php for ($i = 0; $i < 10; $i++) : ?>
        <div class="swiper-slide">
          <div class="md:w-72 w-38 m-2 block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <div class="relative overflow-hidden bg-cover bg-no-repeat" data-te-ripple-init data-te-ripple-color="light">
              <img class="rounded-t-lg object-cover w-full" src="../public/assets/items/1.png" alt="" />
              <a href="#!">
                <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
              </a>
            </div>
            <div class="md:p-6 p-3">
              <h5 class="mb-2 md:text-lg text-xs font-semibold leading-tight text-neutral-800 dark:text-neutral-50">
                Jersey Home FC Barcelona 2022 / 2023
              </h5>
              <h4 class="mb-2 md:text-lg text-xs font-semibold text-[color:var(--violet)] leading-tight">
                Rp 110.000,00
              </h4>
              <div class="md:flex mb-2 justify-between">
                <div class="mb-2 sm:mb-0 store flex items-center gap-2 md:text-lg text-xs"> <span><img src="../public/assets/icon/storefront.png" alt="" srcset=""></span>
                  <p class="md:text-lg text-xs">Ciputat Store</p>
                </div>
                <div class="rate flex items-center gap-2 md:text-lg text-xs"><span><img src="../public/assets/icon/star_rate.png" alt="" srcset=""></span> 4 / 5</div>
              </div>

              <div class="flex mb-2 gap-2 items-center">
                <img src="../public/assets/icon/alarm.png" alt="" srcset="">
                <h5 class=" md:text-base text-xs font-semibold leading-tight text-neutral-800 dark:text-neutral-50">
                  12 Juni 2023
                </h5>
              </div>

              <button type="button" class="w-full inline-block rounded bg-[color:var(--violet)] px-6 pb-2 pt-2.5  font-medium capitalize leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-[color:var(--violet)]-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-[color:var(--violet)]-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-[color:var(--violet)]-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                <p class="text-xs">

                  Tambah <span class="md:inline hidden">ke Keranjang</span>
                </p>
              </button>
            </div>
          </div>
        </div>
      <?php endfor ?>
    </div>

    <div class="swiper-pagination "></div>
  </div>

</section>

<div class="daftar">
  <img src="../public/assets/banner/foot.png" alt="" />
</div>

<footer class="xl:px-32 px-[20px] w-full md:py-10 py-5 flex justify-between flex-wrap gap-3">
  <div style=" margin-top: 20px">
    <img src="../public/assets/3.png" alt="" class="md:w-36 w-28" />
    <h4 class="my-5 text-md capitalize md:text-lg font-semibold text-[color:var(--footgrey)] ">tentang jajan</h4>
    <div class="about-link">
      <a href="" class="md:text-lg text-sm">Permasalahan Seputar Layanan</a>
      <a href="" class="md:text-lg text-sm">Aturan Penggunaan</a>
      <a href="" class="md:text-lg text-sm">Syarat dan Ketentuan</a>
      <a href="" class="md:text-lg text-sm">Promo</a>
      <a href="" class="md:text-lg text-sm">Kebijakan Privasi</a>
      <a href="" class="md:text-lg text-sm">Tanya Jawab</a>
    </div>
  </div>
  <div class="navigation" style="margin-top: 20px">
    <h4 class="my-5 text-md capitalize md:text-lg font-semibold text-[color:var(--footgrey)]">Navigasi Pintar</h4>
    <div class="about-link">
      <a href="" class="md:text-lg text-sm">Beranda</a>
      <a href="" class=" md:text-lg text-sm">Kategori</a>
      <a href="" class="md:text-lg text-sm">Rekomendasi</a>
      <a href="" class=" md:text-lg text-sm">Promo</a>
    </div>
  </div>
  <div class="contact" style="margin-top: 20px">
    <h4>

      Mempunyai masalah saat menggunakan layanan kami? <br> Hubungi jajan
      customer service di email berikut
    </h4>
    <h4 class="foot-header lowercase font-medium my-10 break-words">
      jajandeveloperteam@mail.ugm.ac.id
    </h4>
    <p>Temukan kami di sosial media kesayangan kamu</p>
    <div class="icons my-8">
      <a href=""><img src="../public/assets/icon/ig.png" alt="" srcset="" /></a>
      <a href=""><img src="../public/assets/icon/fb.png" alt="" srcset="" /></a>
      <a href=""><img src="../public/assets/icon/tw.png" alt="" srcset="" /></a>
      <a href=""><img src="../public/assets/icon/yt.png" alt="" srcset="" /></a>
    </div>
    <p style="color: var(--violet); font-weight: 500">
      Copyright jajan developer team 2023
    </p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
  let swiper = new Swiper(".mySwiper", {

    breakpoints: {
      "@0.00": {
        slidesPerView: 2,
        spaceBetween: 1,
        slidesPerGroup: 2,
      },

      "@1.00": {
        slidesPerView: 3.5,
        spaceBetween: 40,
        slidesPerGroup: 3.5,
      },
      "@1.50": {
        slidesPerView: 4.5,
        spaceBetween: 50,
        slidesPerGroup: 4.5,
      },
      "@1.75": {
        slidesPerView: 5.5,
        spaceBetween: 50,
        slidesPerGroup: 5.5,
      },
    },

    // centeredSlides: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
</script>
<script src="../public/js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>

</html>