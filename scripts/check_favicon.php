<?php
$p = __DIR__ . '/../public/favicon.ico';
if (!file_exists($p)) {
    echo "MISSING\n";
    exit(2);
}
$size = filesize($p);
$f = fopen($p, 'rb');
$h = fread($f, 16);
fclose($f);
echo "found\n";
echo "size: $size bytes\n";
echo "header (hex): " . bin2hex($h) . "\n";
echo "header (ascii): " . preg_replace('/[^\x20-\x7E]/', '.', $h) . "\n";
// Simple ICO signature check: first 4 bytes 00 00 01 00
$hex = bin2hex(substr($h,0,4));
if (strtolower($hex) === '00000100') {
    echo "looks like a valid ICO file\n";
    exit(0);
} else {
    echo "does not match ICO signature (expected 00000100)\n";
    exit(3);
}
