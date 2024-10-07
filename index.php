<!DOCTYPE HTML>
<html lang="en-GB">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="author" content="Lyndon Mykal Panton" />
        <meta name="description" content="A personal portfolio page" />
        <meta name="keywords" content="HTML, CSS, JS, Homepage, Portfolio" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0,
            user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
        <title>News website</title>
        <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
        <!-- External icons -->
        <script
                src="https://kit.fontawesome.com/3556eab2e4.js"
                crossorigin="anonymous">
        </script>
        <!-- External font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=SUSE:wght@100..800&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="./css/styles.css" />
    <body>
        <header>
            <div id="blank-space-top"></div>
            <div id="header-top">
                <div id="header-top-left">
                    <h1 id="title">
                        <?php
                            echo "News Website";
                        ?>
                    </h1>
                </div>
                <div id="header-top-right">
                    <div id="weather">

                        <div id="weather-date">{ date }</div>
                        <i id="weather-icon" class="fa-solid fa-cloud"></i>
                        <div id="weather-temperatures">
                            <p id="weather-temperature-high"
                               class="weather-temperature">
                                <i class="fa-solid fa-spinner"></i>
                            </p>
                            <p id="weather-temperature-low"
                               class="weather-temperature">
                                <i class="fa-solid fa-spinner"></i>
                            </p>
                        </div>
                    </div>
                    <button id="button-live">Watch Live</button>
                </div>
            </div>
            <nav id="nav-top">
                <ul id="nav-top-main">
                    <li class="nav-item-top">Home</li>
                    <li class="nav-item-top">UK</li>
                    <li class="nav-item-top">Politics</li>
                    <li class="nav-item-top">World</li>
                    <li class="nav-item-top">Climate</li>
                    <li class="nav-item-top">Science & Tech</li>
                    <li class="nav-item-top">Business</li>
                    <li class="nav-item-top">Ents & Arts</li>
                    <li class="nav-item-top">Offbeat</li>
                    <li class="nav-item-top nav-item-end">
                        More
                        <i id="dropdown-icon" class="fa-solid fa-angle-down"></i>
                    </li>
                </ul>
<!--                <ul id="nav-top-more" class="hidden">-->
<!--                    <li class="nav-item-top-more">Travel</li>-->
<!--                    <li class="nav-item-top-more">Analysis</li>-->
<!--                    <li class="nav-item-top-more">Data & Forensics</li>-->
<!--                    <li class="nav-item-top-more">Videos</li>-->
<!--                    <li class="nav-item-top-more">Programmes</li>-->
<!--                    <li class="nav-item-top-more">Weather</li>-->
<!--                </ul>-->
            </nav>
        </header>
        <main>
            <section id="stories-top" class="main-section">

                <h2 class="main-section-heading">Top Stories</h2>
                <section id="stories-top-main">
                    <article id="stories-top-primary"
                             class="stories-top-highlight
                                article-card">
                        <div id="stories-top-primary-article-image"
                            class="article-card-image">

                        </div>
                        <div id="stories-top-primary-article-content">
                            <div class="stories-top-article-tags">
                                <div class="stories-top-article-format">
                                    <button class="article-tag article-tag-red">Live</button>
                                    <button class="article-tag article-tag-black">Breaking</button>
                                </div>
                                <div
                                        class="stories-top-article-category
                                            fake-link fake-link-main">
                                    World
                                </div>
                            </div>
                            <p id="stories-top-primary-article-description"
                                    class="fake-link">
                                <a href="https://www.wired.com/2011/09/mf-scareware/"
                                    target="_blank">
                                    How Two Scammers Built an Empire Hawking
                                    Sketchy Software
                                </a>
                            </p>
                        </div>
                    </article>
                    <article class="stories-top-other-article article-card">
                        <div class="stories-top-other-article-image">

                        </div>
                        <section class="stories-top-other-article-content">
                            <div class="stories-top-other-article-tags">
                                <div class="stories-top-other-article-format">
                                    <button class="article-tag article-tag-yellow">Breaking</button>
                                </div>
                                <div
                                        class="stories-top-other-article-category fake-link">
                                    World
                                </div>
                            </div>

                            <p
                                    class="stories-top-other-article-description fake-link">
                                <a href="https://maisonneuve.org/article/2021/04/12/genetic-mapping/"
                                   target="_blank">
                                    Genetic Mapping
                               </a>
                            </p>
                        </section>
                    </article>
                </section>
                <section id="stories-top-sub">
                    <section class="stories-top-article-other-group">
                        <article class="stories-top-other-article article-card">
                            <div class="stories-top-other-article-image">

                            </div>
                            <section class="stories-top-other-article-content">
                                <div class="stories-top-other-article-tags">
                                    <div class="stories-top-other-article-format">
                                        <button class="article-tag article-tag-blue">Eyewitness</button>
                                    </div>
                                    <div
                                            class="stories-top-other-article-category fake-link">
                                        World
                                    </div>
                                </div>

                                <p
                                        class="stories-top-other-article-description fake-link">
                                    <a href="https://www.newyorker.com/magazine/2012/12/17/operation-delirium"
                                        target="_blank">
                                        Operation Delirium
                                    </a>
                                </p>
                            </section>
                        </article>
                        <article class="stories-top-other-article article-card">
                            <div class="stories-top-other-article-image">

                            </div>
                            <section class="stories-top-other-article-content">
                                <div class="stories-top-other-article-tags">
                                    <div class="stories-top-other-article-format">
                                        <button class="article-tag article-tag-green">Explainer</button>
                                    </div>
                                    <div
                                            class="stories-top-other-article-category fake-link">
                                        US
                                    </div>
                                </div>

                                <p
                                        class="stories-top-other-article-description fake-link">
                                    <a href="https://www.foodandwine.com/desserts/cake/brief-history-birthday-cake"
                                        target="_blank">
                                        Fiction Pick of the Week: &quot;Birthday
                                        Cake&quot;
                                    </a>
                                </p>
                            </section>
                        </article>
                        <article class="stories-top-other-article article-card">
                            <div class="stories-top-other-article-image">

                            </div>
                            <section class="stories-top-other-article-content">
                                <div class="stories-top-other-article-tags">
                                    <div class="stories-top-other-article-format">
                                        <button class="article-tag article-tag-magenta">Analysis</button>
                                    </div>
                                    <div
                                            class="stories-top-other-article-category fake-link">
                                        Science & Tech
                                    </div>
                                </div>

                                <p
                                        class="stories-top-other-article-description fake-link">
                                    <a href="https://undark.org/2020/11/25/complicated-rise-of-eric-feigl-ding/"
                                        target="_blank">
                                        Covid's Cassandra: The Swift, Complicated
                                        Rise of Eric Feigl-Ding
                                    </a>
                                </p>
                            </section>
                        </article>
                        <article class="stories-top-other-article article-card">
                            <div class="stories-top-other-article-image">

                            </div>
                            <section class="stories-top-other-article-content">
                                <div class="stories-top-other-article-tags">
                                    <div class="stories-top-other-article-format">
                                        <button class="article-tag article-tag-blue">Explainer</button>
                                    </div>
                                    <div
                                            class="stories-top-other-article-category fake-link">
                                        Climate
                                    </div>
                                </div>

                                <p
                                        class="stories-top-other-article-description fake-link">
                                    <a href="https://money.cnn.com/magazines/fortune/fortune_archive/1994/12/12/80049/index.htm"
                                        target="_blank">
                                        What's So Effective About Stephen Covey?
                                    </a>
                                </p>
                            </section>
                        </article>
                    </section>
                    <section class="stories-top-article-other-group">
                        <article class="stories-top-other-article article-card">
                            <div class="stories-top-other-article-image">

                            </div>
                            <section class="stories-top-other-article-content">
                                <div class="stories-top-other-article-tags">
                                    <div class="stories-top-other-article-format">
                                        <button class="article-tag article-tag-red">Live</button>
                                    </div>
                                    <div
                                            class="stories-top-other-article-category fake-link">
                                        Climate
                                    </div>
                                </div>

                                <p
                                        class="stories-top-other-article-description fake-link">
                                    <a href="https://www.bostonglobe.com/magazine/2016/03/10/where-did-isis-come-from-the-story-starts-here/eOHwJQgnZPNj8SE91Vw5hK/story.html"
                                        target="_blank">
                                        Where Did ISIS Come From? The Story Starts
                                        Here.
                                    </a>
                                </p>
                            </section>
                        </article>
                        <article class="stories-top-other-article article-card">
                            <div class="stories-top-other-article-image">

                            </div>
                            <section class="stories-top-other-article-content">
                                <div class="stories-top-other-article-tags">
                                    <div class="stories-top-other-article-format">
                                        <button class="article-tag article-tag-magenta">Analysis</button>
                                    </div>
                                    <div
                                            class="stories-top-other-article-category fake-link">
                                        Politics
                                    </div>
                                </div>

                                <p
                                        class="stories-top-other-article-description fake-link">
                                    <a href="https://www.museomagazine.com/ZION-ON-THE-PRAIRIE"
                                        target="_blank">
                                        Zion on the Prairie
                                    </a>
                                </p>
                            </section>
                        </article>
                        <article class="stories-top-other-article article-card">
                            <div class="stories-top-other-article-image">

                            </div>
                            <section class="stories-top-other-article-content">
                                <div class="stories-top-other-article-tags">
                                    <div class="stories-top-other-article-format">
                                        <button class="article-tag article-tag-cyan">Podcast</button>
                                    </div>
                                    <div
                                            class="stories-top-other-article-category fake-link">
                                        US
                                    </div>
                                </div>

                                <p
                                        class="stories-top-other-article-description fake-link">
                                    <a href="https://nymag.com/arts/popmusic/features/55031/"
                                        target="_blank">
                                        God & Worshipper: A Rock-and-Roll Love
                                        Story, of Sorts
                                    </a>
                                </p>
                            </section>
                        </article>
                        <article class="stories-top-other-article article-card">
                            <div class="stories-top-other-article-image">

                            </div>
                            <section class="stories-top-other-article-content">
                                <div class="stories-top-other-article-tags">
                                    <div class="stories-top-other-article-format">
                                        <button class="article-tag article-tag-yellow">Breaking</button>
                                    </div>
                                    <div
                                            class="stories-top-other-article-category fake-link">
                                        UK
                                    </div>
                                </div>

                                <p
                                        class="stories-top-other-article-description fake-link">
                                    <a href="https://www.theatlantic.com/magazine/archive/2009/01/the-founders-great-mistake/307210/"
                                       target="_blank">
                                        The Founders’ Great Mistake
                                    </a>
                                </p>
                            </section>
                        </article>
                    </section>
                </section>
            </section>

            <section id="stories-elections" class="main-section">
                <h2 class="main-section-heading">Elections</h2>

                <section id="stories-elections-articles">
                    <section>
                        <section class="stories-elections-articles-group">
                            <article class="election-article article-card">
                                <div class="election-article-image">

                                </div>
                                <section class="election-article-content">
                                    <div class="election-article-tags">
                                        <div class="election-article-format">
                                            <button class="article-tag article-tag-yellow">Breaking</button>
                                        </div>
                                        <div
                                                class="election-article-category fake-link">
                                            Politics
                                        </div>
                                    </div>

                                    <p
                                        class="election-article-description fake-link">
                                        <a href="https://www.vanityfair.com/style/2018/12/jills-miami-real-estate-extortion"
                                           target="_blank">
                                            How a Real-Estate Scuffle Turned
                                            into a True Tale of Miami Vice
                                        </a>
                                    </p>
                                </section>
                            </article>

                            <article class="election-article article-card">
                                <div class="election-article-image">

                                </div>
                                <section class="election-article-content">
                                    <div class="election-article-tags">
                                        <div class="election-article-format">
                                            <button class="article-tag article-tag-green">Explainer</button>
                                        </div>
                                        <div
                                                class="election-article-category fake-link">
                                            Business
                                        </div>
                                    </div>

                                    <p
                                        class="election-article-description fake-link">
                                        <a href="https://www.nytimes.com/2017/10/11/magazine/why-are-more-american-teenagers-than-ever-suffering-from-severe-anxiety.html"
                                           target="_blank">
                                            Why Are More American Teenagers Than
                                            Ever Suffering From Severe Anxiety?
                                        </a>
                                    </p>
                                </section>
                            </article>

                            <article class="election-article article-card">
                                <div class="election-article-image">

                                </div>
                                <section class="election-article-content">
                                    <div class="election-article-tags">
                                        <div class="election-article-format">
                                            <button class="article-tag article-tag-green">Explainer</button>
                                        </div>
                                        <div
                                                class="election-article-category fake-link">
                                            UK
                                        </div>
                                    </div>

                                    <p
                                        class="election-article-description fake-link">
                                        <a href="https://www.latimes.com/local/la-me-1120-prison-hospice-html-htmlstory.html"
                                           target="_blank">
                                            Care and Atonement — On a prison hospice in California.
                                        </a>
                                    </p>
                                </section>
                            </article>

                            <article class="election-article article-card">
                                <div class="election-article-image">

                                </div>
                                <section class="election-article-content">
                                    <div class="election-article-tags">
                                        <div class="election-article-format">
                                            <button class="article-tag article-tag-magenta">Analysis</button>
                                        </div>
                                        <div
                                                class="election-article-category fake-link">
                                            Climate
                                        </div>
                                    </div>

                                    <p
                                        class="election-article-description fake-link">
                                        <a href="https://www.theatlantic.com/magazine/archive/2019/11/jimmy-hoffa-my-stepfather-and-me/598372/"
                                           target="_blank">
                                            My Family Story of Love, the Mob,
                                            and Government Surveillance
                                        </a>
                                    </p>
                                </section>
                            </article>
                        </section>

                        <button class="button-load-more">Load More</button>
                    </section>
                    <section class="hidden">
                        <section
                                class="stories-elections-articles-group">

                            <article class="election-article article-card">
                                <div class="election-article-image">

                                </div>
                                <section class="election-article-content">
                                    <div class="election-article-tags">
                                        <div class="election-article-format">
                                            <button class="article-tag article-tag-blue">Eyewitness</button>
                                        </div>
                                        <div
                                                class="election-article-category fake-link">
                                            Science & Tech
                                        </div>
                                    </div>

                                    <p
                                        class="election-article-description fake-link">
                                        <a href="https://www.newyorker.com/magazine/2017/07/31/sadiq-khan-takes-on-brexit-and-terror"
                                           target="_blank">
                                            Sadiq Khan takes on Brexit and Terror
                                        </a>
                                    </p>
                                </section>
                            </article>

                            <article class="election-article article-card">
                                <div class="election-article-image">

                                </div>
                                <section class="election-article-content">
                                    <div class="election-article-tags">
                                        <div class="election-article-format">
                                            <button class="article-tag article-tag-magenta">Analysis</button>
                                        </div>
                                        <div
                                                class="election-article-category fake-link">
                                            UK
                                        </div>
                                    </div>

                                    <p
                                        class="election-article-description fake-link">
                                        <a href="https://www.cornwalllive.com/news/cornwall-news/depressed-24-year-old-gamer-9599027"
                                            target="_blank">
                                            The story behind an online gamer’s suicide.
                                        </a>
                                    </p>
                                </section>
                            </article>

                            <article class="election-article article-card">
                                <div class="election-article-image">

                                </div>
                                <section class="election-article-content">
                                    <div class="election-article-tags">
                                        <div class="election-article-format">
                                            <button class="article-tag article-tag-magenta">Analysis</button>
                                        </div>
                                        <div
                                                class="election-article-category fake-link">
                                            World
                                        </div>
                                    </div>

                                    <p
                                        class="election-article-description fake-link">
                                        <a href="https://www.vikingbags.com/blogs/news/how-motorcycle-clubs-make-money?srsltid=AfmBOoqW9_V24HHbrxXu8ZGkMkg1kZDWEmKbAGz0HK3Wu33Vk7Em7t-_"
                                           target="_blank">
                                            How the biker gang makes money.
                                        </a>
                                    </p>
                                </section>
                            </article>

                            <article class="election-article article-card">
                                <div class="election-article-image">

                                </div>
                                <section class="election-article-content">
                                    <div class="election-article-tags">
                                        <div class="election-article-format">
                                            <button class="article-tag article-tag-yellow">Breaking</button>
                                        </div>
                                        <div
                                                class="election-article-category fake-link">
                                            Business
                                        </div>
                                    </div>

                                    <p
                                        class="election-article-description fake-link">
                                        <a href="https://newrepublic.com/article/117519/central-african-republic-conflict-africas-bloodiest-fight"
                                           target="_blank">
                                            A dispatch from the Central African Republic.
                                        </a>
                                    </p>
                                </section>
                            </article>
                        </section>

                        <button class="button-load-more">Load More</button>
                    </section>
                    <section class="hidden">
                        <section
                                class="stories-elections-articles-group">

                            <article class="election-article article-card">
                                <div class="election-article-image">

                                </div>
                                <section class="election-article-content">
                                    <div class="election-article-tags">
                                        <div class="election-article-format">
                                            <button class="article-tag article-tag-cyan">Podcast</button>
                                        </div>
                                        <div
                                                class="election-article-category fake-link">
                                            Business
                                        </div>
                                    </div>

                                    <p
                                        class="election-article-description fake-link">
                                        <a href="https://www.gq.com/story/the-dark-optimism-of-paul-thomas-anderson"
                                            target="_blank">
                                            The Dark Optimism of Paul Thomas
                                            Anderson
                                        </a>
                                    </p>
                                </section>
                            </article>

                            <article class="election-article article-card">
                                <div class="election-article-image">

                                </div>
                                <section class="election-article-content">
                                    <div class="election-article-tags">
                                        <div class="election-article-format">
                                            <button class="article-tag article-tag-yellow">Breaking</button>
                                        </div>
                                        <div
                                                class="election-article-category fake-link">
                                            World
                                        </div>
                                    </div>

                                    <p
                                        class="election-article-description fake-link">
                                        <a href="https://harpers.org/archive/2021/09/bad-news-selling-the-story-of-disinformation/"
                                            target="_blank">
                                            Bade News: Selling the story of
                                            disinformation.
                                        </a>
                                    </p>
                                </section>
                            </article>

                            <article class="election-article article-card">
                                <div class="election-article-image">

                                </div>
                                <section class="election-article-content">
                                    <div class="election-article-tags">
                                        <div class="election-article-format">
                                            <button class="article-tag article-tag-blue">Eyewitness</button>
                                        </div>
                                        <div
                                                class="election-article-category fake-link">
                                            Business
                                        </div>
                                    </div>

                                    <p
                                        class="election-article-description fake-link">
                                        <a href="https://litmagnews.substack.com/p/weve-been-open-to-the-writers-a-chat"
                                            target="_blank">
                                            A Chat with Paula Deitz, Editor of The
                                            Hudson Review
                                        </a>
                                    </p>
                                </section>
                            </article>

                            <article class="election-article article-card">
                                <div class="election-article-image">

                                </div>
                                <section class="election-article-content">
                                    <div class="election-article-tags">
                                        <div class="election-article-format">
                                            <button class="article-tag article-tag-magenta">Analysis</button>
                                        </div>
                                        <div
                                                class="election-article-category fake-link">
                                            UK
                                        </div>
                                    </div>

                                    <p
                                        class="election-article-description fake-link">
                                        <a href="https://prisonjournalismproject.org/2024/02/14/whats-dating-like-in-prison/"
                                           target="_blank">
                                            What's Dating Like in Prison?
                                        </a>
                                    </p>
                                </section>
                            </article>
                        </section>

                        <button class="button-load-more">Load More</button>
                    </section>
                    <section class="hidden">
                        <section
                                class="stories-elections-articles-group">

                            <article class="election-article article-card">
                                <div class="election-article-image">

                                </div>
                                <section class="election-article-content">
                                    <div class="election-article-tags">
                                        <div class="election-article-format">
                                            <button class="article-tag article-tag-green">Explainer</button>
                                        </div>
                                        <div
                                                class="election-article-category fake-link">
                                            US
                                        </div>
                                    </div>

                                    <p
                                        class="election-article-description fake-link">
                                        <a href="https://www.telegraph.co.uk/news/health/11345412/Inside-the-Chinese-boot-camp-treating-Internet-addiction.html"
                                           target="_blank">
                                            Inside the Chinese boot camp
                                            treating Internet addiction
                                        </a>
                                    </p>
                                </section>
                            </article>

                            <article class="election-article article-card">
                                <div class="election-article-image">

                                </div>
                                <section class="election-article-content">
                                    <div class="election-article-tags">
                                        <div class="election-article-format">
                                            <button class="article-tag article-tag-blue">Eyewitness</button>
                                        </div>
                                        <div
                                                class="election-article-category fake-link">
                                            Science & Tech
                                        </div>
                                    </div>

                                    <p
                                        class="election-article-description fake-link">
                                        <a href="https://www.history.com/news/mine-fire-burning-more-50-years-ghost-town"
                                            target="_blank">
                                            This Mine Fire has been Burning for
                                            Over 50 years
                                        </a>
                                    </p>
                                </section>
                            </article>

                            <article class="election-article article-card">
                                <div class="election-article-image">

                                </div>
                                <section class="election-article-content">
                                    <div class="election-article-tags">
                                        <div class="election-article-format">
                                            <button class="article-tag article-tag-cyan">Podcast</button>
                                        </div>
                                        <div
                                                class="election-article-category fake-link">
                                            US
                                        </div>
                                    </div>

                                    <p
                                        class="election-article-description fake-link">
                                        <a href="https://blog.lionsafety.co.uk/blog/ppe-safety-workwear-market-problems/"
                                            target="_blank">
                                            The 7 Biggest Problems in the PPE
                                            Market in 2022
                                        </a>
                                    </p>
                                </section>
                            </article>

                            <article class="election-article article-card">
                                <div class="election-article-image">

                                </div>
                                <section class="election-article-content">
                                    <div class="election-article-tags">
                                        <div class="election-article-format">
                                            <button class="article-tag article-tag-red">Live</button>
                                        </div>
                                        <div
                                                class="election-article-category fake-link">
                                            Science & Tech
                                        </div>
                                    </div>

                                    <p
                                        class="election-article-description fake-link">
                                        <a href="https://www.gq.com/story/the-great-high-school-impostor"
                                            target="_blank">
                                            The Great High School Imposter
                                        </a>
                                    </p>
                                </section>
                            </article>
                        </section>
                    </section>
                </section>
            </section>

            <section id="videos" class="main-section">
                <h2 class="main-section-heading">Videos</h2>

                <section id="videos-content">
                    <ul id="videos-tabs">
                        <li class="videos-tab-link videos-tab-selected">Latest</li>
                        <li class="videos-tab-link">Elections</li>
                        <li class="videos-tab-link">Conflicts</li>
                        <li class="videos-tab-link">Explainers</li>
                        <li class="videos-tab-link">Interviews</li>
                    </ul>
                    <section id="videos-list">
                        <section
                                id="videos-list-latest"
                                class="videos-list-group">
                            <article class="article-video">
                                <video class="article-video-clip" controls>
                                    <source
                                            src="./video/bird-video-1.mp4"
                                            type="video/mp4">
                                </video>

                                <p class="article-video-description">
                                    Crowdsourcing Justice
                                </p>
                            </article>
                            <article class="article-video">
                                <video class="article-video-clip" controls>
                                    <source
                                            src="./video/bird-video-2.mp4"
                                            type="video/mp4">
                                </video>

                                <p class="article-video-description">
                                    The Informants
                                </p>
                            </article>
                            <article class="article-video">
                                <video class="article-video-clip" controls>
                                    <source
                                            src="./video/bird-video-3.mp4"
                                            type="video/mp4">
                                </video>

                                <p class="article-video-description">
                                    Dear Charlie
                                </p>
                            </article>
                            <article class="article-video">
                                <video class="article-video-clip" controls>
                                    <source
                                            src="./video/bird-video-4.mp4"
                                            type="video/mp4">
                                </video>

                                <p class="article-video-description">
                                    Inside the collapse
                                </p>
                            </article>
                        </section>
                        <section
                                id="videos-list-elections"
                                class="videos-list-group invisible">
                            <article class="article-video">
                                <video class="article-video-clip" controls>
                                    <source
                                            src="./video/tortoise-video-1.mp4"
                                            type="video/mp4">
                                </video>

                                <p class="article-video-description">
                                    Reimagining Recreation
                                </p>
                            </article>
                            <article class="article-video">
                                <video class="article-video-clip" controls>
                                    <source
                                            src="./video/tortoise-video-2.mp4"
                                            type="video/mp4">
                                </video>

                                <p class="article-video-description">
                                    The Definition of a Dictionary
                                </p>
                            </article>
                            <article class="article-video">
                                <video class="article-video-clip" controls>
                                    <source
                                            src="./video/tortoise-video-3.mp4"
                                            type="video/mp4">
                                </video>

                                <p class="article-video-description">
                                    The Disappeared
                                </p>
                            </article>
                            <article class="article-video">
                                <video class="article-video-clip" controls>
                                    <source
                                            src="./video/tortoise-video-4.mp4"
                                            type="video/mp4">
                                </video>

                                <p class="article-video-description">
                                    How They Did It
                                </p>
                            </article>
                        </section>
                        <section
                                id="videos-list-conflicts"
                                class="videos-list-group invisible">
                            <article class="article-video">
                                <video class="article-video-clip" controls>
                                    <source
                                            src="./video/bear-video-1.mp4"
                                            type="video/mp4">
                                </video>

                                <p class="article-video-description">
                                    Justice
                                </p>
                            </article>
                            <article class="article-video">
                                <video class="article-video-clip" controls>
                                    <source
                                            src="./video/bear-video-2.mp4"
                                            type="video/mp4">
                                </video>

                                <p class="article-video-description">
                                    How the IRS Was Gutted
                                </p>
                            </article>
                            <article class="article-video">
                                <video class="article-video-clip" controls>
                                    <source
                                            src="./video/bear-video-3.mp4"
                                            type="video/mp4">
                                </video>

                                <p class="article-video-description">
                                    First Lost, Then Murdered
                                </p>
                            </article>
                            <article class="article-video">
                                <video class="article-video-clip" controls>
                                    <source
                                            src="./video/bear-video-4.mp4"
                                            type="video/mp4">
                                </video>

                                <p class="article-video-description">
                                    Here & Gone
                                </p>
                            </article>
                        </section>
                        <section
                                id="videos-list-explainers"
                                class="videos-list-group invisible">
                            <article class="article-video">
                                <video class="article-video-clip" controls>
                                    <source
                                            src="./video/giraffe-video-1.mp4"
                                            type="video/mp4">
                                </video>

                                <p class="article-video-description">
                                    Capital Murder
                                </p>
                            </article>
                            <article class="article-video">
                                <video class="article-video-clip" controls>
                                    <source
                                            src="./video/giraffe-video-2.mp4"
                                            type="video/mp4">
                                </video>

                                <p class="article-video-description">
                                    The Hot Spotters
                                </p>
                            </article>
                            <article class="article-video">
                                <video class="article-video-clip" controls>
                                    <source
                                            src="./video/giraffe-video-3.mp4"
                                            type="video/mp4">
                                </video>

                                <p class="article-video-description">
                                    Tom Petty's Real-Life Nightmares
                                </p>
                            </article>
                            <article class="article-video">
                                <video class="article-video-clip" controls>
                                    <source
                                            src="./video/giraffe-video-4.mp4"
                                            type="video/mp4">
                                </video>

                                <p class="article-video-description">
                                    The Vanishing
                                </p>
                            </article>
                        </section>
                        <section
                                id="videos-list-interviews"
                                class="videos-list-group invisible">
                            <article class="article-video">
                                <video class="article-video-clip" controls>
                                    <source
                                            src="./video/red-panda-video-1.mp4"
                                            type="video/mp4">
                                </video>

                                <p class="article-video-description">
                                    Tween on the Screen
                                </p>
                            </article>
                            <article class="article-video">
                                <video class="article-video-clip" controls>
                                    <source
                                            src="./video/red-panda-video-2.mp4"
                                            type="video/mp4">
                                </video>

                                <p class="article-video-description">
                                    The Water Wars of Arizona
                                </p>
                            </article>
                            <article class="article-video">
                                <video class="article-video-clip" controls>
                                    <source
                                            src="./video/red-panda-video-3.mp4"
                                            type="video/mp4">
                                </video>

                                <p class="article-video-description">
                                    Wasteland
                                </p>
                            </article>
                            <article class="article-video">
                                <video class="article-video-clip" controls>
                                    <source
                                            src="./video/red-panda-video-4.mp4"
                                            type="video/mp4">
                                </video>

                                <p class="article-video-description">
                                    Structure
                                </p>
                            </article>
                        </section>
                    </section>
                </section>
            </section>

            <section id="analysis" class="main-section">
                <h2 class="main-section-heading">Analysis</h2>

                <section id="analysis-articles">
                    <article class="analysis-card article-card">
                        <img class="analysis-card-profile" src="https://randomuser.me/api/portraits/women/53.jpg" alt="" />
                        <h3 class="analysis-card-author fake-link">Ernesto Bishop</h3>
                        <p class="analysis-card-description fake-link">
                            A 55-year-old cold case ends with a conviction.
                            But was justice really served?
                        </p>
                    </article>
                    <article class="analysis-card article-card">
                        <img class="analysis-card-profile" src="https://randomuser.me/api/portraits/women/11.jpg" alt="" />
                        <h3 class="analysis-card-author fake-link">Kelli Cobb</h3>
                        <p class="analysis-card-description fake-link">
                            A former WikiLeaks employee on the motivations
                            driving his old boss.
                        </p>
                    </article>
                    <article class="analysis-card article-card">
                        <img class="analysis-card-profile" src="https://randomuser.me/api/portraits/men/49.jpg" alt="" />
                        <h3 class="analysis-card-author fake-link">Isaiah Hartman</h3>
                        <p class="analysis-card-description fake-link">
                            Cheap wages, little training, and crushed limbs.
                        </p>
                    </article>
                    <article class="analysis-card article-card">
                        <img class="analysis-card-profile" src="https://randomuser.me/api/portraits/men/55.jpg" alt="" />
                        <h3 class="analysis-card-author fake-link">Anna Aguilar</h3>
                        <p class="analysis-card-description fake-link">
                            A five-part investigation into “private re-homing”.
                        </p>
                    </article>
                </section>
            </section>

            <section id="features" class="main-section">
                <h2 class="main-section-heading">Features</h2>
                <section id="feature-articles">
                    <article class="feature-article article-card">
                        <p class="fake-link">
                            &apos;Someone asked me to be their mommy&apos;: Life
                            as a woman gamer
                        </p>
                    </article>
                    <article class="feature-article article-card">
                        <p class="fake-link">
                            What is RSV? Symptoms, complications, and the new
                            vaccine
                        </p>
                    </article>
                    <article class="feature-article article-card">
                        <p class="fake-link">
                            Two astronauts are stuck in space - how will they
                            pass the time (and survive) until 2025?
                        </p>
                    </article>
                </section>
            </section>

            <section id="stories-more" class="main-section">
                <h2 class="main-section-heading">More Top Stories</h2>

                <section id="stories-more-articles">
                    <article class="stories-more-article article-card">
                        <div class="stories-more-article-image">

                        </div>
                        <section class="stories-more-article-content">
                            <div class="stories-more-article-tags">
                                <div class="region fake-link">World</div>
                            </div>
                            <p
                                    class="stories-more-article-description fake-link">
                                His hotel heists had detectives convinced they
                                were on the trail of one of the world’s most
                                skilled con-men.
                            </p>
                        </section>
                    </article>
                    <article class="stories-more-article article-card">
                        <div class="stories-more-article-image">

                        </div>
                        <section class="stories-more-article-content">
                            <div class="stories-more-article-tags">
                                <div class="region fake-link">Business</div>
                            </div>
                            <p
                                    class="stories-more-article-description fake-link">
                                Meet John Zerzan, arguably the most influential
                                anarchist in America.
                            </p>
                        </section>
                    </article>
                    <article class="stories-more-article article-card">
                        <div class="stories-more-article-image">

                        </div>
                        <section class="stories-more-article-content">
                            <div class="stories-more-article-tags">
                                <div class="region fake-link">Climate</div>
                            </div>
                            <p
                                    class="stories-more-article-description fake-link">
                                A manifesto from one of the first professional
                                bloggers on a new ‘golden age of journalism.’
                            </p>
                        </section>
                    </article>
                    <article class="stories-more-article article-card">
                        <div class="stories-more-article-image">

                        </div>
                        <section class="stories-more-article-content">
                            <div class="stories-more-article-tags">
                                <div class="region fake-link">Climate</div>
                            </div>
                            <p
                                    class="stories-more-article-description fake-link">
                                She teaches directors to direct.
                            </p>
                        </section>
                    </article>
                    <article class="stories-more-article article-card">
                        <div class="stories-more-article-image">

                        </div>
                        <section class="stories-more-article-content">
                            <div class="stories-more-article-tags">
                                <div class="region fake-link">Climate</div>
                            </div>
                            <p
                                    class="stories-more-article-description fake-link">
                                On A Star Is Born and the celebrity industrial
                                complex.
                            </p>
                        </section>
                    </article>
                    <article class="stories-more-article article-card">
                        <div class="stories-more-article-image">

                        </div>
                        <section class="stories-more-article-content">
                            <div class="stories-more-article-tags">
                                <div class="region fake-link">Science & Tech</div>
                            </div>
                            <p
                                    class="stories-more-article-description fake-link">
                                ‘He likes people walking around in fear,’ says
                                one worker. ‘He gets off on it.’
                            </p>
                        </section>
                    </article>
                    <article class="stories-more-article article-card">
                        <div class="stories-more-article-image">

                        </div>
                        <section class="stories-more-article-content">
                            <div class="stories-more-article-tags">
                                <div class="region fake-link">Business</div>
                            </div>
                            <p
                                    class="stories-more-article-description fake-link">
                                A couple deals with animal complications,
                                unhappiness, and terminal illness.
                            </p>
                        </section>
                    </article>
                    <article class="stories-more-article article-card">
                        <div class="stories-more-article-image">

                        </div>
                        <section class="stories-more-article-content">
                            <div class="stories-more-article-tags">
                                <div class="region fake-link">Climate</div>
                            </div>
                            <p
                                    class="stories-more-article-description fake-link">
                                The gangs of Brooklyn’s Brownsville, an area
                                with the highest concentration of public housing
                                in America.
                            </p>
                        </section>
                    </article>
                    <article class="stories-more-article article-card">
                        <div class="stories-more-article-image">

                        </div>
                        <section class="stories-more-article-content">
                            <div class="stories-more-article-tags">
                                <div class="region fake-link">Politics</div>
                            </div>
                            <p
                                    class="stories-more-article-description fake-link">
                                The supply chains of the cocaine industry did
                                not falter even during a worldwide shutdown.
                            </p>
                        </section>
                    </article>
                    <article class="stories-more-article article-card">
                        <div class="stories-more-article-image">

                        </div>
                        <section class="stories-more-article-content">
                            <div class="stories-more-article-tags">
                                <div class="region fake-link">Climate</div>
                            </div>
                            <p
                                    class="stories-more-article-description fake-link">
                                Caterpillar’s CEO made $22 million last year.
                                Some of his employees are on food stamps.
                            </p>
                        </section>
                    </article>
                    <article class="stories-more-article article-card">
                        <div class="stories-more-article-image">

                        </div>
                        <section class="stories-more-article-content">
                            <div class="stories-more-article-tags">
                                <div class="region fake-link">US</div>
                            </div>
                            <p
                                    class="stories-more-article-description fake-link">
                                The U.S. military openly admitted to killing
                                Somali civilians but won’t return their emails
                                or issue reparations.
                            </p>
                        </section>
                    </article>
                    <article class="stories-more-article article-card">
                        <div class="stories-more-article-image">

                        </div>
                        <section class="stories-more-article-content">
                            <div class="stories-more-article-tags">
                                <div class="region fake-link">UK</div>
                            </div>
                            <p
                                    class="stories-more-article-description fake-link">
                                Three boys falsely accused of murder, and what
                                the twenty-year saga says about all of us.
                            </p>
                        </section>
                    </article>
                </section>
            </section>

            <section id="climate" class="main-section">
                <h2 class="main-section-heading">Climate</h2>

                <section id="climate-articles">
                    <section>
                        <section class="climate-articles-group">
                            <article class="climate-article article-card">
                                <div class="climate-article-image">

                                </div>
                                <section class="climate-article-content">
                                    <div class="climate-article-tags">
                                        <div
                                                class="climate-article-category fake-link">
                                            UK
                                        </div>
                                    </div>

                                    <p
                                            class="climate-article-description fake-link">
                                        Space is only getting weirder.
                                    </p>
                                </section>
                            </article>

                            <article class="climate-article article-card">
                                <div class="climate-article-image">

                                </div>
                                <section class="climate-article-content">
                                    <div class="climate-article-tags">
                                        <div
                                                class="climate-article-category fake-link">
                                            Politics
                                        </div>
                                    </div>

                                    <p
                                            class="climate-article-description fake-link">
                                        A primer on income inequality in
                                        America.
                                    </p>
                                </section>
                            </article>

                            <article class="climate-article article-card">
                                <div class="climate-article-image">

                                </div>
                                <section class="climate-article-content">
                                    <div class="climate-article-tags">
                                        <div
                                                class="climate-article-category fake-link">
                                            Climate
                                        </div>
                                    </div>

                                    <p
                                            class="climate-article-description fake-link">
                                        Paula Deen’s martyrdom industrial
                                        complex. On a cruise ship.
                                    </p>
                                </section>
                            </article>

                            <article class="climate-article article-card">
                                <div class="climate-article-image">

                                </div>
                                <section class="climate-article-content">
                                    <div class="climate-article-tags">
                                        <div
                                                class="climate-article-category fake-link">
                                            Business
                                        </div>
                                    </div>

                                    <p
                                            class="climate-article-description fake-link">
                                        On the universal drive to grow and
                                        reproduce.
                                    </p>
                                </section>
                            </article>
                        </section>

                        <button class="button-load-more">Load More</button>
                    </section>
                    <section class="hidden">
                        <section class="climate-articles-group">
                            <article class="climate-article article-card">
                                <div class="climate-article-image">

                                </div>
                                <section class="climate-article-content">
                                    <div class="climate-article-tags">
                                        <div
                                                class="climate-article-category fake-link">
                                            US
                                        </div>
                                    </div>

                                    <p
                                            class="climate-article-description fake-link">
                                        What exactly is going on politically in
                                        Thailand?
                                    </p>
                                </section>
                            </article>

                            <article class="climate-article article-card">
                                <div class="climate-article-image">

                                </div>
                                <section class="climate-article-content">
                                    <div class="climate-article-tags">
                                        <div
                                                class="climate-article-category fake-link">
                                            Politics
                                        </div>
                                    </div>

                                    <p
                                            class="climate-article-description fake-link">
                                        The rise and fall of the Internet mogul.
                                    </p>
                                </section>
                            </article>

                            <article class="climate-article article-card">
                                <div class="climate-article-image">

                                </div>
                                <section class="climate-article-content">
                                    <div class="climate-article-tags">
                                        <div
                                                class="climate-article-category fake-link">
                                            US
                                        </div>
                                    </div>

                                    <p
                                            class="climate-article-description fake-link">
                                        Going undercover with David Sullivan,
                                        cult infiltrator.
                                    </p>
                                </section>
                            </article>

                            <article class="climate-article article-card">
                                <div class="climate-article-image">

                                </div>
                                <section class="climate-article-content">
                                    <div class="climate-article-tags">
                                        <div
                                                class="climate-article-category fake-link">
                                            Business
                                        </div>
                                    </div>

                                    <p
                                            class="climate-article-description fake-link">
                                        Did Michell Carter’s texts cause Conrad
                                        Roy to kill himself?
                                    </p>
                                </section>
                            </article>
                        </section>

                        <button class="button-load-more">Load More</button>
                    </section>
                    <section class="hidden">
                        <section class="climate-articles-group">
                            <article class="climate-article article-card">
                                <div class="climate-article-image">

                                </div>
                                <section class="climate-article-content">
                                    <div class="climate-article-tags">
                                        <div
                                                class="climate-article-category fake-link">
                                            Business
                                        </div>
                                    </div>

                                    <p
                                            class="climate-article-description fake-link">
                                        How the world’s biggest casino ran out
                                        of luck.
                                    </p>
                                </section>
                            </article>

                            <article class="climate-article article-card">
                                <div class="climate-article-image">

                                </div>
                                <section class="climate-article-content">
                                    <div class="climate-article-tags">
                                        <div
                                                class="climate-article-category fake-link">
                                            US
                                        </div>
                                    </div>

                                    <p
                                            class="climate-article-description fake-link">
                                        A one fire, one goat, many cooks
                                        experiment.
                                    </p>
                                </section>
                            </article>

                            <article class="climate-article article-card">
                                <div class="climate-article-image">

                                </div>
                                <section class="climate-article-content">
                                    <div class="climate-article-tags">
                                        <div
                                                class="climate-article-category fake-link">
                                            Science & Tech
                                        </div>
                                    </div>

                                    <p
                                            class="climate-article-description fake-link">
                                        Behind the scenes of the survivalist
                                        reality-TV show.
                                    </p>
                                </section>
                            </article>

                            <article class="climate-article article-card">
                                <div class="climate-article-image">

                                </div>
                                <section class="climate-article-content">
                                    <div class="climate-article-tags">
                                        <div
                                                class="climate-article-category fake-link">
                                            World
                                        </div>
                                    </div>

                                    <p
                                            class="climate-article-description fake-link">
                                        An argument for trying.
                                    </p>
                                </section>
                            </article>
                        </section>

                        <button class="button-load-more">Load More</button>
                    </section>
                    <section class="hidden">
                        <section class="climate-articles-group">
                            <article class="climate-article article-card">
                                <div class="climate-article-image">

                                </div>
                                <section class="climate-article-content">
                                    <div class="climate-article-tags">
                                        <div
                                                class="climate-article-category fake-link">
                                            Politics
                                        </div>
                                    </div>

                                    <p
                                            class="climate-article-description fake-link">
                                        A visit to the new Havana.
                                    </p>
                                </section>
                            </article>

                            <article class="climate-article article-card">
                                <div class="climate-article-image">

                                </div>
                                <section class="climate-article-content">
                                    <div class="climate-article-tags">
                                        <div
                                                class="climate-article-category fake-link">
                                            Science & Tech
                                        </div>
                                    </div>

                                    <p
                                            class="climate-article-description fake-link">
                                        Love and loss on the Texas Panhandle
                                        plains.
                                    </p>
                                </section>
                            </article>

                            <article class="climate-article article-card">
                                <div class="climate-article-image">

                                </div>
                                <section class="climate-article-content">
                                    <div class="climate-article-tags">
                                        <div
                                                class="climate-article-category fake-link">
                                            Business
                                        </div>
                                    </div>

                                    <p
                                            class="climate-article-description fake-link">
                                        Looking to Nietzsche for self-help.
                                    </p>
                                </section>
                            </article>

                            <article class="climate-article article-card">
                                <div class="climate-article-image">

                                </div>
                                <section class="climate-article-content">
                                    <div class="climate-article-tags">
                                        <div
                                                class="climate-article-category fake-link">
                                            Science & Tech
                                        </div>
                                    </div>

                                    <p
                                            class="climate-article-description fake-link">
                                        Rolf Kaestel stole $264 in 1981. He’s
                                        still in jail.
                                    </p>
                                </section>
                            </article>
                        </section>
                    </section>
                </section>
            </section>

            <section id="podcasts" class="main-section">
                <h2 class="main-section-heading">Podcasts</h2>

                <section id="podcasts-articles">
                    <article class="podcasts-article article-card">
                        <div class="podcasts-article-image">

                        </div>
                        <section class="podcasts-article-content">
                            <div class="podcasts-article-tags">
                                <div
                                        class="podcasts-article-category fake-link">
                                    Music
                                </div>
                            </div>

                            <p
                                    class="podcasts-article-description fake-link">
                                The Mask of Doom
                            </p>
                        </section>
                    </article>
                    <article class="podcasts-article article-card">
                        <div class="podcasts-article-image">

                        </div>
                        <section class="podcasts-article-content">
                            <div class="podcasts-article-tags">
                                <div
                                        class="podcasts-article-category fake-link">
                                    Science
                                </div>
                            </div>

                            <p
                                    class="podcasts-article-description fake-link">
                                Fear in the Shallows
                            </p>
                        </section>
                    </article>
                    <article class="podcasts-article article-card">
                        <div class="podcasts-article-image">

                        </div>
                        <section class="podcasts-article-content">
                            <div class="podcasts-article-tags">
                                <div
                                        class="podcasts-article-category fake-link">
                                    Business
                                </div>
                            </div>

                            <p
                                    class="podcasts-article-description fake-link">
                                Meet the King of Kombucha
                            </p>
                        </section>
                    </article>
                    <article class="podcasts-article article-card">
                        <div class="podcasts-article-image">

                        </div>
                        <section class="podcasts-article-content">
                            <div class="podcasts-article-tags">
                                <div
                                        class="podcasts-article-category fake-link">
                                    Health
                                </div>
                            </div>

                            <p
                                    class="podcasts-article-description fake-link">
                                One Night at Mount Sinai
                            </p>
                        </section>
                    </article>
                </section>
            </section>

            <section id="sports" class="main-section">
                <h2 class="main-section-heading">Sports</h2>

                <section id="sports-articles">
                    <article class="sports-article article-card">
                        <div class="sports-article-image">

                        </div>
                        <section class="sports-article-content">
                            <div class="sports-article-tags">
                                <div
                                        class="sports-article-category fake-link">
                                    Sports
                                </div>
                            </div>

                            <p
                                    class="sports-article-description fake-link">
                                Hub Fans Bid Kid Adieu
                            </p>
                        </section>
                    </article>
                    <article class="sports-article article-card">
                        <div class="sports-article-image">

                        </div>
                        <section class="sports-article-content">
                            <div class="sports-article-tags">
                                <div
                                        class="sports-article-category fake-link">
                                    Sports
                                </div>
                            </div>

                            <p
                                    class="sports-article-description fake-link">
                                Federer as Religious Experience
                            </p>
                        </section>
                    </article>
                    <article class="sports-article article-card">
                        <div class="sports-article-image">

                        </div>
                        <section class="sports-article-content">
                            <div class="sports-article-tags">
                                <div
                                        class="sports-article-category fake-link">
                                    Sports
                                </div>
                            </div>

                            <p
                                    class="sports-article-description fake-link">
                                Wilt vs. Elgin: When Their World Was the Playground
                            </p>
                        </section>
                    </article>
                    <article class="sports-article article-card">
                        <div class="sports-article-image">

                        </div>
                        <section class="sports-article-content">
                            <div class="sports-article-tags">
                                <div
                                        class="sports-article-category fake-link">
                                    Sports
                                </div>
                            </div>

                            <p
                                    class="sports-article-description fake-link">
                                The Most Amazing Bowling Story Ever
                            </p>
                        </section>
                    </article>
                </section>
            </section>

            <section id="around" class="main-section">
                <h2 class="main-section-heading">Around the World</h2>

                <section id="around-articles">
                    <article class="around-article article-card">
                        <h3 class="fake-link">
                            Get all the sports action, all in one amazing
                            package!
                        </h3>
                    </article>
                    <article class="around-article article-card">
                        <h3 class="fake-link">
                            Listen to your favourite artists on demand, from
                            just £4.99 a month
                        </h3>
                    </article>
                    <article class="around-article article-card">
                        <h3 class="fake-link">
                            Sign up to find out more about in-person events and
                            meetings around the country
                        </h3>
                    </article>
                </section>
            </section>

            <section id="most-read" class="main-section">
                <h2 class="main-section-heading">Most Read</h2>

                <article id="most-read-articles" class="article-card">
                    <div>
                        <article class="most-read-article">
                            <h3>1</h3>
                            <p class="fake-link">
                                Mauris ullamcorper urna a arcu lobortis, non
                                elementum orci faucibus
                            </p>
                        </article>
                        <article class="most-read-article">
                            <h3>2</h3>
                            <p class="fake-link">
                                Praesent ultrices tincidunt dignissim.
                                Phasellus feugiat velit augue, sit amet
                                tristique urna efficitur a.
                            </p>
                        </article>
                        <article class="most-read-article">
                            <h3>3</h3>
                            <p class="fake-link">
                                Vestibulum sodales magna tempor nibh
                                ullamcorper, vel pellentesque mauris
                                hendrerit.
                            </p>
                        </article>
                        <article class="most-read-article">
                            <h3>4</h3>
                            <p class="fake-link">
                                Ut malesuada venenatis mi consequat fermentum.
                            </p>
                        </article>
                        <article class="most-read-article">
                            <h3>5</h3>
                            <p class="fake-link">
                                Proin in arcu rhoncus, mattis dolor eget,
                                feugiat lorem.
                            </p>
                        </article>
                    </div>
                    <div>
                        <article class="most-read-article">
                            <h3>6</h3>
                            <p class="fake-link">
                                Aliquam venenatis, mi eget mollis ullamcorper,
                                leo leo facilisis enim, nec interdum nunc justo
                                vel est
                            </p>
                        </article>
                        <article class="most-read-article">
                            <h3>7</h3>
                            <p class="fake-link">
                                Nam eu euismod magna, sit amet sagittis turpis.
                            </p>
                        </article>
                        <article class="most-read-article">
                            <h3>8</h3>
                            <p class="fake-link">
                                Suspendisse sit amet ipsum metus. Fusce feugiat
                                imperdiet laoreet.
                            </p>
                        </article>
                        <article class="most-read-article">
                            <h3>9</h3>
                            <p class="fake-link">
                                Sed egestas vel ante a tincidunt. Nulla
                                hendrerit tellus quis ex vehicula porttitor.
                            </p>
                        </article>
                        <article class="most-read-article">
                            <h3>10</h3>
                            <p class="fake-link">
                                Curabitur neque orci, faucibus.
                            </p>
                        </article>
                    </div>
                </article>
            </section>
        </main>
        <footer>
            <section id="social-links">
                <i id="social-link-youtube" class="fa-brands fa-youtube social-link"></i>
                <i id="social-link-facebook" class="fa-brands fa-facebook-f social-link"></i>
                <i id="social-link-x" class="fa-brands fa-x-twitter social-link"></i>
                <i id="social-link-tiktok" class="fa-brands fa-tiktok social-link"></i>
                <i id="social-link-instagram" class="fa-brands fa-instagram social-link"></i>
                <i id="social-link-linkedin" class="fa-brands fa-linkedin-in social-link"></i>
                <i id="social-link-whatsapp" class="fa-brands fa-whatsapp social-link"></i>
            </section>

            <section id="internal-links">
                <section id="internal-links-about">
                    <h2>About</h2>
                    <ul class="internal-link-list">
                        <li class="internal-link-list-item fake-link">About Us</li>
                        <li class="internal-link-list-item fake-link">Sky News Profiles</li>
                        <li class="internal-link-list-item fake-link">Sky News International</li>
                        <li class="internal-link-list-item fake-link">Sky News Library Sales</li>
                        <li class="internal-link-list-item fake-link">Site Map</li>
                        <li class="internal-link-list-item fake-link">Editorial Guidelines</li>
                        <li class="internal-link-list-item fake-link">Board</li>
                    </ul>
                </section>

                <section id="internal-links-services">
                    <h2>Services</h2>
                    <ul class="internal-link-list">
                        <li class="internal-link-list-item fake-link">RSS</li>
                        <li class="internal-link-list-item fake-link">For Your Phone</li>
                        <li class="internal-link-list-item fake-link">Radio</li>
                    </ul>
                </section>

                <section id="internal-links-channels">
                    <h2>Channels</h2>
                    <ul class="internal-link-list">
                        <li class="internal-link-list-item fake-link">Witness</li>
                        <li class="internal-link-list-item fake-link">Atlantic</li>
                        <li class="internal-link-list-item fake-link">Arts</li>
                        <li class="internal-link-list-item fake-link">Cinema</li>
                        <li class="internal-link-list-item fake-link">Sports</li>
                    </ul>
                </section>

                <section id="internal-links-more">
                    <h2>More Sites</h2>
                    <ul class="internal-link-list">
                        <li class="internal-link-list-item fake-link">NOW</li>
                        <li class="internal-link-list-item fake-link">Zero</li>
                        <li class="internal-link-list-item fake-link">Academy Studios</li>
                        <li class="internal-link-list-item fake-link">Bigger Picture</li>
                        <li class="internal-link-list-item fake-link">Group</li>
                        <li class="internal-link-list-item fake-link">Bet</li>
                        <li class="internal-link-list-item fake-link">Main site</li>
                        <li class="internal-link-list-item fake-link">Arabia</li>
                        <li class="internal-link-list-item fake-link">Advertise With Us</li>
                    </ul>
                </section>
            </section>

            <section id="legal">
                <p class="legal-item fake-link">Terms &amp; Conditions</p>
                <p class="legal-item fake-link">Privacy &amp; Cookies</p>
                <p class="legal-item fake-link">Privacy Options</p>
                <p class="legal-item fake-link">Accessibility</p>
                <p class="legal-item fake-link">Contact Us</p>
            </section>

            <section id="copyright">
<!--                <p>{ News site logo }</p>-->
                <p>&copy; 2024 News Website</p>
            </section>
        </footer>

        <script type="text/javascript" src="./js/app.js"></script>
    </body>
</html>
