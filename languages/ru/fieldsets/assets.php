<?php

return [
    'image_manipulation_route' => 'Маршрут папки изображения',
    'image_manipulation_route_instruct' => 'URL-адрес, в котором будут отображаться ваши изменяемые изображения. Если вы используете кешированные изображения напрямую, это должен быть URL-адрес кэшированного пути. ',

    'image_manipulation_secure' => 'Защищенные объекты изображения',
    'image_manipulation_secure_instruct' => 'Должен ли быть изменен размер изображения? Это нужно, чтобы вы генерировали ключи, используя теги. ',

    'auto_crop' => 'Автоматическая обрезка изображения',
    'auto_crop_instruct' => 'Должны ли изображения автоматически обрезаться? Их координаты будут использоваться, если они указаны. ',

    'image_manipulation_driver' => 'Драйвер для манипуляции изображением',
    'image_manipulation_driver_instruct' => 'В некоторых случаях ImageMagick может быть быстрее, но недоступен на всех серверах.',
    
    'image_manipulation_cached' => 'Подавать кэшированные изображения напрямую',
    'image_manipulation_cached_instruct' => 'Должны ли изображения генерироваться до их запроса? <a href="https://docs.statamic.com/reference/tags/glide#serving-cached-images" target="_blank"> Подробнее </a>. ',

    'image_manipulation_cached_path' => 'Путь кешированных изображений',
    'image_manipulation_cached_path_instruct' => 'При непосредственном обслуживании кешированных изображений это место, где они будут сохранены. Это должно быть общедоступное местоположение. ',

    'image_manipulation_presets' => 'Манипулирование изображениями',
    'image_manipulation_presets_instruct' => 'Укажите любые [префикс глайда] (http://glide.thephpleague.com/1.0/config/defaults-and-presets/#presets) (как YAML), на которые вы хотите ссылаться в шаблонах. Они будут автоматически генерироваться при загрузке активов. ',

    'thumbnail_max_width' => 'Максимальная ширина изображения для эскизов',
    'thumbnail_max_width_instruct' => 'Изображения, более широкие, чем это, не будут генерироваться эскизы.',

    'thumbnail_max_height' => 'Максимальная высота изображения для эскизов',
    'thumbnail_max_height_instruct' => 'Изображения, превышающие это, не будут генерироваться эскизы.',
];