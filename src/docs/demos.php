<?php require 'php/app.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>docs • smcss (a css for prototyping)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.44.0/codemirror.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.44.0/theme/monokai.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu+Mono|Roboto+Mono">
    <link href="app.css?t=<?php echo filemtime('app.css') ?>" rel="stylesheet" />
    <link href="../../demos/demo.css?t=<?php echo filemtime('../../demos/demo.css') ?>" rel="stylesheet" />
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
                <li><a href="#abs">abs</a></li>
                <li><a href="#basic">basic</a></li>
                <li><a href="#border">border</a></li>
                <li><a href="#box-shadow">box-shadow</a></li>
                <li><a href="#button">button</a></li>
                <li><a href="#center-text">center-text</a></li>
                <li><a href="#container">container</a></li>
                <li><a href="#cursor">cursor</a></li>
                <li><a href="#float">float</a></li>
                <li><a href="#hsplit">hsplit</a></li>
                <li><a href="#media-query">media-query</a></li>
                <li><a href="#modal">modal</a></li>
                <li><a href="#object-fit">object-fit</a></li>
                <li><a href="#specificity">specificity</a></li>
                <li><a href="#text">text</a></li>
                <li><a href="#toggle">toggle</a></li>
            </ul>
        </div>
        <div class="fluid p20 mg25 oa">

            <h1 class="xm">demos • smcss (a css for prototyping)</h1>

            <?php include 'demos/abs.php' ?>
            <?php include 'demos/basic.php' ?>
            <?php include 'demos/border.php' ?>
            <?php include 'demos/box-shadow.php' ?>
            <?php include 'demos/button.php' ?>
            <?php include 'demos/center-text.php' ?>
            <?php include 'demos/container.php' ?>
            <?php include 'demos/cursor.php' ?>
            <?php include 'demos/float.php' ?>
            <?php include 'demos/hsplit.php' ?>
            <?php include 'demos/media-query.php' ?>
            <?php include 'demos/modal.php' ?>
            <?php include 'demos/object-fit.php' ?>
            <?php include 'demos/specificity.php' ?>
            <?php include 'demos/text.php' ?>
            <?php include 'demos/toggle.php' ?>

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

<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.44.0/codemirror.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.44.0/mode/php/php.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.44.0/mode/xml/xml.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.44.0/mode/javascript/javascript.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.44.0/mode/css/css.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.44.0/mode/htmlmixed/htmlmixed.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.44.0/mode/clike/clike.min.js"></script>

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
            <vue-resize v-model="value">
                <iframe v-bind:src="value.url" class="db ww hh xborder"></iframe>
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

    Vue.component('vue-codemirror', {
        template: '<div v-once></div>',
        props: ['value', 'mode', 'placeholder', 'autofocus'],
        data: function () {
            return {
                orig: this.value
            };
        },
        watch: {
            value: function () {
                if (this.editor && this.value !== this.orig) {
                    this.editor.setValue(this.value);
                }
            }
        },
        methods: {
            api_replaceSelection: function (text) {
                this.editor.replaceSelection(text);
            },
            become_visible: function () {
                this.editor ? this.editor.refresh() : this.ready();
            },
            ready: function () {
                // https://codemirror.net/1/mixedtest.html
                // const mode = (!this.mode || this.mode == 'html') ? {mode: 'htmlmixed', htmlMode: true} : {mode: this.mode};
                const autofocus = typeof this.autofocus == 'string' ? true : !!this.autofocus;
                this.editor = CodeMirror(this.$el, {
                    theme: 'monokai',
                    mode: 'htmlmixed',
                    indentUnit: 4,
                    tabSize: 4,
                    indentWithTabs: false,
                    lineNumbers: false,
                    autofocus,
                    viewportMargin: Infinity,
                    readOnly: false,
                    extraKeys: {
                        'Tab': 'indentMore',
                        'Shift-Tab': 'indentLess',
                        'Ctrl-Enter': function () {
                            document.querySelector('form').submit();
                        }
                    },
                    value: this.value || '',
                    placeholder: this.placeholder || '',
                    // ...mode,
                });
                this.editor.on('change', this.change);
                this.$once('hook:beforeDestroy', this.clean);
            },
            clean: function () {
                this.editor.off('change', this.change);
                this.editor = null;
            },
            change: function () {
                this.orig = this.editor.getValue();
                this.$emit('input', this.orig);
            },
        },
        mounted: function () {
            const _this = this;
            const observer = new IntersectionObserver(function (entries) {
                if (entries[0].intersectionRatio == 0) {
                    // _this.is_visible = false;
                }
                else if (entries[0].intersectionRatio > 0) {
                    // _this.is_visible = true;
                    _this.become_visible();
                }
            }, {threshold: [0, 1]});
            observer.observe(this.$el);
            this.$once('hook:beforeDestroy', observer.disconnect.bind(observer));
        },
    });

    Vue.component('vue-resize', {
        props: ['value'],
        template: '#templ-vue-resize',
        data: function () {
            return {
                width: window.innerWidth*0.85,
                height: window.innerHeight*0.8,
            };
        },
        methods: {
            px,
            dd_top: function (event) {
                const {height} = this;
                dd({event, move: ctx => this.height = height - ctx.dy*2});
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
                dd({event, move: ctx => this.height = height + ctx.dy*2});
            },
            dd_top_left: function (event) {
                const {width, height} = this;
                dd({event, move: ctx => {
                    this.width = width - ctx.dx*2;
                    this.height = height - ctx.dy*2;
                }});
            },
            dd_top_right: function (event) {
                const {width, height} = this;
                dd({event, move: ctx => {
                    this.width = width + ctx.dx*2;
                    this.height = height - ctx.dy*2;
                }});
            },
            dd_bottom_left: function (event) {
                const {width, height} = this;
                dd({event, move: ctx => {
                    this.width = width - ctx.dx*2;
                    this.height = height + ctx.dy*2;
                }});
            },
            dd_bottom_right: function (event) {
                const {width, height} = this;
                dd({event, move: ctx => {
                    this.width = width + ctx.dx*2;
                    this.height = height + ctx.dy*2;
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
            modal_iframe: function (url, width) {
                modal({template: '<modal-iframe v-on:end="end" v-model="value" />', data: {value: {url, width}}});
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
