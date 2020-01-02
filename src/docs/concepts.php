<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>docs &mdash; smcss</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Roboto+Mono:400,400i,500,500i|Roboto+Slab:400,500|Roboto:400,500,500i&display=swap&subset=cyrillic" rel="stylesheet">

    <style>
        body { margin: 0; padding: 0; }

        .app-background { background: #f8f8f8; }
        .app-border { border: 1px solid #e7e7e7; }
        .app-border-red { border: 1px solid #f00; }

        .app-ff-roboto { font-family: 'Roboto', sans-serif; }
        .app-ff-roboto-con { font-family: 'Roboto Condensed', sans-serif; }
        .app-ff-roboto-mono { font-family: 'Roboto Mono', monospace; }
        .app-ff-roboto-slab { font-family: 'Roboto Slab', serif; }

        .app-pal-header { background: #f8f8f8; color: #333; }
        .app-pal-active { background: #e7e7e7; color: #555; }

        table, tr, td, th { border: 1px solid #ddd; }
        td, th { text-align: left; padding: 2px 5px; }
        th { vertical-align: top; font-weight: 500; }
        table { border-collapse: collapse; }

        pre, code { margin: 0; padding: 0; font-family: 'Roboto Mono', monospace; font-size: 14px; }
        h1, h2, h3, h4, strong { font-weight: 500; }

        table { font-family: 'Roboto Mono', monospace; font-size: 14px; }

        ul, ol { list-style: none; }
        ul, ol, p { margin: 0; padding: 0; }

        .n { color: red; }

        h3 {
            position: sticky;
            top: 0;
            display: inline-block;
            margin: 0;
            padding: 5px 10px 5px 0;
            background: white;
            z-index: 1;
        }

        a {
            color: inherit;
            text-decoration: none;
        }
        a:hover {
            color: #555;
            background: #e7e7e7;
        }

        .max-w1140 { max-width: 1140px; }
        .lh20 { line-height: 20px; }
        .mla { margin-left: auto; }
        .w250 { width: 250px; }
        .sticky-t { position: sticky; top: 0; }
        .sticky-t50 { position: sticky; top: 50px; }

        /* --------------- */
        .hover-red:hover { color: red; }
        .active-red.active { color: red; }
        .hover-rot90:hover { transform: rotate(90deg); }
        .active-rot90.active { transform: rotate(90deg); }

        .toggle.active .if-off { display: none; }
        .toggle:not(.active) .if-on { display: none; }

        .toggle2.active:hover .if-on { display: none; }
        .toggle2.active:not(:hover) .if-off { display: none; }
        .toggle2:not(.active):hover .if-off { display: none; }
        .toggle2:not(.active):not(:hover) .if-on { display: none; }

        .behavior-hov1 { transition: color 0.3s; }
        .behavior-hov1:hover,
        .behavior-hov1.active { color: red; }
        .behavior-rot90 { transition: transform 0.3s; }
        .behavior-rot90:hover,
        .behavior-rot90.active { transform: rotate(90deg); }

        .toggle-opacity .if-on,
        .toggle-opacity .if-off { transition: opacity 0.25s; }
        .toggle-opacity:hover .if-off { opacity: 0; }
        .toggle-opacity:not(:hover).active .if-off { opacity: 0; }
        .toggle-opacity:not(:hover):not(.active) .if-on { opacity: 0; }

        .toggle-rot90 .if-on { transition: transform 0.25s; }
        .toggle-rot90:hover .if-on { transform: rotate(90deg); }
        .toggle-rot90:not(:hover).active .if-on { transform: rotate(90deg); }
        /* --------------- */
    </style>
    <link href="../../demos/demo.css" rel="stylesheet" />

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
                    <a href="concepts.php" class="db lh20 p15">Concepts</a
                </li>
                <li>
                    <a href="reference.php" class="db lh20 p15">Reference</a>
                </li>
                <li>
                    <a href="demos.php" class="db lh20 p15">Demos</a>
                </li>
                <li>
                    <a href="try.php" class="db lh20 p15">Try it out</a>
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
        <div class="fluid oa pv15 mg25">

            <h1 class="xm">smcss &mdash; a css for prototyping</h1>

            <?php include 'concepts/container.php' ?>
            <?php include 'concepts/margin-group.php' ?>
            <?php include 'concepts/hsplit.php' ?>

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
<script src="https://unpkg.com/bluebird@3.7.2/js/browser/bluebird.min.js"></script>
<script src="https://unpkg.com/vue@2.6.11/dist/vue.min.js"></script>

<script>
(function () {

    function px(v) {
        return v ? `${v}px` : 0;
    }

    class Checked
    {
        constructor(items) {
            const _this = this;
            this.items = items.map(function (orig) {
                const tmp = {
                    orig,
                    check() {
                        _this.active = tmp;
                    },
                    get is_checked() {
                        return _this.active === tmp;
                    }
                };
                return tmp;
            });
            this.active = this.items[0];
        }
    }

    new Vue({
        el: '#app',
        data: {
            width: 500,
            is_active: false,
            inner: new Checked([
                {preview: 'abs-c', name: 'c'},
                {preview: 'abs-c-tl', name: 'tl'},
                {preview: 'abs-c-tr', name: 'tr'},
                {preview: 'abs-c-bl', name: 'bl'},
                {preview: 'abs-c-br', name: 'br'},
                {preview: 'abs-c-ct', name: 'ct'},
                {preview: 'abs-c-cb', name: 'cb'},
                {preview: 'abs-c-cl', name: 'cl'},
                {preview: 'abs-c-cr', name: 'cr'},
            ]),
            outer: new Checked([
                {preview: 'abs-c', name: 'c'},
                {preview: 'abs-c-tl', name: 'tl'},
                {preview: 'abs-c-tr', name: 'tr'},
                {preview: 'abs-c-bl', name: 'bl'},
                {preview: 'abs-c-br', name: 'br'},
                {preview: 'abs-c-ct', name: 'ct'},
                {preview: 'abs-c-cb', name: 'cb'},
                {preview: 'abs-c-cl', name: 'cl'},
                {preview: 'abs-c-cr', name: 'cr'},
            ]),
            active: null,
        },
        computed: {
            resulted_class: function () {
                const a = this.inner.active.orig.name;
                const b = this.outer.active.orig.name;
                return (a == b) ? `abs-${a}` : `abs-${a}-${b}`;
            },
        },
        methods: {
            px,
            toggle: function () {
                this.is_active = !this.is_active;
            },
        },
    });

    async function am(fn)
    {
        return function (...args) {
            return Promise.method(fn).apply(this, args).catch(function (error) {
                console.log(error);
                return modal_error(error).promise();
            });
        };
    }

})();
</script>

</body>
</html>
