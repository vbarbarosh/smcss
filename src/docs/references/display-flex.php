<div class="mg15">

    <h3 id="display-flex">display-flex</h3>

    <table>
    <tbody>
    <tr><th>flex-row</th><td><code>display: flex<br>flex-direction: row</code></td></tr>
    <tr><th>flex-irow</th><td><code>display: inline-flex<br>flex-direction: row</code></td></tr>
    <tr><th>flex-row-center</th><td><code>@include flex-row<br>@include flex-center</code></td></tr>
    <tr><th>flex-irow-center</th><td><code>@include flex-irow<br>@include flex-center</code></td></tr>
    <tr><th>flex-col</th><td><code>display: flex<br>flex-direction: col</code></td></tr>
    <tr><th>flex-icol</th><td><code>display: inline-flex<br>flex-direction: col</code></td></tr>
    <tr><th>flex-col-center</th><td><code>@include flex-col<br>@include flex-center</code></td></tr>
    <tr><th>flex-icol-center</th><td><code>@include flex-icol<br>@include flex-center</code></td></tr>
    <tr><th>flex-wrap</th><td></td></tr>
    <tr><th>flex-nowrap</th><td></td></tr>
    <tr><th>flex-wrap-r</th><td></td></tr>
    <tr><th>flex-center</th><td></td></tr>
    <tr><th>flex-align-start</th><td><code>align-items: flex-start</code></td></tr>
    <tr><th>flex-align-end</th><td><code>align-items: flex-end</code></td></tr>
    <tr><th>flex-align-center</th><td><code>align-items: center</code></td></tr>
    <tr><th>flex-align-baseline</th><td><code>align-items: baseline</code></td></tr>
    <tr><th>flex-align-stretch</th><td><code>align-items: stretch</code></td></tr>
    <tr><th>flex-justify-start</th><td><code>justify-content: flex-start</code></td></tr>
    <tr><th>flex-justify-end</th><td><code>justify-content: flex-end</code></td></tr>
    <tr><th>flex-justify-center</th><td><code>justify-content: center</code></td></tr>
    <tr><th>flex-justify-between</th><td><code>justify-content: space-between</code></td></tr>
    <tr><th>flex-justify-around</th><td><code>justify-content: space-around</code></td></tr>
    <tr><th>flex-grow</th><td><code>flex-grow: 1</code></td></tr>
    <tr><th>flex-nogrow</th><td><code>flex-grow: 0</code></td></tr>
    <tr><th>flex-shrink</th><td><pre>
flex-shrink: 1
flex-basis: auto
min-width: 0
min-height: 0
</pre></td></tr>
    <tr><th>flex-fluid</th><td><pre>
@include flex-grow
@include flex-shrink
// Fix for IE10 and IE11; *flex-basis: auto* doesn't work
-ms-flex-preferred-size: 0
</pre></td></tr>
    </tbody>
    </table>

</div>
