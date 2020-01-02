<div class="mg15">

    <h3 id="position-abs">position-abs</h3>

    <div class="flex-row mi15">
        <table>
        <tbody>
        <tr><th>abs-f</th></tr>
        <tr><th>abs-t</th></tr>
        <tr><th>abs-b</th></tr>
        <tr><th>abs-l</th></tr>
        <tr><th>abs-r</th></tr>
        <tr><th>abs-c</th></tr>
        <tr><th>abs-tl</th></tr>
        <tr><th>abs-tl-c</th></tr>
        <tr><th>abs-tl-ct</th></tr>
        <tr><th>abs-tl-cb</th></tr>
        <tr><th>abs-tl-cl</th></tr>
        <tr><th>abs-tl-cr</th></tr>
        <tr><th>abs-tl-tr</th></tr>
        <tr><th>abs-tl-bl</th></tr>
        <tr><th>abs-tl-br</th></tr>
        <tr><th>abs-tr</th></tr>
        <tr><th>abs-tr-c</th></tr>
        <tr><th>abs-tr-ct</th></tr>
        <tr><th>abs-tr-cb</th></tr>
        <tr><th>abs-tr-cl</th></tr>
        <tr><th>abs-tr-cr</th></tr>
        <tr><th>abs-tr-tl</th></tr>
        <tr><th>abs-tr-bl</th></tr>
        <tr><th>abs-tr-br</th></tr>
        <tr><th>abs-bl</th></tr>
        <tr><th>abs-bl-c</th></tr>
        <tr><th>abs-bl-ct</th></tr>
        <tr><th>abs-bl-cb</th></tr>
        <tr><th>abs-bl-cl</th></tr>
        <tr><th>abs-bl-cr</th></tr>
        <tr><th>abs-bl-tl</th></tr>
        <tr><th>abs-bl-tr</th></tr>
        <tr><th>abs-bl-br</th></tr>
        <tr><th>abs-br</th></tr>
        <tr><th>abs-br-c</th></tr>
        <tr><th>abs-br-ct</th></tr>
        <tr><th>abs-br-cb</th></tr>
        <tr><th>abs-br-cl</th></tr>
        <tr><th>abs-br-cr</th></tr>
        <tr><th>abs-br-tl</th></tr>
        <tr><th>abs-br-tr</th></tr>
        <tr><th>abs-br-bl</th></tr>
        <tr><th>abs-c-ct</th></tr>
        <tr><th>abs-c-cb</th></tr>
        <tr><th>abs-c-cl</th></tr>
        <tr><th>abs-c-cr</th></tr>
        <tr><th>abs-c-tl</th></tr>
        <tr><th>abs-c-tr</th></tr>
        <tr><th>abs-c-bl</th></tr>
        <tr><th>abs-c-br</th></tr>
        <tr><th>abs-ct</th></tr>
        <tr><th>abs-ct-c</th></tr>
        <tr><th>abs-ct-cb</th></tr>
        <tr><th>abs-ct-cl</th></tr>
        <tr><th>abs-ct-cr</th></tr>
        <tr><th>abs-ct-tl</th></tr>
        <tr><th>abs-ct-tr</th></tr>
        <tr><th>abs-ct-bl</th></tr>
        <tr><th>abs-ct-br</th></tr>
        <tr><th>abs-cb</th></tr>
        <tr><th>abs-cb-c</th></tr>
        <tr><th>abs-cb-ct</th></tr>
        <tr><th>abs-cb-cb</th></tr>
        <tr><th>abs-cb-cl</th></tr>
        <tr><th>abs-cb-cr</th></tr>
        <tr><th>abs-cb-tl</th></tr>
        <tr><th>abs-cb-tr</th></tr>
        <tr><th>abs-cb-bl</th></tr>
        <tr><th>abs-cb-br</th></tr>
        <tr><th>abs-cl</th></tr>
        <tr><th>abs-cl-c</th></tr>
        <tr><th>abs-cl-ct</th></tr>
        <tr><th>abs-cl-cb</th></tr>
        <tr><th>abs-cl-cr</th></tr>
        <tr><th>abs-cl-tl</th></tr>
        <tr><th>abs-cl-tr</th></tr>
        <tr><th>abs-cl-bl</th></tr>
        <tr><th>abs-cl-br</th></tr>
        <tr><th>abs-cr</th></tr>
        <tr><th>abs-cr-c</th></tr>
        <tr><th>abs-cr-ct</th></tr>
        <tr><th>abs-cr-cb</th></tr>
        <tr><th>abs-cr-cl</th></tr>
        <tr><th>abs-cr-tl</th></tr>
        <tr><th>abs-cr-tr</th></tr>
        <tr><th>abs-cr-bl</th></tr>
        <tr><th>abs-cr-br</th></tr>
        </tbody>
        </table>
        <div class="flex-fluid">
            <div class="flex-row flex-align-start sticky-t">
                <div class="ma mg20 bs10" v-bind:style="{width: px(width)}">
                    <div class="rel h200 fs13 blue dashed">
                        <div v-bind:class="resulted_class" class="green p10 flex-row-center transition">
                            {{ resulted_class }}
                            <div v-bind:class="inner.active.orig.preview" class="w5 h5 br999 black transition"></div>
                        </div>
                        <div v-bind:class="outer.active.orig.preview" class="w10 h10 br999 border transition"></div>
                    </div>
                </div>
                <div class="flex-col-center p30 m30 mla mg30 dashed" style="background: rgba(0,0,0,0.1)">
                    <div class="w100 h100 green rel">
                        <button v-for="v in inner.items" v-on:mouseenter="v.check" v-bind:class="[v.orig.preview]" class="xbutton p5">
                            <span v-bind:class="{red: v.is_checked}" class="db w5 h5 border br999"></span>
                        </button>
                    </div>
                    <div class="w100 h100 blue rel">
                        <button v-for="v in outer.items" v-on:mouseenter="v.check" v-bind:class="[v.orig.preview]" class="xbutton p5">
                            <span v-bind:class="{red: v.is_checked}" class="db w5 h5 border br999"></span>
                        </button>
                    </div>
                    <p>{{ resulted_class }}</p>
                </div>
            </div>
        </div>
    </div>

</div>
