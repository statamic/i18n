<?php

return [

    'license_key' => 'Chiave di Licenza',
    'license_key_instruct' => 'Inserisci la chiave per il dominio corrispondente dal tuo <a href="https://statamic.com/account/licenses" target="_blank">Account Statamic</a>.',

    'locales' => 'Lingue',
    'locales_instruct' => 'Le Lingue a cui sarà possibile accedere dal tuo sito.',

    'timezone' => 'Fuso orario',
    'timezone_instruct' => 'Il <a href="http://php.net/manual/en/timezones.php" target="_blank">fuso orario</a> in cui vuoi che il tuo sito funzioni.',

    'date_format' => 'Formato Data',
    'date_format_instruct' => "Il formato della data di PHP da utilizzare quando vengono mostrate variabili di data non formattate.",

    'default_extension' => 'Estensione predefinita',
    'default_extension_instruct' => "L'estensione del file per i tuoi file di contenuto.",

    'filesystems' => 'Filesystem',
    'filesystems_instruct' => 'Definisci come e dove saranno accessibili i vari file.',

    'app_key' => 'Chiave Applicazione',
    'app_key_instruct' => 'Questa chiave viene utilizzata per proteggere la tua applicazione. Dovrebbe essere una stringa complessa di 32 caratteri.',

    'redactor' => 'Impostazioni Redactor',
    'redactor_instruct' => 'Rappresentazione YAML delle <a href="https://imperavi.com/assets/pdf/redactor-documentation-10.pdf" target="_blank">impostazioni di Redactor</a>.
                            Ogni elemento potrà essere selezionato quando crei un campo Redactor.',

    'protect' => 'Protezione a livello di sistema',
    'protect_instruct' => "L'inserimento di uno schema di protezione verrà applicato al front-end dell'intero sito.",

    'csrf_exclude' => 'URL escluse da CSRF',
    'csrf_exclude_instruct' => 'Un elendo di URL escluse dalla protezione CSRF',

    'php_max_memory_limit' => 'Limite Memoria Massima di PHP',
    'php_max_memory_limit_instruct' => 'La quantità massima di memoria che Statamic proverà ad utilizzare quando si eseguono operazioni intensive come la manipolazione di immagini.
                                        Lascia vuoto per utilizzare tutta la memoria possibile. Puoi specificare bytes o <a href="http://php.net/manual/en/faq.using.php#faq.using.shorthandbytes" target="_blank">valori brevi riconosciuti da PHP</a>.',

];
