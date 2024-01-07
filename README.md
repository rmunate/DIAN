# DIGITO VERIFICACIÓN DIAN COLOMBIA

![LOGO-dian-colombia](https://github.com/alejandrodiazpinilla/DIAN/assets/51100789/8f84d52f-aa2c-4042-b4e6-e31b58fd8b2a)

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

🌟 ¡Apoya Mis Proyectos! 🚀

¡Realiza las contribuciones que veas necesarias, el código es totalmente tuyo. Juntos podemos hacer cosas asombrosas y mejorar el mundo del desarrollo. Tu apoyo es invaluable. ✨

Si tienes ideas, sugerencias o simplemente deseas colaborar, ¡estamos abiertos a todo! ¡Únete a nuestra comunidad y forma parte de nuestro viaje hacia el éxito! 🌐👩‍💻👨‍💻
