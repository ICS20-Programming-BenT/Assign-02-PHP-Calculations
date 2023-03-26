<?php

  //Get the user input
  $radiusOfCone = floatval($_POST["radius-cone"]);
  $heightOfCone = floatval($_POST["height-cone"]);

  //Perform mathematical equations
  $volumeOfCone = (pi()) * $radiusOfCone ** 2 * $heightOfCone / 3;
  $surfaceAreaOfCone = (pi()) * $radiusOfCone * ($radiusOfCone + (sqrt($heightOfCone ** 2 + $radiusOfCone ** 2))
?>

The volume of the cone is <?php echo round($volumeOfCone, 2) ?><br>
The surface area of the cone is <?php echo round($surfaceAreaOfCone, 2) ?>