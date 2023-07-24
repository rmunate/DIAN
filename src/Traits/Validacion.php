<?php

namespace Rmunate\DianColombia\Traits;

trait Validacion
{
    /**
     * Valida si la cédula es numérica.
     *
     * @return bool Retorna true si la cédula es numérica, de lo contrario retorna false.
     */
    public function inputValido()
    {
        if (!is_numeric($this->cedula)) {
            return false;
        }

        return true;
    }
}
