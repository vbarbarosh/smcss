<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="../demo.css?<?php echo uniqid() ?>" type="text/css" rel="stylesheet">
    <style type="text/css">
    .ml25n { margin-left: -25px; }
    .br100p { border-radius: 100%; }
    </style>
</head>
<body>

<div id="app" class="mt50">
    <div class="fix tlbr ba z1 ph15 bs10 white">
        <input v-model="width" class="ww" type="range" min="0" max="100" step="0.1">
    </div>
    <div class="w500 ma dashed bs10 red">
        <div class="rel h50 mh25 blue">
            <div v-bind:style="{left: width + '%'}" class="abs w50 h50 ml25n br100p flex-row-center green">
                {{ width }}
            </div>
        </div>
    </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/vue/2.2.5/vue.min.js" type="text/javascript"></script>
<script type="text/javascript">
    new Vue({
        el: '#app',
        data: {
            cliparts: new Array(13),
            width: 100
        }
    });
</script>

</body>
</html>