<h1> BUSREIS </h1>
<form name="form" action="" method="get">
  <input type="number" name="leeftijd" id="leeftijd" placeholder="Voer uw leeftijd in">
</form>

<?php
$leeftijd = $_GET['leeftijd'];
if($leeftijd >= "65" || $leeftijd >= "3" && $leeftijd <= "12"){
    ?>
    <h4> Uw busrit kost 5 Euro. </h4>
    <?php
}

else if($leeftijd > "12" && $leeftijd < "65"){
           ?>
    <h4> Uw busrit kost 10 Euro.</h4>
    <?php 
}

else if ($leeftijd > "0" && $leeftijd > "3"){
       ?>
    <h4> Uw busrit is gratis.</h4>
    <?php 
}

else if ($leeftijd == ""){
       ?>
    <h4> Voer een waarde in.</h4>
    <?php 
}
?>