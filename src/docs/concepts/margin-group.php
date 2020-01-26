<div class="mg15">

    <h3 id="margin-group">Margin Group</h3>

    <p>Margin group &mdash; is a way to distribute space among immediate children.
    Technically, its a class on an element which will set
    <code>margin-bottom</code> (or <code>margin-right</code>) on each of
    its immediate children except the last one.</p>

    <p>Block-level margin group <strong>mg<snap class="n">N</snap></strong></p>

    <div class="flex-row border silver mi15">
        <div class="w25p">
            <div><strong>-</strong></div>
            <div>
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
        <div class="w25p">
            <div><strong>mg5</strong></div>
            <div class="mg5">
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
        <div class="w25p">
            <div><strong>mg10</strong></div>
            <div class="mg10">
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
        <div class="w25p">
            <div><strong>mg15</strong></div>
            <div class="mg15">
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
    </div>

    <p>Inline-level margin group <strong>mi<span class="n">N</span></strong></p>

    <div class="flex-col border silver mg15">
        <div class="flex-row">
            <div class="w50"><strong>-</strong></div>
            <div class="flex-row">
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
        <div class="flex-row">
            <div class="w50"><strong>mi5</strong></div>
            <div class="flex-row mi5">
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
        <div class="flex-row">
            <div class="w50"><strong>mi10</strong></div>
            <div class="flex-row mi10">
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
        <div class="flex-row">
            <div class="w50"><strong>mi15</strong></div>
            <div class="flex-row mi15">
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
