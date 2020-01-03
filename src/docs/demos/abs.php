<div class="mg15">

    <h3 id="abs">abs</h3>

    <?php foreach (glob('../../demos/abs/*.html') as $file): ?>
        <h4><?php e(substr($file, 12)) ?></h4>
        <button v-on:click="modal_iframe(<?php e(json_encode($file)) ?>)">Preview</button>
        <vue-codemirror value="<?php e(snippet($file)) ?>"></vue-codemirror>
    <?php endforeach ?>

</div>
