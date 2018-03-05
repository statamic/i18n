<?php

return [

    'image_manipulation_route' => 'Bild Medien Route', // 'Image assets route'
    'image_manipulation_route_instruct' => 'Die URL über die, die manipulierten Bilder ausgeliefert werden. Wenn die gecacheten Bild direkt ausgeliefert werden, sollte diese URL dem Cache-Pfad entsprechen.', // 'The URL where your resizable image assets will be served. If serving cached images directly, this should be the URL of the cached path.'

    'image_manipulation_secure' => 'Gesicherte Bild Medien', // 'Secure image assets'
    'image_manipulation_secure_instruct' => 'Sollen die Bilder gesichert ausgeliefert werden? Dafür sind generierte Sicherheitsschlüssel nötig.', // 'Should image resizing be secured? This will require that you generate keys using your tags.'

    'auto_crop' => 'Automatischer Bild-Bildausschnitt', // 'Automatic image crop'
    'auto_crop_instruct' => 'Should images be automatically cropped? Their focal points will be used, if specified.', // 'Should images be automatically cropped? Their focal points will be used, if specified.'

    'image_manipulation_driver' => 'Bild-Manipulations Treiber', // 'Image Manipulation Driver'
    'image_manipulation_driver_instruct' => "ImageMagick kann in gewissen Situation schneller sein.", // "In some cases ImageMagick can be faster, but isn't available on all servers."

    'image_manipulation_cached' => 'Gecachte Bilder direkt ausliefern', // 'Serve cached images directly'
    'image_manipulation_cached_instruct' => 'Bilder vor der Auslieferung zuerst Serverseitig erstellen, zwischenspeichern und dann ausliefern? <a href="https://docs.statamic.com/reference/tags/glide#serving-cached-images" target="_blank">Mehr dazu</a>.', // 'Should images be generated before they are requested? <a href="https://docs.statamic.com/reference/tags/glide#serving-cached-images" target="_blank">Read more</a>.'

    'image_manipulation_cached_path' => 'Pfad der zwischengespeicherten Bilder', // 'Cached images path'
    'image_manipulation_cached_path_instruct' => 'Wenn Bilder zwischengespeichert ausgeliefert werden, werden sie unter diesem Pfad gespeichert. Dieser Pfad muss öffentlich abrufbar sein.', // 'When serving cached images directly, this is where they will be stored. This must be a publicly accessible location.'

    'image_manipulation_presets' => 'Bild Manipulations Vorlagen', // 'Image Manipulation Presets'
    'image_manipulation_presets_instruct' => 'Definiere die gewünschte [Glide Vorlage](http://glide.thephpleague.com/1.0/config/defaults-and-presets/#presets) (als YAML). Die Bilder werden beim Hochladen automatisch gemäss Vorlage generiert und zwischengespeichert.', // 'Specify any [Glide presets](http://glide.thephpleague.com/1.0/config/defaults-and-presets/#presets) (as YAML) that you want to be referenced within templates. These will be automatically generated when assets are uploaded.'

    'thumbnail_max_width' => 'Maximale Breite für Thumbnails',
    'thumbnail_max_width_instruct' => 'Für Bilder die breiter sind werden keine Thumbnails generiert.',

    'thumbnail_max_height' => 'Maximale Höhe für Thumbnails',
    'thumbnail_max_height_instruct' => 'Für Bilder die höher sind werden keine Thumbnails generiert.',


];
