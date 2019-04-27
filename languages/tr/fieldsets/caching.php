<?php 

return [
    'stache' => '"Stache"',
    'stache_instruct' => 'Statamic`in iç önbelleği için bizim sevecen adımız.',

    'stache_always_update' => 'Her istekte Stache`i güncelle?',
    'stache_always_update_instruct' => 'Her isteğin güncellenmesi, doğrudan dosyalarda yapılan değişikliklerin algılanmasına izin verir, ancak bir performans etkisiyle gelir. İçeriği yönetmek için yalnızca kontrol panelini kullanıyorsanız, Stache yayınlandığında güncelleneceği için bunu devre dışı bırakabilirsiniz.',

    'static_caching' => 'Statik Sayfa Önbelleği',
    'static_caching_instruct' => 'Statik Sayfa Önbellekleme, web sayfalarınızın inanılmaz hız avantajları için düz HTML dosyaları olarak kaydedilmesini sağlar.',

    'static_caching_enabled' => 'Statik Önbelleği Etkinleştir',

    'static_caching_length' => 'Varsayılan Önbellek uzunluğu',
    'static_caching_length_instruct' => 'Her sayfanın dakika bazında ne kadar süreyle önbelleğe alınması gerekir? Bu yalnızca "önbellek" türünü kullanırken geçerlidir.',

    'static_caching_type' => 'Önbellek türü',
    'static_caching_type_instruct' => 'Dosyaya kaydetme, statik dosyada html dosyaları oluşturur ve sunucunuzda yeniden yazma kuralları ayarlamanız gerekir. <a href="https://docs.statamic.com/caching#static-page" target="_blank">Daha fazlasını oku</a> . Aksi takdirde, standart önbellek kullanılacaktır.',

    'static_caching_file_path' => 'Statik Dosya Yolu',
    'static_caching_file_path_instruct' => 'Dosya tabanlı önbellekleme kullanılırken dosyaların yazılacağı yer.',

    'static_caching_ignore_query_strings' => 'Sorgu dizgilerini yoksay',
    'static_caching_ignore_query_strings_instruct' => 'Etkinleştirildiğinde, herhangi bir sorgu dizesi parametresinden bağımsız olarak bir sayfa aynı URL olarak değerlendirilir.',

    'static_caching_exclude' => 'Hariç tutulan URL`ler',
    'static_caching_exclude_instruct' => 'Önbelleklemenin dışında tutulması gereken URL’lerin listesi.',

    'static_caching_invalidation' => 'Geçersiz kılma kuralları',
    'static_caching_invalidation_instruct' => 'Geçersiz kılma kuralları dizisi.',
    
    'cache_tags' => 'Önbellek Etiketleri',
    'cache_tags_instruct' => '{{ cache }} şablon etketi, şablonlarınızın bölümlerini önbelleğe almanıza izin verir.',
    
    'cache_tags_enabled' => 'Önbellek Etiketleri Etkin',
    'cache_tags_enabled_instruct' => 'Etiketlerin gerçekten çalışıp çalışmadığı. Bu ayarın devre dışı bırakılması tüm etiket örnekleri için geçerlidir.',
];