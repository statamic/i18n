<?php

return [

    'image_manipulation_route' => 'Percorso immagini',
    'image_manipulation_route_instruct' => "L'URL da cui vengono fornite le immagini ridimensionate. Se fornisci direttamente le immagini memorizzate nella cache, questo dovrebbe essere l'URL del percorso della cache.",

    'image_manipulation_secure' => 'Protezione immagini',
    'image_manipulation_secure_instruct' => 'Il ridimensionamento delle immagini dovrebbe essere protetto? Questo richiederà la generazione delle chiavi usando i tuoi tag.',

    'auto_crop' => 'Ritaglio immagine automatico',
    'auto_crop_instruct' => 'Le immagini dovrebbero essere ritagliate automaticamente? Saranno utilizzati i loro punti focali, se specificati.',

    'image_manipulation_driver' => 'Driver manipolazione immagini',
    'image_manipulation_driver_instruct' => "In alcuni casi ImageMagick può essere più veloce, ma non è disponibile su tutti i server.",

    'image_manipulation_cached' => 'Fornire direttamente le immagini memorizzate nella cache',
    'image_manipulation_cached_instruct' => 'Le immagini devono essere generate prima di essere richieste? <a href="https://docs.statamic.com/reference/tags/glide#serving-cached-images" target="_blank">Maggiori informazioni</a>.',

    'image_manipulation_cached_path' => 'Percorso delle immagini memorizzate nella cache',
    'image_manipulation_cached_path_instruct' => 'When serving cached images directly, this is where they will be stored. This must be a publicly accessible location.',
    'image_manipulation_cached_path_instruct' => 'Quando fornisci direttamente le immagini memorizzate nella cache, qui è dove saranno archiviate. Questo deve essere un percorso accessibile pubblicamente.',

    'image_manipulation_presets' => 'Preset manipolazione immagini',
    'image_manipulation_presets_instruct' => 'Specifica qualsiasi <a href="http://glide.thephpleague.com/1.0/config/defaults-and-presets/#presets" target="_blank">preset di Glide</a> (come YAML) che vuoi richiamare all\'interno dei template. Questi verranno generati automaticamente quando i media vengono caricati.',

    'thumbnail_max_width' => 'Larghezza massima per la generazione delle miniature',
    'thumbnail_max_width_instruct' => 'Non verranno generate miniature per le immagini più larghe del valore specificato.',

    'thumbnail_max_height' => 'Altezza massima per la generazione delle miniature',
    'thumbnail_max_height_instruct' => 'Non verranno generate miniature per le immagini più alte del valore specificato.',


];
