document.addEventListener("DOMContentLoaded", function() {
    // Toggle dropdown icon
    // const moreDropdown = document.getElementById("nav-top-more")
    const moreListItem = document.getElementsByClassName("nav-item-end")[0];
    const moreDropdownIcon =
        moreListItem.getElementsByClassName("fa-angle-down")[0];
    moreListItem.addEventListener("click", toggleMoreDropdown);

    const loadMoreButtons = document.getElementsByClassName("button-load-more");
    for (let i = 0; i < loadMoreButtons.length; i++) {
        loadMoreButtons[i].addEventListener("click", function() {
            loadMoreArticles(this);
        });
    }

    // Get the current date and time

    // Get the current weather

    // Use an API to get random articles

    function loadMoreArticles(button) {
        let nextArticles = button.parentElement.nextElementSibling;
        button.remove();

        if (
            nextArticles !== undefined
            && nextArticles.classList.contains("hidden")
        ) {
            nextArticles.classList.remove("hidden");
        }
    }

    // Change to toggle using rotation instead of an immediate change
    // Edit the fontawesome CSS classes and use transitions to achieve this
    function toggleMoreDropdown() {
        // moreDropdown.classList.toggle("hidden");
        moreDropdownIcon.classList.toggle("fa-angle-down");
        moreDropdownIcon.classList.toggle("fa-angle-up");
    }
});

/* Cards format types
    - Live: Red
    - Breaking: Yellow
    - Eyewitness: Blue
    - Analysis: Magenta
    - Podcast: Cyan
    - Explainer: Green
 */

/* Card category types
    - World
    - UK
    - US
    - Business
    - Science & Tech
    - Climate
    - Politics

    7	5	4	5
 */

/* Animals
    - Bird
    - Tortoise
    - Brown bear
    - Komodo dragon
 */
