<?php

function e($string)
{
    echo htmlspecialchars($string);
}

function ee($string)
{
    echo $string;
}

function version()
{
    $d = __DIR__;
    return json_decode(file_get_contents("$d/../../../package.json"), true)['version'];
}

function snippet($file)
{
    $s = file_get_contents($file);
    $s = preg_replace('/^.*?<body.*?>\n\s*\n(.*)\s*<\/body>.*?$/s', '$1', $s);
    $s = rtrim($s);

    // Find out common number of spaces at the beginning of each line
    $spaces = 100;
    foreach (explode("\n", $s) as $line) {
        if ($line == '') {
            continue;
        }
        $spaces = min($spaces, strlen($line) - strlen(ltrim($line)));
    }

    // Remove the same amount of spaces from the beginning of each line
    $ret = '';
    foreach (explode("\n", $s) as $line) {
        $ret .= substr($line, $spaces) . "\n";
    }
    return rtrim($ret);
}
