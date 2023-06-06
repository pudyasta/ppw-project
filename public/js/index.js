const navbarToggle = document.querySelector(".collapse-btn");
const navCollapse = document.querySelector(".nav-collapse");

// Navbar Collapse
navbarToggle.addEventListener("click", (e) => {
  navCollapse.classList.toggle("active");
});

navCollapse.addEventListener("mouseover", (e) => {
  navCollapse.classList.add("active");
});

document.addEventListener("click", (e) => {
  const clickover = e.target;
  var navbarCollapse = document.querySelector(".nav-collapse");
  var isOpened = navbarCollapse.classList.contains("active");
  if (
    isOpened &&
    !clickover.classList.contains("collapse-btn") &&
    !navbarCollapse.contains(clickover)
  ) {
    document.querySelector(".nav-collapse").classList.remove("active");
  }
});

// onMouseEnter={() => setScale(true)}
// onMouseLeave={() => setScale(false)}
// onLoad={() => <p>loading....</p>}
// src={src}
// fill
// style={{ objectFit: "cover" }}
// alt={alt}
// className={
//   scale
//     ? "scale-125 duration-500"
//     : "scale-100 duration-500" + "  relative"
// }
