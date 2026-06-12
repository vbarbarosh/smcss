<?php $d = __DIR__ ?>
<?php require "$d/../php/app.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>concepts | smcss (a css for prototyping)</title>
    <link href="../app.css?t=<?php echo filemtime("$d/../app.css") ?>" rel="stylesheet" />
    <link href="../demos/demo.css?t=<?php echo filemtime("$d/../demos/demo.css") ?>" rel="stylesheet" />
    <script>
    document.documentElement.dataset.theme = localStorage.smcss_theme || 'light';
    function theme_toggle() {
        const next = document.documentElement.dataset.theme == 'dark' ? 'light' : 'dark';
        document.documentElement.dataset.theme = next;
        localStorage.smcss_theme = next;
    }
    </script>
</head>
<body>

<div id="app" class="abs-f vsplit">

    <div class="app-header">
        <a href="../concepts" class="app-brand">smcss</a>
        <span class="app-badge">v<?php e(version()) ?></span>
        <ul class="app-nav">
            <li><a href="../concepts" class="active">Concepts</a></li>
            <li><a href="../reference">Reference</a></li>
            <li><a href="../demos">Demos</a></li>
            <li><a href="../try">Try it out</a></li>
        </ul>
        <div class="app-actions">
            <a href="https://github.com/vbarbarosh/smcss" target="_blank">GitHub</a>
            <a href="#" onclick="theme_toggle(); return false" title="Toggle theme" class="app-theme-toggle"><span class="if-light">&#9789;</span><span class="if-dark">&#9788;</span></a>
        </div>
    </div>

    <div class="fluid hsplit">
        <div class="app-side vsplit">
            <div class="app-side-title">On this page</div>
            <ul class="app-toc fluid oa">
                <li><a href="#container">container</a></li>
                <li><a href="#margin-group">margin-group</a></li>
                <li><a href="#hsplit">hsplit</a></li>
            </ul>
        </div>
        <div class="fluid oa app-main">
            <div class="app-content mg25">

            <h1 class="xm">smcss &mdash; a css for prototyping</h1>

            <?php include 'container.php' ?>
            <?php include 'margin-group.php' ?>
            <?php include 'hsplit.php' ?>

            </div>
        </div>
    </div>

</div>

<script src="https://unpkg.com/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="https://unpkg.com/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>

<script>
document.addEventListener('scroll', function () {
    const links = Array.from(document.querySelectorAll('.app-toc a[href^="#"]'));
    let current = links[0];
    for (const a of links) {
        const target = document.getElementById(a.getAttribute('href').slice(1));
        if (target && target.getBoundingClientRect().top < 120) {
            current = a;
        }
    }
    for (const a of links) {
        a.classList.toggle('active', a == current);
    }
}, true);
</script>

</body>
</html>
