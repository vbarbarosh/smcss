<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="../demo.css?<?php echo uniqid() ?>" type="text/css" rel="stylesheet">
</head>
<body>

<div id="app" class="mt50">
    <div class="fix tlbr ba z1 ph15 bs10 white">
        <input v-model="width" class="ww" type="range" min="100" max="1200">
    </div>
    <div class="flex-row-center ma dashed bs10 rainbow" v-bind:style="{width: width + 'px'}">
        <button v-for="button in buttons" class="w0 max-w200 flex-grow p5 xbutton">
            {{ button }}
        </button>
    </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/vue/2.2.5/vue.min.js" type="text/javascript"></script>
<script type="text/javascript">
    new Vue({
        el: '#app',
        data: {
            buttons: [
                'Sed a sem tortor',
                'Sed luctus',
                'Iaculis pulvinar',
                'Aenean',
                'Suscipit sem ut enim',
            ],
            width: 500
        }
    });
</script>

</body>
</html>