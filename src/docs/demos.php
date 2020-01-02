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
                <li>
                    <a href="concepts.php" class="db lh20 p15">Concepts</a
                </li>
                <li>
                    <a href="reference.php" class="db lh20 p15">Reference</a>
                </li>
                <li class="app-pal-active">
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
                <li><a href="#hsplit">hsplit</a></li>
                <li><a href="#modal">modal</a></li>
            </ul>
        </div>
        <div class="fluid oa pv15 mg25">

            <h1 class="xm">smcss &mdash; a css for prototyping</h1>

            <?php include 'demos/hsplit.php' ?>
            <?php include 'demos/modal.php' ?>

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

<script id="templ-vue-resize" type="text/html">
    <div v-bind:style="{width: px(width), height: px(height)}" class="rel ma p15">
        <div v-on:mousedown="dd_top" class="abs-t h15 red cur-row-resize"></div>
        <div v-on:mousedown="dd_left" class="abs-l w15 red cur-col-resize"></div>
        <div v-on:mousedown="dd_right" class="abs-r w15 red cur-col-resize"></div>
        <div v-on:mousedown="dd_bottom" class="abs-b h15 red cur-row-resize"></div>
        <div v-on:mousedown="dd_top_left" class="abs-tl w15 h15 green cur-nwse-resize"></div>
        <div v-on:mousedown="dd_top_right" class="abs-tr w15 h15 green cur-nesw-resize"></div>
        <div v-on:mousedown="dd_bottom_left" class="abs-bl w15 h15 green cur-nesw-resize"></div>
        <div v-on:mousedown="dd_bottom_right" class="abs-br w15 h15 green cur-nwse-resize"></div>
        <div class="rel ww hh checkerboard">
            <slot />
        </div>
    </div>
</script>

<script id="templ-modal-iframe" type="text/html">
    <div v-on:click="click_shadow" class="fix-f oa flex-row" style="background: rgba(0, 0, 0, 0.25)">
        <div class="ma">
            <vue-resize>
                <iframe v-bind:src="value" class="db ww hh xborder"></iframe>
            </vue-resize>
        </div>
    </div>
</script>

<script>
(function () {

    function px(v) {
        return v ? `${v}px` : 0;
    }

    function dd(context)
    {
        const listeners = {mousemove, mouseup};
        const iframes = jQuery('iframe');

        iframes.css('pointer-events', 'none');
        begin();

        function begin() {
            jQuery(document).on(listeners);
            context.event.preventDefault();
            translate();
            context.x0 = context.x;
            context.y0 = context.y;
            context.dx = 0;
            context.dy = 0;
            if (typeof context.begin == 'function') {
                context.begin(context);
            }
        }

        function end() {
            iframes.css('pointer-events', '');
            jQuery(document).off(listeners);
            if (typeof context.end == 'function') {
                context.end(context);
            }
        }

        function translate() {
            if (typeof context.translate == 'function') {
                context.translate(context);
            }
            else {
                context.x = context.event.clientX;
                context.y = context.event.clientY;
            }
        }

        function mousemove(event) {
            context.event = event;
            translate();
            context.dx = context.x - context.x0;
            context.dy = context.y - context.y0;
            if (typeof context.move == 'function') {
                context.move(context);
            }
        }

        function mouseup(event) {
            context.event = event;
            end();
        }
    }

    function perc(v) {
        return v ? `${v}%` : 0;
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

    Vue.component('modal-iframe', {
        template: '#templ-modal-iframe',
        props: ['value'],
        methods: {
            click_shadow: function (event) {
                if (event.currentTarget === event.target) {
                    this.$emit('end');
                }
            }
        }
    });

    Vue.component('vue-resize', {
        template: '#templ-vue-resize',
        data: function () {
            return {
                width: 640,
                height: 480,
            };
        },
        methods: {
            px,
            dd_top: function (event) {
                const {height} = this;
                dd({event, move: ctx => this.height = height - ctx.dy});
            },
            dd_left: function (event) {
                const {width} = this;
                dd({event, move: ctx => this.width = width - ctx.dx*2});
            },
            dd_right: function (event) {
                const {width} = this;
                dd({event, move: ctx => this.width = width + ctx.dx*2});
            },
            dd_bottom: function (event) {
                const {height} = this;
                dd({event, move: ctx => this.height = height + ctx.dy});
            },
            dd_top_left: function (event) {
                const {width, height} = this;
                dd({event, move: ctx => {
                    this.width = width - ctx.dx*2;
                    this.height = height - ctx.dy;
                }});
            },
            dd_top_right: function (event) {
                const {width, height} = this;
                dd({event, move: ctx => {
                    this.width = width + ctx.dx*2;
                    this.height = height - ctx.dy;
                }});
            },
            dd_bottom_left: function (event) {
                const {width, height} = this;
                dd({event, move: ctx => {
                    this.width = width - ctx.dx*2;
                    this.height = height + ctx.dy;
                }});
            },
            dd_bottom_right: function (event) {
                const {width, height} = this;
                dd({event, move: ctx => {
                    this.width = width + ctx.dx*2;
                    this.height = height + ctx.dy;
                }});
            },
        },
    });

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
            modal_iframe: function (value) {
                modal({template: '<modal-iframe v-on:end="end" v-model="value" />', data: {value}});
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

    function modal(props)
    {
        return new Vue({
            el: document.body.appendChild(document.createElement('DIV')),
            mixins: [props],
            data: {
                retval: null,
            },
            methods: {
                end: function (retval) {
                    this.retval = retval;
                    jQuery(this.$el).fadeOut('fast', () => this.$destroy());
                },
                promise: function () {
                    return new Promise(resolve => {
                        this.$once('hook:beforeDestroy', () => resolve(this.retval));
                    });
                },
            },
            mounted: function () {
                jQuery(this.$el).hide().fadeIn('fast');
                this.$once('hook:beforeDestroy', () => jQuery(this.$el).remove());
            },
        });
    }

})();
</script>

</body>
</html>
