<?php
if ($argc !== 2) {
    echo "Usage: php exercise_4.php [string] \n";
    exit(1);
}
$sentence = $argv[1];
$words = explode(" ", $sentence);
$info = [];
$info['totalWords'] = count($words);
$info['differentWords'] = 0;
$info['wordsCounter'] = [];
foreach ($words as $word) {
    $lowerCaseWord = strtolower($word);
    if (array_key_exists($lowerCaseWord, $info['wordsCounter'])) {
        $info['wordsCounter'][$lowerCaseWord] += 1;
        continue;
    }
    $info['differentWords'] += 1;
    $info['wordsCounter'][$lowerCaseWord] = 1;
}
var_dump($info);
