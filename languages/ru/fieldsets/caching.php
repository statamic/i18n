<?php

return [

    'stache' => 'The Stache',
    'stache_instruct' => 'Это наше ласковое имя для внутреннего тайника Statamic.',

    'stache_always_update' => 'Обновлять Stache по каждому запросу?',
    'stache_always_update_instruct' => 'Обновление по каждому запросу позволяет обнаруживать изменения непосредственно в файлах, но при этом происходит сбой производительности. Если вы используете панель управления для управления контентом, вы можете отключить это, так как Stache будет обновляться при публикации. ',

    'static_caching' => 'Кэширование статической страницы',
    'static_caching_instruct' => 'Статическая страница Кэширование позволяет сохранять ваши веб-страницы в виде плоских файлов HTML для получения невероятных преимуществ по скорости.',

    'static_caching_enabled' => 'Включить',

    'static_caching_length' => 'Длина кэша по умолчанию',
    'static_caching_length_instruct' => 'Сколько времени должна быть кэширована каждая страница за считанные минуты. Это применимо только при использовании типа «кеш». ',

    'static_caching_type' => 'Тип кэширования',
    'static_caching_type_instruct' => 'Сохранение файла будет генерировать html-файлы в `static`, и вам нужно будет настроить htaccess. В противном случае будет использоваться стандартный кэш. ',

    'static_caching_file_path' => 'Путь статических файлов',
    'static_caching_file_path_instruct' => 'Местоположение, где файлы будут записаны при использовании кэширования на основе файлов.',

    'static_caching_ignore_query_strings' => 'Игнорировать строки запроса',
    'static_caching_ignore_query_strings_instruct' => 'Когда эта опция включена, страница будет обрабатываться как один и тот же URL-адрес независимо от любых параметров строки запроса. Невозможно отключить при использовании статического кэширования на основе файлов. ',

    'static_caching_exclude' => 'Исключенные URL',
    'static_caching_exclude_instruct' => 'Список URL-адресов, которые должны быть исключены из кеширования.',

    'static_caching_invalidation' => 'Правила недействительности',
    'static_caching_invalidation_instruct' => 'Массив правил недействительности.',

    'cache_tags' => 'Cache Tags',
    'cache_tags_instruct' => 'The {{ cache }} template tags allow you to cache sections of your templates.',

    'cache_tags_enabled' => 'Enabled',
    'cache_tags_enabled_instruct' => 'Whether the tags actually function. Disabling this setting applies to all tag instances.',

];