<?php
  $ocena=$_POST['ocena'];
  $plusminus=$_POST['plusminus'];
  $waga=$_POST['waga'];
  $razem=$ocena.$plusminus;
  echo $waga.", ".$ocena.$plusminus.", ".$razem;
 ?>
