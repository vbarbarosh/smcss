<?php $d = __DIR__ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>docs • smcss (a css for prototyping)</title>
    <link href="../app.css?t=<?php echo filemtime("$d/../app.css") ?>" rel="stylesheet" />
    <link href="../demos/demo.css?t=<?php echo filemtime("$d/../demos/demo.css") ?>" rel="stylesheet" />
</head>
<body>

<div id="app" class="abs-f vsplit app-ff-roboto">

    <div class="hsplit app-pal-header app-border xborder-ht">
        <div class="w250 h50 mla">
            <ul class="xls xm xp ww hh flex-row">
                <li class="lh20 p15 mla">smcss</li>
            </ul>
        </div>
        <div class="fluid h50">
            <ul class="xls xm xp ww hh flex-row">
                <li class="app-pal-active">
                    <a href="../concepts" class="db lh20 p15">Concepts</a
                </li>
                <li>
                    <a href="../reference" class="db lh20 p15">Reference</a>
                </li>
                <li>
                    <a href="../demos" class="db lh20 p15">Demos</a>
                </li>
                <li>
                    <a href="../try" class="db lh20 p15">Try it out</a>
                </li>
                <li class="mla">
                    <a href="https://github.com/vbarbarosh/smcss" target="_blank" class="db lh20 p15">GitHub</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="fluid hsplit">
        <div class="bbox w200 ph10 vsplit">
            <ul class="fluid pv15 oa">
                <li><a href="#container">container</a></li>
                <li><a href="#margin-group">margin-group</a></li>
                <li><a href="#hsplit">hsplit</a></li>
            </ul>
        </div>
        <div class="fluid p20 mg25 oa">

            <h1 class="xm">smcss &mdash; a css for prototyping</h1>

            <?php include 'container.php' ?>
            <?php include 'margin-group.php' ?>
            <?php include 'hsplit.php' ?>

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

        </div>
    </div>

</div>

<script src="https://unpkg.com/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="https://unpkg.com/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>

</body>
</html>
