<div class="mg15">

    <h3 id="toggle">toggle</h3>

    <p class="p5 ph10 dashed theme-yellow">
        <strong>Work in progress.</strong>
        <br>
        This is an attempt to structure html/css for elements like checkboxes and radio buttons.
    </p>

    <p>Define <code>.toggle</code> classes with <code>.if-on</code> and <code>.if-off</code> </p>

    <p>The most basic <strong>toggle</strong></p>
    <pre class="dashed p5 app-ff-roboto-mono">
.toggle.active .if-off { display: none; }
.toggle:not(.active) .if-on { display: none; }
</pre>
    <pre class="dashed p5 app-ff-roboto-mono">
&lt;button v-on:click=&quot;toggle&quot; v-bind:class=&quot;{active: is_active}&quot; class=&quot;toggle&quot;&gt;
    &lt;span class=&quot;if-on&quot;&gt;ON&lt;/span&gt;
    &lt;span class=&quot;if-off&quot;&gt;OFF&lt;/span&gt;
&lt;/button&gt;
</pre>

    <div class="w500 ma p5 mg5 bs5 dashed">
        <div>
            <button v-on:click="toggle" v-bind:class="{active: is_active}" class="toggle">
                <span class="if-on">ON</span>
                <span class="if-off">OFF</span>
            </button>
            <button v-on:click="toggle" v-bind:class="{active: is_active}" class="toggle">
                <span class="if-on">ON</span>
                <span class="if-off">OFF</span>
            </button>
        </div>
        <div>
            <button v-on:click="toggle" v-bind:class="{active: is_active}" class="behavior-hov1">
                toggle
            </button>
            <button v-on:click="toggle" v-bind:class="{active: is_active}" class="behavior-hov1">
                toggle
            </button>
        </div>
        <div>
            <button v-on:click="toggle" v-bind:class="{active: is_active}" class="behavior-rot90">
                toggle
            </button>
            <button v-on:click="toggle" v-bind:class="{active: is_active}" class="behavior-rot90">
                toggle
            </button>
        </div>
        <div>
            <button v-on:click="toggle" v-bind:class="{active: is_active}" class="toggle mi5">
                <span>common</span>
                <span class="if-on">toggle [on]</span>
                <span class="if-off">toggle [off]</span>
            </button>
            <button v-on:click="toggle" v-bind:class="{active: is_active}" class="toggle mi5">
                <span>common</span>
                <span class="if-on">toggle [on]</span>
                <span class="if-off">toggle [off]</span>
            </button>
        </div>
        <div>
            <button v-on:click="toggle" v-bind:class="{active: is_active}" class="toggle2 mi5">
                <span>common</span>
                <span class="if-on">toggle [on]</span>
                <span class="if-off">toggle [off]</span>
            </button>
            <button v-on:click="toggle" v-bind:class="{active: is_active}" class="toggle2 mi5">
                <span>common</span>
                <span class="if-on">toggle [on]</span>
                <span class="if-off">toggle [off]</span>
            </button>
        </div>
        <div>
            <button v-on:click="toggle" v-bind:class="{active: is_active}" class="toggle-opacity mi5 rel rainbow" style="height: 50px;">
                <span>common</span>
                <span class="if-on abs-c">toggle [on]</span>
                <span class="if-off abs-c">toggle [off]</span>
            </button>
            <button v-on:click="toggle" v-bind:class="{active: is_active}" class="toggle-opacity mi5 rel rainbow" style="height: 50px;">
                <span>common</span>
                <span class="if-on abs-c">toggle [on]</span>
                <span class="if-off abs-c">toggle [off]</span>
            </button>
        </div>
        <div>
            <button v-on:click="toggle" v-bind:class="{active: is_active}" class="toggle-rot90 mi5 rel rainbow" style="height: 50px;">
                <span>common</span>
                <div class="abs-c"><div class="if-on">toggle rot90</div></div>
            </button>
            <button v-on:click="toggle" v-bind:class="{active: is_active}" class="toggle-rot90 mi5 rel rainbow" style="height: 50px;">
                <span>common</span>
                <div class="abs-c"><div class="if-on">toggle rot90</div></div>
            </button>
        </div>
    </div>

    <h4>Use Case #1</h4>

    <p>There is a BUTTON with SVG icon and text inside. This two
    elements should have slightly different gray colors by default,
    but they should have the same red color when button is hovered by
    mouse.</p>

    <p>One solution for this task is to use two separate elements with
    when generic .if-on and .if-off classes</p>

    <pre class="fluid dashed p5 app-ff-roboto-mono">
&lt;button class="toggle-hover app-color-silver1 app-hover-color-red"&gt;
    &lt;svg-icon-close class="if-on app-color-silver2"&gt;&lt;/svg&gt;
    &lt;svg-icon-close class="if-off app-color-red"&gt;&lt;/svg&gt;
    Disconnect
&lt;/button&gt;
</pre>

    <p>Another solution would be to use just one element but with
    a class prefixed with if-on</p>

    <div class="flex-row mi10">
        <pre class="w0 flex-fluid dashed p5 app-ff-roboto-mono oa">
&lt;button class="toggle-hover app-color-silver1 app-hover-color-red"&gt;
    &lt;svg-icon-close class="if-on-app-color-red app-color-silver2"&gt;&lt;/svg&gt;
    Disconnect
&lt;/button&gt;
</pre>
        <pre class="w0 flex-fluid dashed p5 app-ff-roboto-mono oa">
&lt;style&gt;
.toggle-hover .if-on-app-color-red { color: red; }
&lt;/style&gt;
</pre>
    </div>

</div>
