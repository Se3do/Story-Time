$(".nav-toggle").click(function (e) {
  e.preventDefault();
  $("html").toggleClass("openNav");
  $(".nav-toggle").toggleClass("active");
});

document.addEventListener("DOMContentLoaded", function () {
  const mobileScreen = window.matchMedia("(max-width: 990px)");

  document
    .querySelectorAll(".dashboard-nav-dropdown-toggle")
    .forEach(function (toggle) {
      toggle.addEventListener("click", function () {
        const dropdown = this.closest(".dashboard-nav-dropdown");
        dropdown.classList.toggle("show");

        dropdown
          .querySelectorAll(".dashboard-nav-dropdown")
          .forEach(function (subDropdown) {
            subDropdown.classList.remove("show");
          });

        dropdown.parentNode
          .querySelectorAll(".dashboard-nav-dropdown")
          .forEach(function (sibling) {
            if (sibling !== dropdown) {
              sibling.classList.remove("show");
            }
          });
      });
    });

  document.querySelector(".menu-toggle").addEventListener("click", function () {
    if (mobileScreen.matches) {
      document.querySelector(".dashboard-nav").classList.toggle("mobile-show");
    } else {
      document
        .querySelector(".dashboard")
        .classList.toggle("dashboard-compact");
    }
  });
});
