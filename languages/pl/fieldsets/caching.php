<?php

return [

    'stache' => '"Stache"',
    'stache_instruct' => 'Nasza czuła nazwa dla wewnętrznego cache dla Statamic.',

    'stache_always_update' => 'Odświeżaj Stache na każde zapytanie?',
    'stache_always_update_instruct' => 'Odświeżanie zapewnia aktualizację plików przy każdej zmianie, ale ma negatywny wpływ na performance.
                                       Jesli używasz panelu konktrolnego, możesz wyłączyć tę opcję, ponieważ Stache będzie odświeżany za każdym razem gdy coś opublikujesz.',

   'static_caching' => 'Cache Statycznych Stron',
   'static_caching_instruct' => 'Cache Statycznych Stron pozwala by strony były serwowane jako pliki HTML, dzięki czemu zyskujesz niezwykłe wyniki szybkości wczytywania strony.',

   'static_caching_enabled' => 'Włącz',

   'static_caching_length' => 'Żywotność cache',
   'static_caching_length_instruct' => 'Jak długo każda ze stron będze zachowana, w minutach.',

   'static_caching_type' => 'Type cache',
   'static_caching_type_instruct' => 'Zapisywanie do pliku będzie generowało pliki `statyczne`, musisz zmienić plik htaccess.
                                      W innym przypadku standardowy cache będzie użyty.',

    'static_caching_file_path' => 'Ścieżka plików statycznych',
    'static_caching_file_path_instruct' => 'Lokalizacja plików do cache opartego na plikach.',

    'static_caching_ignore_query_strings' => 'Ignoruj query',
    'static_caching_ignore_query_strings_instruct' => 'Jeśli włączone, strona będzie wyświetlana tak samo bez względu na parametry URL.  
                                                       Nie może być wyłączone dla cache statycznych stron.',

    'static_caching_exclude' => 'Wykluczone adresy URL',
    'static_caching_exclude_instruct' => 'List adresów, które nie będą cachowane.',

    'static_caching_invalidation' => 'Zasady unieważniające',
    'static_caching_invalidation_instruct' => 'Tablica zasad unieważniających.',


];
