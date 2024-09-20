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
    }

    let date = document.getElementById("weather-date");
    setTime(date);
    let temperatureMinimum =
        document.getElementById("weather-temperature-low");
    let temperatureMaximum =
        document.getElementById("weather-temperature-high");
    setTemperature(temperatureMinimum, temperatureMaximum);

    // getWeather();

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
    }

    function getWeather() {
        // let weatherData =
        //     fetch("api.openweathermap.org/data/2.5/weather?q=London,uk&APPID=dd71fabe4a086c73df8e1e9175fe315f");
        // weatherData
        //     .then(response => response.json())
        //     .then(data => {
        //         console.log(data);
        //     });
    }

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

    function setTemperature(minimumElement, maximumElement) {
        // max temp should be at least 3 degrees more than the minimum

        // Use an API to get the current temperature recordings in a particular
        // region
        let minimumTemperature = Math.floor((Math.random() * 15 + 6));
        let maximumTemperature =
            minimumTemperature + Math.floor((Math.random() * 3 + 4));

        minimumElement.textContent = minimumTemperature + "°";
        maximumElement.textContent = maximumTemperature + "°";
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

    3	6	4	3
    1	4	5	2
 */

/* Card category types
    - World
    - UK
    - US
    - Business
    - Science & Tech
    - Climate
    - Politics

    1	3	5	6
    6	7	3	2
 */

/* Animals
    - Bird
    - Tortoise
    - Brown bear
    - Giraffe
    - Red panda
 */
