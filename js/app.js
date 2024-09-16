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
    let date = document.getElementById("weather-date");
    setTime(date);

    // Get the current weather

    // Use an API to get random articles

    function changeVideosTab(tab) {
        let selectedTabIndex;

        for (let i = 0; i < videosTabs.length; i++) {
            if (videosTabs[i] === tab) {
                videosTabs[i].classList.add("videos-tab-selected");
                selectedTabIndex = i;
            } else {
                videosTabs[i].classList.remove("videos-tab-selected");
            }
        }

        let videoGroups = tab.parentElement.nextElementSibling.children;
        console.log(videoGroups);

        for (let i = 0; i < videoGroups.length; i++) {
            if (selectedTabIndex === i) {
                videoGroups[i].style.display = "flex";
            } else {
                videoGroups[i].style.display = "none";
            }
        }

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

    function monthToText(number) {
        switch (number) {
            case 1:
                return "Jan";
                case 2:
                    return "Feb";
                case 3:
                    return "Mar";
                case 4:
                    return "Apr";
                case 5:
                    return "May";
                case 6:
                    return "Jun";
                case 7:
                    return "Jul";
                case 8:
                    return "Aug";
                case 9:
                    return "Sep";
                case 10:
                    return "Oct";
                case 11:
                    return "Nov";
                case 12:
                    return "Dec";
        }
    }

    function setTime(element) {
        let date = new Date();
        element.textContent =
            date.getDate()
            + " "
            + monthToText(date.getMonth() + 1);
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
 */

/* Animals
    - Bird
    - Tortoise
    - Brown bear
    - Giraffe
    - Red panda
 */
