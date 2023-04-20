<?php
$ngaseosa=$_POST['ngaseosa'];
$pgaseosa=$_POST['pgaseosa'];
$nuevo_precio_gaseosa = $pgaseosa*0.95;
$compra_total = ($ngaseosa*$nuevo_precio_gaseosa);
$descuento =  ($ngaseosa*$nuevo_precio_gaseosa)*0.07;
$pago = $compra_total - $descuento;
$caramelos = $ngaseosa*2;

echo "El nuevo precio de la gaseosa de 3L es : ".$nuevo_precio_gaseosa." soles"."<br>";
echo "El importe total de la compra por las gaseosas es : ".$compra_total." soles.""<br>";
echo  "El descuento es de: ".$descuento." soles"."<br>";
echo "El pago con descuento es de  :".$pago." soles"."<br>";
echo "Se obsequiearan un total de  :".$caramelos."caramelos"."<br>";

?>
