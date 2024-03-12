function decimal_to_binary($decimal) {
$binary = '';

// Handling the case for 0 separately
if ($decimal === 0) {
return '0';
}