<?php

return [

    'stache' => 'La "Stache"',
    'stache_instruct' => 'Il nostro affezionato nome per la cache interna di Statamic.',

    'stache_always_update' => 'Aggiornare la Stache ad ogni richiesta?',
    'stache_always_update_instruct' => 'L\'aggiornamento ad ogni richiesta consente di rilevare le modifiche dirette ai file, ma ha un impatto sulle prestazioni.
                                       Se stai utilizzando il pannello di controllo per gestire i contenuti, puoi disabilitarlo poiché la Stache verrà aggiornata quando pubblichi.',

   'static_caching' => 'Cache di Pagine Statiche',
   'static_caching_instruct' => 'La Cache di Pagine Statiche consente di salvare le pagine web come file HTML con incredibili vantaggi in termini di velocità.',

   'static_caching_enabled' => 'Abilitato',

   'static_caching_length' => 'Durata di default della Cache',
   'static_caching_length_instruct' => 'Per quanto tempo dovrebbe essere memorizzata ogni pagina, in minuti. Questo si applica solo quando si utilizza il tipo "cache".',

   'static_caching_type' => 'Tipo di Cache',
   'static_caching_type_instruct' => 'L\'opzione "File" genera filte HTML `statici` e dovrai configurare le regole di riscrittura sul tuo server.
                                      <a href="https://docs.statamic.com/caching#static-page" target="_blank">Maggiori informazioni</a>.
                                      In caso contrario, verrà utilizzata la cache standard.',

    'static_caching_file_path' => 'Percorso per i file statici',
    'static_caching_file_path_instruct' => 'La posizione in cui verranno scritti i file quando si utilizza la memorizzazione nella cache basata su file.',

    'static_caching_ignore_query_strings' => 'Ignora query string',
    'static_caching_ignore_query_strings_instruct' => 'When enabled, a page will be treated as the same URL regardless of any query string parameters.',
    'static_caching_ignore_query_strings_instruct' => 'Se abilitata, una pagina viene considerata come lo stesso URL, indipendentemente dalle query string.',

    'static_caching_exclude' => 'URL escluse',
    'static_caching_exclude_instruct' => 'Un elenco di URL che dovrebbero essere escluse dalla memorizzazione nella cache.',

    'static_caching_invalidation' => 'Regole di invalidazione',
    'static_caching_invalidation_instruct' => 'Un elenco di regole di invalidazione.',

    'cache_tags' => 'Cache Tag',
    'cache_tags_instruct' => 'I tag di template {{ cache }} ti consentono di memorizzare nella cache sezioni dei tuoi template.',

    'cache_tags_enabled' => 'Abilitato',
    'cache_tags_enabled_instruct' => 'Attiva il funzionamento dei tag. La disattivazione di questa opzione si applica a tutti i tag.',


];
