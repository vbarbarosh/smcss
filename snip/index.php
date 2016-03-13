<?php

if (isset($_GET['s'])) {
    $snip = $_GET['s'];
    $snip_js = "$snip/main.js";
    $snip_css = "$snip/main.css";
    $snip_html = "$snip/main.html";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title of the Page</title>
    <link href="sm.css" type="text/css" rel="stylesheet">
    <?php if (isset($snip_css) && file_exists($snip_css)): ?>
        <link rel="stylesheet" href="<?php echo $snip_css ?>">
    <?php endif ?>
    <link href="fixed-sidebar/main.css" type="text/css" rel="stylesheet">
    <link href="flex-layout/main.css" type="text/css" rel="stylesheet">
    <link href="image-center-2/main.css" type="text/css" rel="stylesheet">
    <link href="image-grid-2/main.css" type="text/css" rel="stylesheet">
    <link href="image-grid-3/main.css" type="text/css" rel="stylesheet">
    <link href="image-inside-button/main.css" type="text/css" rel="stylesheet">
    <link href="issue-img-before/main.css" type="text/css" rel="stylesheet">
    <link href="layout-left-right/main.css" type="text/css" rel="stylesheet">
    <link href="modal/main.css" type="text/css" rel="stylesheet">
</head>
<body>

<div class="w600 ma mv25 bbox p10 og25">
    <h2>Expand</h2>
    <p>Expand block's <code>height</code> proportionally to its <code>width</code></p>
    <h3>Predefined Classes</h3>
<pre><code>.expand-1-1
.expand-1-2
.expand-1-3
.expand-1-4
.expand-1-9
.expand-1-16
.expand-2-1
.expand-2-3
.expand-2-4
.expand-2-9
.expand-2-16
.expand-3-1
.expand-3-2
.expand-3-4
.expand-3-9
.expand-3-16
.expand-4-1
.expand-4-2
.expand-4-3
.expand-4-9
.expand-4-16
.expand-9-1
.expand-9-2
.expand-9-3
.expand-9-4
.expand-9-16
.expand-16-1
.expand-16-2
.expand-16-3
.expand-16-4
.expand-16-9
</code></pre>
    <h3>Demo</h3>
    <?php include 'expand/main.html' ?>
    <h3>References</h3>
    <ol>
        <li>
            <a href="http://zzzzbov.com/blag/scalable-videos-with-aspect-ratio">
                Scalable videos with aspect ratio
            </a>
        </li>
        <li>
            <a href="http://ansciath.tumblr.com/post/7347495869/css-aspect-ratio">
                Use CSS to Specify the Aspect Ratio of a Fluid Element
            </a>
        </li>
        <li>
            <a href="https://www.w3.org/TR/CSS2/box.html#propdef-padding-top">
                CSS2 Padding properties
            </a>
            <blockquote>
                Percentages: refer to width of containing block
            </blockquote>
        </li>
    </ol>

    <h2>Fixed Sidebar</h2>
    <p>One way of building sidebar.</p>
    <?php include 'fixed-sidebar/main.html' ?>

    <h2>Flex Layout</h2>
    <p>How to use <code>.flex-</code> classes.</p>
    <?php include 'flex-layout/main.html' ?>

    <h2>Image Center</h2>
    <p>How to center an image using absolutely positioned box.</p>
    <?php include 'image-center/main.html' ?>

    <h2>Image Center 2</h2>
    <p>Another way of centering image.</p>
    <?php include 'image-center-2/main.html' ?>
    <h3>References</h3>
    <ol>
        <li>
            <a href="http://habrahabr.ru/post/238449/">
                Выравниваем блок по центру страницы
            </a>
        </li>
    </ol>

    <h2>Image Grid</h2>
    <p>Using <code>.grid*</code> and <code>.col*</code> classes to make a grid of images.</p>
    <div id="app-image-grid">
        <?php include 'image-grid/main.html' ?>
    </div>

    <h2>Image Grid 2</h2>
    <p>Image grid with borders, using <code>:nth-child</code> pseudo selectors.</p>
    <?php include 'image-grid-2/main.html' ?>
    <h3>References</h3>
    <ol>
        <li>
            <a href="http://keithclark.co.uk/articles/targeting-first-and-last-rows-in-css-grid-layouts/#solution">
                Targeting first and last rows in CSS grid layouts
            </a>
        </li>
    </ol>

    <h2>Image Grid 3</h2>
    <p>Much like <a href="#">Image Grid</a>. Probably shold be removed.</p>
    <div id="app-image-grid-3">
        <?php include 'image-grid-3/main.html' ?>
    </div>

    <h2>Image Inside Button</h2>
    <p>An image inside of a button.</p>
    <?php include 'image-inside-button/main.html' ?>

    <h2>Issue with <code>position: fixed</code></h2>
    <p>An issue with <code>position: fixed</code></p>
    <?php include 'issue-fixed/main.html' ?>
    <h3>References</h3>
    <ol>
        <li>
            <a href="http://stackoverflow.com/a/14732712/1478566">
                Position Fixed Not Working for Header
            </a>
        </li>
    </ol>

    <h2>Issue with <code>img:before</code></h2>
    <p>An issue with <code>img:before</code></p>
    <?php include 'issue-img-before/main.html' ?>
    <h3>References</h3>
    <ol>
        <li>
            <a href="http://stackoverflow.com/questions/5843035/does-before-not-work-on-img-elements">
                Does :before not work on img elements?
            </a>
        </li>
    </ol>

    <h2>Layout left-right</h2>
    <p>How to create <em>left-right</em> layout using <code>.flex</code> classes.</p>
    <?php include 'layout-left-right/main.html' ?>

<!--
    <h2>Modal</h2>
    <p>Modal &mdash; is an element which covers everything else
    and provides interaction with its own only until it is dismissed.</p>
    <?php include 'modal/main.html' ?>
-->

</div>

<?php if (isset($snip_html)): ?>
    <div class="flex-rows-center flex-align-start mv25">
        <div class="w200">
            <?php include 'nav.php' ?>
        </div>
        <div class="w600 og10" id="app">
            <?php include $snip_html ?>
        </div>
    </div>
<?php endif ?>

<script src="//code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
<script src="//cdn.jsdelivr.net/vue/1.0.13/vue.min.js" type="text/javascript"></script>
<?php if (0): ?>
<?php if (isset($snip_js) && file_exists($snip_js)): ?>
    <script src="//cdn.jsdelivr.net/vue/1.0.13/vue.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        (function () {
            var param = <?php echo file_get_contents($snip_js) ?>;
            param.el = '#app';
            new Vue(param);
        })();
    </script>
<?php endif ?>
<?php endif ?>
<script type="text/javascript">
(function () {
    var param = <?php echo file_get_contents("image-grid/main.js") ?>;
    param.el = '#app-image-grid';
    new Vue(param);
})();
</script>
<script type="text/javascript">
(function () {
    var param = <?php echo file_get_contents("image-grid-3/main.js") ?>;
    param.el = '#app-image-grid-3';
    new Vue(param);
})();
</script>
</body>
</html>
