<div class="mg15">

    <h3 id="margin-group">margin groups</h3>

    <div class="flex-row mi15">
        <div>
            <table>
            <tbody>
            <tr><th>mg<span class="n">N</span></th><td><pre>.mg<span class="n">N</span> > :not(:last-child) { margin-bottom: <span class="n">N</span>; }</pre></td></tr>
            <tr><th>mi<span class="n">N</span></th><td><pre>.mi<span class="n">N</span> > :not(:last-child) { margin-right: <span class="n">N</span>; }</pre></td></tr>
            </tbody>
            </table>
        </div>
        <div>
            <p><strong>mg</strong> &mdash; vertical space between immediate children.</p>
            <p><strong>mi</strong> &mdash; horizontal space between immediate children.</p>
        </div>
    </div>

    <p>Margins and paddings should be distributed by container.</p>

    <h4>block-level margin groups <small>(children are distributed vertically)</small></h4>

    <pre class="dashed p5 app-ff-roboto-mono">
.mg5 > :not(:last-child) { margin-bottom: 5px; }
.mg10 > :not(:last-child) { margin-bottom: 10px; }
</pre>

    <div class="flex-row flex-wrap">
        <div class="w250 ma dashed p5 bs5">
            <div class="h100 dashed"></div>
            <div class="h100 dashed"></div>
            <div class="h100 dashed"></div>
        </div>

        <div class="w250 ma dashed p5 bs5 mg5">
            <div class="h100 dashed"></div>
            <div class="h100 dashed"></div>
            <div class="h100 dashed"></div>
        </div>

        <div class="w250 ma dashed p5 bs5 mg10">
            <div class="h100 dashed"></div>
            <div class="h100 dashed"></div>
            <div class="h100 dashed"></div>
        </div>

        <div class="w250 ma dashed p5 bs5 mg15">
            <div class="h100 dashed"></div>
            <div class="h100 dashed"></div>
            <div class="h100 dashed"></div>
        </div>
    </div>

    <h4>inline-level margin groups <small>(children are distributed horizontally)</small></h4>

    <pre class="dashed p5 app-ff-roboto-mono">
.mi5 > :not(:last-child) { margin-right: 5px; }
.mi10 > :not(:last-child) { margin-right: 10px; }
</pre>

    <div class="w500 ma mg20">

        <div class="flex-row flex-wrap w250 ma dashed p5 bs5">
            <div class="w25 dashed">a</div>
            <div class="w25 dashed">b</div>
            <div class="w25 dashed">c</div>
        </div>

        <div class="flex-row flex-wrap w250 ma dashed p5 bs5 mi5">
            <div class="w25 dashed">a</div>
            <div class="w25 dashed">b</div>
            <div class="w25 dashed">c</div>
        </div>

        <div class="flex-row flex-wrap w250 ma dashed p5 bs5 mi10">
            <div class="w25 dashed">a</div>
            <div class="w25 dashed">b</div>
            <div class="w25 dashed">c</div>
        </div>

        <div class="flex-row flex-wrap w250 ma dashed p5 bs5 mi15">
            <div class="w25 dashed">a</div>
            <div class="w25 dashed">b</div>
            <div class="w25 dashed">c</div>
        </div>
    </div>

</div>
