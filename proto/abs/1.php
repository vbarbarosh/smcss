<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="../../demo/demo.css?<?php echo uniqid() ?>" type="text/css" rel="stylesheet">
    <style type="text/css">
    .abs-tl { position: absolute; top: 0; left: 0; }
    .abs-tr { position: absolute; top: 0; right: 0; }
    .abs-bl { position: absolute; bottom: 0; left: 0; }
    .abs-br { position: absolute; bottom: 0; right: 0; }

    .abs-c { position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); }
    .abs-cr { position: absolute; top: 50%; right: 0; transform: translate(0, -50%); }
    .abs-cl { position: absolute; top: 50%; left: 0; transform: translate(0, -50%); }
    .abs-ct { position: absolute; top: 0; left: 50%; transform: translate(-50%, 0); }
    .abs-cb { position: absolute; bottom: 0; left: 50%; transform: translate(-50%, 0); }

    .abs-tl-br { position: absolute; top: 0; left: 0; transform: translate(-100%, -100%); }
    .abs-tl-tr { position: absolute; top: 0; left: 0; transform: translate(-100%, 0); }
    .abs-cl-cr { position: absolute; top: 50%; left: 0; transform: translate(-100%, -50%); }
    .abs-cr-cl { position: absolute; top: 50%; right: 0; transform: translate(100%, -50%); }
    .abs-cb-ct { position: absolute; top: 100%; left: 50%; transform: translate(-50%, 0%); }

    .abs-bl-ct { position: absolute; bottom: 0; left: 0; transform: translate(-50%, 100%); }
    .abs-br-ct { position: absolute; bottom: 0; right: 0; transform: translate(50%, 100%); }
    </style>
</head>
<body>

<div id="app" class="mt50">
    <div class="fix tlbr ba z1 ph15 bs10 white">
        <input v-model="width" class="ww" type="range" min="100" max="1200">
    </div>
    <div class="ma dashed bs10 red" v-bind:style="{width: width + 'px'}">
        <div class="rel h200 fs13">
            <div class="green w50 h50 flex-row-center abs-tl">abs-tl</div>
            <div class="green w50 h50 flex-row-center abs-tr">abs-tr</div>
            <div class="green w50 h50 flex-row-center abs-bl">abs-bl</div>
            <div class="green w50 h50 flex-row-center abs-br">abs-br</div>
            <div class="green w50 h50 flex-row-center abs-c">abs-c</div>
            <div class="green w50 h50 flex-row-center abs-cl">abs-cl</div>
            <div class="green w50 h50 flex-row-center abs-cr">abs-cr</div>
            <div class="green w50 h50 flex-row-center abs-ct">abs-ct</div>
            <div class="green w50 h50 flex-row-center abs-cb">abs-cb</div>
            <div class="yellow o50 w50 h50 flex-row-center abs-tl-br">abs-tl-br</div>
            <div class="yellow o50 w50 h50 flex-row-center abs-tl-tr">abs-tl-bl</div>
            <div class="yellow o50 w50 h50 flex-row-center abs-cl-cr">abs-cl-cr</div>
            <div class="yellow o50 w50 h50 flex-row-center abs-cr-cl">abs-cr-cl</div>
            <div class="yellow o50 w50 h50 flex-row-center abs-cb-ct">abs-cb-ct</div>
            <div class="yellow o50 w50 h50 flex-row-center abs-bl-ct">abs-bl-ct</div>
            <div class="yellow o50 w50 h50 flex-row-center abs-br-ct">abs-br-ct</div>
        </div>
    </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/vue/2.2.5/vue.min.js" type="text/javascript"></script>
<script type="text/javascript">
    new Vue({
        el: '#app',
        data: {
            width: 500
        }
    });
</script>

</body>
</html>
