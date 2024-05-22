<?php

namespace Rmunate\DianColombia\Bases;

abstract class BaseDian
{
    /**
     * @param int $nit
     *
     * @return int
     */
    public static function digitoVerificacion(int $nit)
    {
        $calculo = new static($nit);

        return $calculo->digito();
    }
}
