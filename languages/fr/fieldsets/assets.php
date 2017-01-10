<?php

return [

    'image_manipulation_route' => 'Route des ressources images',
    'image_manipulation_route_instruct' => 'L\'URL à laquelle vos ressources d\'images redimensionnables seront disponibles. Si vous servez directement des images en cache, ce doit être l\'URL du chemin du cache.',

    'image_manipulation_secure' => 'Sécuriser les ressources images',
    'image_manipulation_secure_instruct' => 'Les redimensionnements d\'images doivent-ils être sécurisés ? Pour cela, il faudra que vous génériez des clefs en utilisant vos balises.',

    'auto_crop' => 'Rognage d\'image automatique',
    'auto_crop_instruct' => 'Les images doivent-elles être automatiquement rognées ? S\'ils sont précisés, leurs points de focus seront utilisés.',

    'image_manipulation_driver' => 'Driver de manipulation d\'images',
    'image_manipulation_driver_instruct' => "Dans certains cas ImageMagick peut être plus rapide, mais il n'est pas disponible sur tous les serveurs.",
    
    'image_manipulation_cached' => 'Servir directement des images en cache',
    'image_manipulation_cached_instruct' => 'Les images doivent-elles être générées avant qu\'elles soient appelées ? <a href="https://docs.statamic.com/reference/tags/glide#serving-cached-images" target="_blank">En savoir plus</a>.',

    'image_manipulation_cached_path' => 'Chemin serveur des images en cache',
    'image_manipulation_cached_path_instruct' => 'Lorsque vous servez directement des images en cache, c\'est l\'emplacement où elles sont stockées. Il faut impérativement que ce soit un emplacement accessible publiquement.',
];
