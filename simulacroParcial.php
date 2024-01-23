<?php

// Ejercicio --> 1

/**
 * Punto --> a 
 * @param int $nLevel
 * @param string $name
 * @return $puntaje
 */

 function puntaje($nLevel, $name) {
    $puntaje = $nLevel * 20;
    $resto = $nLevel % 5;
    $puntaje = $puntaje + $resto;
    if ($name == "PAX") {
        $puntaje = $puntaje + 1000;
    }
    return $puntaje;
 }

 /**
  * Punto --> b 
  * Programa principal
  */

  echo "Ingrese el numero de nivel en el que se encuentra: ";
  $level = trim(fgets(STDIN));
  echo "Ingrese el nombre del enemigo al que se enfrenta: ";
  $names = trim(fgets(STDIN));
  $names = strtoupper($names);
  $puntajes = puntaje($level, $names);
  echo "El puntaje es de: $puntajes.";

  // Ejercicio --> 2

  /**
  * Punto --> a 
  * @param float $km
  * @return $price
  */

 function costoServicio ($km) {
    if ($km < 1.5) {
        $price = 65.5;
    }
    elseif ($km >= 1.5 && $km < 4.5) {
        $price = 98.60;
    }
    elseif ($km >= 4.5 && $km < 10) {
        $price = 156;
    }
    elseif ($km > 10) {
        $plus = $km - 10;
        $price = 170.50 + ($plus * 6.50);
    }
    return $price;
 }

 /**
  * Punto --> b
  * @param float $price
  * @param string $formaPago
  * @param string $dia
  * @param string $cupon
  * @return $descuento
  */

  function descuento($price, $formaPago, $dia, $cupon) {
    $descuento = 0;
    if ($formaPago == "credito") {
        if ($dia == "JU" || $dia == "VI") {
            $porcentaje = (25 * $price) / 100;
            $descuento = $porcentaje;
        }
        else {
            $porcentaje = (3 * $price) / 100;
            $descuento = $porcentaje;
        }
    }
    else {
        $porcentaje = (5 * $price) / 100;
        $descuento =  $porcentaje;
    }
    if ($cupon == "yes") {
        $porcentaje = (10 * $price) / 100;
        $descuento = $descuento + $porcentaje;
    }
    return $descuento;
  }

  /**
   * Punto --> c
   * Programa principal
   */

 echo "Ingrese km: ";
 $kilometros = trim(fgets(STDIN));
 $prices = costoServicio($kilometros);
 echo "Ingrese forma de pago: ";
 $metodoPago = trim(fgets(STDIN));
 echo "Ingrese dia de la semana(LU/MA/MI/JU/VI/SA/DO): ";
 $day = trim(fgets(STDIN));
 $day = strtoupper($day);
 echo "Tiene cupon de descuento?(yes/no): ";
 $cuponDescuento = trim(fgets(STDIN));
 $cuponDescuento = strtolower($cuponDescuento);
 $totalDescuento = descuento($prices, $metodoPago, $day, $cuponDescuento);
 echo "Para la distancia $kilometros km, el costo del envio es: $$prices.\n";
 echo "Descuento: $$totalDescuento.\n";
 $valorFinal = $prices - $totalDescuento;
 echo "El valor final es de: $$valorFinal.\n";

 ?>
