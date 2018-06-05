<?php

return [

    'image_manipulation_route' => 'Ścieżka obrazków',
    'image_manipulation_route_instruct' => 'URL, skąd twoje przetworzone obrazki będą wysyłane. Jeśli obrazki wysyłane są bezpośrednio, powinien to być URL cache.',

    'image_manipulation_secure' => 'Zabezpieczone obrazki',
    'image_manipulation_secure_instruct' => 'Czy obrazki powinny być zabezpieczone? Wymagane będzie generowanie kluczy za pomocą tagów.',

    'auto_crop' => 'Automatyczny crop',
    'auto_crop_instruct' => 'Czy obrazki powinnny być crop\'owane automatycznie? Jeśli podano, użyty będzie punkt centralny.',

    'image_manipulation_driver' => 'Image Manipulation Driver',
    'image_manipulation_driver_instruct' => "W niektórych przypadkach ImageMagick może być szybszy, ale nie jest dostępny na wszystkich serwerach.",

    'image_manipulation_cached' => 'Wysyłaj obrazki bezpośrednio',
    'image_manipulation_cached_instruct' => 'Cczy obrazki powinny być generowane zanim zostaną pobrane? <a href="https://docs.statamic.com/reference/tags/glide#serving-cached-images" target="_blank">Czytaj więcej</a>.',

    'image_manipulation_cached_path' => 'Ścieżka przetworzonych obrazków',
    'image_manipulation_cached_path_instruct' => 'Jeśli wysyłane są bezpośrednio, będzie to ścieżka, gdzie są zapisywane. Musi to być publiczn lokalizacja.',

    'image_manipulation_presets' => 'Image Manipulation Presets',
    'image_manipulation_presets_instruct' => 'Zdefiniuj [Glide presets](http://glide.thephpleague.com/1.0/config/defaults-and-presets/#presets) (jako YAML) które zostaną użyte w szablonach. Będą automatycznie używane, gdy media zostaną wgrane na serwer.',

    'thumbnail_max_width' => 'Max. szerokość dla miniatur',
    'thumbnail_max_width_instruct' => 'Obrazki szersza niż ta wartość nie będą posiadać miniatur.',

    'thumbnail_max_height' => 'Max. wysokość dla miniatur',
    'thumbnail_max_height_instruct' => 'Obrazki wyższe niż ta wartość nie będą posiadać miniatur.',


];
