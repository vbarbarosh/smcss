<div class="mg15">

    <h3 id="text-ellipsis">text-ellipsis</h3>

    <div class="flex-row mi15">
        <table>
            <tbody>
            <tr><th>ellipsis</th><td class="app-ff-roboto">Show single line of text, cut overflow with ellipsis</td></tr>
            <tr><th>ellipsis2</th><td class="app-ff-roboto">
                Show only two lines of text, cut overflow with ellipsis <strong>(line-height + max-height)</strong>.
                <br>
                <strong>Cons:</strong>
                <br>
                It's no allowed to use <code>padding-bottom</code> on elements with <code>ellipsis2</code>.
                Text on it won't be hidden.
            </td></tr>
            </tbody>
        </table>
        <div class="flex-fluid mg5">
            <div class="w200 ma p5 bs5 dashed ellipsis">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, at deserunt dicta doloremque et facere harum hic incidunt, labore molestias nam nemo nisi pariatur placeat possimus quos reiciendis sed veniam?
            </div>
            <div class="w200 ma p20 bs5 dashed ellipsis2">
                <span class="green border db">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, at deserunt dicta doloremque et facere harum hic incidunt, labore molestias nam nemo nisi pariatur placeat possimus quos reiciendis sed veniam?</span>
            </div>
            <div class="w200 ma p5 bs5 dashed">
                <div class="ellipsis2">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, at deserunt dicta doloremque et facere harum hic incidunt, labore molestias nam nemo nisi pariatur placeat possimus quos reiciendis sed veniam?
                </div>
            </div>
        </div>
    </div>

</div>
