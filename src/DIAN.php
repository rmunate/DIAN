<?php

namespace Rmunate\DianColombia;

use Rmunate\DianColombia\Traits\Pesos;
use Rmunate\DianColombia\Bases\BaseDian;
use Rmunate\DianColombia\Traits\Resolucion;

class DIAN extends BaseDian
{
    use Pesos;
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
        $pesos = self::$PESOS;
        $suma = 0;

        // Convertir NIT a arreglo de dígitos
        $digitos = array_map('intval', str_split($this->nit));

        // Calcular la suma de multiplicaciones
        foreach ($digitos as $index => $digito) {
            $suma += $digito * $pesos[$index];
        }

        // Calcular el residuo
        $residuo = $suma % 11;

        // Calcular el dígito de verificación
        if ($residuo <= 1) {
            $dv = 0;
        } else {
            $dv = 11 - $residuo;
        }

        return $dv;
    }
}
