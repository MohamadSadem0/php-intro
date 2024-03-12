function decimal_to_binary($decimal) {
$binary = '';

if ($decimal === 0) {
return '0';
}

while ($decimal > 0) {
$remainder = $decimal % 2;

$binary = $remainder . $binary;

$decimal = (int)($decimal / 2);
}

return $binary;
}