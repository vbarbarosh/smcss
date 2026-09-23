<div class="mg15">

    <h3 id="display-flex-hsplit">display-flex-hsplit</h3>

    <table>
    <tbody>
    <tr><th>hsplit</th><td></td></tr>
    <tr><th>vsplit</th><td></td></tr>
    <tr><th>hsplit-uniform</th><td><pre>
@include hsplit
& > * { flex: 1 1 0; min-width: 0; min-height: 0 }
&:has(> .fluid) > * { flex: none }
&:has(> .fluid) > .fluid { flex: 1 1 0; min-width: 0; min-height: 0 }
</pre></td></tr>
    <tr><th>vsplit-uniform</th><td><pre>
@include vsplit
& > * { flex: 1 1 0; min-width: 0; min-height: 0 }
&:has(> .fluid) > * { flex: none }
&:has(> .fluid) > .fluid { flex: 1 1 0; min-width: 0; min-height: 0 }
</pre></td></tr>
    </tbody>
    </table>

</div>
