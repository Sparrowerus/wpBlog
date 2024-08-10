"use strict";

document.addEventListener('DOMContentLoaded', function() {
    const burgerMenu = document.querySelector(".burger-menu"),
        burgerButton = document.querySelector(".burger-menu-icon"),
        burgerClose = document.querySelector(".close-burger");
    burgerButton.addEventListener("click", () => {
        burgerMenu.classList.add("active");
    }),
        burgerClose.addEventListener("click", () => {
            burgerMenu.classList.remove("active");
        });

    document.querySelectorAll(".popup").forEach((popup) => {
        popup.querySelectorAll(".close-popup").forEach((button) =>
            button.addEventListener("click", () =>
                (function closePopup(popup) {
                    popup.classList.remove("active");
                })(popup)
            )
        );
    });

    const searchButton = document.querySelector(".open-search"),
        searchPopup = document.querySelector(".popup.search-popup");
    searchPopup &&
    searchButton.addEventListener("click", (e) => {
        e.preventDefault(), searchPopup.classList.add("active");
    });
});