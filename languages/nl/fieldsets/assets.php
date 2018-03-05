<?php

return [

    'image_manipulation_route' => 'Afbeelding bestanden route',
    'image_manipulation_route_instruct' => 'De URL waar je herschaalbare afbeeldingen worden geserveerd. Als gecachte afbeeldingen rechtstreeks worden geserveerd dan moet dit de URL zijn van het cache pad',

    'image_manipulation_secure' => 'Beveiligde afbeeldingen',
    'image_manipulation_secure_instruct' => 'Moet het serveren van de afbeeldingen beveiligd zijn? Hiervoor moet je sleutels generen in je tags.',

    'auto_crop' => 'Automatisch afbeeldingen croppen',
    'auto_crop_instruct' => 'Moeten afbeeldingen automatisch worden gecropped? Hun focus punt zal gebruikt worden indien gespecificeerd.',

    'image_manipulation_driver' => 'Afbeelding manipulatie driver',
    'image_manipulation_driver_instruct' => "In sommige gevallen is ImageMagick sneller, maar is niet beschikbaar op alle servers.",

    'image_manipulation_cached' => 'Serveer gecachte afbeeldingen rechtstreeks',
    'image_manipulation_cached_instruct' => 'Moeten afbeeldingen gegenereerd worden voor ze worden opgevraagd? [Lees meer](https://docs.statamic.com/reference/tags/glide#serving-cached-images)',

    'image_manipulation_cached_path' => 'Gecached afbeeldingen pad',
    'image_manipulation_cached_path_instruct' => 'Wanneer gecachte afbeeldingen rechtstreeks worden geserveerd, is dit waar ze worden opgeslaan. Dit moet een publiek beschikbare locatie zijn.',
];
