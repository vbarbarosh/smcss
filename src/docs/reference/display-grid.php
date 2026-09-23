<div class="mg15">

    <h3 id="display-grid">display-grid</h3>

    <table>
    <tbody>
    <tr><th>grid-left-center-right</th><td><pre>
display: grid
grid-template-columns: minmax(0, 1fr) auto minmax(0, 1fr)
align-items: stretch
& > :first-child { max-width: 100%; justify-self: start }
& > :last-child { max-width: 100%; justify-self: end }
</pre></td></tr>
    <tr><th>grid-left-top-bottom</th><td><pre>
display: grid
grid-template-columns: auto 1fr
grid-template-rows: auto auto
align-items: start
& > :nth-child(1) { grid-row: 1 / span 2; margin: auto }
& > :nth-child(2) { align-self: end }
</pre></td></tr>
    </tbody>
    </table>

</div>
