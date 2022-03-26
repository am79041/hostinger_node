<?php require_once('header.php') ?>
    <title>Best2Buy-IG Images/Carousel Downloader</title>
    <meta name="description" content = "Best2Buy is minified IG Downloader tool, allows you save IG contents locally accros all devices instantly. Don't need to sign up or download any app, just paste the url here &amp download.">
</head>

<body>
   <?php require_once('navbar.php') ?>
<main>
        <div class="container text-center" id="wrapper">
            <h1 class="display-7" id='title'> Download IG Single Image...</h1>
        </div>
        <div class="container mt-5" id="serachBox">
            <input type="text" placeholder="Place Image Link..." autocomplete="off" class="form-controls rounded"
                id='input'>
            <button class="btn btn-primary btn-block btn-lg mt-2 py-2" id="searchImage">Search</button>
        </div>
        <?php require_once('../Loaders/preloader.php') ?>
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
                <li>Copy the image link from Instagram</li>
                <li>Paste the link in our tool.</li>
                <li>Wait a few seconds, our tool will process everything for you.</li>
                <li>Click on the download button to save it.</li>
                <br><br>
            </p>

    <?php require_once('../Loaders/declare.php');
    require_once('../Loaders/footer.php')
?>
