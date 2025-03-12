<?php
/**
 * Clase para operaciones matemáticas básicas
 * @author TuNombre
 */
class Calculadora {
    /**
     * Suma dos números
     * @param float $a Primer número
     * @param float $b Segundo número
     * @return float Resultado de la suma
     */
    public static function sumar($a, $b) {
        return $a + $b;
    }

    /**
     * Calcula el factorial de un número
     * @param int $n Número entero positivo
     * @return int Factorial de $n
     * @throws InvalidArgumentException Si $n es negativo
     */
    public static function factorial($n) {
        if ($n < 0) throw new InvalidArgumentException("Número negativo");
        return ($n <= 1) ? 1 : $n * self::factorial($n - 1);
    }

    /**
     * Convierte temperatura de Celsius a Fahrenheit
     * @param float $celsius Temperatura en Celsius
     * @return float Temperatura en Fahrenheit
     */
    public static function celsiusAFahrenheit($celsius) {
        return ($celsius * 9/5) + 32;
    }
}
?>
