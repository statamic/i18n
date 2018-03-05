<?php

return [

    'license_key' => 'Lizenzschlüssel', //'License Key',
    'license_key_instruct' => 'Erfasse den Lizenzschlüssel zu dieser Seite gemäss den Infos auf Deinem [Statamic Konto](https:/account.statamic.com/licenses).', //'Enter the key for the corresponding domain from your [Statamic Account](https:/account.statamic.com/licenses).',

    'locales' => 'Sprache', //'Locales',
    'locales_instruct' => 'Die gewünschten Sprachen für Deine Seite', //'The locales from which your site will be accessed.',

    'timezone' => 'Zeitzone', //'Timezone',
    'timezone_instruct' => 'Die [Zeitzone](http://php.net/manual/en/timezones.php) in der Deine Seite betrieben wird.', //'The [timezone](http://php.net/manual/en/timezones.php) you want your site to operate under.',

    'date_format' => 'Datumsformat', //'Date format',
    'date_format_instruct' => 'Das PHP Format für die Standard-Ausgabe von Daten.', //'The PHP date format string used when outputting unformatted date variables.',

    'default_extension' => 'Standard-Dateiendung', //'Default extension',
    'default_extension_instruct' => 'Die Dateiendung für Deine Inhalts-Dateien.', //'The file extension for your content files.',

    'filesystems' => 'Dateisystem', //'Filesystems',
    'filesystems_instruct' => 'Definiere wie und wo auf Dein Dateisystem zugegriffen wird.', //'Define how and where your various files will be accessed.',

    'app_key' => 'Applikationsschlüssel', //'Application Key',
    'app_key_instruct' => 'Dieser Schlüssel sichert Statamic. Er sollte einzigartig und mindestens 32 Zeichen lang sein.', //'This key is used to secure your application. It should be a strong, 32 character string.',

    'redactor' => 'Redactor Einstellungen', //'Redactor Settings',
    'redactor_instruct' => 'YAML Interpretation von [Redactor Objekt-Einstellungen
                            ](https://imperavi.com/assets/pdf/redactor-documentation-10.pdf).  
                            Jedes der folgenden Objekte ist beim Erstellen von Redactor-Eingabefeldern verfügbar.',

                            // 'YAML representations of [Redactor settings
                            // objects](https://imperavi.com/assets/pdf/redactor-documentation-10.pdf).  
                            // Each item will be available to select when creating a Redactor field.',

    'protect' => 'Systemweiter Schutz', //'System-wide Protection',
    'protect_instruct' => 'Das eingegebene Sicherheits-Schema wird auf der gesamten Seite genutzt und schützt diese.', //'Entering a protection scheme here will apply it to your entire site\'s front-end.',
    
    'csrf_exclude' => 'CSRF ausgeschlossene URLs', //'CSRF Excluded URLs',
    'csrf_exclude_instruct' => 'Liste der von CSRF-Schutz ausgeschlossenen URLS', //'A list of URLS to exclude from CSRF protection',

    'php_max_memory_limit' => 'Maximales PHP Speicherlimit',
    'php_max_memory_limit_instruct' => "Die maximale Menge an Arbeitsspeicher die Statamic bei Speicher intensiven Arbeiten wie Bildmanipulationen verwenden darf.  \nLeer lassen um so viel Speicher wie möglich zu verwenden. Es können Bytes oder [von PHP erkannte Kurzwerte](https://secure.php.net/manual/de/faq.using.php#faq.using.shorthandbytes) verwendet werden.",

];
