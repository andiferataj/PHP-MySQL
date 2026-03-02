<?php

$sport = array('Football', 'Basketball', 'Handball', 'VoleyBall');
echo $sport[0];
$sport = ['Football', 'Basketball', 'Handball', 'Voleyball'];
echo end($sport);
echo count($sport);
for($i=0;$i<4;$i++){
    echo $sport[$i], "\n";
}

$len = count($sport);
for($i=0;$i<$len;$i++){
    echo $sport[$i], "\n";
}
?>