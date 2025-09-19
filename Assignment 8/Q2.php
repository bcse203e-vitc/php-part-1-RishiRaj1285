<?php
$color = array('white', 'green', 'red');
foreach ($color as $c) {
    echo $c . ", ";
}
echo "<br><br>";
for ($i = 1; $i < count($color); $i++) {
    echo "• " . $color[$i] . "<br>";
}
echo "• " . $color[0] . "<br>";
?>
