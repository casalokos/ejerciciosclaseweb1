<?php
$producto1= "arroz";
$producto2= "hueos";
$producto3= "frijoles";
$producto4= "panela";
$producto5= "cafe";
$producto6= "pasta";
$producto7= "media guar";
$producto8= "papas";
$producto9= "carne";
$producto10= "sal";

$precios1= 6000;
$precios2= 10000;
$precios3= 8000; 
$precios4= 4000;
$precios5= 12500;
$precios6= 6000;
$precios7=  15000;
$precios8=  6000;
$precios9= 25000;
$precios10= 800;

$total =$precios1+$precios2+$precios3+$precios4+$precios5+$precios6+$precios7+$precios8+$precios9+$precios10;
echo ('el total es de :'.$total);

if($total<=80000){
echo ("gracais por su compra");
}
else{
    echo ("debe pedir fiado"); 

}
?>