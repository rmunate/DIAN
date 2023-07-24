<?php

namespace Rmunate\DianColombia\Traits;

trait Utilities
{
    /**
     * Retorna los factores de ponderación utilizados para calcular el dígito de verificación del NIT.
     *
     * @return array Arreglo asociativo de factores de ponderación para cada posición del NIT.
     */
    public function factores()
    {
        return [
            1  => 3,
            4  => 17,
            7  => 29,
            10 => 43,
            13 => 59,
            2  => 7,
            5  => 19,
            8  => 37,
            11 => 47,
            14 => 67,
            3  => 13,
            6  => 23,
            9  => 41,
            12 => 53,
            15 => 71,
        ];
    }

    /**
     * Retorna la longitud del NIT.
     *
     * @return int Longitud del NIT.
     */
    public function longitud()
    {
        return strlen($this->cedula);
    }

    /**
     * Extrae un dígito del NIT en una posición específica.
     *
     * @param int $i Posición del dígito a extraer.
     *
     * @return int Dígito extraído del NIT.
     */
    public function extraer($i)
    {
        return (int) substr($this->cedula, $i, 1);
    }

    /**
     * Calcula el residuo del NIT después de la suma ponderada de los dígitos.
     *
     * @param int $suma Suma ponderada de los dígitos del NIT.
     *
     * @return int Residuo del cálculo del dígito de verificación del NIT.
     */
    public function residuo($suma)
    {
        $residuo = $suma % 11;
        $digitoVerificacion = ($residuo > 1) ? (11 - $residuo) : $residuo;

        return (int) $digitoVerificacion;
    }
}
