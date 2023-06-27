# DIGITO VERIFICACIÓN DIAN COLOMBIA (PHP & Laravel Framework) v1.x

![Logo](https://github.com/rmunate/DIAN/assets/91748598/bc0f3516-08ab-4388-b236-2cdb27cfe40a)

## Obtenga el dígito de verificación de cualquier cédula de acuerdo con la norma de la DIAN en Colombia. 

Una forma simple, rápida y confiable de obtener el digito de verificación de cualquier NIT en Colombia, esto de acuerdo con la resolución 187620 de 2008.

## _Instalacion_

```console
composer require rmunate/dian-colombia
```

Asegúrate de que en el `composer.json` tengas la biblioteca en la última versión. `"rmunate/dian-colombia": "^1.0"`

### Obtener el digito de verificación.
```php
//Importar Uso De Libreria.
use Rmunate\DianColombia\DIAN;

//Calcular Digito.
$digito = DIAN::digitoVerificacion(1003618585);
```
| METODO | DESCRIPCIÓN |
| ------ | ------ |
| `DIAN::digitoVerificacion(1016080XXX)` | Retorna el dígito de verificación de cualquier cédula de acuerdo a la norma vigente de la DIAN en Colombia resolución 187620 de 2008. |

## Creator
- 🇨🇴 Raúl Mauricio Uñate Castro. (raulmauriciounate@gmail.com)

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)