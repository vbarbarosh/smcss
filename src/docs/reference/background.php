<div class="mg15">

    <h3 id="background">background</h3>

    <table>
    <tbody>
    <tr><th>xbg</th><td><code>background: none</code> <span class="dib w100 h20 dashed xbg"></span></td></tr>
    <tr><th>black</th><td><code>background: #000</code> <span class="dib w100 h20 dashed black"></td></tr>
    <tr><th>gray</th><td><code>background: #888</code> <span class="dib w100 h20 dashed gray"></td></tr>
    <tr><th>silver</th><td><code>background: #ccc</code> <span class="dib w100 h20 dashed silver"></td></tr>
    <tr><th>white</th><td><code>background: #fff</code> <span class="dib w100 h20 dashed white"></td></tr>
    <tr><th>red</th><td><code>background: #f88</code> <span class="dib w100 h20 dashed red"></td></tr>
    <tr><th>green</th><td><code>background: #8f8</code> <span class="dib w100 h20 dashed green"></td></tr>
    <tr><th>blue</th><td><code>background: #88f</code> <span class="dib w100 h20 dashed blue"></td></tr>
    <tr><th>yellow</th><td><code>background: #ff8</code> <span class="dib w100 h20 dashed yellow"></td></tr>
    <tr><th>cyan</th><td><code>background: #8ff</code> <span class="dib w100 h20 dashed cyan"></td></tr>
    <tr><th>checkerboard</th><td><code>background: url('data:image/png;base64,...')</code> <span class="dib w100 h20 dashed checkerboard"></td></tr>
    <tr><th>rainbow</th><td><pre>
& > :nth-child(3n+1)
    @include red
& > :nth-child(3n+2)
    @include green
& > :nth-child(3n+3)
    @include blue</pre>
            <span class="dashed rainbow"><span class="dib w50 h20"></span><span class="dib w50 h20"></span><span class="dib w50 h20"></span></span>
            <div class="w100 dashed rainbow">
                <div class="h20"></div>
                <div class="h20"></div>
                <div class="h20"></div>
            </div>
        </td></tr>
    </tbody>
    </table>

</div>
