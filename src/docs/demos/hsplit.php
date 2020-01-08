<div class="mg15">

    <h3 id="hsplit">hsplit</h3>

    <?php foreach (glob('../../../demos/hsplit/*.html') as $file): ?>
        <h4><?php e(substr($file, 15)) ?></h4>
        <button v-on:click="modal_iframe(<?php e(json_encode($file)) ?>)">Preview</button>
        <form class="dib" action="https://codepen.io/pen/define" method="POST" target="_blank">
            <input type="hidden" name="data" value="<?php e(json_encode(['title' => substr($file, 15), 'html' => snippet($file), 'css_pre_processor' => 'sass'])) ?>">
            <input type="submit" value="CodePen">
        </form>
        <vue-codemirror value="<?php e(snippet($file)) ?>"></vue-codemirror>
    <?php endforeach ?>

</div>
