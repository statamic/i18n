<?php

return [
    // General CP

    'dashboard' => 'Yönetim Paneli',
    'nav_dashboard' => 'Yönetim Paneli',
    'sneak_peek' => 'Canlı Önizleme',
    'sneak_peeking' => 'Canlı Önizleme',
    'view_site' => 'Siteyi Görüntüle',
    'visit_url' => 'URL\'yi ziyaret et',
    'search_for_anything' => 'Bir şey arayın',

    // Pages

    'page' => 'Sayfa',
    'pages' => 'Sayfa|Sayfalar',
    'nav_pages' => 'Sayfalar',
    'create_page_button' => 'Sayfa Oluştur',
    'edit_homepage_button' => 'Ana Sayfayı Düzenle',
    'create_page' => 'Yeni Sayfa Oluştur',
    'page_created' => 'Sayfa Oluşturuldu',
    'editing_page' => 'Sayfa Düzenle',
    'page_updated' => 'Sayfa Güncellendi',
    'home' => 'Anasayfa',
    'show_urls' => 'URL’leri göster',
    'show_titles' => 'Başlıkları Göster',
    'choose_page_type' => 'Sayfa Türü Seç',
    'parent_page' => 'Ana Sayfa',
    'pages_reordered' => 'Sayfalar başarıyla yeniden düzenlendi.',

    // Collections

    'collections' => 'Koleksiyon|Koleksiyonlar',
    'nav_collections' => 'Koleksiyonlar',
    'manage_collections' => 'Koleksiyonları Yönet',
    'create_collection_button' => 'Koleksiyon Oluştur',
    'create_collection' => 'Yeni Koleksiyon Oluştur',
    'collection_created' => ':title Oluşturuldu',
    'editing_collection' => 'Düzenle :collection',
    'collection_updated' => ':title Güncelleme',
    'collections_empty' => 'Koleksiyonlar, tümü aynı URL modelini takip eden benzer veri gruplarını kapsayan yapılardır.',
    'collection_title_instructions' => 'Koleksiyonun adı.',
    'collection_handle_instructions' => 'Koleksiyonun ayarlarında ve şablonlarında kullanılan değişken adı.',
    'collection_order_instructions' => 'Bu koleksiyondaki girişler için varsayılan sıralama yöntemini ayarlayın.',
    'collection_fieldset_instructions' => 'Aksi belirtilmedikçe, varsayılan alan kümesi.',
    'collection_template_instructions' => 'Aksi belirtilmediği sürece varsayılan şablon.',
    'collection_route_instructions' => 'Rota, koleksiyondaki tüm gönderilerin izleyeceği URL modelini kontrol eder.',
    'collection_does_not_exist' => 'Koleksiyon :collection mevcut değil.',

    // Entries

    'entry' => 'Gönderi',
    'entries' => 'Gönderi|Gönderiler',
    'nav_entries' => 'Gönderiler',
    'create_entry_button' => 'Gönderi Oluştur',
    'create_entry' => 'Yeni :noun',
    'entry_created' => 'Gönderi Oluşturuldu',
    'editing_entry' => 'Gönderi Düzenle',
    'entry_updated' => 'Gönderi Güncelleme Tarihi',
    'entries_empty_heading' => ':type Gönderileri',
    'entries_empty' => 'Gönderiler, kendi URL’lerine sahip ve genellikle blog gönderileri, basın bültenleri ve etkinlikler şeklinde listeler halinde gösterilir.',

    // Taxonomies

    'taxonomy' => 'Taksonomi',
    'taxonomies' => 'Taksonomi|Taksonomiler',
    'nav_taxonomies' => 'Taksonomiler',
    'create_taxonomy' => 'Yeni Taksonomi Yarat',
    'create_taxonomy_button' => 'Taksonomi Yarat',
    'manage_taxonomies' => 'Taksonomileri Yönet',
    'editing_taxonomy' => 'Taksonomi Düzenle',
    'taxonomy_updated' => 'Taksonomi Güncelleme',
    'taxonomy_created' => 'Taksonomi Oluşturuldu',
    'taxonomies_empty_heading' => 'Taksonomiler',
    'taxonomies_empty' => 'Taksonomiler, kategori veya renk gibi bir dizi benzersiz özellik etrafında veri sınıflandırmaya yarayan yapılardır.',
    'taxonomies_title_instructions' => 'Taksonomi adı.',
    'taxonomies_slug_instructions' => 'Taksonomiye şablonlarda nasıl referans verileceğini temsil eder.',
    'taxonomies_fieldset_instructions' => 'Bu taksonomiyi düzenlerken kullanılacak alan kümsesi.',
    'taxonomies_route_instructions' => 'Bu taksonomideki terimler, bu yönlendirme şemasını takip eden URL’lere sahip olacaktır.',

    'taxonomy_terms' => 'Terim|Terimler',
    'create_taxonomy_term_button' => 'Yeni :term',
    'create_taxonomy_term' => 'Yeni Taksonomi :term',
    'taxonomy_term_created' => 'Taksonomi terimi yaratıldı',
    'taxonomy_terms_empty_heading' => ':term Terimleri',
    'taxonomy_terms_empty' => 'Bir Taksonominin gruplama olduğu durumlarda, Terim, bir içerik bölümüne uygulanan gerçek etikettir. Örneğin, "Kırmızı", "Renkler" deki bir terimdir.',

    // Globals

    'global' => 'Global',
    'globals' => 'Global|Globaller',
    'nav_globals' => 'Globaller',
    'global_sets' => 'Global Kümeler',
    'manage_global_sets' => 'Global Kümeleri Yönet',
    'configuring_global_set' => 'Global Kümeyi Yapılandırma',
    'create_global_set_button' => 'Global Set Oluştur',
    'create_global_set' => 'Yeni Global Set Oluştur',
    'global_set_created' => ':type oluşturuldu',
    'editing_globals' => 'Global Düzenle',
    'globals_updated' => 'Global Güncellendi',
    'globals_empty_heading' => 'Global Kümeler',
    'globals_empty' => 'Global kümeler, şirket adı, adres, iletişim bilgileri gibi bir URL\'e bağlı olmayan ve göster / gizle gibi şablon seviyesinde yapılan ayarların haricinde site genelinde kullanılan yapılardır.',
    'general_globals' => 'Genel',
    'globals_title_instructions' => 'Global kümenizin adı. Örneğin: Altbilgi(Footer) İçeriği veya Kenar Çubuğu Ayarları.',
    'globals_slug_instructions' => 'Şablonlarınızda kullanılan değişken budur. Örneğin: <code>footer_content</code> veya <code>sidebar_settings</code> .',
    'globals_fieldset_instructions' => 'Bu alan kümesini yönetmek için hangi alan grubunu kullanmak istediğinizi seçin.',

    // Assets
    'assets' => 'Varlık|Varlıklar',
    'nav_assets' => 'Varlıklar',
    'new_asset' => 'Yeni Varlık',
    'add_asset' => 'Varlık Ekle',
    'browse_assets' => 'Varlıklara Gözat',
    'browsing_assets' => 'Varlıklara Gözat',
    'creating_asset' => 'Varlık Oluştur',
    'asset_created' => 'Varlık Oluşturuldu',
    'editing_asset' => 'Varlığı Düzenle',
    'asset_updated' => 'Varlık Güncellendi',
    'drop_to_upload' => 'Yüklemek için sürükle-bırak',
    'upload_asset' => 'Yükle',
    'sync_assets' => 'Varlıkları senkronize et',
    'syncing_assets' => 'Varlıklar senkronize ediliyor',
    'new_folder' => 'Yeni Klasör',
    'upload' => 'Yükle',
    'uploads' => 'Yükleme|Yüklemeler',
    'filename' => 'Dosya adı',
    'filesize' => 'Dosya boyutu',
    'date_modified' => 'Değiştirilme tarihi',
    'parent_folder' => 'Ana klasör',
    'containers' => 'Taşıyıcılar',
    'asset_folder_empty_heading' => 'Boş klasör',
    'asset_folder_empty' => 'Dosyaları sürükleyip bu alana bırakarak yükleyin.',
    'focal_point' => 'Odak noktası',
    'focal_point_label' => 'Odak noktasını ayarlamak için resme tıklayın',
    'focal_point_instructions' => 'Odak noktası, görselleri kırparken kullanılır, böylece görüntünün en önemli kısmı görünür olur.',
    'or_drag_and_drop_files' => 'veya dosyaları sürükleyip bırakın.',
    'no_asset_container_specified' => 'Hiçbir varlık taşıyıcı belirtilmedi.',
    'rename_file' => 'Dosyayı yeniden adlandır',
    'rename_file_warning' => 'Bir dosyayı yeniden adlandırmak, ona yapılan hiçbir referansı güncellemez; bu, sitenizdeki bağlantıların kopmasına neden olabilir.',
    'move_file' => 'Dosyayı taşı',
    'move_file_warning' => 'Bir dosyayı taşımak, hiçbir referansı güncellemez; bu, sitenizdeki bağlantıların kopmasına neden olabilir.',
    'dimensions' => 'Ölçüler',
    'last_modified' => 'Son Güncelleme',
    'url_resolves_to' => 'URL şunlara çözümlenir: :path',

    // Folder
    'folder_title_instructions' => 'Klasörün görünen adı.',
    'folder_directory_instructions' => 'Dosya sistemi dizin adı',

    // Asset Containers

    'asset_containers' => 'Varlık Taşıyıcı|Varlık Taşıyıcılar',
    'manage_asset_containers' => 'Varlık Taşıyıcılarını Yönet',
    'new_asset_container' => 'Yeni Varlık Taşıyıcı',
    'creating_asset_container' => 'Varlık Taşıyıcı Oluştur',
    'asset_container_created' => 'Varlık Taşıyıcı oluşturuldu',
    'editing_asset_container' => 'Varlık Taşıyıcı Düzenle',
    'asset_container_updated' => 'Varlık Taşıyıcı güncellendi',
    'asset_containers_empty_heading' => 'Yapılandırılmış varlık taşıyıcısı yok.',
    'asset_containers_empty' => 'Her bir varlık taşıyıcısı, dosya sisteminizde, halka açık olarak erişilebilir veya meraklı gözlerden korunabilecek bir konum olabilir.',
    'select_asset_container' => 'Bir varlık taşıyıcısı seçin.',

    // Asset Folders
    'create_folder' => 'Klasör Oluştur',
    'edit_folder' => 'Klasörü Düzenle',
    'asset_name_instructions' => 'Taşıyıcının görünen adı.',
    'asset_handle_instructions' => 'Taşıyıcıyı çağırmak için kullanabileceğiniz benzersiz bir dize. <b>Bu oluşturulduktan sonra değiştirilemez.</b>',
    'asset_fieldset_instructions' => 'Bu taşıyıcıdaki varlıklar tarafından kullanılacak alan kümesi.',
    'asset_driver_instructions' => 'Varlıklar nerede depolanacak ve erişilecek?',
    'asset_path_instructions' => 'Dosya sistemindeki klasörün konumu.',
    'asset_url_instructions' => 'Klasörün URL\'si.',
    'asset_folder_basename' => 'Klasör adı',

    // Fields Builder

    'add_field' => 'Yeni Alan ',
    'quick_add' => 'Hızlı Ekle',
    'toggle_fields' => 'Alanları Değiştir',
    'sidebar' => 'Kenar Çubuğu',
    'meta' => 'Meta',
    'all' => 'Herşey',

    // Set Builder

    'add_set' => 'Küme Ekle',
    'edit_set' => 'Kümeyi Düzenle',
    'delete_set' => 'Kümeyi Sil',
    'toggle_sets' => 'Geçiş Kümeleri',
    'set_fields_instructions' => 'Bu kümenin alanlarını seçin',

    // Amazon S3

    'access_key_id' => 'Erişim Anahtarı Kimliği',
    'secret_access_key' => 'Gizli Erişim Anahtarı',

    // Users

    'user' => 'Kullanıcı',
    'users' => 'Kullanıcı|Kullanıcılar',
    'nav_users' => 'Kullanıcılar',
    'manage_users' => 'Kullanıcıları Yönet',
    'create_user_button' => 'Kullanıcı Oluştur',
    'create_user' => 'Kullanıcı Oluştur',
    'create_a_user' => 'Kullanıcı Oluştur',
    'user_created' => 'Kullanıcı oluşturuldu',
    'editing_user' => 'Kullanıcıyı Düzenle',
    'user_updated' => 'Kullanıcı güncellendi',
    'reset_password' => 'Şifreni Sıfırla',
    'choose_new_password' => 'Yeni bir şifre seçiniz',
    'new_password' => 'Yeni Şifre',
    'change_password' => 'Şifre değiştir',
    'send_email' => 'Eposta gönder',
    'email_sent' => 'E-posta gönderildi',
    'send_activation_email' => 'Aktivasyon e-postası gönder',
    'send_password_reset_email' => 'Şifre sıfırlama e-postası gönder',
    'password_reset_email_not_sent' => 'E-posta gönderilemedi. Lütfen kayıtlarınızı kontrol ediniz.',
    'copy_activation_link' => 'Aktivasyon bağlantısını kopyala',
    'copy_password_reset_link' => 'Parola sıfırlama bağlantısını kopyala',
    'copy_password_reset_link_failed' => 'Bağlantıyı oluştururken bir sorun oluştu. Lütfen kayıtlarınızı kontrol ediniz.',
    'password_reset_sent' => 'Şifre sıfırlama e-postası gönderildi',
    'account_activated' => 'Hesabınız aktive edildi',
    'password_reset_success' => 'Şifreniz sıfırlandı',
    'activate_account' => 'Hesabı Aktifleştir',
    'account' => 'Hesap',
    'password' => 'Parola',
    'password_for' => ':username için parola',
    'my_account' => 'Hesabım',
    'profile' => 'Profil',
    'logout' => 'Çıkış Yap',
    'sign_out' => 'Oturumu Kapat',
    'user_options' => 'Kullanıcı Seçenekleri',
    'user_bio_instructions' => 'İstersen, senin hakkında bir şeyler yazabilirsin.',
    'user_account_created' => 'Kullanıcı hesabı oluşturuldu.',
    'forgot_password' => 'Parolanızı mı unuttunuz?',
    'invalid_user' => 'Geçersiz kullanıcı',
    'invalid_code' => 'Geçersiz kod',
    'invalid_creds' => 'Geçersiz kimlik bilgisi',
    'go_back' => 'Geri Dön',

    // Password Reset

    'reset_code_missing' => 'Sıfırlama kodu belirtilmedi.',
    'reset_code_invalid' => 'Geçersiz kod',

    // Roles
    'roles' => 'Rol|Roller',
    'nav_user-roles' => 'Kullanıcı Rolleri',
    'create_role_button' => 'Rol Oluştur',
    'creating_role' => 'Rol Oluştur',
    'role_created' => 'Rol Oluşturuldu',
    'editing_role' => 'Rolü Düzenle',
    'role_updated' => 'Rol Güncellendi',
    'roles_empty_heading' => 'Kullanıcı Rolleri',
    'roles_empty' => 'Kullanıcı Rolleri, tek bir yapı altında farklı izinleri gruplandırmanıza izin verir. Örneğin, editör, yayıncı ve yönetici.',

    // Permissions
    'permissions' => 'İzin|İzinler',
    'access' => 'Erişim',
    'checking_folder_permissions' => 'Klasör izinleri kontrol ediliyor, lütfen bekleyin ...',
    'folders_permission_valid' => 'Dosya ve klasör izinleri harika görünüyor!',
    'folders_unwritable' => 'Aşağıdaki dizinlerin yazılabilir olması gerekiyor:',

    // Error Pages

    'error' => 'Hata',
    'permission_denied' => 'Erişim Engellendi',
    'permission_denied_instructions' => 'Bu sayfayı görüntüleme izniniziz yok.',
    'page_not_found' => 'Sayfa Bulunamadı',
    'page_not_found_instructions' => 'İstediğiniz sayfa mevcut değil veya ulaşılamıyor.',
    'session_expired' => 'Oturumunuz sona erdi.',
    'stache_building' => 'Önbellek güncelleniyor. Lütfen bekleyin ve tekrar deneyin.',
    'session_expired_error' => 'Oturumunuz sona erdi. Kaldığınız yerden devam etmek için giriş yapınız.',
    'publish_error' => 'Verilerinizi kaydederken bir sorun oluştu. Daha detaylı bilgi için hata kayıtlarına gözatabilirsiniz.',
    'error_fetching_data' => 'Verilerinizi alırken bir sorun oluştu. Daha detaylı bilgi için hata kayıtlarına gözatabilirsiniz.',

    // User Groups
    'usergroups' => 'Kullanıcı Grubu|Kullanıcı Grupları',
    'user_groups' => 'Kullanıcı Grupları',
    'nav_user-groups' => 'Kullanıcı Grupları',
    'create_usergroup_button' => 'Grup oluştur',
    'creating_usergroup' => 'Kullanıcı Grubu Oluştur',
    'usergroup_created' => 'Kullanıcı Grubu oluşturuldu',
    'editing_usergroup' => 'Kullanıcı Grubunu Düzenle',
    'usergroup_updated' => 'Kullanıcı Grubu güncellendi',
    'usergroups_empty_heading' => 'Kullanıcı Grupları',
    'usergroups_empty' => 'Kullanıcı Grupları, farklı rolleri ve kullanıcıları birlikte tek bir çatı altında toplamanızı sağlar.',
    
    // Settings

    'settings' => 'Ayarlar',
    'nav_settings' => 'Ayarlar',
    'settings_cp' => 'Kontrol Paneli',
    'settings_routes' => 'Rotalar',
    'settings_search' => 'Arama',
    'settings_system' => 'Sistem',
    'settings_assets' => 'Varlıklar',
    'settings_caching' => 'Önbellek',
    'settings_debug' => 'Hata Ayıklama',
    'settings_email' => 'E-posta',
    'settings_theming' => 'Temalar',
    'settings_users' => 'Kullanıcılar',
    'settings_updated' => 'Ayarlar kaydedildi.',
    'settings_updated_and_indexed' => 'Ayarlar kaydedildi ve arama dizinleri güncellendi.',
    'settings_locales_instructions' => 'Her dil çevirisi için bir yerel ayar oluşturun. Bunu şimdilik atlayabilir veya daha sonra yapabilirsiniz.',
    'settings_locales_index_php_warning' => '<code>index.php</code> dosyanızdaki <code>$locale</code> ayarını <code>:locale</code> <code>index.php</code> değiştirmeniz gerekecektir.',
    'settings_debug_mode_instructions' => 'Hata Ayıklama Modunu Etkinleştirmek tüm hataları ekranda gösterir. Bir site geliştirme sırasında harika bir araçtır, ancak yapım aşamasında onu devre dışı bırakmayı unutmayın.',


    'shorthand' => 'Kısayol',
    'shorthand_instructions' => '2 karakterli dil kodu. <br> Örnek: `en`, de.',
    'add_locale' => 'Dil Ekle',
    'full_locale' => 'Dil (Tam)',
    'full_locale_instructions' => 'PHP tarih lokalizasyonu için kullanılır. <br> Örnek: `en_US`,` de_DE`.',
    'locale_name_instructions' => 'Göstermek için kullanılır. <br> Örnek: `İngilizce`, `Almanca`.',
    'locale_url_instructions' => 'Örnek: `http://example.com/de/`',

    // Addons

    'addons' => 'Eklenti|Eklentiler',
    'manage_addons' => 'Eklentileri Yönet',
    'nav_addons' => 'Eklentiler',
    'addons_empty_heading' => 'Eklenti yok',
    'addons_empty' => 'Eklentiler uygulama işlevselliğini genişletir.',

    // Fieldsets & Fields
    'fieldset' => 'Alan Kümesi',
    'fieldsets' => 'Alan Kümesi|Alan Kümeleri',
    'nav_fieldsets' => 'Alan Kümeleri',
    'create_fieldset_button' => 'Alan Kümesi Oluştur',
    'create_fieldset' => 'Alan Kümesi Oluştur',
    'fieldset_created' => 'Alan kümesi oluşturuldu',
    'editing_fieldset' => 'Alan Kümesini Düzenle',
    'fieldset_updated' => 'Alan kümesi güncellendi',
    'fieldsets_empty' => 'Alan kümeleri, içeriğinizi yöneten yeniden kullanılabilir alan türleri gruplarını oluşturmanıza ve yönetmenize olanak tanır. İçerik modellemenin gerçekleştiği yer burasıdır.',
    'fieldset_title_instructions' => 'Görünen Ad, genellikle tekil bir isim.',
    'fieldset_handle_instructions' => 'Ayarlarda / şablonlarda kullanılır.',
    'fieldset_create_title_instructions' => 'İsteğe bağlı, yeni içerik oluştururken gösterilir',
    'fieldset_hide_instructions' => 'Seçim iletişim kutularından gizle?',
    'fieldset_fields_instructions' => 'Bu  alan kümesinde yer alan alanları ve alan türlerini atayın ve özelleştirin.',
    'fieldset_taxonomies_instructions' => 'Bu alan kümesinde gösterilmesi gereken taksonomileri gösterin, gizleyin ve yapılandırın.',
    'create_title' => 'Başlık Oluştur',
    'display_name' => 'Görüntülenen Ad',
    'display_name_instructions' => 'Alanın Kontrol Panelinde gösterilen etiketi.',
    'display_text' => 'Metni Görüntüle',
    'display_text_instructions' => 'Alanın etiketi',
    'field_name' => 'Alan adı',
    'field_name_instructions' => 'Alan değişkeni',
    'field_required' => 'Gerekli',
    'field_required_instructions' => 'Bu alan gereklidir',
    'field_variable' => 'Alan Değişkeni',
    'field_variable_instructions' => 'Alanın şablon değişkeni.',
    'field_instructions_instructions' => 'Temel Markdown kullanımına izin verilir.',
    'field_width_instructions' => 'Alan kümesi düzenindeki alanın boyutu.',
    'validation_rules' => 'Doğrulama Kuralları',
    'validation_instructions' => 'Laravel erişimi var',
    'validation_instructions_link_text' => 'doğrulama kuralları',
    'validation_rules_instructions' => 'Bir pipe (|) ile ayrılmış şekilde <a href=":url" target="_blank">doğrulama kuralları</a> dizisi girin.',
    'default_value' => 'Varsayılan Değer',
    'field_default_value_instructions' => 'String türü alanlar için varsayılan değeri girin.',
    'edit_field' => 'Alanı Düzenle',
    'choose_field_to_edit' => 'Ayarlarını düzenlemek için bir alan seçin.',
    'select_fieldtype' => 'Alan Tipi Seç',
    'field_added' => ':field alanı eklendi.',
    'set_added' => 'Küme eklendi.',
    'append_taxonomies' => 'Gönderilere Taksonomi Ekleme',
    'append_taxonomies_instructions' => 'Girişte bu alan kümesi kullanılırken, alan grubunda tanımlanmayan taksonomiler kenar çubuğuna otomatik olarak eklenebilir.',
    'type_url' => 'Bir URL yazın',
    'type_url_or_search' => 'Bir URL yazın veya bir öğe arayın',

    'sections' => 'Bölüm|Bölümler',
    'section_label' => 'Bölüm Etiketi',
    'section_handle' => 'Bölüm Belirteci',
    'section_handle_tip' => 'İpucu: Bölümünüzü `sidebar` da konumlandırmak isterseniz bu ismi kullanabilirsiniz.',
    'sections_and_fields' => 'Bölümler ve Alanlar',

    'display_conditions' => 'Görüntüleme Koşulları',
    'display_conditions_instructions' => 'Bu alanın ne zaman gösterileceğini yapılandırın.',
    'always_show' => 'Her zaman göster',
    'show_when' => 'Koşullu göster ...',
    'hide_when' => 'Gizle ...',
    'standard' => 'Standart',
    'custom' => 'Özel',
    'display_standard_instructions' => 'Alanların bir kombinasyonunu ve karşılık gelen değerleri seçin.',
    'display_custom_instructions' => 'Özel JavaScript koşulu yöntemini kontrol etmek için tetiklenecek metodu girin.',

    'basics' => 'Temeller',
    'visibility' => 'Görünürlük',
    'extras' => 'Ekstralar',

    'fieldtype_category_text' => 'Metin',
    'fieldtype_category_media' => 'Medya',
    'fieldtype_category_pickable' => 'Seçilebilir',
    'fieldtype_category_structured' => 'Yapılandırılmış',
    'fieldtype_category_relationship' => 'İlişki',
    'fieldtype_category_special' => 'Özel',
    'fieldtype_category_system' => 'Sistem',
    
    // Forms

    'form' => 'Form',
    'forms' => 'Form|Formlar',
    'nav_forms' => 'Formlar',
    'forms_empty' => 'Formlar, kullanıcı tarafından gönderilen yanıtları toplar, görüntüler ve raporlar.',
    'create_form' => 'Form Oluştur',
    'form_updated' => 'Form güncellendi',
    'form_created' => 'Form oluşturuldu',
    'form_submission_deleted' => 'Gönderi silindi.',
    'submissions' => 'Gönderi|Gönderiler',
    'response' => 'yanıt|yanıtlar',
    'empty_responses' => 'Bu form cevap bekliyor.',
    'create_formset' => 'Formset Oluştur',
    'creating_formset' => 'Formset oluştur',
    'editing_formset' => 'Formset Düzenle',
    'import' => 'İçe Aktar',
    'import_data' => 'Verileri İçe Aktar',
    'import_link_text' => 'JSON formatını içe aktarma hakkında bilgi edinin',
    'export' => 'Dışa Aktar',
    'export_csv' => 'CSV olarak dışa aktar',
    'export_json' => 'JSON olarak dışa aktar',

    // Formset Builder

    'formset_title_instructions' => 'Form setinizin başlığı..',
    'formset_slug_instructions' => 'Formset nasıl refere edilecek.',
    'formset_metrics_instructions' => 'Görüntülenmesini istediğiniz metrikleri belirtin.',
    'formset_metrics_grid_add_row' => 'Metrik',
    'formset_metrics_grid_type_field' => 'Metrik Türü',
    'formset_metrics_grid_type_option_sum' => 'Toplam',
    'formset_metrics_grid_type_option_total' => 'Genel Toplam',
    'formset_metrics_grid_type_option_average' => 'Ortalama',
    'formset_metrics_grid_label_field' => 'Etiket',
    'formset_metrics_grid_params_field' => 'Parametreler',
    'formset_emails_instructions' => 'Form gönderildikten sonra bilgilendirme iletilmesini istediğiniz e-postaları ekleyin.',
    'formset_emails_grid_add_row' => 'E-posta',
    'formset_emails_grid_to_field' => 'Alıcı (Kime)',
    'formset_emails_grid_to_instructions' => 'Alıcının e-posta adresi.',
    'formset_emails_grid_from_field' => 'Gönderen',
    'formset_emails_grid_from_instructions' => 'Site varsayılanına geri dönmek için boş bırakın.',
    'formset_emails_grid_reply_to_field' => 'Yanıtla',
    'formset_emails_grid_subject_field' => 'Konu',
    'formset_emails_grid_subject_instructions' => 'E-posta konu satırı.',
    'formset_emails_grid_template_field' => 'Şablon',
    'formset_emails_grid_template_instructions' => 'Otomatik bir e-posta kullanmak için boş bırakın.',
    'formset_honeypot_field' => 'Honetpot alanı',
    'formset_honeypot_instructions' => 'Honeypot için kullanılacak alan adı.',
    'formset_store_field' => 'Gönderiyi Sakla',
    'formset_store_instructions' => 'Form gönderimlerinin saklanıp saklanmayacağı. Yalnızca e-posta bildirimleri almak istiyorsanız kullanışlıdır.',
    'formset_honeypot_link' => 'Honeypot nedir?',
    'formset_fields_instructions' => 'Bu formdaki alanları seçin ve özelleştirin.',

    // Updater

    'nav_updater' => 'Güncelleyici',
    'updates' => 'Güncellemeler',
    'system_updates' => 'Sistem güncellemeleri',
    'upgrade_to_latest' => 'Son Sürüme Yükselt',
    'upgrade_to_version' => 'Yükselt: sürüm',
    'downgrade_to_version' => 'Düşür: sürüm',
    'update_available' => 'Güncelleme mevcut',
    'update_complete' => 'Güncelleme tamamlandı.',
    'up_to_date' => 'Güncel!',
    'on_latest' => 'Statamic`in en son sürümünü kullanıyorsunuz',
    'current_version' => 'Mevcut versiyon',
    'released_on_date' => 'Çıkış tarihi :date',
    'updates_available' => 'Yeni bir güncelleme var|Yeni güncellemeler var',
    'backup_failed' => 'Yedekleme Başarısız',
    'backup' => 'Yedek',
    'backed_up' => 'Yedeklendi',
    'backing_up' => 'Yedekleniyor...',
    'backing_up_instructions' => 'Geri dönmek isterseniz kullanırsınız diye <code>statamic</code> klasörünüzü sıkıştırıyoruz.',
    'backup_reminder' => 'Bu güvenli bir süreçtir. Güncelleştirmeyi çalıştırırken her şeyi yedekledik, böylece bir şeyler ters giderse en son sürümünüzü <code>local/temp</code> klasöründe bulabilirsin.',
    'couldnt_fetch_updates' => 'Güncellemeler alınırken bir sorun oluştu',

    // Download
    'downloading' => 'İndiriliyor ...',
    'downloaded' => 'İndirildi.',
    'download_failed' => 'İndirme başarısız',
    'downloading_latest' => 'Sizin için Statamic`in en yeni ve en iyi sürümünü indiriliyor.',
    'downloading_version' => 'v:version indiriliyor',

    // Installation

    'installation' => 'Kurulum',
    'installation_has_failed' => 'Yükleme başarısız oldu',
    'preparing_installation' => 'Yedekleme ve indirme işlemi tamamlandıktan sonra kurulum başlayacaktır.',
    'now_running' => 'Artık Statamic v:version sürümünü çalıştırıyorsunuz',
    'statamic_ready' => 'Statamic hazır ve seni bekliyor.',
    'delete_installer' => 'Lütfen <code>installer.php</code> dosyasını silin.',
    'installer_deleted' => 'Sildim. Beni Kontrol Paneline götür →',

    // Archive

    'unzipping_files' => 'Dosyalar açılıyor ...',
    'unzipping_files_instructions' => 'Dosyaları Statamic zip`ten geçici bir yere alıyoruz.',
    'unzipped_files' => 'Dosyalar açıldı.',

    // Dependencies

    'installing_dependencies' => 'Bağımlılıklar yükleniyor ...',
    'installing_dependencies_instructions' => 'Bağımlılığı olan herhangi bir ekin getirilmesi gerekir. Bu biraz zaman alabilir.',
    'dependencies_installed' => 'Bağımlılıklar yüklendi.',

    // Swap Release

    'swapping_files' => 'Dosyalar değiştiriliyor ...',
    'swapping_files_instructions' => 'Statamic, yazılım büyüme hormonu (SGH) ile enjekte ediliyor. Sonuçlar sadece birkaç dakika içinde görülebilir.',
    'files_swapped' => 'Dosyalar değiştirildi.',

    // Clean Up

    'cleaning_up' => 'Temizleniyor...',
    'cleaning_up_instructions' => 'Güncelleme sırasında oluşturulan geçici dosyaları siliyoruz.',

    // Importers
    'nav_import' => 'İçe Aktar',
    'site_url' => 'Site URL`si',
    'import_from_version' => 'Statamic’ten içerik aktar :version',
    'import_complete' => 'İçe Aktarma Tamam',
    'import_has_completed' => 'İçe aktarma tamamlandı.',
    'import_summary' => 'İçe Aktarma Özeti',
    'import_site_url_instructions' => 'İçe aktaracağınız mevcut web sitesinin URL`sini girin.',
    
    'duplicate_item_warning' => 'Bir kopyası mevcut.|:count kopya mevcut',
    'uncheck_duplicates' => 'Kopyaların İşaretini Kaldır',

    'from_json' => 'JSON`dan',
    'json_file' => 'JSON Dosyası',
    'upload_json_file' => 'Bir JSON dosyası yükleyin',
    
    // Export

    'export_failed' => 'Dışa Aktarma Başarısız Oldu',
    'export_export_failed_with_error' => 'Dışa aktarma başarısız oldu:',

    'manage_widgets' => 'Widget`ları Yönet',
    
    // Things

    'thing_created' => ':thing oluşturuldu.',
    'thing_updated' => ':thing güncellendi.',
    'thing_deleted' => ':thing silindi.',
    'thing_configure' => 'Yapılandır :thing',
    'thing_saved' => ':thing kaydedildi.',
    'thing_editing' => 'Düzenle :thing',

    'saved_success' => 'Kaydedildi',

    // Statuses

    'statuses' => 'Durum|Durumlar',
    'status_pending' => 'Askıda',
    'status_active' => 'Aktif',
    'published' => 'Yayında',
    'keyboard_shortcuts' => 'Klavye kısayolları',
    'show_keyboard_shortcuts' => 'Klavye Kısayollarını Göster',
    'license_keys' => 'Lisans Anahtarları',
    'trial_mode' => 'Deneme modu',
    'trial_mode_missing_license_keys' => 'Yayına girmeden önce lisans anahtarlarının girilmesi gerekir.',
    'trial_mode_invalid_license_keys' => 'Geçersiz lisans anahtarı girdiniz.',
    'trial_mode_license_keys_for_domains' => 'Geçerli lisans anahtarları girildi: :domains',
    'invalid_license_keys' => 'Lütfen lisans anahtarınızı satın alın ve girin ya da Lisans Sözleşmesini ihlal etme riskini alın.',
    'license_keys_incorrect_domain' => 'Yanlış alan adı için lisans anahtarları girildi. Lütfen bir çözüm bulun ve Lisans Sözleşmesini ihlal etmeyin.',
    'checking_license_key' => 'Lisans anahtarınız kontrol ediliyor, lütfen bekleyin ...',
    'license_missing' => 'Lisans anahtarı eksik.',
    'license_valid' => 'Geçerli bir lisans anahtarınız var.',
    'license_invalid' => 'Lisans anahtarı geçersiz.',
    'license_wrong_domain' => 'Lisanslı :domain',
    'license_no_domain' => 'Lisans ile ilişkili bir alan alanı yok.',
    'license_key_instructions' => 'Lütfen lisans anahtarınızı girin. Sizinkini <a href=":licenses">Statamic Hesabınızda</a> bulabilir veya gerekirse <a href=":buy_license">yeni bir lisans alabilirsiniz</a> .',
    'buy_now' => 'Şimdi Satın Al',
    'license_statamic_link' => 'Statamic.com`da lisans satın alın ve alanları yönetin',

    'continue_in_trial_mode' => 'Deneme Modunda Devam Et',
    'unlicensed' => 'Lisanssız',
    'unlicensed_message' => 'Lütfen lisans anahtarınızı satın alın ve girin ya da Lisans Sözleşmesini ihlal etme riskini alın.',
    'on_trial_with_invalid_license' => 'Şu anda deneme modundasınız, ancak lisansınız geçersiz.',
    'on_trial_without_license' => 'Şu anda deneme modundasınız. Herkese açık bir alana geçmeden önce bir lisans anahtarı eklemeyi unutmayın.',
    'invalid_statamic_license' => 'Statamic lisansınız geçersiz.',
    'couldnt_connect_to_outpost' => 'Statamic Outpost ile iletişimde bir sorun vardı.',

    // Verbs and helpers

    'actions' => 'Aksiyon|Eylemler',
    'add' => 'Ekle',
    'edit' => 'Düzenle',
    'editing' => 'Düzenleniyor',
    'view' => 'Görüntüle',
    'remove' => 'Kaldır',
    'update' => 'Güncelle',
    'delete' => 'Sil',
    'uncheck_all' => 'Tümünü İşaretleme',
    'duplicate' => 'Kopya',
    'manage' => 'Yönet',
    'create' => 'Oluştur',
    'reorder' => 'Yeniden Sırala',
    'submit' => 'Gönder',
    'save' => 'Kaydet',
    'saving' => 'Kaydediliyor',
    'save_changes' => 'Değişiklikleri Kaydet',
    'save_and_continue' => 'Kaydet ve Devam Et',
    'save_and_another' => 'Kaydet ve Yeni Ekle',
    'are_you_sure' => 'Emin misiniz?',
    'yes_im_sure' => 'Evet, eminim',
    'refresh' => 'Yenile',
    'cancel' => 'İptal et',
    'loading' => 'Yükleniyor',
    'expand' => 'Genişlet',
    'collapse' => 'Daralt',
    'show' => 'Göster',
    'hide' => 'Gizle',
    'move' => 'Taşı',
    'edit_layout' => 'Yerleşimi Düzenle',
    'save_layout' => 'Yerleşimi Kaydet',
    'save_order' => 'Sıralamayı Kaydet',
    'toggle_dropdown' => 'Aç / Kapat',
    'confirm_delete_items' => 'Bu öğe silinecek|Seçilen öğeler silinecek',
    'confirm_delete_page' => 'Altındaki tüm öğeler ile birlikte silinecek',
    'confirm_delete_folder' => 'Bu klasör silinecek',

    'configure' => 'Yapılandır',
    'browse' => 'Gözat',
    'select' => 'Seç',
    'localizing' => 'Yerelleştir',
    'add_row' => 'Satır Ekle',
    'localizable' => 'Yerelleştirilebilir',
    'please_wait' => 'Lütfen bekleyin...',
    'exporting' => 'Dışa aktarılıyor ...',
    'importing' => 'İçe aktarılıyor ...',
    'return_to_dashboard' => 'Yönetim Paneline Dön',
    'publish_content' => 'Yayınla',
    'close_this_window' => 'Bu pencereyi kapat',
    'toggle_navigation' => 'Navigasyonu değiştir',
    'logging_in' => 'Giriş yapılıyor...',
    'logged_in' => 'Giriş yapıldı.',
    'logged_in_taking_you_to_cp' => 'Giriş yapıldı! Seni kontrol paneline götürüyorum ...',
    'write' => 'Yaz',
    'preview' => 'Önizleme',
    'collapse_all' => 'Tümünü daralt',
    'expand_all' => 'Tümünü genişlet',
    'please_select' => 'Lütfen seçin',
    'selected' => 'seçili',
    'add_another_item' => 'Başka bir öğe ekle',
    'show_drafts' => 'Taslakları Göster',
    'hide_drafts' => 'Taslakları Gizle',
    'count' => 'Adet',
    'reset' => 'Resetle',
    'installed' => 'Kurulmuş',
    'add_condition' => 'Koşul ekle',
    'open' => 'Açık',
    'download' => 'İndir',
    'locale' => 'Yerel',
    'hidden' => 'Gizli',
    'fields' => 'Alan|Alanlar',
    'locales' => 'Yereller|Yereller',
    'keys' => 'Tuşlar|Tuşlar',
    'values' => 'Değer|Değerler',
    'names' => 'İsim|İsimler',
    'usernames' => 'Kullanıcı adı|Kullanıcı adları',
    'emails' => 'E-posta|E-postalar',
    'passwords' => 'Şifre|Şifreler',
    'confirm_password' => 'Şifreyi Onayla',
    'remember_me' => 'Beni Hatırla',
    'title' => 'Başlık',
    'titles' => 'Başlık|Başlıklar',
    'slug' => 'Slug',
    'slugs' => 'Slug|Slug',
    'rows' => 'Satır|Satırlar',
    'columns' => 'Sütun|Sütunlar',
    'folders' => 'Klasör|Klasörler',
    'date' => 'tarih',
    'dates' => 'Tarih|Tarihler',
    'date_and_time' => 'Tarih ve saat',
    'datestring' => 'Tarih',
    'publish_date' => 'Yayın tarihi',
    'items' => 'Öğe|Öğeler',
    'add_date' => 'Tarih ekle',
    'add_time' => 'Zaman ekle',
    'login' => 'Oturum aç',
    'login_with' => 'Giriş yap :provider',
    'login_to_continue' => 'Devam etmek için giriş yapın',
    'new' => 'Yeni',
    'or' => 'veya',
    'order' => 'Sıra',
    'one_quarter' => '1/4 - Bir çeyrek',
    'three_quarters' => '3/4 - Üç çeyrek',
    'one_third' => '1/3 - Üçte bir',
    'two_thirds' => '2/3 - Üçte iki',
    'half' => 'Yarım',
    'full_width' => 'Tam genişlik',
    'width' => 'Genişlik',
    'version' => 'versiyon',
    'versions' => 'Sürüm|sürümleri',
    'developer' => 'Geliştirici',
    'developers' => 'Geliştirici|Geliştiriciler',
    'developer_mode' => 'Geliştirici modu',
    'description' => 'Açıklama',
    'descriptions' => 'Açıklama|Açıklamalar',
    'name' => 'Isim',
    'username' => 'Kullanıcı adı',
    'email' => 'E-posta',
    'done' => 'Tamam',
    'close' => 'Kapat',
    'templates' => 'Şablon|Şablonlar',
    'authors' => 'Yazar | Yazarlar',
    'installer' => 'Kurulum',
    'search' => 'Arama',
    'search_results' => 'Arama Sonuçları',
    'no_search_results' => 'Arama Aonucu Bulunamadı',
    'instructions' => 'Talimatlar',
    'handle' => 'Belirteç',
    'label' => 'Etiket',
    'type' => 'Tip',
    'route' => 'Rota',
    'terms' => 'Terim|Terimler',
    'progress' => 'İlerleme',
    'variables' => 'Değişken|Değişkenler',
    'license_key' => 'Lisans anahtarı',
    'driver' => 'Sürücü',
    'path' => 'Yol',
    'url' => 'URL',
    'valid_url' => 'Geçerli URL',
    'invalid_url' => 'Geçersiz URL',
    'bucket' => 'Kova',
    'region' => 'bölge',
    'metrics' => 'Metrik | Ölçümleri',
    'whats_this' => 'Bu nedir?',
    'first_name' => 'İsim',
    'last_name' => 'Soyadı',
    'bio' => 'öyleydi',
    'markdown_cheatsheet' => 'Markdown Hilesi',
    'locales_and_urls' => 'Yerel ayar ve URL`ler',
    'debug_mode' => 'Hata ayıklama modu',
    'defined_in_environment' => 'Çevreniz tarafından harici olarak yönetilir.',
    'be_right_back' => 'Hemen dönecek.',
    'size' => 'Boyut',
    'read_only' => 'Sadece oku',
    'read_only_mode' => 'Salt Okunur Modu',
    'next_step' => 'Sonraki adım',

    'nav_content' => 'İçerik',
    'nav_tools' => 'Araçlar',
    'nav_configure' => 'Ayarla',
    'nav_resolve_duplicate_ids' => 'Yinelemeleri Düzenle',
    'mount_collection' => 'Koleksiyonu Bağla',
    'unmount_collection' => 'Koleksiyonu Kaldır',

    'handle_exists' => 'Bu belirtece sahip bir taşıyıcı zaten var.',

    'duplicate_id_title' => 'Yinelenen kimlikler',
    'no_duplicate_ids' => 'Hiçbir yinelenen kimlik algılanmadı.',
    'generate_new_id' => 'Yeni kimlik oluştur.',

    'path_resolves_to' => 'Yol şu şekilde çözülür: :path',
    'path_exists' => 'Yol mevcut.',
    'path_does_not_exist' => 'Yol mevcut değil.',

    'heading_1' => 'Başlık 1',
    'heading_2' => 'Başlık 2',
    'heading_3' => 'Başlık 3',
    'heading_4' => 'Başlık 4',
    'heading_5' => 'Başlık 5',
    'heading_6' => 'Başlık 6',
    'bold' => 'Kalın',
    'italic' => 'İtalik',
    'underline' => 'Altı çizili',
    'strikethrough' => 'Üzeri çizili',
    'remove_formatting' => 'Biçimlendirmeyi Kaldır',
    'unordered_list' => 'Sırasız liste',
    'ordered_list' => 'Sıralı Listesi',
    'blockquote' => 'Alıntı',
    'superscript' => 'Üst simge',
    'subscript' => 'Alt simge',
    'add_link' => 'Link ekle',
    'remove_link' => 'Bağlantıyı Kaldır',
    'link_to_asset' => 'Varlığa Bağlantı',
    'inline_code' => 'Satır İçi Kod',
    'edit_link' => 'Bağlantıyı Düzenle',
    'open_in_new_window' => 'Yeni pencerede aç',
];
