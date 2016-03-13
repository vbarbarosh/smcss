<?php
$active = @$_GET['s'];
$dirs = [];
foreach (scandir(__DIR__) as $file) {
    if ($file != '.' && $file != '..' && is_dir($file)) {
        $dirs[] = $file;
    }
}

?>
<ul class="xls xp xm">
    <?php foreach ($dirs as $dir): ?>
        <li>
            <a class="<?php echo ($active == $dir ? 'red' : '') ?>" href="<?php echo htmlspecialchars("index.php?s=$dir") ?>">
                <?php echo htmlspecialchars($dir) ?>
            </a>
        </li>
    <?php endforeach ?>
</ul>
