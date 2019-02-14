<?php

return [

    'license_key' => 'Licentie',
    'license_key_instruct' => 'Vul de licentie in voor het bijbehorende domein van je [Statamic Account](https:/account.statamic.com/licenses).',

    'locales' => 'Locales',
    'locales_instruct' => 'De locales waarop je site kan worden bereikt.',

    'timezone' => 'Tijdzone',
    'timezone_instruct' => 'De [tijdzone](http://php.net/manual/en/timezones.php) waaronder je site functioneert.',

    'date_format' => 'Datumformaat',
    'date_format_instruct' => 'Het PHP datumformaat dat gebruikt wordt wanneer ongeformatteerde datumvariabelen worden getoond.',

    'default_extension' => 'Standaard extentie',
    'default_extension_instruct' => 'De bestandsextentie voor inhoudsbestanden.',

    'filesystems' => 'Bestandssystemen',
    'filesystems_instruct' => 'Definiëer hoe en waar uw bestanden bereikt kunnen worden.',

    'app_key' => 'Applicatiesleutel',
    'app_key_instruct' => 'Deze sleutel wordt gebruikt om je applicatie te beveiligen. Het moet een sterke 32-karakter lange tekst zijn.',

    'redactor' => 'Redactorinstellingen',
    'redactor_instruct' => 'YAML representatie van [Redactor instellingen
                            objecten](https://imperavi.com/assets/pdf/redactor-documentation-10.pdf).  
                            Elk item zal selecteerbaar zijn wanneer een Redactorveld wordt aangemaakt.',

    'protect' => 'Systeembeveiliging',
    'protect_instruct' => 'Het invoeren van een beveiligingsschema zal ervoor zorgen dat dit wordt toegepast op de gehele site.',
    
    'csrf_exclude' => 'CSRF Uitgezonderde URLs',
    'csrf_exclude_instruct' => 'Een lijst van URLs die uitgezonderd worden van CSRF beveiliging.',

    'php_max_memory_limit' => 'PHP Maximale Geheugenlimiet',
    'php_max_memory_limit_instruct' => 'Het maximale geheugen dat Statamic mag gebruiken tijdens het uitvoeren van geheugenintensieve bewerkingen, zoals het manipuleren van afbeeldingen.  
                                        Laat dit veld leeg om zoveel mogelijk geheugen te gebruiken als er beschikbaar is. Je kunt bytes of <a href="http://php.net/manual/en/faq.using.php#faq.using.shorthandbytes" target="_blank">PHP recognized shorthand values</a> invoeren.',
];
