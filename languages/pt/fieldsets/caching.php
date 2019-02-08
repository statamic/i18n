<?php

return [

    'stache' => 'O "Stache"',
    'stache_instruct' => 'Nosso nome afetuoso para o cache interno do Statamic.',

    'stache_always_update' => 'Atualize o Stache em todas as solicitações?',
    'stache_always_update_instruct' => 'A atualização em todas as solicitações permitirá que alterações diretamente nos arquivos sejam detetadas, mas elas são acompanhadas de um impacto no desempenho.
                                        Se estiver a usar o painel de controlo para gerir o conteúdo, poderá desativá-lo, pois o Stache será atualizado quando sempre que publicar.',

   'static_caching' => 'Cache de Página Estática',
   'static_caching_instruct' => 'O cache de página estática permite que as suas páginas da web sejam gravadas como arquivos HTML para benefícios incríveis de velocidade.',

   'static_caching_enabled' => 'Ativar',

   'static_caching_length' => 'Tempo do Cache Padrão',
   'static_caching_length_instruct' => 'Quanto tempo cada página deve ser armazenada em cache, em minutos. Isso só se aplica se usar o tipo "cache".',

   'static_caching_type' => 'Tipo de Cache',
   'static_caching_type_instruct' => 'Gravando em arquivo irá gerar arquivos html em `static`, e precisará configurar regras de reescrita no seu servidor.
                                       <a href="https://docs.statamic.com/caching#static-page" target="_blank">Leia mais</a>.
                                       Caso contrário, o cache padrão será usado.',

    'static_caching_file_path' => 'Caminho dos arquivos estáticos',
    'static_caching_file_path_instruct' => 'O local onde os arquivos serão gravados ao usar o armazenamento em cache baseado em arquivo.',

    'static_caching_ignore_query_strings' => 'Ignorar strings de consulta',
    'static_caching_ignore_query_strings_instruct' => 'Quando ativado, uma página será tratada como o mesmo URL, independentemente de qualquer parâmetro de string de consulta.',

    'static_caching_exclude' => 'URLs Excluídos',
    'static_caching_exclude_instruct' => 'Uma lista de URLs que devem ser excluídos do armazenamento em cache.',

    'static_caching_invalidation' => 'Regras de Invalidação',
    'static_caching_invalidation_instruct' => 'Uma matriz de regras de invalidação.',

    'cache_tags' => 'Etiquetas de Cache',
    'cache_tags_instruct' => 'As etiquetas {{cache}} permitem que você armazene em cache seções de seus modelos.',

    'cache_tags_enabled' => 'Ativado',
    'cache_tags_enabled_instruct' => 'Se as etiquetas realmente funcionam. A desativação desta opção aplica-se a todas as instâncias da etiqueta.',


];
