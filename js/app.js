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

    const videosTabs = document.getElementsByClassName("videos-tab-link");
    for (let i = 0; i < videosTabs.length; i++) {
        videosTabs[i].addEventListener("click", function() {
            changeVideosTab(this);
        });
    }

    let invisible = document.getElementsByClassName("invisible");

    for (let i = 0; i < invisible.length; i++) {
        invisible[i].style.display = "none";
        // invisible[i].classList.add("invisible");
    }

    // Get the current date and time

    // Get the current weather

    // Use an API to get random articles

    function changeVideosTab(tab) {
        /*
            #videos-content
                #videos-tabs
                    .videos-tab-link
                #videos-list
                    #videos-list-latest
                        article.article-video
                        // ...
                    #videos-list-elections
                    #videos-list-conflicts
                    #videos-list-explainers
                    #videos-list-interviews
         */

        for (let i = 0; i < videosTabs.length; i++) {
            if (videosTabs[i] === tab) {
                videosTabs[i].classList.add("videos-tab-selected");
            } else {
                videosTabs[i].classList.remove("videos-tab-selected");
            }
        }

        // Get the index of the tab pressed in its parent (#videos-tabs)
        // Get the next sibling of the parent (#videos-list)
        // Loop through all children of #videos-list
        // Use the index to make the relevant section visible
        // Make the other sections invisible
    }

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
    - Giraffe
    - Red panda
 */
