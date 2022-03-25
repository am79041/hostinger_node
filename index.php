<html lang="en">

<head>
    <?php header("cache-control:public, max-age=0, must-revalidate") ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content = "Best2Buy is minified IG Downloader tool, allows you save IG contents locally accros all devices instantly. Don't need to sign up or download any app, just paste the url here &amp download.">
    <title>Best2Buy-A Minified IG Downloader</title>
    <meta property = "og:title"  content="Best2Buy-A Minified IG Downloader">
    <meta property = "og:type" content = "article"/>
    <meta property = "og:image" alt="whitecoccnut" content = "https://www.dropbox.com/s/p07u2qzwowbh3hy/best2buy.png?dl=0" />
    <meta property = "og:url" content = "https://best2buy.in"/>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-193960761-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-193960761-1');
</script>
    <link rel="icon" href="./assets/favicon.png" />
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles/style.css">
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
            <h1 class="display-7" id='title'>A Minified Tool to Download IG Videos,Reels,Photos & IGTV Contents
                Instantly...</h1>
        </div>
        <div class="container mt-5" id="serachBox">
            <input type="text" placeholder="Place Video Link..." autocomplete="off" class="form-controls rounded"
                id='input'>
            <button class="btn btn-primary btn-block btn-lg mt-2 py-2" id="searchVideo">Search</button>

        </div>
        <?php require('../Loaders/preloader.php') ?>
    </main>
    <article>
        <section class="container word-break mt-5 text-center">
            <h5 class="font-weight-bold">Best2Buy is a minified IG downloading tool which allows you to download IG
                contents instantly.</h5>
        </section>
        <section id="content" class="container-fluid d-flex flex-column">
            <h3>Download Instagram Video Online</h3>
            <p>Best2Buy is an online free,fast and efficient tool which helps you download IG contents across all
                platforms(eg: Smartphone, Laptopsm or Tablets). You can save any instagram reels(excluding privates)
                using our tool and binge watch them even you're offline.
                <br><br>
                Our tool is completely safe to use. We also don't have any kind of credentials requirements. You can
                acees our tool without logging into your instagram account.
            </p>
            <br>
            <h3>What Features do we have?</h3>
            <p>Best2Buy provides you minimal but efficient features. It can download reels,videos,audio,carousel
                media,dp,and photos.</p>
            <h4>Key Features</h4>
            <li>Free to use.</li>
            <li>Download original videos with no watermark.</li>
            <li>Supported on all devices.</li>
            <li>Download reels with different video qualities.</li>
            <br>
            <h3>How To download Instagram Reels video online?</h3>
            <p>Best2Buy provides efficient and easy solution to download Instagram Reels. In order to download
                Instagram Reels, follow the steps below...</p>
            <li>Go to Instagram and choose your favorite reel.</li>
            <li>Copy the link of that particular by toggling the three dots on the right-top corner(for mobile users).
                PC users can simply copy the url link from the address bar. </li>
            <li>Paste the link in our tool, and hit the search button.</li>
            <li>Wait a while until the download option appears.Afterwards, click on download and save it on your
                device.</li>
            <br>
            <h3>How to download Instagram private reels video?</h3>
            <p>As of now, using our tool your can't download IG's private reels and videos. Instagram doesn't
                allow others to access contents of private users without their permisison. But we are trying to add this
                feature ASAP.</p>
<?php require('../Loaders/declare.php');
require('../Loaders/footer.php')
?>
