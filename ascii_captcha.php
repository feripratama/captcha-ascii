<?php

function ascii_captcha($a1, $a2, $a3, $a4){
$a = "
<pre>
888
 88
 88
 88
 88
</pre>";

$b = "
<pre>
888888
    88
888888
88
888888
</pre>";

$c = "
<pre>
888888
    88
  8888
    88
888888
</pre>";

$d = "
<pre>
   888
88  88
8888888
    88
    88
</pre>";

$e = "
<pre>
88888
88
88888
    88
88888
</pre>";

$f = "
<pre>
 8888
88
88888
88  88
 8888
</pre>";

$g = "
<pre>
888888
    88
    88
    88
    88
</pre>";

$i = "
<pre>
888888
++  ++
88++88
++  ++
888888
</pre>";

$j = "
<pre>
888888
88  88
888888
    88
888888
</pre>";

$k = "
<pre>
888888
88  88
88  88
88  88
888888
</pre>";

  //echo $a.$b.$c.$d.$e.$f.$g.$i.$j.$k;

  $angka = [$k,$a,$b,$c,$d,$e,$f,$g,$i,$j];
  $r1 = rand(0,24);
  $r2 = rand(0,24);
  $r3 = rand(0,24);
  $r4 = rand(0,24);

  $huruf = range(a,z);

  $f1 = $huruf[$r1];
  $f2 = $huruf[$r2];
  $f3 = $huruf[$r3];
  $f4 = $huruf[$r4];



  return str_replace('8', $f1, $angka[$a1]).str_replace('8', $f2, $angka[$a2]).str_replace('8', $f3, $angka[$a3]).str_replace('8', $f4, $angka[$a4]);

}
?>
