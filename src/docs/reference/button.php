<div class="mg15">

    <h3 id="button">button</h3>

    <table>
    <tbody>
    <tr><th>xbutton</th><td><pre>
@mixin xbutton
    box-sizing: content-box // `chrome: box-sizing: border-box;`
    font-size: inherit // chrome: `padding: 1px 6px;`
    color: inherit // chrome: `color: buttontext;`
    border: none
    padding: 0
    background: none
    // &:hover
    // &:active
    // &:hover:active
    &:focus
        outline: none // chrome
    &::-moz-focus-inner
        border: none
</pre></td></tr>
    </tbody>
    </table>

</div>
