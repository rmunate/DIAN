<?php

namespace Rmunate\DianColombia;

use Rmunate\DianColombia\Bases\BaseDian;
use Rmunate\DianColombia\Traits\Resolucion;

class DIAN extends BaseDian
{
    use Resolucion;

    /**
     * Nit value used for the calculation.
     *
     * @var int
     */
    private $nit;

    /**
     * Constructor of the class.
     *
     * @param int $nit The Nit value to be used for the calculation.
     */
    public function __construct(int $nit)
    {
        $this->nit = $nit;
    }

    /**
     * Calculate the verification digit.
     *
     * @return int The calculated verification digit.
     */
    public function digito(): int
    {
        // Convertir la cédula a un arreglo de dígitos
        $digitos = array_map('intval', str_split($cedula));
    
        $sumaPares = 0;
        $sumaImpares = 0;
    
        // Sumar los dígitos en posiciones pares e impares
        foreach ($digitos as $index => $digito) {
            if (($index + 1) % 2 === 0) {
                $sumaPares += $digito;
            } else {
                $sumaImpares += $digito;
            }
        }
    
        // Multiplicar la suma de los dígitos impares por 2
        $sumaImpares *= 2;
    
        // Sumar la suma de los dígitos impares multiplicados por 2 con la suma de los dígitos pares
        $sumaTotal = $sumaPares + $sumaImpares;
    
        // Calcular el residuo al dividir la suma total por 10
        $residuo = $sumaTotal % 10;
    
        // Restar el residuo obtenido a 10 para obtener el dígito de verificación
        $digitoVerificacion = 10 - $residuo;
    
        // Si el dígito de verificación es 10, se reemplaza por 0
        if ($digitoVerificacion === 10) {
            $digitoVerificacion = 0;
        }
    
        return $digitoVerificacion;
    }
}
