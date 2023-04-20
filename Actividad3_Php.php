<!DOCTYPE html>
<html>
<head>
    <title>Formulario del trabajador</title>
</head>
<body>
    <form method="post" action="">
    Ingresar Ventas de la empresa: <br> <input type ="text" name="ventas"><br>
    Ingre el N° de hijos en edad escolar: <br> <input type ="text" name="nhijos"><br>
    <br>
    Resultado: <br>
    <input type="submit" name="Calcular" value="Calcular">
    </form>

    <?php
// Declaracion de variables
    
    $ventas=$_POST['ventas'];
    $nhijos=$_POST['nhijos'];
        $bonificacion=50 * $nhijos;
        $sueldo_bruto = 600 + (0.075*$ventas) + $bonificacion;
        $descuento = $sueldo_bruto*0.11;
        $sueldo_neto = $sueldo_bruto - $descuento;
        
    echo "El vendedor cuenta con una bonificación de :".$bonificacion." soles"."<br>"; 
    echo "El vendedor cuenta con un sueldo bruto de  :".$sueldo_bruto." soles"."<br>"; 
    echo "El vendedor cuenta con un descuento de  :".$descuento." soles"."<br>";
    echo "El vendedor cuenta con un sueldo neto de  :".$sueldo_neto." soles"."<br>";
    

//bonificacion = 50 * N° de hijos (escolar)
// sueldo_bruto = 600 + comision(7.5%*ventas) + bonificacion
// descuento = sueldo_bruto*0.11
// sueldo_neto = sueldo_bruto - descuento

// Se ingresa ventas, N° de hijos 


?>


</body>
</html>

