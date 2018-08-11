<?php

return [

    'license_key' => 'Llave de licencia',
    'license_key_instruct' => 'Introduce la llave para el dominio correspondiente desde tu <a href="https://statamic.com/account/licenses" target="_blank">cuenta de Statamic</a>.',

    'locales' => 'Idiomas',
    'locales_instruct' => 'Los idiomas desde los que se podrá acceder a tu sitio.',

    'timezone' => 'Zona horaria',
    'timezone_instruct' => 'La <a href="http://php.net/manual/en/timezones.php" target="_blank">zona horaria</a> bajo la cual operará tu sitio.',

    'date_format' => 'Formato de fecha',
    'date_format_instruct' => 'El formato de fecha en PHP usado al mostrar variables de fecha sin formato.',

    'default_extension' => 'Extensión predeterminada',
    'default_extension_instruct' => 'La extensión para tus archivos de contenido.',

    'filesystems' => 'Sistemas de archivos',
    'filesystems_instruct' => 'Define cómo y de dónde se accederá a tus varios archivos.',

    'app_key' => 'Llave de aplicación',
    'app_key_instruct' => 'Esta llave se usa para asegurar tu aplicación. Debería ser una cadena fuerte de 32 caracteres.',

    'redactor' => 'Ajustes de redactor',
    'redactor_instruct' => 'Representaciones en YAML de <a href="https://imperavi.com/assets/pdf/redactor-documentation-10.pdf" target="_blank">objetos de ajustes de Redactor</a>.  
                            Cada artículo estará disponible al crear un campo Redactor.',

    'protect' => 'Protección del sistema',
    'protect_instruct' => 'Escribir un esquema de protección aquí aplicará para todo el front-end de tu sitio.',
    
    'csrf_exclude' => 'URLs excluídos de CSRF',
    'csrf_exclude_instruct' => 'Una lista de URLs a excluir de la protección CSRF',

    'php_max_memory_limit' => 'Límite de memoria PHP máxima',
    'php_max_memory_limit_instruct' => 'El máximo de memoria que Statamic intentará usar al llevar a cabo operaciones intensivas, como manipulación de imágenes.  
                                        Deja vacío para usar tanta memoria como se pueda. Puede especificar bytes o <a href="http://php.net/manual/es/faq.using.php#faq.using.shorthandbytes" target="_blank">valores shorthand reconocidos por PHP</a>.',

];
