document.addEventListener("DOMContentLoaded", function () {
    const burger = document.getElementById("burger");
    const navList = document.getElementById("navList");
    const nav = document.getElementById("nav");
  
    if (burger && navList) {
      burger.addEventListener("click", function () {
        burger.classList.toggle("active");
        navList.classList.toggle("active");
        nav.classList.toggle("active");
      });
    }
});
  