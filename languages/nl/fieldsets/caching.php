<?php

return [

    'stache' => 'De "Stache"',
    'stache_instruct' => 'Onze liefdevolle naam voor de interne cache van Statamic.',

    'stache_always_update' => 'De Stache updaten bij elke request?',
    'stache_always_update_instruct' => 'Updaten bij elk request zal ervoor zorgen dat u aanpassingen aan de website driect ziet. Het gaat wel ten koste van de performance.
                                       Als u het Controlepaneel gebruikt om inhoud te beheren kan u dit uitschakelen aangezien de Stache automatisch wordt vernieuwd als u inhoud publiceerd.',

   'static_caching' => 'Statische paginacache',
   'static_caching_instruct' => 'Statische pagina-cache zorgt voor enorme snelheidsvoordelen, omdat uw pagina’s worden opgeslaan als platte HTML bestanden.',

   'static_caching_enabled' => 'Inschakelen',

   'static_caching_length' => 'Standaard cachelengte',
   'static_caching_length_instruct' => 'Hoe lang (in seconden) moet elke pagina worden gecached. Dit is alleen van toepassing wanneer het "cache" type wordt gebruikt.',

   'static_caching_type' => 'Cachetype',
   'static_caching_type_instruct' => 'Opslaan naar bestand zal HTML-bestanden genereren in `static`. U zult rewrite rules moeten instellen op uw server.
                                      <a href="https://docs.statamic.com/caching#static-page" target="_blank">Lees meer</a>.
                                      Anders zal de standaard cache gebruikt worden.',

    'static_caching_file_path' => 'Pad voor statische bestanden',
    'static_caching_file_path_instruct' => 'De locatie waar bestanden worden opgeslagen als u bestandsgebaseerde caching gebruikt.',

    'static_caching_ignore_query_strings' => 'Negeer query strings',
    'static_caching_ignore_query_strings_instruct' => 'Indien ingeschakeld zal een URL hetzelfde worden behandeld ondanks eventuele query string parameters.',

    'static_caching_exclude' => 'Uitgesloten URLs',
    'static_caching_exclude_instruct' => 'A lijst met URLs die niet gecachet mogen worden.',

    'static_caching_invalidation' => 'Invalidatieregels',
    'static_caching_invalidation_instruct' => 'Een array met invalidatieregels.',

    'cache_tags' => 'Cache Tags',
    'cache_tags_instruct' => 'De {{ cache }} template tags geven u de mogelijkheid om onderdelen uit uw templates te cachen.',

    'cache_tags_enabled' => 'Ingeschakeld',
    'cache_tags_enabled_instruct' => 'Of de tags daadwerkelijk werken. Het uitschakelen van deze instelling is van toepassingen op alle plekken waar de tags gebruikt worden.',
];
