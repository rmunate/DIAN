<?php

namespace Rmunate\DianColombia;

class DIAN
{
    /**
     * Resolucion empleada para el calculo.
     *
     * @const string
     */
    public const RESOLUCION = 'DIAN - Resolución 187620 de 2008';

    /**
     * Pesos segun la resolucion de la Dian.
     *
     * @var array
     */
    private $pesos = [71, 67, 59, 53, 47, 43, 41, 37, 29, 23, 19, 17, 13, 7, 3];

    /**
     * Aloja el valor del Nit Suministrado.
     *
     * @var [int]
     */
    private $nit;

    /**
     * Constructor de la Casle.
     *
     * @param int $nit
     */
    public function __construct(int $nit)
    {
        $this->nit = $nit;
    }

    /**
     * Retorna el digito de verifiacion.
     *
     * @return int
     */
    public function digito(): int
    {
        $pesos = $this->pesos;
        $suma = 0;

        // Convertir NIT a arreglo de dígitos
        $digitos = array_map('intval', str_split($nit));

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

    /**
     * @param int $nit
     *
     * @return int
     */
    public static function digitoVerificacion(int $nit): int
    {
        $calculo = new self($nit);
        
        return $calculo->digito();
    }
}
