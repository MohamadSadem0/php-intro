function extract_and_sort_numbers($input_string) {
$numbers = [];
$current_number = '';

for ($i = 0; $i < strlen($input_string); $i++) { $char=$input_string[$i]; if (is_numeric($char)) { $current_number
    .=$char; } else { if (!empty($current_number)) { $numbers[]=(int)$current_number; $current_number='' ; } } } if
    (!empty($current_number)) { $numbers[]=(int)$current_number; } sort($numbers); return $numbers; }