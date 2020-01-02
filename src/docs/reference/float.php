<div class="mg15">

    <h3 id="float">float</h3>

    <table>
    <tbody>
    <tr><th>xf</th><td><code>float: none</code></td></tr>
    <tr><th>fl</th><td><code>float: left</code></td></tr>
    <tr><th>fr</th><td><code>float: right</code></td></tr>
    <tr><th>xc</th><td><code>clear: none</code></td></tr>
    <tr><th>cb</th><td><code>clear: both</code></td></tr>
    <tr><th>cl</th><td><code>clear: left</code></td></tr>
    <tr><th>cr</th><td><code>clear: right</code></td></tr>
    <tr><th>clearfix</th><td><pre>
// http://compass-style.org/reference/compass/utilities/general/clearfix/
@mixin clearfix
    *zoom: 1
    &:after
        content: '\0020'
        display: block
        height: 0
        clear: both
        overflow: hidden
        visibility: hidden
</pre></td></tr>
    <tr><th>floats</th><td><pre>
@include clearfix
    > *
        @include fl
</pre></td></tr>
    </tbody>
    </table>

</div>
