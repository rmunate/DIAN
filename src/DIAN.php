<?php

namespace Rmunate\DianColombia;

use Rmunate\DianColombia\Bases\BaseDian;
use Rmunate\DianColombia\Traits\Utilities;
use Rmunate\DianColombia\Traits\Validacion;

class DIAN extends BaseDian
{
    use Utilities;
    use Validacion;

    private $cedula;

    /**
     * Constructor de la clase DIAN.
     *
     * @param int $cedula El número de cédula para el cual se calculará el dígito de verificación.
     */
    public function __construct(int $cedula)
    {
        $this->cedula = $cedula;
    }

    /**
     * Calcula el dígito de verificación para el número de cédula dado.
     *
     * @return int El dígito de verificación calculado.
     */
    public function digito(): int
    {
        // Verificar si el número de cédula es válido antes de proceder
        if (!$this->inputValido()) {
            // Debería ser null en lugar de false, ya que el tipo de retorno es int.
            return false;
        }

        $suma = 0;
        $factores = $this->factores();
        $longitudNit = $this->longitud();

        // Calcular la suma ponderada de cada dígito del NIT (asumiendo que NIT se refiere al número de cédula)
        for ($i = 0; $i < $longitudNit; $i++) {
            $digito = $this->extraer($i);
            $suma += ($digito * $factores[$longitudNit - $i]);
        }

        return $this->residuo($suma);
    }
}
