$s ="123abc";
for ($i = strlen($s); $i >= 0; $i--) {
$s .=$s[$i];
$s[$i] = '';
}
