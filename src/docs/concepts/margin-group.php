<div class="mg15">

    <h3 id="margin-group">Margin Group</h3>

    <p>Margin group &mdash; is a way to distribute space among immediate children.
    Technically, its a class on an element which will set
    <code>margin-bottom</code> (or <code>margin-right</code>) on each of
    its immediate children except the last one.</p>

    <div class="flex-row border silver mi15">
        <div class="w25p">
            <div>-</div>
            <div class="dashed blue">child 1</div>
            <div class="dashed blue">child 2</div>
            <div class="dashed blue">child 3</div>
            <div class="dashed blue">child 4</div>
            <div class="dashed blue">child 5</div>
            <div class="dashed blue">child 6</div>
            <div class="dashed blue">child 7</div>
            <div class="dashed blue">child 8</div>
        </div>
        <div class="w25p mg5">
            <div><strong>mg5</strong></div>
            <div class="dashed blue">child 1</div>
            <div class="dashed blue">child 2</div>
            <div class="dashed blue">child 3</div>
            <div class="dashed blue">child 4</div>
            <div class="dashed blue">child 5</div>
            <div class="dashed blue">child 6</div>
            <div class="dashed blue">child 7</div>
            <div class="dashed blue">child 8</div>
        </div>
        <div class="w25p mg10">
            <div><strong>mg10</strong></div>
            <div class="dashed blue">child 1</div>
            <div class="dashed blue">child 2</div>
            <div class="dashed blue">child 3</div>
            <div class="dashed blue">child 4</div>
            <div class="dashed blue">child 5</div>
            <div class="dashed blue">child 6</div>
            <div class="dashed blue">child 7</div>
            <div class="dashed blue">child 8</div>
        </div>
        <div class="w25p mg15">
            <div><strong>mg15</strong></div>
            <div class="dashed blue">child 1</div>
            <div class="dashed blue">child 2</div>
            <div class="dashed blue">child 3</div>
            <div class="dashed blue">child 4</div>
            <div class="dashed blue">child 5</div>
            <div class="dashed blue">child 6</div>
            <div class="dashed blue">child 7</div>
            <div class="dashed blue">child 8</div>
        </div>
    </div>

<!--
    <p>Groups separates adjacent siblings by equal amount of space.</p>
    <p>Can be of two types: group of blocks, and group of inline elements.</p>
    <p>By the method of grouping they may be: margin groups and padding groups.</p>
-->

    <h4>Block-level group <small>(margin group)</small></h4>

<pre>
xxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxx
...................... - margin/padding
xxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxx
...................... - margin/padding
xxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxx
...................... - margin/padding
xxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxx
</pre>

<h4>Inline-level group <small>(inline group)</small></h4>

<pre>
xxxxxxxxxx.xxxxxxxxxx.xxxxxxxxxx.xxxxxxxxxx
xxxxxxxxxx.xxxxxxxxxx.xxxxxxxxxx.xxxxxxxxxx
xxxxxxxxxx.xxxxxxxxxx.xxxxxxxxxx.xxxxxxxxxx
xxxxxxxxxx.xxxxxxxxxx.xxxxxxxxxx.xxxxxxxxxx
          |          |          |
          margin     margin     margin
          padding    padding    padding
</pre>

</div>
