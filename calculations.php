<?php
  //Get the user input
  $radiusOfCone = floatval($_POST["radius-cone"]);
  $heightOfCone = floatval($_POST["height-cone"]);

  //Calculate the volume
  $volumeOfCone = (pi()) * $radiusOfCone ** 2 * $heightOfCone / 3;
  $volumeRounded = round($volumeOfCone, 2);

  //Calculate the surface area
  $surfaceAreaOfCone = (pi()) * $radiusOfCone * ($radiusOfCone + (sqrt($heightOfCone ** 2 + $radiusOfCone ** 2)));
  $surfaceAreaRounded = round($surfaceAreaOfCone, 2);
?>

<h3>Results:</h3>
The volume of the cone is <?php echo "$volumeRounded" ?><br>
The surface area of the cone is <?php echo "$surfaceAreaRounded" ?>
