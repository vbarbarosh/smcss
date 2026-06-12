<?php $d = __DIR__ ?>
<?php require "$d/../php/app.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>try | smcss (a css for prototyping)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.44.0/codemirror.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.44.0/theme/monokai.min.css">
    <link href="../app.css?t=<?php echo filemtime("$d/../app.css") ?>" rel="stylesheet" />
    <link href="../demos/demo.css?t=<?php echo filemtime("$d/../demos/demo.css") ?>" rel="stylesheet" />
    <script>
    document.documentElement.dataset.theme = localStorage.smcss_theme || 'light';
    function theme_toggle() {
        const next = document.documentElement.dataset.theme == 'dark' ? 'light' : 'dark';
        document.documentElement.dataset.theme = next;
        localStorage.smcss_theme = next;
    }
    </script>
</head>
<body>

<div id="app" class="abs-f vsplit">

    <div class="app-header">
        <a href="../concepts" class="app-brand">smcss</a>
        <span class="app-badge">v<?php e(version()) ?></span>
        <ul class="app-nav">
            <li><a href="../concepts">Concepts</a></li>
            <li><a href="../reference">Reference</a></li>
            <li><a href="../demos">Demos</a></li>
            <li><a href="../try" class="active">Try it out</a></li>
        </ul>
        <div class="app-actions">
            <a href="https://github.com/vbarbarosh/smcss" target="_blank">GitHub</a>
            <a href="#" onclick="theme_toggle(); return false" title="Toggle theme" class="app-theme-toggle"><span class="if-light">&#9789;</span><span class="if-dark">&#9788;</span></a>
        </div>
    </div>

    <div class="fluid hsplit">
        <div class="vsplit app-try-pane-editor">
            <div class="app-try-label">
                <span>html</span>
                <select class="app-try-prefill">
                    <option value="">prefill from a demo&hellip;</option>
                    <?php foreach (array_filter(glob("$d/../demos/*"), 'is_dir') as $dir): ?>
                        <?php if (count(glob("$dir/*.html")) == 0) continue; ?>
                        <optgroup label="<?php e(substr($dir, strlen("$d/../demos/"))) ?>">
                        <?php foreach (glob("$dir/*.html") as $file): ?>
                            <option value="<?php e(substr($file, strlen("$d/../demos/"))) ?>"><?php e(substr($file, strlen("$d/../demos/"))) ?></option>
                        <?php endforeach ?>
                        </optgroup>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="fluid oa app-try-editor"></div>
        </div>
        <div class="app-try-divider"></div>
        <div class="fluid vsplit">
            <div class="app-try-label"><span>preview</span></div>
            <iframe class="fluid xborder app-try-preview"></iframe>
        </div>
    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.44.0/codemirror.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.44.0/mode/xml/xml.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.44.0/mode/javascript/javascript.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.44.0/mode/css/css.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.44.0/mode/htmlmixed/htmlmixed.min.js"></script>

<script>
(function () {

    const STARTER = [
        '<div class="abs-f ma hsplit w400 h200 bs10 rainbow">',
        '    <div class="w100"></div>',
        '    <div class="fluid"></div>',
        '    <div class="w100"></div>',
        '</div>',
        '',
    ].join('\n');

    const preview = document.querySelector('.app-try-preview');

    const editor = CodeMirror(document.querySelector('.app-try-editor'), {
        theme: 'monokai',
        mode: 'htmlmixed',
        indentUnit: 4,
        tabSize: 4,
        indentWithTabs: false,
        lineNumbers: true,
        autofocus: true,
        viewportMargin: Infinity,
        extraKeys: {
            'Tab': 'indentMore',
            'Shift-Tab': 'indentLess',
        },
        value: localStorage.smcss_try || STARTER,
    });

    let timer = null;
    editor.on('change', function () {
        clearTimeout(timer);
        timer = setTimeout(update, 300);
    });

    // relative urls in the code (../vue/mixins.js, ../images/...) must work
    // as if it was a demo file one level deep in demos/. A srcdoc <base> is
    // not enough — firefox ignores it — so all urls are resolved into
    // absolute ones (in the preview document only, the editor keeps them)
    const base = new URL('../demos/_/', location.href).href;
    const css = new URL('../demos/demo.css', location.href).href;

    function absolutize(html) {
        return html.replace(/(src|href)=("|')(?![a-z]+:|\/|#)(.*?)\2/g, function (m0, attr, q, url) {
            return attr + '=' + q + new URL(url, base) + q;
        });
    }

    function update() {
        const code = editor.getValue();
        localStorage.smcss_try = code;
        // <\/...> instead of the plain closing tags: tools which inject scripts
        // into served html (live-server) match the first closing body tag in the
        // file and must not find one inside this string
        preview.srcdoc = '<!DOCTYPE html><html><head><base href="' + base + '"><link href="' + css + '" rel="stylesheet"><\/head><body>' + absolutize(code) + '<\/body><\/html>';
    }

    update();

    // resizable split
    const editor_pane = document.querySelector('.app-try-pane-editor');
    if (localStorage.smcss_try_split) {
        editor_pane.style.width = localStorage.smcss_try_split;
    }
    document.querySelector('.app-try-divider').addEventListener('mousedown', function (event) {
        event.preventDefault();
        const x0 = event.clientX;
        const w0 = editor_pane.getBoundingClientRect().width;
        document.body.classList.add('app-try-dragging');
        function move(e) {
            const w = Math.min(window.innerWidth - 300, Math.max(240, w0 + e.clientX - x0));
            editor_pane.style.width = w + 'px';
        }
        document.addEventListener('mousemove', move);
        document.addEventListener('mouseup', function () {
            document.removeEventListener('mousemove', move);
            document.body.classList.remove('app-try-dragging');
            localStorage.smcss_try_split = editor_pane.style.width;
            editor.refresh();
        }, {once: true});
    });

    // prefill from a demo
    function snippet(html) {
        // dev servers (live-server) inject a reload script into every .html
        // they serve, including the fetched demos — it is not demo code
        html = html.replace(/[ \t]*<!-- Code injected by live-server -->[\s\S]*?<\/script>\n?/, '');
        const m = html.match(/<body[^>]*>([\s\S]*?)<\/body>/);
        const lines = (m ? m[1] : html).replace(/^\s*\n/, '').trimEnd().split('\n');
        let spaces = 100;
        for (const line of lines) {
            if (line.trim() == '') {
                continue;
            }
            spaces = Math.min(spaces, line.length - line.trimStart().length);
        }
        return lines.map(v => v.slice(spaces)).join('\n').trim() + '\n';
    }
    const prefill = document.querySelector('.app-try-prefill');
    prefill.addEventListener('change', async function () {
        if (!prefill.value) {
            return;
        }
        const response = await fetch('../demos/' + prefill.value);
        editor.setValue(snippet(await response.text()));
        prefill.value = '';
    });

})();
</script>

</body>
</html>
