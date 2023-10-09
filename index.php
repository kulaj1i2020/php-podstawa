<?php
$temp=null;

switch($temp){
	case 1:$temp<=36 || $temp>=41;
	echo "Nie Żyjesz";
	break;
	case 2:$temp>=36 && $temp<=36.6;
	echo "Norma";
	break;
	case 3:$temp>=36.6 && $temp<=37;
	echo "Stan podgorączkowy";
	break;
	case 4:$temp>=37 && $temp<=41;
	echo "Gorączka";
	break;
	default:
	echo "Nieznana wartość";
	break;

}
// if($temp<=36 || $temp>=41)
//     {
//         echo "Nie Żyjesz";
//     }
//     else if($temp>=36 && $temp<=36.6)
//     {
//         echo "Norma";
//     }
//     else if($temp>=36.6 && $temp<=37)
//     {
//         echo "Stan podgorączkowy";
//     }
//     else if($temp>=37 && $temp<=41)
//     {
//         echo "Gorączka";
//     }
    