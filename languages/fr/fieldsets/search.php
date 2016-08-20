<?php

return [

    'driver' => 'Driver',
    'driver_instruct' => 'Le service qui sera utilisé pour les recherches.',

    'algolia_api_key' => 'Clef d\'API Admin d\'Algolia',
    'algolia_app_id' => 'ID d\'Application Algolia',

    'auto_index' => 'Auto-indexation de recherche',
    'auto_index_instruct' => 'Activer ceci mettra automatiquement à jour l\'index de recherche quand le contenu est mis à jour.',

    'index_frequency' => 'Fréquence d\'auto-indexation',
    'index_frequency_instruct' => 'Le nombre minimale de minutes avant qu\'une modification du contenu ne déclenche une re-indexation.',
    
    'default_index' => 'Index par défaut',
    'default_index_instruct' => 'Le nom de l\'index de recherche par défaut.',

];
