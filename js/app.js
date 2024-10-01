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

    setMainArticleImage();
    setOtherArticleImages();
    setPodcastsArticleImages();
    setSportsArticleImages();
    setWeather();
    // setRandomArticleImages();

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

    function geoLocationAccepted(position) {
        let latitude = position.coords.latitude;
        let longitude = position.coords.longitude;

        let request = fetch("https://api.openweathermap.org/data/2.5/weather?lat="
            + latitude + "&lon=" + longitude
            + "&appid=938c18d749049bb86f26fddf506aebf3&units=metric");

        request
            .then(response => response.json())
            .then(data => {
                console.log("Using “" + data["name"] + "” for weather data");
                let temperatureElements = document.getElementsByClassName("weather-temperature");
                temperatureElements[0].textContent =
                    Math.floor(data["main"]["temp_max"]) + "°";
                temperatureElements[1].textContent =
                    Math.floor(data["main"]["temp_min"]) + "°";
            });
    }

    function geoLocationBlocked() {
        // Geolocation permission blocked or browser does not have the feature
        let request = fetch("https://api.openweathermap.org/data/2.5/weather?lat=29.431585&lon=106.912254&appid=938c18d749049bb86f26fddf506aebf3&units=metric");

        request
            .then(response => response.json())
            .then(data => {
                console.log("Using “Chonqing” for weather data");
                let temperatureElements = document.getElementsByClassName("weather-temperature");
                temperatureElements[0].textContent =
                    Math.floor(data["main"]["temp_max"]) + "°";
                temperatureElements[1].textContent =
                    Math.floor(data["main"]["temp_min"]) + "°";
            });
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
    
    function setMainArticleImage() {
        // All image elements should have a specific class name
        let articleCardImage = document.getElementById("stories-top-primary-article-image");
        fetch("https://api.unsplash.com/photos/random?client_id=0oQ2Z0zwJUIn5eqNLJWRESad5k5-bnIFdN_K74FjkfA&topic=scam,software")
            .then(response => response.json())
            .then(data => {
                console.log(articleCardImage);
                articleCardImage.style.backgroundImage = "url('" + data.urls.regular + "')";
                console.log(data.urls.regular);
                // "url('" + articles[i].src + "')";
        });
    }

    function setOtherArticleImages() {
        let otherArticleImages = document.getElementsByClassName("stories-top-other-article-image");
        console.log(otherArticleImages)

        for (let i = 0; i < otherArticleImages.length; i++) {
           console.log(otherArticleImages[i].style.backgroundImage);
        }
    }

    function setPodcastsArticleImages() {
        let podcastArticleImages = document.getElementsByClassName("podcasts-article-image");

        for (let i = 0; i < podcastArticleImages.length; i++) {
            // fetch("https://api.unsplash.com/photos/random?client_id=0oQ2Z0zwJUIn5eqNLJWRESad5k5-bnIFdN_K74FjkfA")
            //     .then(response => response.json())
            //     .then(data => {
            //         podcastArticleImages[i].style.backgroundImage = data.urls.regular;
            //         podcastArticleImages[i].style.background = data.urls.regular;
            //         console.log(data.urls.regular);
            // });
        }
    }

    function setSportsArticleImages() {
        let articles = document.getElementsByClassName("sports-article-image");

        for (let i = 0; i < articles.length; i++) {
            articles[i].style.backgroundImage = "url('./img/sports-image-0" + (i + 1) + ".jpg";
        }
    }

    function setTime(element) {
        let date = new Date();
        element.textContent =
            date.getDate()
            + " "
            + monthToText(date.getMonth() + 1);
    }

    function setWeather() {
        // Use the user's current location to get the current temperature,
        // otherwise assume they live in London
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                console.log("Geolocation accepted");
                geoLocationAccepted(position);
            }, function (error) {
                console.log("Geolocation blocked");
                geoLocationBlocked();
            });
        } else {
            console.log("Geolocation unavailable");
            geoLocationBlocked();
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
 */

/* Animals
    - Bird
    - Tortoise
    - Brown bear
    - Giraffe
    - Red panda
 */
