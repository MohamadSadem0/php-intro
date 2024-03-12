function flip_number_digits($number) {
$flipped_number = 0;

while ($number > 0) {
$digit = $number % 10;
$flipped_number = $flipped_number * 10 + $digit;
$number = (int)($number / 10);
}

return $flipped_number;
}