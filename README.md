# DIGITO VERIFICACIÓN DIAN COLOMBIA (PHP | LARAVEL)
> [![Raul Mauricio Uñate Castro](https://storage.googleapis.com/lola-web/storage_apls/RecursosCompartidos/LogoGithubLibrerias.png)](#)

Obtenga el dígito de verificación de cualquier cédula de acuerdo con la norma de la DIAN en Colombia. 

# Instalación
## _Instalación a través de Composer_

```console
composer require rmunate/dian-colombia 1.0.x-dev
```

## Metodo
Ingrese el numero de cedula como Integer.

| METODO | DESCRIPCIÓN |
| ------ | ------ |
| `DIAN::digitoVerificacion(1016080XXX)` | Retorna ewl digito de verificación de acuerdo a la norma de la DIAN en Colombia. |

```php
#Este metodo solo recibe enteros
$digitoVerificacion = DIAN::digitoVerificacion(1016080XXX);
```

## Mantenedores
- Ingeniero, Raúl Mauricio Uñate Castro (raulmauriciounate@gmail.com)

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)