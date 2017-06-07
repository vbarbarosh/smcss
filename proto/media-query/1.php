<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title of the Page</title>
    <link href="../../demo/demo.css?<?php echo uniqid() ?>" type="text/css" rel="stylesheet">
    <style type="text/css">
    /* http://stephen.io/mediaqueries/#iPhone */
    @media only screen 
    and (min-device-width : 320px) 
    and (max-device-width : 568px) {
        .iphone5 {
            background: green;
        }
    }
    @media only screen 
    and (min-device-width : 320px) 
    and (max-device-width : 568px) 
    and (orientation : landscape) {
        .iphone5-landscape {
            background: green;
        }
    }
    @media only screen 
    and (min-device-width : 320px) 
    and (max-device-width : 568px) 
    and (orientation : portrait) {
        .iphone5-portrait {
            background: green;
        }
    }
    </style>
</head>
<body>

<div id="app" class="w500 ma mt50">
    <p class="iphone5 p5 dashed">iPhone 5</p>
    <p class="iphone5-landscape p5 dashed">iPhone 5 (landscape)</p>
    <p class="iphone5-portrait p5 dashed">iPhone 5 (portrait)</p>
</div>

</body>
</html>
