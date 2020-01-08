<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>docs • smcss (a css for prototyping)</title>
    <link href="../app.css?t=<?php echo filemtime('../app.css') ?>" rel="stylesheet" />
    <link href="../../../demos/demo.css?t=<?php echo filemtime('../../../demos/demo.css') ?>" rel="stylesheet" />
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
                <li>
                    <a href="../concepts" class="db lh20 p15">Concepts</a
                </li>
                <li class="app-pal-active">
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
                <li><a href="#background">background</a></li>
                <li><a href="#border">border</a></li>
                <li><a href="#box-shadow">box-shadow</a></li>
                <li><a href="#box-sizing">box-sizing</a></li>
                <li><a href="#button">button</a></li>
                <li><a href="#cursor">cursor</a></li>
                <li><a href="#display">display</a></li>
                <li><a href="#display-flex">display-flex</a></li>
                <li><a href="#display-flex-hsplit">display-flex-hsplit</a></li>
                <li><a href="#expand">expand</a></li>
                <li><a href="#float">float</a></li>
                <li><a href="#list">list</a></li>
                <li><a href="#margin">margin</a></li>
                <li><a href="#margin-group">margin-group</a></li>
                <li><a href="#opacity">opacity</a></li>
                <li><a href="#outline">outline</a></li>
                <li><a href="#overflow">overflow</a></li>
                <li><a href="#padding">padding</a></li>
                <li><a href="#padding-group">padding-group</a></li>
                <li><a href="#pointer-events">pointer-events</a></li>
                <li><a href="#position">position</a></li>
                <li><a href="#position-abs">position-abs</a></li>
                <li><a href="#position-fix">position-fix</a></li>
                <li><a href="#position-sticky">position-sticky</a></li>
                <li><a href="#scrollbar">scrollbar</a></li>
                <li><a href="#size">size</a></li>
                <li><a href="#text">text</a></li>
                <li><a href="#text-ellipsis">text-ellipsis</a></li>
                <li><a href="#theme">theme</a></li>
                <li><a href="#toggle">toggle</a></li>
                <li><a href="#transform">transform</a></li>
                <li><a href="#user-select">user-select</a></li>
                <li><a href="#zindex">zindex</a></li>
            </ul>
        </div>
        <div class="fluid p20 mg25 oa">

            <h1 class="xm">smcss &mdash; a css for prototyping</h1>

            <h2>Installation</h2>
<pre class="dashed p5 app-ff-roboto-mono">
npm i vbarbarosh/smcss
</pre>

            <h2>First try</h2>
<pre class="dashed p5 app-ff-roboto-mono">
echo -e "@import 'smcss'\n.foo\n\t@include sm('w100 h100 red')" > a.sass
sass -I node_modules a.sass > a.css
</pre>

            <?php include 'background.php' ?>
            <?php include 'border.php' ?>
            <?php include 'box-shadow.php' ?>
            <?php include 'box-sizing.php' ?>
            <?php include 'button.php' ?>
            <?php include 'cursor.php' ?>
            <?php include 'display.php' ?>
            <?php include 'display-flex.php' ?>
            <?php include 'display-flex-hsplit.php' ?>
            <?php include 'expand.php' ?>
            <?php include 'float.php' ?>
            <?php include 'font.php' ?>
            <?php include 'list.php' ?>
            <?php include 'margin.php' ?>
            <?php include 'margin-group.php' ?>
            <?php include 'opacity.php' ?>
            <?php include 'outline.php' ?>
            <?php include 'overflow.php' ?>
            <?php include 'padding.php' ?>
            <?php include 'padding-group.php' ?>
            <?php include 'pointer-events.php' ?>
            <?php include 'position.php' ?>
            <?php include 'position-abs.php' ?>
            <?php include 'position-fix.php' ?>
            <?php include 'position-sticky.php' ?>
            <?php include 'scrollbar.php' ?>
            <?php include 'size.php' ?>
            <?php include 'text.php' ?>
            <?php include 'text-ellipsis.php' ?>
            <?php include 'theme.php' ?>
            <?php include 'toggle.php' ?>
            <?php include 'transform.php' ?>
            <?php include 'user-select.php' ?>
            <?php include 'zindex.php' ?>

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

})();
</script>

</body>
</html>
