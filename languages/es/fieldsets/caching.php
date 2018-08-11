<?php

return [

    'stache' => 'El "Stache"',
    'stache_instruct' => 'Nuestro nombre de cariño para el caché interno de Statamic.',

    'stache_always_update' => '¿Actualizar el Stache en cada solicitud?',
    'stache_always_update_instruct' => 'Actualizar en cada solicitud permitirá que se detecten cambios directos a los archivos, pero afectará el desempeño.
                                       Si estás usando el panel de control para administrar contenido, puedes desactivar esto porque el Stache se actualizará cuando publiques.',

   'static_caching' => 'Caché de páginas estáticas',
   'static_caching_instruct' => 'Cachear las páginas estáticas permite que tus páginas se guarden como archivos de HTML plano, lo que trae increíbles beneficios en cuanto a velocidad.',

   'static_caching_enabled' => 'Activar',

   'static_caching_length' => 'Longitud predeterminada del caché',
   'static_caching_length_instruct' => 'Cuánto se debe cachear cada página, en minutos. Solo aplica cuando se usa el tipo "caché".',

   'static_caching_type' => 'Tipo de caché',
   'static_caching_type_instruct' => 'Guardar a un archivo generará archivos html en `static`, y deberás establecer reglas de rewrite en tu servidor.
                                      <a href="https://docs.statamic.com/caching#static-page" target="_blank">Leer más</a>.  
                                      De lo contrario, se usará el caché estándar.',

    'static_caching_file_path' => 'Ruta de archivos estáticos',
    'static_caching_file_path_instruct' => 'La ubicación donde se guardarán los archivos al usar el caché basado en archivos.',

    'static_caching_ignore_query_strings' => 'Ignorar cadenas de consulta (query strings)',
    'static_caching_ignore_query_strings_instruct' => 'Al activarse, una página se tratará como el mismo URL sin importar cualquier parámetro de cadena de consulta (query string).  
                                                       No se puede desactivar si se usa el caché estático basado en archivos.',

    'static_caching_exclude' => 'URLs excluídos',
    'static_caching_exclude_instruct' => 'Una lista de URLs que se deberían excluir del caché.',

    'static_caching_invalidation' => 'Reglas de invalidación',
    'static_caching_invalidation_instruct' => 'Un arreglo de reglas de invalidación.',


];
