<?php

namespace Rmunate\DianColombia;

/**
 * Clase para calcular digito de verificacion
 * --------------------------------------------
 * Desarrollado por: Raul Mauricio Uñate Castro
 * raulmauriciounate@gmail.com
 */

class DIAN {

	/* Tipo de Codificacion */
	public static function digitoVerificacion(int $cedula){

        /* Convertir a Entero */
        $nit = intval($cedula);
        
        /* Arreglo para iteracion */
        $arr = array(
            1 => 3,
            4 => 17,
            7 => 29,
            10 => 43,
            13 => 59,
            2 => 7,
            5 => 19,
            8 => 37,
            11 => 47,
            14 => 67,
            3 => 13,
            6 => 23,
            9 => 41,
            12 => 53,
            15 => 71
        );
        $x = 0;
        $y = 0;
        $z = strlen($nit);
        $dv = '';
        
        /* Iteraciones */
        for ($i=0; $i<$z; $i++) {
            $y = substr($nit, $i, 1);
            $x += ($y * $arr[$z-$i]);
        }
        
        /* Residuo */
        $y = $x%11;
        
        /* Retorno de Digito de Verificacion Dian */
        if ($y > 1) {
            $dv = 11-$y;
            return $dv;
        } else {
            $dv = $y;
            return $dv;
        }
        
	}

}
