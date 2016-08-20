<?php

return [

    'stache' => 'Le "Stache"',
    'stache_instruct' => 'Notre petit nom pour le cache interne de Statamic.',

    'stache_always_update' => 'Mettre à jour le Stache à chaque requête ?',
    'stache_always_update_instruct' => 'Mettre à jour à chaque requête permettra de détecter les modifications directement effectuées sur les fichiers, mais cela a un impact sur les performances.
                                       Si vous utilisez le panneau de contrôle pour gérer le contenu, vous pouvez désactiver ceci car le Stache sera mis à jour à chaque publication.',

		'static_caching' => 'Cache de page statique',
  	'static_caching_instruct' => 'Le cache de page statique permet d\'enregistrer vos pages web comme des fichiers HTML à plat, ce qui vous assure d\'incroyables gains de vitesse.',

		'static_caching_enabled' => 'Activer',

		'static_caching_length' => 'Durée de cache par défaut',
    'static_caching_length_instruct' => 'La durée de mise en cache de chaque page, en secondes.',

		'static_caching_type' => 'Type de mise en cache',
    'static_caching_type_instruct' => '"Enregistrer comme fichier" va générer des fichiers HTML dans `static`, et vous devrez paramétrer votre htaccess.
                                       Sinon, le cache standard sera utilisé.',
                                       
    'static_caching_ignore_query_strings' => 'Ignorer les chaînes de requête',
    'static_caching_ignore_query_strings_instruct' => 'S\'il est sur <b>Activer</b>, une page sera traitée comme une même URL, sans jamais tenir compte des paramètres de chaîne de requête.  
                                                       Ne peut pas être désactivé quand vous utilisez le cache statique de fichiers.',

];
