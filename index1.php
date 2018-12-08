$num = array (0 => array ('id' => '20110209172713', 'Date' => '2011-02-09', 'Weight' => '200'),
1 => array ('id' => '20110209172747', 'Date' => '2011-02-09', 'Weight' => '180'),
2 => array ('id' => '20110209172827', 'Date' => '2011-02-09', 'Weight' => '175'),
3 => array ('id' => '20110211204433', 'Date' => '2011-02-11', 'Weight' => '195'));

foreach($num as $key => $val)
{
$weight[] = $val['Weight'];
}

echo max($weight);
echo min($weight);