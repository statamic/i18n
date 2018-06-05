<?php

return [

    'license_key' => 'Klucz licencyjny',
    'license_key_instruct' => 'Wprowadź klucz odpowiadającej domeny z Twojego [konta](https:/account.statamic.com/licenses).',

    'locales' => 'Języki',
    'locales_instruct' => 'Języki wykorzystywanie na stronie.',

    'timezone' => 'Strefa czasowa',
    'timezone_instruct' => '[Strefa czasowa](http://php.net/manual/en/timezones.php) dla której Twoja witryna ma działać.',

    'date_format' => 'Format daty',
    'date_format_instruct' => 'Format daty PHP używany podczas wyprowadzania niesformatowanych zmiennych daty.',

    'default_extension' => 'Domyślne rozszerzenie',
    'default_extension_instruct' => 'Rozszerzenie plików dla treści.',

    'filesystems' => 'Systemy plików',
    'filesystems_instruct' => 'Określ, w jaki sposób i gdzie będą dostępne twoje różne pliki.',

    'app_key' => 'Application Key',
    'app_key_instruct' => 'This key is used to secure your application. It should be a strong, 32 character string.',

    'redactor' => 'Ustawienia Redactor',
    'redactor_instruct' => 'Ustawienia YAML dla [Redactor](https://imperavi.com/assets/pdf/redactor-documentation-10.pdf).  
                            Każda pozycja będzie dostępna do wyboru podczas tworzenia pola Redactor.',

    'protect' => 'Ochrona całego systemu',
    'protect_instruct' => 'Wprowadzenie tutaj schematu ochrony spowoduje zastosowanie go do front-endu całej witryny..',
    
    'csrf_exclude' => 'Wykluczone adresy URL dla CSRF',
    'csrf_exclude_instruct' => 'Lista adresów URL do wykluczenia z ochrony CSRF',

    'php_max_memory_limit' => 'PHP Max Memory Limit',
    'php_max_memory_limit_instruct' => "Maksymalna ilość pamięci, którą Statamic spróbuje użyć podczas wykonywania operacji intensywnie wykorzystujących pamięć, takich jak manipulacja obrazem.  \nPozostaw puste, aby użyć jak największej ilości pamięci.Możesz określić bajty lub [PHP recognized shorthand values](http://php.net/manual/en/faq.using.php#faq.using.shorthandbytes).",

];
