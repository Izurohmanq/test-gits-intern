<?php

function BalancedBricket($input) {
    $list_bracket = [];
    $map = [
        ')' => '(',
        '}' => '{',
        ']' => '['
    ];

    // hapus white space
    // { ( ( [ ] ) [ ] ) [ ] } => contoh dari gform
    $whitespace_input = str_split(str_replace(' ', '', $input));

    foreach ($whitespace_input as $bracket) {
        if (in_array($bracket, ['(', '{', '['])) {
            array_push($list_bracket, $bracket);
        } elseif (in_array($bracket, [')', '}', ']'])) {
            if (empty($list_bracket) || array_pop($list_bracket) !== $map[$bracket]) {
                return "NO";
            }
        }
    }

    return empty($list_bracket) ? "YES" : "NO";
}

echo "Masukkan string bracket (contoh: { [ ( ) ] }) :\n";
$stdin = trim(fgets(STDIN));
echo "Output: " . BalancedBricket($stdin) . "\n";
