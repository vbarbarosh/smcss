<div class="mg15">

    <h3 id="border">border</h3>

    <div class="flex-row mi15">
        <div>
            <table>
                <tbody>
                <tr><th>xborder</th><td><code>border: none</code></td></tr>
                <tr><th>xborder-t</th><td><code>border-top: none</code></td></tr>
                <tr><th>xborder-l</th><td><code>border-left: none</code></td></tr>
                <tr><th>xborder-r</th><td><code>border-right: none</code></td></tr>
                <tr><th>xborder-b</th><td><code>border-bottom: none</code></td></tr>
                <tr><th>xborder-v</th><td><code>border-top: none<br>border-bottom: none</code></td></tr>
                <tr><th>xborder-h</th><td><code>border-left: none<br>border-right: none</code></td></tr>
                <tr><th>xborder-vl</th><td><code>border-top: none<br>border-left: none<br>border-bottom: none</code></td></tr>
                <tr><th>xborder-vr</th><td><code>border-top: none<br>border-right: none<br>border-bottom: none</code></td></tr>
                <tr><th>xborder-ht</th><td><code>border-top: none<br>border-left: none<br>border-right: none</code></td></tr>
                <tr><th>xborder-hb</th><td><code>border-left: none<br>border-right: none<br>border-bottom: none</code></td></tr>
                <tr><th>border</th><td><code>border: 1px solid</code></td></tr>
                <tr><th>dashed</th><td><code>border: 1px dashed</code></td></tr>
                <tr><th>xbr</th><td><code>border-radius: 0</code></td></tr>
                <tr><th>br<span class="n">N</span></th><td><code>border-radius: <span class="n">N</span></code></td></tr>
                </tbody>
            </table>
        </div>
        <div class="mg15">

            <p>Cut unwanted borders</p>

            <pre class="dashed p5 app-ff-roboto-mono">
.app-border-style1 {
    border: 1px solid black;
}
.app-border-style2 {
    border: 1px solid red;
}
</pre>

            <pre class="dashed p5 app-ff-roboto-mono">
&lt;div class=&quot;app-border-style1 xborder-v&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;app-border-style2 xborder-h&quot;&gt;&lt;/div&gt;
</pre>

            <div class="w500 p5 mg5 bs5">

                <div>
                    <div class="flex-row-center cbox w75 h75 silver fs12 border"></div>
                </div>

                <div class="flex-row mi5">
                    <div class="flex-row-center bbox w75 h75 silver fs12 border xborder-t">.xborder-t</div>
                    <div class="flex-row-center bbox w75 h75 silver fs12 border xborder-l">.xborder-l</div>
                    <div class="flex-row-center bbox w75 h75 silver fs12 border xborder-r">.xborder-r</div>
                    <div class="flex-row-center bbox w75 h75 silver fs12 border xborder-b">.xborder-b</div>
                </div>

                <div class="flex-row mi5">
                    <div class="flex-row-center bbox w75 h75 silver fs12 border xborder-h">.xborder-h</div>
                    <div class="flex-row-center bbox w75 h75 silver fs12 border xborder-ht">.xborder-ht</div>
                    <div class="flex-row-center bbox w75 h75 silver fs12 border xborder-hb">.xborder-hb</div>
                </div>

                <div class="flex-row mi5">
                    <div class="flex-row-center bbox w75 h75 silver fs12 border xborder-v">.xborder-v</div>
                    <div class="flex-row-center bbox w75 h75 silver fs12 border xborder-vl">.xborder-vl</div>
                    <div class="flex-row-center bbox w75 h75 silver fs12 border xborder-vr">.xborder-vr</div>
                </div>

            </div>

        </div>
    </div>

</div>
