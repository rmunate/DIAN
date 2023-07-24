# DIGITO VERIFICACIÓN DIAN COLOMBIA (PHP & Laravel Framework) v1.x

![LOGO](https://github.com/rmunate/DIAN/assets/91748598/bc0f3516-08ab-4388-b236-2cdb27cfe40a)

## Tabla de Contenidos
- [Introducción](#introducción)
- [Instalación](#instalación)
- [Uso](#uso)
- [Creador](#creador)
- [Licencia](#licencia)

## Introducción
Obtenga el dígito de verificación de cualquier cédula de acuerdo con la norma de la DIAN en Colombia. Una forma simple, rápida y confiable de obtener el dígito de verificación de cualquier NIT en Colombia, esto de acuerdo con la resolución expedida por la DIAN.

## Instalación
Para instalar la dependencia a través de Composer, ejecuta el siguiente comando:
```console
composer require rmunate/dian-colombia
```
Asegúrate de que en el `composer.json` tengas la biblioteca en la última versión. `"rmunate/dian-colombia": "^1.0"`

## Uso
```php
// Importar Uso De Libreria.
use Rmunate\DianColombia\DIAN;

// Calcular Dígito.
$digito = DIAN::digitoVerificacion(1003618585);
```

## Creador
- 🇨🇴 Raúl Mauricio Uñate Castro
- Correo electrónico: raulmauriciounate@gmail.com

## Licencia
Este proyecto se encuentra bajo la [Licencia MIT](https://choosealicense.com/licenses/mit/).