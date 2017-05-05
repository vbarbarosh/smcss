<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../demo/demo.css?<?php echo uniqid() ?>" type="text/css" rel="stylesheet">
    <style type="text/css">
    .w50p { width: 50%; }
    .min-w50p { min-width: 50%; }
    .flex-icol { display: inline-flex; flex-direction: column; }
    .h30 { height: 30px; }
    </style>
</head>
<body>

<div id="app">
    <div class="fix tlbr red">
        <div class="red flex-icol dashed rainbow">
            <div class="flex-row-center">
                <span class="w50p yellow">buttonadfaasdfadf1</span>
                <span class="w50p cyan">button2</span>
            </div>
            <div class="h30 flex-fluid"></div>
            <div>
                <span>input1</span>
            </div>
            <div class="h30 flex-fluid"></div>
            <div>
                <span>input2</span>
            </div>
            <div class="h30 flex-fluid"></div>
            <div class="flex-row-center">
                <span class="yellow">button3</span>
            </div>
        </div>
    </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/vue/2.2.5/vue.min.js" type="text/javascript"></script>
<script type="text/javascript">
    new Vue({
        el: '#app',
        data: {
            cliparts: [
                {col: 'col1', expand: 'expand-1-1'},
                // This will not work!
                // {col: 'col2', expand: 'expand-2-1'},
                {col: 'col1', expand: 'expand-1-1'},
                {col: 'col1', expand: 'expand-1-1'},
                {col: 'col1', expand: 'expand-1-1'},
                {col: 'col1', expand: 'expand-1-1'},
                {col: 'col1', expand: 'expand-1-1'},
                {col: 'col1', expand: 'expand-1-1'},
                {col: 'col1', expand: 'expand-1-1'},
                {col: 'col1', expand: 'expand-1-1'},
                {col: 'col1', expand: 'expand-1-1'},
                {col: 'col1', expand: 'expand-1-1'},
                {col: 'col1', expand: 'expand-1-1'},
                {col: 'col1', expand: 'expand-1-1'},
            ],
            width: 500
        }
    });
</script>

</body>
</html>
