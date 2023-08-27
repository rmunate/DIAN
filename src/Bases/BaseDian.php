<?php

namespace Rmunate\DianColombia\Bases;

abstract class BaseDian
{
    /**
     * @param int $nit
     *
     * @return int
     */
    public static function digitoVerificacion(int $nit): int
    {
        $calculo = new static($nit);

        return $calculo->digito();
    }
}
