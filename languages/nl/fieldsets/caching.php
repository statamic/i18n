<?php

return [

    'stache' => 'The "Stache"',
    'stache_instruct' => 'Onze liefdevolle naam voor de interne cache van Statamic.',

    'stache_always_update' => 'De Stache updaten op elke request?',
    'stache_always_update_instruct' => 'Updaten op elke request zal ervoor zorgen dat je de aanpassingen meteen ziet, maar komt met een kost in performance.
                                       Als je het Controlepaneel gebruikt om inhoud te beheren kan je dit disablen sinds de Stache automatisch wordt aangepast als je publiceerd.',

   'static_caching' => 'Statische pagina cache',
   'static_caching_instruct' => 'Statische Pagina Cache zorgt ervoor dat je pagina’s worden opgeslaan als platte HTML bestanden voor enorme snelheidsvoordelen.',

   'static_caching_enabled' => 'Inschakelen',

   'static_caching_length' => 'Standaard cache lengte',
   'static_caching_length_instruct' => 'Hoe lang moet elke pagina worden gecached, in seconden. Dit is enkel van toepassing wanneer het "cache" type wordt gebruikt.',

   'static_caching_type' => 'Cache Type',
   'static_caching_type_instruct' => 'Opslaan naar bestand zal HTML bestanden genereren in `static` en je zal je .htaccess moeten instellen.
                                      Anders zal de standaard cache gebruikt worden.',

    'static_caching_file_path' => 'Pad voor statische bestanden',
    'static_caching_file_path_instruct' => 'De locatie waar bestanden worden weggeschreven als je bestandsgebaseerde caching gebruikt.',

    'static_caching_ignore_query_strings' => 'Negeer query strings',
    'static_caching_ignore_query_strings_instruct' => 'Wanneer ingeschakeld zal een pagina hetzelfde worden behandeld met of zonder query string parameters.  
                                                       Kan niet uitgeschakeld worden als bestandsgebaseerde caching gebruikt wordt.',

];
