<?php

$dirs = [];

if (isset($_GET['s'])) {
    $snip = $_GET['s'];
    $snip_js = "$snip/main.js";
    $snip_css = "$snip/main.css";
    $snip_html = "$snip/main.html";
}
else {
    foreach (scandir(__DIR__) as $file) {
        if ($file != '.' && $file != '..' && is_dir($file)) {
            $dirs[] = $file;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
        <base href="//<?php echo htmlspecialchars($_SERVER['SERVER_NAME'] . dirname($_SERVER['SCRIPT_NAME']) . "/$snip") ?>" />
    -->
    <title>Title of the Page</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="sm.css" type="text/css" rel="stylesheet">
    <?php if (isset($snip_css) && file_exists($snip_css)): ?>
        <link rel="stylesheet" href="<?php echo $snip_css ?>">
    <?php endif ?>
    <style>
        .border {
            border: 1px solid black;
        }
    </style>
</head>
<body>

<?php if (isset($snip_html)): ?>
    <div class="flex-row-center mv25">
        <div id="app">
            <?php include $snip_html ?>
        </div>
    </div>
<?php else: ?>
    <ul>
        <?php foreach ($dirs as $dir): ?>
            <li>
                <a href="<?php echo htmlspecialchars("index.php?s=$dir") ?>">
                    <?php echo htmlspecialchars($dir) ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<script src="//code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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

</body>
</html>
