<?php

return [

    'stache' => 'Der "Stache"',
    'stache_instruct' => 'Statamic\'s internes Cache-System.',

    'stache_always_update' => 'Aktualisiere den Stache bei jeder Anfrage?',
    'stache_always_update_instruct' => 'Aktualisieren bei jeder Anfrage erlaubt es das Änderungen direkt erkannt werden, jedoch hat es eine negativen Einfluss auf die Geschwindigkeit.
                                       Wenn du das Kontrollzentrum verwendest um deinen Inhalt zu aktualisieren, kannst du es deaktivieren da beim speichern der Stache automatisch aktualisiert wird.',

   'static_caching' => 'Statischer Seitencache',
   'static_caching_instruct' => 'Der statische Seitencache erlaubt es deine Webseite in flachen HTML-Dateien zu speichern um diese unglaublich schnell ausliefern zu können.',

   'static_caching_enabled' => 'aktivieren',

   'static_caching_length' => 'Standard Cache-Dauer',
   'static_caching_length_instruct' => 'Wie lange sollen Seiten gespeichert werden, in Minuten. Dies gilt nur beim Cache-Typ "Cache".',

   'static_caching_type' => 'Cache-Typ',
   'static_caching_type_instruct' => 'Mit der Option "File" werden statische HTML-Dateien generiert und du musst die htaccess-Datei anpassen.
                                      Andernfalls wird der Standard-Cache verwendet.',

    'static_caching_file_path' => 'Pfad für statische Dateien',
    'static_caching_file_path_instruct' => 'Der Ort an dem die statischen Dateien geschrieben werden sollen.',

    'static_caching_ignore_query_strings' => 'Ignoriere Query-String',
    'static_caching_ignore_query_strings_instruct' => 'Wenn aktiviert, wird eine Seite als die gleiche angesehen, egal was für Query-String Parameter angegeben werden.  
                                                       Kann beim statischen Seitencache nicht deaktiviert werden.',

    'static_caching_exclude' => 'URLs ausschliessen',
    'static_caching_exclude_instruct' => 'Eine Liste von URLs die vom Cache ausgeschlossen werden sollen.',

    'static_caching_invalidation' => 'Invalidierungsregeln',
    'static_caching_invalidation_instruct' => 'Eine Liste von Invalidierungsregeln.',


];
