<html lang="en">

<head>
<?php header("cache-control:public, max-age=0, must-revalidate") ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content = "Best2Buy is minified IG Downloader tool, allows you save IG contents locally accros all devices instantly. Don't need to sign up or download any app, just paste the url here &amp download.">
    <title>Best2Buy-IG Images/Carousel Downloader</title>
    <meta property = "og:title" content="Best2Buy-A Minified IG Downloader">
    <meta property = "og:type" content = "article"/>
    <meta property = "og:image" alt="best2buy" content = "https://www.dropbox.com/s/p07u2qzwowbh3hy/best2buy.png?dl=0" />
    <meta property = "og:url" content = "https://best2buy.in"/>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-193960761-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-193960761-1');
    </script>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="./index.php">Best2Buy</a>


        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse ml-sm-5" id="collapsibleNavbar">
            <ul class="navbar-nav flex flex-row justify-content-around">
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">Reels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./images.php">Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./dp.php">DP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./carousel.php">Carousel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./igtv.php">IGTV</a>
                </li>
                </li>
            </ul>
        </div>
    </nav>
<main>
        <div class="container text-center" id="wrapper">
            <h1 class="display-7" id='title'> Download All Carousel Images...</h1>
        </div>
        <div class="container mt-5" id="serachBox">
            <input type="text" placeholder="Place Image Link..." autocomplete="off" class="form-controls rounded"
                id='input'>
            <button class="btn btn-primary btn-block btn-lg mt-2 py-2" id="searchCarousel">Search</button>
        </div>
        <?php require('../Loaders/preloader.php') ?>
    </main>
    <article>
        <section class="container word-break mt-5 text-center">
            <h5 class="font-weight-bold">Best2Buy is a minified IG downloading tool which allows you to download IG
                contents instantly.</h5>
        </section>
        <section id="content" class="container-fluid d-flex flex-column">
            <h3>How to Download Instagram Photos Online?</h3>
            <p>
                We provide you a fast and efficient way of downloading IG photos and carousel media. For downloading single images..
                <li>Copy the carousel media url from a IG handle</li>
                <li>Paste the link in the search bar.</li>
                <li>Wait a few seconds, we will process everything for you.</li>
                <li>Click on the download button to save it.</li>
                <br><br>
                For Carousel Media, you don't have to put each image's link one by one, simply paste the first image's url. Our tool will process all the images for you.
            </p>

    <?php require('../Loaders/declare.php');
    require('../Loaders/footer.php')
?>
