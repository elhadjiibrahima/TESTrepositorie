<?php
  function coordonnees_des_points($xa,$ya,$xb,$yb){
      return sqrt(pow($xb-$xa,2)+pow($yb-$ya,2));
  }
  ?>