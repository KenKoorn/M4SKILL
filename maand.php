<?php
$currentMonth = date('n');

switch ($currentMonth) {
  case 1:
    echo "Januari";
    break;
  case 2:
    echo "Februari";
    break;
  case 3:
    echo "Maart";
    break;
  case 4:
    echo "April";
    break;
  case 5:
    echo "Mei";
    break;
  case 6:
    echo "Juni";
    break;
  case 7:
    echo "Juli";
    break;
  case 8:
    echo "Augustus";
    break;
  case 9:
    echo "September";
    break;
  case 10:
    echo "Oktober";
    break;
  case 11:
    echo "November";
    break;
  case 12:
    echo "December";
    break;
  default:
    echo "Ongeldige maand";
}
?>
