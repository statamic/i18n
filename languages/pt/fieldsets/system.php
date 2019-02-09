<?php

return [

    'license_key' => 'Chave de Licença',
    'license_key_instruct' => 'Insira a chave do domínio correspondente da sua <a href="https://statamic.com/account/licenses" target="_blank">Conta Statamic</a>.',

    'locales' => 'Idiomas',
    'locales_instruct' => 'Os idiomas dos quais o seu site estará acessível.',

    'timezone' => 'Fuso Horário',
    'timezone_instruct' => 'O <a href="http://php.net/manual/en/timezones.php" target="_blank">fuso horário</a> que deseja que o seu site use.',

    'date_format' => 'Formato da data',
    'date_format_instruct' => 'O formato de data em PHP usado para gerar variáveis de data não formatadas.',

    'default_extension' => 'Extensão predefinida',
    'default_extension_instruct' => 'A extensão de arquivo para seus arquivos de conteúdo.',

    'filesystems' => 'Sistemas de arquivos',
    'filesystems_instruct' => 'Defina como e onde os seus vários arquivos serão acessados.',

    'app_key' => 'Chave de Aplicação',
    'app_key_instruct' => 'Essa chave é usada para proteger seu aplicativo. Deve ser uma cadeia forte de 32 caracteres.',

    'redactor' => 'Definições do Redactor',
    'redactor_instruct' => 'Representações YAML dos <a href="https://imperavi.com/assets/pdf/redactor-documentation-10.pdf" target="_blank">objectos de definições do Redactor</a>.
                            Cada item estará disponível para seleção quando criar um campo Redator.',

    'protect' => 'Proteção de Sistema',
    'protect_instruct' => 'Inserindo um esquema de proteção aqui será aplicado ao front-end de todo o site.',

    'csrf_exclude' => 'URLs excluídos de CSRF',
    'csrf_exclude_instruct' => 'Uma lista de URLs a excluir da proteção contra CSRF',

    'php_max_memory_limit' => 'Limite Máximo de Memória do PHP',
    'php_max_memory_limit_instruct' => 'A quantidade máxima de memória que o Statamic tentará usar ao executar operações intensivas de memória, como a manipulação de imagens.
                                         Deixe em branco para usar o máximo de memória possível. Você pode especificar bytes ou <a href="http://php.net/manual/en/faq.using.php#faq.using.shorthandbytes" target="_blank">valores abreviados reconhecidos</a>.',

];
