<div class="mg15">

    <h3 id="expand">expand</h3>

    <table>
    <tbody>
    <tr><th>expand</th><td><pre>
@mixin expand($width, $height)
    @include db     // Very often target of this class will be A element
    @include rel    // Almost always children will be absolutely positioned
    &:before
        @include db
        content: ''
        padding-top: to-number($height) / to-number($width) * 100%
</pre></td></tr>
    </tbody>
    </table>

</div>
