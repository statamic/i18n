<?php

return [

    'image_manipulation_route' => 'Ruta de elementos de imagen',
    'image_manipulation_route_instruct' => 'El URL de donde se servirán tus elementos de imagen redimensionables. Si sirves imágenes en caché directamente, este debería ser el URL de la ruta en caché.',

    'image_manipulation_secure' => 'Elementos de imagen seguros',
    'image_manipulation_secure_instruct' => '¿Debería ser segura la redimensión de imagen? Esto requerirá que generes llaves usando tus tags.',

    'auto_crop' => 'Recorte automático de imagen',
    'auto_crop_instruct' => '¿Las imágenes deberían recortarse automáticamente? Sus puntos focales se usarán, si están especificados.',

    'image_manipulation_driver' => 'Driver de manipulación de imágenes',
    'image_manipulation_driver_instruct' => "En algunos casos ImageMagick puede ser más rápido, pero no está disponible en todos los servidores.",

    'image_manipulation_cached' => 'Servir imágenes en caché directamente',
    'image_manipulation_cached_instruct' => '¿Deberían las imágenes ser generadas antes de ser solicitadas? <a href="https://docs.statamic.com/reference/tags/glide#serving-cached-images" target="_blank">Leer más</a>.',

    'image_manipulation_cached_path' => 'Ruta de imágenes en caché',
    'image_manipulation_cached_path_instruct' => 'Al servir imágenes en caché directamente, aquío es donde se guardarán. La ruta debe ser accesible públicamente.',

    'image_manipulation_presets' => 'Valores predeterminados de manipulación de imágenes',
    'image_manipulation_presets_instruct' => 'Especifica cualquier <a href="http://glide.thephpleague.com/1.0/config/defaults-and-presets/#presets" target="_blank">valor predeterminado de Glide</a> (en YAML) que quieras que pueda ser referenciado en los templates. Estos se generarán automáticamente al subir elementos.',

    'thumbnail_max_width' => 'Ancho máximo de miniaturas',
    'thumbnail_max_width_instruct' => 'Imágenes más anchas no generarán miniaturas.',

    'thumbnail_max_height' => 'Alto máximo de miniaturas',
    'thumbnail_max_height_instruct' => 'Imágenes más altas no generarán miniaturas.',


];
