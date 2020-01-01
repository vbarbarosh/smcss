<div class="mg15">

    <h3 id="margin-group">Margin Group</h3>

    <p>A way to distribute space among immediate children. </p>

<!--
    <p>Groups separates adjacent siblings by equal amount of space.</p>
    <p>Can be of two types: group of blocks, and group of inline elements.</p>
    <p>By the method of grouping they may be: margin groups and padding groups.</p>
-->

    <h3>Block-level group <small>(margin group)</small></h3>

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

<h3>Inline-level group <small>(inline group)</small></h3>

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
