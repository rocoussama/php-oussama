<table border=1">
<tr> 
    <td> Zwem Club </td> 
    <td> Aantal leden</td> 
</tr>
<?php

$zwem["De spartelkuikens"] = 25;
$zwem["De waterbuffels"] = 32;
$zwem["Plonsmderin"] = 11;
$zwem["Bommetje"] = 23;
$zwemFoto = '<img src="http://nl.downloadicons.net/sites/default/files/zwemmen-pictogram-17997.png" height="42" width="42" />';

foreach( $zwem as $label => $waarde ) {
  $nummer = floor($waarde / 5);
  echo "<tr> <td>" .$label."</td> <td>" . $waarde."&nbsp;";  
    for($i = 1; $i <= $nummer; $i++){
        echo "<td>" . $zwemFoto . "</td>";
    }
echo "</td>";
 }
?>