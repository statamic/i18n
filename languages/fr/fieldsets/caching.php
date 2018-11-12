<?php

return [

    'stache' => 'Le "Stache"',
    'stache_instruct' => 'Notre petit nom pour le cache interne de Statamic.',

    'stache_always_update' => 'Mettre à jour le Stache à chaque requête ?',
    'stache_always_update_instruct' => 'Mettre à jour à chaque requête permettra de détecter les modifications directement effectuées sur les fichiers, mais cela a un impact sur les performances.
                                       Si vous utilisez le panneau de contrôle pour gérer le contenu, vous pouvez désactiver ceci car le Stache sera mis à jour à chaque publication.',

		'static_caching' => 'Cache de page statique',
  	'static_caching_instruct' => 'Le cache de page statique permet d’enregistrer vos pages web comme des fichiers HTML à plat, ce qui vous assure d’incroyables gains de vitesse.',

		'static_caching_enabled' => 'Activer',

		'static_caching_length' => 'Durée de cache par défaut',
    'static_caching_length_instruct' => 'La durée de mise en cache de chaque page, en minutes. Ne s’applique que lorsque vous utilisez le type "Cache".',

		'static_caching_type' => 'Type de mise en cache',
    'static_caching_type_instruct' => '"File" va générer des fichiers HTML dans `static`, et vous devrez également paramétrer des règles de ré-écriture sur votre serveur
                                      <a href="https://docs.statamic.com/caching#static-page" target="_blank">(en savoir plus)</a>.
                                       Sinon, le cache standard sera utilisé.',
                                       
    'static_caching_file_path' => 'Chemin serveur pour les fichiers statiques',
    'static_caching_file_path_instruct' => 'L’emplacement dans lequel les fichiers sont écrits quand vous utilisez le cache à base de fichiers statiques.',
    
    'static_caching_ignore_query_strings' => 'Ignorer les chaînes de requête',
    'static_caching_ignore_query_strings_instruct' => 'S’il est sur <b>Activer</b>, une page sera traitée comme une même URL, sans jamais tenir compte des paramètres de chaîne de requête.',
                                                      
		'static_caching_exclude' => 'URLs exclues',
    'static_caching_exclude_instruct' => 'Une liste d’URLs qui seront exclues de la mise en cache.',

    'static_caching_invalidation' => 'Règles d’invalidation',
    'static_caching_invalidation_instruct' => 'Une matrice de règles d’invalidation.',

    'cache_tags' => 'Balises Cache',
    'cache_tags_instruct' => 'Les balises de template {{ cache }} vous permettent de mettre en cache des sections de vos templates.',

    'cache_tags_enabled' => 'Activées',
    'cache_tags_enabled_instruct' => 'Confirme le bon fonctionnement de ces balises. La désactivation de ce paramètre s’appliquera à toutes les instances de ces balises.',
    
    
];
