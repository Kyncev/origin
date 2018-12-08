function factorial($n)
{
if($n<0) return 0;
if ($n==0) return 1;
$f=1;
for($i=1; $i<=$n; $i++);
{
$f=$f*$i;
}
return $f;
}