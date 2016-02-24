<?php
        echo "De volgende momenten zijn nog beschikbaar:<ul>";
        
        $kapperAgenda["9.15"] = "Mevr. Pietersen";
        $kapperAgenda["9.30"] = "";
        $kapperAgenda["9.45"] = "";
        $kapperAgenda["10.00"] = "Mevr. Willems";
        $kapperAgenda["10.15"] = "Mevrouw Jansen";
        $kapperAgenda["10.30"] = "Meneer Kabapao";

        print("</ul>");
        echo "<table border=1>";
        foreach ($kapperAgenda as $tijd => $afspraak) {
            echo "
                    <tr>
                        <td>".$tijd." </td><td>".$afspraak." </td>
                    </tr>
            ";
        }
        echo "</table>";
        echo "<br>";
       foreach($kapperAgenda as $tijd => $afspraak) {
           
            if($afspraak == "") {
                echo "<li>" . $tijd . "</li>";
            };
        }
    ?>