<?php

return [

    'image_manipulation_route' => 'Afbeeldingenroute',
    'image_manipulation_route_instruct' => 'De URL waarvandaan je geschaalde afbeeldingen worden geserveerd. Als gecachte afbeeldingen rechtstreeks worden opgevraagd dan moet dit met de URL zijn van het gecachte pad',

    'image_manipulation_secure' => 'Beveiligde afbeeldingen',
    'image_manipulation_secure_instruct' => 'Moet het serveren van de afbeeldingen beveiligd zijn? Dan moeten er sleutels gegenereerd worden in uw tags.',

    'auto_crop' => 'Automatisch afbeeldingen croppen',
    'auto_crop_instruct' => 'Moeten afbeeldingen automatisch worden gecropped? Als er een focuspunt is ingesteld dan zal deze worden gebruikt.',

    'image_manipulation_driver' => 'Afbeeldingmanipulatiedriver',
    'image_manipulation_driver_instruct' => "In sommige gevallen is ImageMagick sneller, maar dit is niet beschikbaar op alle servers.",

    'image_manipulation_cached' => 'Serveer gecachte afbeeldingen rechtstreeks',
    'image_manipulation_cached_instruct' => 'Moeten afbeeldingen gegenereerd worden voor ze worden opgevraagd? [Lees meer](https://docs.statamic.com/reference/tags/glide#serving-cached-images)',

    'image_manipulation_cached_path' => 'Gecached afbeeldingenpad',
    'image_manipulation_cached_path_instruct' => 'Wanneer gecachte afbeeldingen rechtstreeks worden geserveerd dan worden ze hier opgeslagen. Dit moet een publiekelijk toegankelijke locatie zijn.',

    'image_manipulation_presets' => 'Afbeeldingsmanipulatie-instellingen',
    'image_manipulation_presets_instruct' => 'Defineer <a href="http://glide.thephpleague.com/1.0/config/defaults-and-presets/#presets" target="_blank">Glide instellingen</a> (als YAML) waarnaar u in templates wilt verwijzen. Deze worden automatisch gegenereerd bij het uploaden van afbeeldingen.',

    'thumbnail_max_width' => 'Maximale afbeeldingsbreedte voor miniatuurafbeelding',
    'thumbnail_max_width_instruct' => 'Van afbeeldingen die breder zijn dan dit worden geen miniatuurafbeeldingen gegenereerd.',

    'thumbnail_max_height' => 'Maximale afbeeldingshoogte voor miniatuurafbeelding',
    'thumbnail_max_height_instruct' => 'Van afbeeldingen die hoger zijn dan dit worden geen miniatuurafbeeldingen gegenereerd.',
];
