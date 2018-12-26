<?php

return [

    // General CP
    'dashboard' => 'Kontrollzentrum',  // 'Dashboard'
    'nav_dashboard' => 'Kontrollzentrum',  // 'Dashboard'
    'sneak_peek' => 'Vorschau',  // 'Sneak Peek'
    'sneak_peeking' => 'Vorschau',  // 'Sneaking a Peek'
    'view_site' => 'Seite anzeigen',  // 'View Site'
    'visit_url' => 'URL aufrufen',  // 'Visit URL'
    'search_for_anything' => 'Suche nach irgendetwas',  // 'Search for anything'

    // Pages
    'page' => 'Seite', // 'Page',
    'pages' => 'Seite|Seiten',  // 'Page|Pages'
    'nav_pages' => 'Seiten',  // 'Pages'
    'create_page_button' => 'Seite erstellen',  // 'Create Page'
    'edit_homepage_button' => 'Startseite bearbeiten',  // 'Edit Homepage'
    'create_page' => 'Neue Seite erstellen',  // 'Create a New Page'
    'page_created' => 'Seite erstellt',  // 'Page Created'
    'editing_page' => 'Bearbeite Seite',  // 'Editing Page'
    'page_updated' => 'Seite aktualisiert',  // 'Page Updated'
    'home' => 'Home',  // 'Home'
    'show_urls' => 'Zeige URLs',  // 'Show URLs'
    'show_titles' => 'Zeige Titel',  // 'Show Titles'
    'choose_page_type' => 'Seiten-Typ auswählen',  // 'Choose Page Type'
    'parent_page' => 'Übergeordnete Seite',  // 'Parent Page'
    'pages_reordered' => 'Seiten erfolgreich sortiert.',  // 'Pages reordered successfully.'

    // Collections
    'collections' => 'Sammlung|Sammlungen',  // 'Collection|Collections'
    'nav_collections' => 'Sammlungen',  // 'Collections'
    'manage_collections' => 'Sammlungen verwalten',  // 'Manage Collections'
    'create_collection_button' => 'Sammlung erstellen',  // 'Create Collection'
    'create_collection' => 'Neue Sammlung erstellen',  // 'Create a New Collection'
    'collection_created' => ':title erstellt',  // ':title Created'
    'editing_collection' => 'Bearbeite :collection',  // 'Editing :collection'
    'collection_updated' => ':title aktualisiert',  // ':title Updated'
    'collections_empty' => 'Sammlungen sind eine Zusammenfassung für Gruppen von Einträgen, die ähnliche Inhalte haben und die gleiche URL-Logik verwenden.',  // 'Collections are containers that hold groups of similar entries all following the same URL pattern.'
    'collection_title_instructions' => 'Sammlungs-Name.',  // 'The proper name of your collection.'
    'collection_handle_instructions' => "Die Variable der Sammlung wird intern für Einstellungen und Vorlagen verwendet.",  // "The collection's variable name used in settings and templates."
    'collection_order_instructions' => "Definiere die Standard-Sortierungsmethode für Einträge in dieser Sammlung.",  // "Set the default sorting method for entries in this collection."
    'collection_fieldset_instructions' => "Die Standard Eingabemaske, außer anders definiert.", // "The default fieldset, unless otherwise specified."
    'collection_template_instructions' => "Das Standard Template, außer anders definiert.", // "The default template, unless otherwise specified."
    'collection_route_instructions' => "Die Route kontrolliert die URL-Logik für alle Einträge dieser Sammlung.",  // "The route controls the URL pattern all entries in the collection will follow."
    'collection_does_not_exist' => 'Die Sammlung :collection existiert nicht.', // 'Collection :collection does not exist.'

    // Entries
    'entry' => 'Eintrag', // 'Entry'
    'entries' => 'Eintrag|Einträge',  // 'Entry|Entries'
    'nav_entries' => 'Einträge',  // 'Entries'
    'create_entry_button' => 'Eintrag erstellen',  // 'Create Entry'
    'create_entry' => 'Neu :noun',  // 'New :noun'
    'entry_created' => 'Eintrag erstellt',  // 'Entry Created'
    'editing_entry' => 'Eintrag bearbeiten',  // 'Editing Entry'
    'entry_updated' => 'Eintrag aktualisiert',  // 'Entry Updated'
    'entries_empty_heading' => ':type Einträge',  // ':type Entries'
    'entries_empty' => 'Einträge sind Datensätze mit eigener URL: Diese werden z.B. für Listen, Blog-Einträge, News, Events, etc. verwendet.',  // 'Entries are bits of content that have their own URL and are often shown in lists, like blog posts, press releases, and events.'

    // Taxonomies
    'taxonomy' => 'Taxonomie', // 'Taxonomy'
    'taxonomies' => 'Taxonomie|Taxonomien',  // 'Taxonomy|Taxonomies'
    'nav_taxonomies' => 'Taxonomien',  // 'Taxonomies'
    'create_taxonomy' => 'Neue Taxonomie erstellen',  // 'Create New Taxonomy'
    'create_taxonomy_button' => 'Taxonomie erstellen',  // 'Create Taxonomy'
    'manage_taxonomies' => 'Verwalte Taxonomien',  // 'Manage Taxonomies'
    'editing_taxonomy' => 'Bearbeite Taxonomie',  // 'Editing taxonomy'
    'taxonomy_updated' => 'Taxonomie aktualisiert',  // 'Taxonomy Updated'
    'taxonomy_created' => 'Taxonomie erstellt',  // 'Taxonomy Created'
    'taxonomies_empty_heading' => 'Taxonomien',  // 'Taxonomies'
    'taxonomies_empty' => 'Eine Taxonomie verbindet Daten logisch miteinander: z.B. als Kategorie oder Farbe.',  // 'A Taxonomy is a system of classifying data around a set of unique characteristics, such as category or color.'
    'taxonomies_title_instructions' => 'Name der Taxonomie.',  // 'The name of your taxonomy.'
    'taxonomies_slug_instructions' => 'Dieser Name wird intern gebraucht und in den Vorlagen verwendet.',  // 'This is how the taxonomy will be referenced in templates.'
    'taxonomies_fieldset_instructions' => 'Der Anzeigename der Taxonomie.',  // 'The fields that should be displayed when editing terms in this taxonomy.'
    'taxonomies_route_instructions' => 'Die Begriffe in dieser Taxonomie haben URLs, die diesem Routing-Schema folgen.',  // 'The terms in this taxonomy will have URLs that follow this routing scheme.'

    'taxonomy_terms' => 'Begriff|Begriffe',  // 'Term|Terms'
    'create_taxonomy_term_button' => 'Erstelle :term',  // 'Create :term'
    'create_taxonomy_term' => 'Neuen :term erstellen',  // 'Create a New :term'
    'taxonomy_term_created' => 'Taxonomie-Begriff erstellt',  // 'Taxonomy term created'
    'taxonomy_terms_empty_heading' => 'Liste der :term',  // 'Terms in :term'
    'taxonomy_terms_empty' => 'Wenn Daten über Taxonomien verbunden sind, ist der Begriff das eigentliche Etikett für einen Datensatz. Z.B. Rot wäre ein Begriff in der Taxonomie Farben.',  // 'Where a Taxonomy is the grouping, a Term is the actual label applied to a piece of content. For example, "Red" would be a term in "Colors".'

    // Globals
    'global' => 'Global', // 'Global'
    'globals' => 'Global|Globale',  // 'Global|Globals'
    'manage_global_sets' => 'Globale Sets verwalten', // 'Manage Global Sets'
    'configuring_global_set' => 'Globale Sets konfigurieren', // 'Configuring Global Set'
    'nav_globals' => 'Globale',  // 'Globals'
    'manage_global_sets' => 'Verwalte globale Sets',  // 'Manage Global Sets'
    'create_global_set_button' => 'Globale Sets erstellen',  // 'Create Global Set'
    'create_global_set' => 'Neues globales Set erstellen',  // 'Create New Global Set'
    'global_set_created' => ':type erstellt',  // ':type created'
    'editing_globals' => 'Globale bearbeiten',  // 'Editing Globals'
    'globals_updated' => 'Globale aktualisiert',  // 'Globals Updated'
    'globals_empty_heading' => 'Globale Sets',  // 'Global Sets'
    'globals_empty' => 'Globale Daten sind Daten, die nicht an eine URL gebunden und allgemeiner und seitenübergreifender Natur sind: z.B. Firmen-Daten, Adressen, allgemeine Einstellungen für Vorlagen wie Schalter, Limits, Farben, Zeige/Verberge, Vorgaben, etc.',  // 'Global sets are groups of variables that represent content that isn\'t tied to a URL, such as company name, address, contact info, or even template level settings like limits, offsets, and show/hide toggles.'
    'general_globals' => 'Allgemein',  // 'General'
    'globals_title_instructions' => 'Der einzigartige Name für ein globales Set: z.B. Footer-Inhalt oder Einstellungen',  // "The proper name of your global set. For example: Footer Content, or Settings."
    'globals_slug_instructions' => 'Der interne Variablen-Name für ein globales Set. Z.B.: <code>footer_inhalt</code> oder <code>sidebar_settings</code>.',  // "This is the variable used in your templates. For example: <code>footer_content</code> or <code>sidebar_settings</code>."
    'globals_fieldset_instructions' => 'Wähle die gewünschten Eingabefelder, um die Eingabemaske zu verwalten.',  // "Pick which group of fields you want to use to manage this fieldset."

    // Assets
    'assets' => 'Medium|Medien',  // 'Asset|Assets'
    'nav_assets' => 'Medien',  // 'Assets'
    'new_asset' => 'Neues Medium',  // 'New Asset'
    'add_asset' => 'Medium hinzufügen',  // 'Add Asset'
    'browse_assets' => 'Medien anzeigen',  // 'Browse Assets'
    'browsing_assets' => 'Zeige Medien an',  // 'Browsing Assets'
    'creating_asset' => 'Erstelle Medium',  // 'Creating Asset'
    'asset_created' => 'Medium erstellt',  // 'Asset Created'
    'editing_asset' => 'Medium bearbeiten',  // 'Editing Asset'
    'asset_updated' => 'Medium aktualisiert',  // 'Asset Updated'
    'drop_to_upload' => 'Hereinziehen zum Hochladen',  // 'Drop to Upload'
    'upload_asset' => 'Medium hochladen',  // 'Upload Asset'
    'sync_assets' => 'Medien synchronisieren',  // 'Sync assets'
    'syncing_assets' => 'Synchronisiere Medien',  // 'Syncing assets'
    'new_folder' => 'Neuer Ordner',  // 'New Folder'
    'upload' => 'Hochladen',  // 'Upload'
    'uploads' => 'Upload|Uploads',  // 'Upload|Uploads', no correct German definiton for that, leave as is
    'filename' => 'Dateiname',  // 'Filename'
    'filesize' => 'Dateigröße',  // 'File size'
    'date_modified' => 'Änderungsdatum',  // 'Date modified'
    'parent_folder' => 'Übergeordneter Ordner',  // 'Parent folder'
    'containers' => 'Container', // 'Containers'
    'asset_folder_empty_heading' => 'Leerer Ordner',  // 'Empty folder'
    'asset_folder_empty' => 'Lade Dateien hoch, indem du sie in diesen Bereich ziehst.',  // 'Upload files by dragging and dropping them into this area.'
    'focal_point' => 'Fokus-Punkt',  // 'Focal point'
    'focal_point_label' => 'Klicke auf das Bild, um den Fokus-Punkt zu ändern',  // 'Click image to adjust the focal point'
    'focal_point_instructions' => 'Der Fokus-Punkt wird für Bildauschnitte verwendet und definiert den wichtigen, sichtbaren Bereich.',  // 'The focal point is used when cropping so the most important part of the image is not removed.'
    'or_drag_and_drop_files' => 'oder Medien hier reinziehen.',  // 'or drag and drop files.'
    'no_asset_container_specified' => 'Der Medien-Container ist undefiniert.',  // 'No asset container specified.'
    'rename_file' => 'Datei umbenennen',  // 'Rename File'
    'rename_file_warning' => 'Wird eine Datei umbenannt, werden die Verweise zu ihr nicht angepasst. Dies _kann_ zu kaputten Links auf deiner Website führen.',  // 'Renaming a file will not update any references to it, which _may_ result in broken links in your site.'
    'move_file' => 'Datei verschieben',  // 'Move file'
    'move_file_warning' => 'Wird eine Datei verschoben, werden die Verweise zu ihr nicht angepasst. Dies _kann_ zu kaputten Links auf deiner Website führen.', // 'Moving a file will not update any references to it, which _may_ result in broken links in your site.',
    'dimensions' => 'Abmessungen',  // 'Dimensions'
    'last_modified' => 'Änderungsdatum',  // 'Last Modified'
    'url_resolves_to' => 'URL zeigt auf :path', // 'URL resolves to: :path'


    // Folder
    'folder_title_instructions' => 'Der angezeigte Name des Ordners.',  // 'The display name of the folder.'
    'folder_directory_instructions' => 'Der interne System-Name des Ordners',  // 'The filesystem directory name'

    // Asset Containers
    'asset_containers' => 'Medien-Container|Medien-Container',  // 'Asset Container|Asset Containers'
    'manage_asset_containers' => 'Verwalte Medien-Container',  // 'Manage Asset Containers'
    'new_asset_container' => 'Neuer Medien-Container',  // 'New Asset Container'
    'creating_asset_container' => 'Erstelle Medien-Container',  // 'Creating Asset Container'
    'asset_container_created' => 'Medien-Container erstellt',  // 'Asset Container created'
    'editing_asset_container' => 'Bearbeite Medien-Container',  // 'Editing Asset Container'
    'asset_container_updated' => 'Medien-Container aktualisiert',  // 'Asset Container updated'
    'asset_containers_empty_heading' => 'Es sind keine Medien-Container konfiguriert.',  // 'There are no configured asset containers.'
    'asset_containers_empty' => 'Jeder Medien-Container ist ein Ort im Dateisystem und kann entweder öffentlich verfügbar oder vor neugierigen Blicken geschützt werden.',  // 'Each asset container can be a location on your file system, which can either be publicly accessible or protected from prying eyes.'
    'select_asset_container' => 'Medien-Container auswählen.',  // 'Select an asset container.'

    // Asset Folders
    'create_folder' => 'Ordner erstellen',  // 'Create Folder'
    'edit_folder' => 'Ordner bearbeiten',  // 'Edit Folder'
    'asset_name_instructions' => 'Der angezeigte Ordnername',  // 'The display name of the container.'
    'asset_handle_instructions' => 'Eine eindeutige Zeichenfolge als Referenz für den Container. <b>Kann nach dem Erstellen nicht mehr geändert werden.</b>',  // 'A unique string that you can use to reference your container. <b>This cannot be changed after creation.</b>'
    'asset_fieldset_instructions' => 'Die Eingabemaske für die Medien.',  // 'The fieldset to be used by assets in this container.'
    'asset_driver_instructions' => 'Wo sollen die Medien gespeichert und abgerufen werden?',  // 'Where will the assets be stored and accessed?'
    'asset_path_instructions' => 'Ablageort des Ordners im internen System.',  // 'Location of the folder on the filesystem.'
    'asset_url_instructions' => 'URL des Ordners.',  // 'URL of the folder.'
    'asset_folder_basename' => 'Ordnername',  // 'Folder name'

    // Fields Builder
    'add_field' => 'Neues Feld hinzufügen', // 'Add New Field'
    'quick_add' => 'Schnell hinzufügen', // 'Quick Add'
    'toggle_fields' => 'Felder umschalten', // 'Toggle Fields'
    'sidebar' => 'Seitenleiste', // 'Sidebar'
    'meta' => 'Meta', // 'Meta'
    'all' => 'Alle', // 'All'

    // Set Builder
    'add_set' => 'Set hinzufügen',  // 'Add Set'
    'edit_set' => 'Set bearbeiten',  // 'Edit Set'
    'delete_set' => 'Set löschen',  // 'Delete Set'
    'toggle_sets' => 'Sets umschalten', // 'Toggle Sets'
    'set_fields_instructions' => "Wähle die Eingabefelder für dieses Set",  // "Choose this set's fields"

    // Amazon S3
    'access_key_id' => 'Zugriffsschlüssel-ID',  // 'Access Key ID'
    'secret_access_key' => 'Geheimer Zugriffsschlüssel',  // 'Secret Access Key'

    // Users
    'user' => 'Benutzer', // 'User'
    'users' => 'Benutzer|Benutzer',  // 'User|Users'
    'nav_users' => 'Benutzer',  // 'Users'
    'manage_users' => 'Benutzer verwalten', // 'Manage Users'
    'create_user_button' => 'Benutzer erstellen',  // 'Create User'
    'create_user' => 'Erstelle Benutzer',  // 'Create User'
    'create_a_user' => 'Einen Benutzer erstellen',  // 'Create a User'
    'user_created' => 'Benutzer erstellt',  // 'User created'
    'editing_user' => 'Benutzer bearbeiten',  // 'Editing User'
    'user_updated' => 'Benutzer aktualisiert',  // 'User updated'
    'reset_password' => 'Passwort zurücksetzten', // 'Reset your password'
    'choose_new_password' => 'Wähle ein neues Passwort', // 'Choose a New Password'
    'new_password' => 'Neues Passwort', // 'New Password'
    'change_password' => 'Passwort ändern', // 'Change password'
    'send_email' => 'E-Mail senden', // 'Send email"
    'email_sent' => 'E-Mail verschickt', // 'Email sent'
    'send_activation_email' => 'Aktivierungs-Mail senden',  // 'Send activation email'
    'send_password_reset_email' => 'Passwort-zurücksetzen-Mail senden',  // 'Send password reset email'
    'password_reset_email_not_sent' => 'E-Mail wurde nicht gesendet. Bitte überprüfe die Logs.', // 'Email not sent. Please check your logs.'
    'copy_activation_link' => 'Aktivierungslink kopieren',  // 'Copy activation link'
    'copy_password_reset_link' => 'Passwort-zurücksetzen-Link kopieren',  // 'Copy password reset link'
    'copy_password_reset_link_failed' => 'Es gab ein Problem beim Generieren des Links. Bitte überprüfe die Logs.', // 'There was a problem generating the link. Please check your logs.'
    'password_reset_sent' => 'Passwort-zurücksetzen-E-Mail versendet',
    'account_activated' => 'Ihr Account wurde aktiviert.', // 'Your account has been activated'
    'password_reset_success' => 'Ihr Passwort wurde zurückgesetzt', // 'You password has been reset'
    'activate_account' => 'Account aktivieren', // 'Activate Account'
    'account' => 'Konto',  // 'Account'
    'password' => 'Passwort', // 'Password'
    'password_for' => 'Passwort für :username', //  'Password for :username'
    'my_account' => 'Mein Konto',  // 'My Account'
    'profile' => 'Profil', // 'Profile'
    'logout' => 'Logout',  // 'Logout'
    'sign_out' => 'Logout', // 'Logout'
    'user_options' => 'Benutzer-Optionen',  // 'User Options'
    'user_bio_instructions' => 'Etwas über dich, wenn du möchtest',  // 'A little bit about you, if you like.'
    'user_account_created' => 'Benutzer-Konto erstellt.',  // 'A user account has been created.'
    'forgot_password' => 'Passwort vergessen?',
    'invalid_user' => 'Ungültiger Benutzer', // 'Invalid user'
    'invalid_code' => 'Ungültiger Code', // 'Invalid code'
    'invalid_creds' => 'Ungültige Zugangsdaten', // 'Invalid credentials'
    'go_back' => 'Zurück',

    // Password Reset
    'reset_code_missing' => 'Kein Code angegeben.',  // 'No code specified.'
    'reset_code_invalid' => 'Ungültiger Code',  // 'Invalid code'

    // Roles
    'roles' => 'Rolle|Rollen',  // 'Role|Roles'
    'nav_user-roles' => 'Benutzerrollen',  // 'User Roles'
    'create_role_button' => 'Rolle erstellen',  // 'Create Role'
    'creating_role' => 'Erstelle Rolle',  // 'Create a Role'
    'role_created' => 'Rolle erstellt',  // 'Role created'
    'editing_role' => 'Rolle bearbeiten',  // 'Editing Role'
    'role_updated' => 'Rolle aktualisiert',  // 'Role Updated'
    'roles_empty_heading' => 'Benutzerrollen',  // 'User Roles'
    'roles_empty' => 'Benutzerrollen erlauben es, Berechtigungen zu gruppieren. Z.B.: Redakteur und Admin',  // 'User Roles allow you to group a number of permissions under a single label. For example, editor, publisher, and admin.'

    // Permissions
    'permissions' => 'Berechtigung|Berechtigungen',  // 'Permission|Permissions'
    'access' => 'Zugriff',  // 'Access'
    'checking_folder_permissions' => 'Überprüfe Ordner-Berechtigungen, bitte warten...',  // 'Checking folder permissions, please wait...'
    'folders_permission_valid' => 'Datei und Ordner Berechtigungen sehen gut aus!',  // 'File and folder permissions look great!'
    'folders_unwritable' => 'Folgende Ordner brauchen Schreibberechtigung:',  // 'The following directories need to be writable:'

    // Error Pages
    'error' => 'Fehler',
    'permission_denied' => 'Zugriff verweigert',  // 'Permission Denied'
    'permission_denied_instructions' => "Du hast keinen Zugriff, diese Seite anzuzeigen.",  // "You don't have permission to view this page."
    'page_not_found' => 'Seite nicht gefunden',  // 'Page not found'
    'page_not_found_instructions' => 'Die angeforderte Seite wurde nicht gefunden.',  // 'The page you requested does not exist.'
    'session_expired' => 'Deine Sitzung ist abgelaufen.',  // 'Your session has expired.'
    'stache_building' => 'Der Cache wird gerade aktualisiert. Bitte warte und versuche es erneut.', // 'The cache is being updated. Please wait and try again.'
    'session_expired_error' => 'Deine Sitzung ist abgelaufen. Logge dich ein, um dort weiterzumachen wo du aufgehört hast.', // 'Your session has expired. Log in to continue where you left off.'
    'publish_error' => 'Es gab ein Problem beim Speichern deiner Daten. Mehr Details findest du in den Logs.', // 'There was an issue saving your data. More detail can be found in your logs.'
    'error_fetching_data' => 'Es gab ein Problem beim Abrufen deiner Daten. Mehr Details findest du in den Logs.', // 'There was an issue fetching your data. More detail can be found in your logs.'

    // User Groups
    'usergroups' => 'Benutzergruppe|Benutzergruppen',  // 'User Group|User Groups'
    'nav_user-groups' => 'Benutzergruppen',  // 'User Groups'
    'create_usergroup_button' => 'Benutzergruppe erstellen',  // 'Create Group'
    'creating_usergroup' => 'Erstelle Benutzergruppe',  // 'Creating User Group'
    'usergroup_created' => 'Benutzergruppe erstellt',  // 'User Group created'
    'editing_usergroup' => 'Benutzergruppe bearbeiten',  // 'Editing User Group'
    'usergroup_updated' => 'Benutzergruppe aktualisiert',  // 'User Group updated'
    'usergroups_empty_heading' => 'Benutzergruppen',  // 'User Groups'
    'usergroups_empty' => 'Benutzergruppen erlauben es dir unterschiedliche Rollen und Benutzer in einer Gruppe zu vereinen.',  // 'User Groups allow you mix and match different roles and users together into a single group.'

    // Settings
    'settings' => 'Einstellung|Einstellungen',  // 'Setting|Settings'
    'nav_settings' => 'Einstellungen',  // 'Settings'
    'settings_cp' => 'Kontrollzentrum',  // 'Control Panel'
    'settings_routes' => 'Routen',  // 'Routes'
    'settings_search' => 'Suche',  // 'Search'
    'settings_system' => 'System',  // 'System'
    'settings_assets' => 'Medien',  // 'Assets'
    'settings_caching' => 'Cache',  // 'Caching'
    'settings_debug' => 'Fehlersuche',  // 'Debugging'
    'settings_email' => 'E-Mail',  // 'Email'
    'settings_theming' => 'Oberfläche',  // 'Theming'
    'settings_users' => 'Benutzer',  // 'Users'
    'settings_updated' => 'Einstellungen aktualisiert.',  // 'Settings updated.'
    'settings_updated_and_indexed' => 'Einstellungen gespeichert und Such-Indizes aktualisiert.', // 'Settings saved and search indexes updated.'
    'settings_locales_instructions' => "Erstelle eine Sprache für jede Übersetzung. Du kannst dies auch zu einem späteren Zeitpunkt tun.",  // "Create a locale for each language translation. You can skip this for now and do it later if you'd prefer."
    'settings_locales_index_php_warning' => 'Du musst <code>\$locale</code> zu <code>:locale</code> in der Datei <code>index.php</code> ändern.', // "You will need to change the <code>\$locale</code> to <code>:locale</code> in your <code>index.php</code> file."
    'settings_debug_mode_instructions' => 'Bei aktiviertem Debug-Modus werden vollständige Fehlermeldungen angezeigt. Dies ist sehr hilfreich während der Entwicklung – vergiss aber nicht, diesen Modus wieder zu deaktivieren.',  // "Enabling Debug Mode will display all errors on screen. It's a great tool while a site is development, but remember to disable it in production."

    'shorthand' => 'Kürzel', // 'Shorthand',
    'shorthand_instructions' => 'Kürzel aus zwei Buchstaben.<br> Beispiel: `en`, `de`.', // 'The 2 character language code.<br> Example: `en`, `de`.',
    'add_locale' => 'Lokale hinzufügen', // 'Add Locale',
    'full_locale' => 'Volle Lokale', // 'Full Locale',
    'full_locale_instructions' => 'Wird für die PHP Datumslokalisierung benutzt.<br> Beispiel: `en_US`, `de_DE`', // 'Used for PHP date localization.<br>Example: `en_US`, `de_DE`.',
    'locale_name_instructions' => 'Wird zur Anzeige benutzt.<br> Beispiel: `Englisch`, `Deutsch`', // 'Used for display.<br> Example: `English`, `German`.',
    'locale_url_instructions' => 'Beispiel: `http://example.com/de/`', // 'Example: `http://example.com/de/`',



    // Addons
    'addons' => 'Erweiterung|Erweiterungen',  // 'Addon|Addons'
    'manage_addons' => 'Addons Verwalten', // 'Manage Addons'
    'nav_addons' => 'Erweiterungen',  // 'Addons'
    'addons_empty_heading' => 'Es sind keine Erweiterungen installiert',  // 'There are no addons'
    'addons_empty' => 'Erweiterungen erweitern die Funktionalität von Statamic.',  // 'Addons extend the functionality of Statamic.'

    // Fieldsets & Fields
    'fieldset' => 'Eingabemaske',  // 'Fieldset'
    'fieldsets' => 'Eingabemaske|Eingabemasken',  // 'Fieldset|Fieldsets'
    'nav_fieldsets' => 'Eingabemasken',  // 'Fieldsets'
    'create_fieldset_button' => 'Eingabemaske erstellen',  // 'Create Fieldset'
    'create_fieldset' => 'Erstelle Eingabemaske',  // 'Create a Fieldset'
    'fieldset_created' => 'Eingabemaske erstellt',  // 'Fieldset created'
    'editing_fieldset' => 'Eingabemaske bearbeiten',  // 'Editing Fieldset'
    'fieldset_updated' => 'Eingabemaske aktualisiert',  // 'Fieldset updated'
    'fieldsets_empty' => 'Eingabemasken lassen dich wiederverwendbare Gruppen erstellen, die dich deine Inhalte einfacher verwalten lassen. Hier strukturiert man Inhalt.',  // 'Fieldsets let you create and manage reusable groups of fieldtypes that in turn mange your content. This is where content modeling happens.'
    'fieldset_title_instructions' => 'Anzeigename. Normalerweise ein Hauptwort in der Einzahl.',  // 'Display Name, usually a singular noun.'
    'fieldset_handle_instructions' => "Wird in den Einstellungen/Layouts verwendet.",  // "Used in settings/templates.",
    'fieldset_create_title_instructions' => "Optional, wird angezeigt, sobald neuer Inhalt erstellt wird.",  // "Optional, shown when creating new content"
    'fieldset_hide_instructions' => "Im Auswahldialog verstecken?",  // "Hide from selection dialogs?"
    'fieldset_fields_instructions' => 'Weise Eingabefelder dieser Eingabemaske zu und verändere diese.',  // 'Assign and customize the fields and fieldtypes in this fieldset.'
    'fieldset_taxonomies_instructions' => 'Zeige, verstecke, und konfiguriere Taxonomien, die bei dieser Eingabemaske angezeigt werden sollen.',  // 'Show, hide, and configure the taxonomies that should be displayed in this fieldset.'
    'create_title' => 'Titel erstellen',  // 'Create Title'
    'display_name' => "Anzeige-Name",  // "Display Name"
    'display_name_instructions' => "Der im Kontrollzentrum angezeigte Name",  // "The field's label shown in the Control Panel."
    'display_text' => 'Anzeige-Text',  // 'Display Text'
    'display_text_instructions' => "Feld-Beschreibung",  // "The field's label"
    'field_name' => 'Feld Name',  // 'Field Name'
    'field_name_instructions' => 'Feld-Variable',  // 'The field variable'
    'field_required' => 'Pflicht',  // 'Required'
    'field_required_instructions' => 'Dies ist ein Pflichtfeld',  // 'This field is required'
    'field_variable' => "Feld-Variable",  // "Field Variable"
    'field_variable_instructions' => 'Die Vorlagen-Variable des Feldes.',  // "The field's template variable."
    'field_instructions_instructions' => "Einfaches Markdown ist hier möglich.",  // "Basic Markdown is allowed. Encouraged, even."
    'field_width_instructions' => 'Die Feldgröße der Eingabemaske.',  // 'The size of the field in the fieldset layout.'
    'validation_rules' => "Validierungsregeln",  // "Validation Rules"
    'validation_instructions' => "Alle Laravel Validierungsregeln sind hier möglich",  // "Has access to all of Laravel's"
    'validation_instructions_link_text' => 'Validierungsregeln',  // 'validation rules'
    'validation_rules_instructions' => 'Gib eine mit senkrechten Strichen getrennte Liste von <a href=":url" target="_blank">Validationsregeln</a> an.',  // 'Enter a pipe delimited string of <a href=":url" target="_blank">validation rules</a>.'
    'default_value' => 'Standardwert',  // 'Default Value'
    'field_default_value_instructions' => 'Gib den Standardwert für das Textfeld ein.',  // 'Enter the default value for string-type fields.'
    'edit_field' => 'Feld bearbeiten',  // 'Edit Field'
    'choose_field_to_edit' => 'Wähle ein Feld, um dessen Einstellungen zu bearbeiten.',  // "Choose a field to edit its settings."
    'select_fieldtype' => 'Feldtypen auswählen', // 'Select Fieldtype'
    'field_added' => ':fieldtype Feld hinzugefügt.', // ":fieldtype field added."
    'set_added' => 'Set hinzugefügt.', // "Set added."
    'append_taxonomies' => 'Hänge Taxonomien an Einträge an', // 'Append Taxonomies on Entries'
    'append_taxonomies_instructions' => 'Wenn diese Eingabemaske bei einem Eintrag genutzt wird, wird jede Taxonomie, die nicht in der Eingabemaske definiert ist, automatisch zur Seitenleiste hinzugefügt.', // "When using this fieldset on an entry, any taxonomies not defined in the fieldset will be automatically added to the sidebar."
    'type_url' => 'URL eintippen', // 'Type a URL',
    'type_url_or_search' => 'Tippe eine URL ein oder suche nach einem Eintrag', // 'Type a URL or search for an item',

    'sections' => 'Abschnitt|Abschnitte', // 'Section|Sections'
    'section_label' => 'Abschnitts Beschriftung', // "Section Label"
    'section_handle' => 'Abschnitts Handle', // "Section Handle"
    'section_handle_tip' => 'Tipp: Du kannst den Abschnitt \'sidebar\' nennen, um ihn in eine Seitenleiste zu verwandeln.', // "Tip: You can name your section 'sidebar' to transform it into one."
    'sections_and_fields' => 'Abschnitte & Felder', // "Sections & Fields"

    'display_conditions' => 'Anzeige-Konditionen', // 'Display Conditions'
    'display_conditions_instructions' => 'Konfiguriere, wann dieses Feld angezeigt wird.', // 'Configure when this field will be shown.'
    'always_show' => 'Immer anzeigen', // 'Always Show'
    'show_when' => 'Zeige wenn...', // 'Show when...'
    'hide_when' => 'Verberge wenn...', // 'Hide when...'
    'standard' => 'Standard', // 'Standard'
    'custom' => 'Spezifisch', // 'Custom'
    'display_standard_instructions' => 'Wähle eine Kombination aus Feldern und dazugehörigen Werten.', // 'Choose a combination of fields and corresponding values.'
    'display_custom_instructions' => 'Gib deinen spezifischen JavaScript Abfrage-Methodenamen ein.', // 'Enter your custom JavaScript condition method name.'

    'basics' => 'Basics', // 'Basics'
    'visibility' => 'Sichtbarkeit', // 'Visibility'
    'extras' => 'Extras', // 'Extras'

    'fieldtype_category_text' => 'Text', // 'Text'
    'fieldtype_category_media' => 'Medium', // 'Media'
    'fieldtype_category_pickable' => 'Auswählbar', // 'Pickable'
    'fieldtype_category_structured' => 'Strukturiert', // 'Structured'
    'fieldtype_category_relationship' => 'Beziehung', // 'Relationship'
    'fieldtype_category_special' => 'Spezial', // 'Special'
    'fieldtype_category_system' => 'System', // 'System'

    // Forms
    'form' => 'Formular',  // 'Form'
    'forms' => 'Formular|Formulare',  // 'Form|Forms'
    'nav_forms' => 'Formulare',  // 'Forms'
    'forms_empty' => 'Formulare sammeln, melden und zeigen Benutzer-Einsendungen an.',  // 'Forms collect, display, and report user submitted reponses.'
    'create_form' => 'Formular erstellen',  // 'Create Form'
    'form_updated' => 'Formular aktualisiert',  // 'Form updated'
    'form_created' => 'Formular erstellt',  // 'Form created'
    'form_submission_deleted' => 'Einsendung gelöscht.',  // 'Submission deleted.'
    'submissions' => 'Einsendung|Einsendungen',  // 'Submission|Submissions'
    'response' => 'Antwort|Antworten',  // 'response|responses'
    'empty_responses' => 'Diese Formular hat noch keine Einsendungen.',  // 'This form is awaiting responses.'
    'create_formset' => 'Formularset erstellen',  // 'Create Formset'
    'creating_formset' => 'Erstelle Formularset',  // 'Creating Formset'
    'editing_formset' => 'Formularset bearbeiten',  // 'Editing Formset'
    'import' => 'Importieren',  // 'Import'
    'import_data' => 'Daten importieren', // 'Import Data'
    'import_link_text' => 'Erfahre mehr über das Import-JSON-Format', // 'Learn about the import JSON format'
    'export' => 'Exportieren',  // 'Export'
    'export_csv' => 'Exportiere als CSV',  // 'Export as CSV'
    'export_json' => 'Exportiere als JSON',  // 'Export as JSON'

    // Formset Builder
    'formset_title_instructions' => 'Bezeichnung des Formularset.',  // "Your formset's proper label."
    'formset_slug_instructions' => 'Wie auf das Formularset verwiesen wird.',  // 'How the formset will be referenced.'
    'formset_metrics_instructions' => 'Definiere Metriken, die angezeigt werden sollen.',  // 'Specify any metrics you would like displayed.'
    'formset_metrics_grid_add_row' => 'Metrik', // 'Metric',
    'formset_metrics_grid_type_field' => 'Metrik-Typ', // 'Metric Type',
    'formset_metrics_grid_type_option_sum' => 'Summe', // 'Sum',
    'formset_metrics_grid_type_option_total' => 'Gesamt', // 'Total',
    'formset_metrics_grid_type_option_average' => 'Durchschnitt', // 'Average',
    'formset_metrics_grid_label_field' => 'Bezeichnung', // 'Label',
    'formset_metrics_grid_params_field' => 'Parameter', // 'Parameters',
    'formset_emails_instructions' => 'Füge beliebige E-Mails hinzu, die beim Einreichen gesendet werden sollen.', // 'Add any emails you want to be sent upon submission.',
    'formset_emails_grid_add_row' => 'E-Mail', // 'Email',
    'formset_emails_grid_to_field' => 'Empfänger (zu)', // 'Recipient (To)',
    'formset_emails_grid_to_instructions' => 'E-Mail des Empfängers', // 'Email address of the recipient.',
    'formset_emails_grid_from_field' => 'Absender (von)', // 'Sender (From)',
    'formset_emails_grid_from_instructions' => 'Leer lassen, um auf den Standardwert zurückzufallen', // 'Leave blank to fall back to the site default.',
    'formset_emails_grid_reply_to_field' => 'Antworten auf', // 'Reply to',
    'formset_emails_grid_subject_field' => 'Betreff', // 'Subject',
    'formset_emails_grid_subject_instructions' => 'Betreff der E-Mail', // 'Email subject line.',
    'formset_emails_grid_template_field' => 'Vorlage', // 'Template',
    'formset_emails_grid_template_instructions' => 'Leer lassen, um eine automatische E-Mail zu benutzen.', // 'Leave blank to use an automagic email.',
    'formset_honeypot_field' => 'Honeypot-Feld',  // 'Honeypot Field'
    'formset_honeypot_instructions' => 'Der Name des Honeypot-Feld.',  // 'The field name to be used for the honeypot.'
    'formset_store_field' => 'Eingaben speichern', // 'Store Submissions'
    'formset_store_instructions' => 'Wenn Eingaben über Formulare gespeichert werden sollten. Hilfreich wenn du nur per E-Mail benachrichtigt werden willst.', // 'Whether form submissions should be stored. Useful if you only wish to get email notifications.'
    'formset_honeypot_link' => 'Was ist ein Honeypot?',  // "What's a honeypot?"
    'formset_fields_instructions' => 'Wähle und bearbeite die Felder für das Formular.',  // 'Choose and customize the fields in this form.'

    // Updater
    'nav_updater' => 'Aktualisierung',  // 'Updater'
    'updates'     => 'Aktualisierungen',  // 'Updates'
    'system_updates' => 'System Updates', // 'System Updates'
    'upgrade_to_latest' => 'Auf aktuelle Version aktualisieren',  // 'Upgrade to Latest'
    'upgrade_to_version' => 'Aktualisiere auf :version',  // 'Upgrade to :version'
    'downgrade_to_version' => 'Zurücksetzen auf :version',  // 'Downgrade to :version'
    'update_available' => 'Aktualisierung vorhanden',  // 'Update Available'
    'update_complete' => 'Aktualisierung ist fertig.',  // 'Update complete.'
    'up_to_date' => 'Aktuell!',  // 'Up to date!'
    'on_latest' => 'Du hast die aktuelle Version von Statamic',  // 'You are running the latest version of Statamic'
    'current_version' => 'Aktuelle Version',  // 'Current Version'
    'released_on_date' => 'Freigegeben am :date',  // 'Released on :date'
    'updates_available' => 'Es gibt eine Aktualisierung|Es gibt :updates Aktualisierungen',  // 'There is an update available|There are :updates updates available'
    'backup_failed' => 'Sicherung gescheitert',  // 'Backup Failed'
    'backup' => 'Sicherung',  // 'Backup'
    'backed_up' => 'Gesichert',  // 'Backed up'
    'backing_up' => 'Sichere…',  // 'Backing up...'
    'backing_up_instructions' => 'Wir archivieren deinen <code>statamic</code> Ordner als Wiederherstellungspunkt.',  // "We're zipping up your <code>statamic</code> folder, just in case you need to roll back."
    'backup_reminder' => 'Dies ist ein sicherer Prozess. Wir sichern alles während der Aktualisierung, du kannst die letzte Version unter  <code>local/temp</code> finden, falls etwas schief laufen sollte.',  // 'This is a safe process. We back up everything during running the update so you can always find your most recent version in <code>local/temp</code> if something goes wrong.'
    'couldnt_fetch_updates' => 'Es gab ein Problem beim Abrufen der Updates', // 'There was a problem fetching updates'

    // Download
    'downloading' => 'Lade herunter…',  // 'Downloading...'
    'downloaded' => 'Heruntergeladen.',  // 'Downloaded.'
    'download_failed' => 'Herunterladen fehlgeschlagen',  // 'Download Failed'
    'downloading_latest' => 'Wir besorgen Dir jetzt die neuste und beste Statamic Version.',  // 'Getting the latest and greatest version of Statamic for you.'
    'downloading_version' => 'Lade v:version',  // 'Getting v:version'

    // Installation
    'installation' => 'Installation',  // 'Installation'
    'installation_has_failed' => 'Installation fehlgeschlagen',  // 'Installation has failed'
    'preparing_installation' => 'Die Installation beginnt nach der Sicherung und nach dem Herunterladen.',  // 'Installation will begin once the backup and download have completed.'
    'now_running' => "Du hast jetzt Statamic v:version",  // "You're now running Statamic v:version"
    'statamic_ready' => 'Statamic ist bereit und wartet auf Dich.',  // 'Statamic is ready and waiting for you.'
    'delete_installer' => 'Bitte lösche die <code>installer.php</code> Datei.',  // 'Please delete the <code>installer.php</code> file.'
    'installer_deleted' => 'Ich habe sie gelöscht, bring mich zum Kontrollzentrum &rarr;',  // 'I deleted it. Take me to the Control Panel &rarr;'

    // Archive
    'unzipping_files' => 'Entpacke Dateien...',  // 'Unzipping files...'
    'unzipping_files_instructions' => 'Platziere die Dateien aus der Statamic ZIP-Datei an einem temporären Ort.',  // 'Placing the files from the Statamic zip in a temporary location.'
    'unzipped_files' => 'Dateien sind entpackt.',  // 'Files unzipped.'

    // Dependencies
    'installing_dependencies' => 'Installiere Abhängigkeiten...',  // 'Installing Dependencies...'
    'installing_dependencies_instructions' => 'Alle Abhängigkeiten von Erweiterungen werden heruntergeladen. Dies kann einen Moment dauern.',  // 'Any addons with dependencies will need to be fetched. This may take a moment.'
    'dependencies_installed' => 'Abhängigkeiten wurden installiert.',  // 'Dependencies installed.'

    // Swap Release
    'swapping_files' => 'Tausche Dateien aus...',  // 'Swapping files...'
    'swapping_files_instructions' => 'Die alten Statamic Dateien werden mit den neuen ausgetauscht.',  // 'Your smelly old Statamic files are being swapped for sparkly clean new ones.'
    'files_swapped' => 'Dateien wurden ausgetauscht.',  // 'Files swapped.'

    // Clean Up
    'cleaning_up' => 'Aufräumen...',  // 'Cleaning up...'
    'cleaning_up_instructions' => "Die während des Aktualisierung erstellten temporären Dateien werden gelöscht.",  // "We're deleting the temporary files created during the update."

    // Importers
    'nav_import' => 'Import',  // 'Import'
    'site_url' => 'Seiten-URL',  // 'Site URL'
    'import_from_version' => 'Importiere Inhalt von Statamic :version',  // 'Import content from Statamic :version'
    'import_complete' => 'Import abgeschlossen',  // 'Import Complete'
    'import_has_completed' => 'Der Import wurde abgeschlossen.',  // 'The import has completed.'
    'import_summary' => 'Import-Zusammenfassung',  // 'Import Summary'
    'import_site_url_instructions' => 'Gib die URL der zu importierenden Seite ein.',  // 'Enter the URL of the existing website you will be importing.'

    'duplicate_item_warning'  => "Ein Duplikat gefunden.|:count Duplikate gefunden.",
    'uncheck_duplicates' => 'Duplikate abwählen',

    'from_json' => 'Aus JSON',
    'json_file' => 'JSON-Datei',
    'upload_json_file' => 'Lade eine JSON-Datei hoch',

    // Export
    'export_failed' => 'Export fehlgeschlagen',  // 'Exporting Failed'
    'export_export_failed_with_error' => 'Export fehlgeschlagen mit dem Fehler:',  // 'Export faileed with error:'

    'manage_widgets' => 'Widgets verwalten',  // 'Manage Widgets'

    // Things
    'thing_created' => ':thing erstellt.',  // ':thing created.'
    'thing_updated' => ':thing aktualisiert.',  // ':thing updated.'
    'thing_deleted' => ':thing gelöscht.',  // ':thing deleted.'
    'thing_configure' => 'Konfiguriere :thing',  // 'Configure :thing'
    'thing_saved' => ':thing gespeichert.',  // ':thing saved.'
    'thing_editing' => ':thing bearbeitet',  // 'Editing :thing'

    'saved_success' => 'Gespeichert', // 'Saved'

    // Statuses
    'statuses' => 'Status|Status',  // 'Status|Statuses'
    'status_pending' => 'Ausstehend',  // 'Pending'
    'status_active' => 'Aktiv',  // 'Active'
    'published' => 'Publiziert',  // 'Published'

    // Shortcuts
    'keyboard_shortcuts' => 'Kurzbefehle',  // 'Keyboard Shortcuts'
    'show_keyboard_shortcuts' => 'Kurzbefehle zeigen',  // 'Show Keyboard Shortcuts'

    // License
    'license_keys' => 'Lizenzschlüssel', // 'License Keys'
    'trial_mode' => 'Testmodus', // 'Trial Mode'
    'trial_mode_missing_license_keys' => 'Lizenzschlüssel müssen vor dem Online-Gehen eingegeben werden.', // 'License keys need to be entered before going live.'
    'trial_mode_invalid_license_keys' => 'Du hast ungültige Lizenzschlüssel eingegeben.', // 'You have entered invalid license keys.'
    'trial_mode_license_keys_for_domains' => 'Gültige Lizenschlüssel für :domains eingegeben', // 'Valid license keys entered for :domains'
    'invalid_license_keys' => 'Bitte kaufe und füge einen Lizenzschlüssel hinzu oder riskiere gegen die Lizenzbestimmungen zu verstoßen.', // 'Please purchase and enter your license key or risk violating the License Agreement.'
    'license_keys_incorrect_domain' => 'Lizenzschlüssel für ungültige Domain eingegeben. Bitte korrigiere oder riskiere gegen unsere Lizenzbestimmungen zu verstoßen.', // 'License keys entered for incorrect domain. Please remedy or risk violating the License Agreement.'
    'checking_license_key' => 'Überprüfe den Lizenzschlüssel, bitte warten…',  // 'Checking your license key, please wait...'
    'license_missing' => 'Lizenzschlüssel fehlt.', // 'License key missing.'
    'license_valid' => 'Du hast einen gültigen Lizenzschlüssel.',  // 'You have a valid license key.'
    'license_invalid' => 'Der Lizenzschlüssel ist ungültig..',  // 'This key is invalid.'
    'license_wrong_domain' => 'Lizensiert für :domain', // 'Licensed to :domain'
    'license_no_domain' => 'Lizenzschlüssel ist keiner Domain zugeordnet.', // 'License has no domain associated with it.'
    'license_key_instructions' => 'Bitte gib deinen Lizenzschlüssel ein. Du findest ihn in deinem <a href=":licenses">Statamic-Konto</a> oder du kannst <a href=":buy_license">eine neue Lizenz kaufen</a>.',  // 'Please enter your license key. You can find yours in your <a href=":licenses">Statamic Account</a> or you can <a href=":buy_license">buy a new license</a> if you need to.'
    'buy_now' => 'Jetzt kaufen', // 'Buy Now'
    'license_statamic_link' => 'Kaufe Lizenzen und verwalte Domains unter statamic.com', // 'Buy licenses and manage domains on statamic.com'

    'continue_in_trial_mode' => 'Kostenlose Testversion weiterhin verwenden',  // 'Continue in Trial Mode'
    'unlicensed' => 'Nicht lizensiert',
    'unlicensed_message' => 'Bitte kaufe eine Lizenz oder riskiere das Verstoßen gegen unsere Lizenzbestimmungen.', // 'Please purchase and enter your license key or risk violating the License Agreement.'
    'on_trial_with_invalid_license' => 'Kostenlose Testversion mit ungültiger Lizenz.',
    'on_trial_without_license' => 'Kostenlose Testversion. Vergiss nicht einen Lizenzschlüssel hinzuzufügen bevor die Seite aufgeschaltet wird.',
    'invalid_statamic_license' => 'Die Statamic Lizenz ist ungültig.',
    'couldnt_connect_to_outpost' => 'Es trat ein Problem bei der Kommunikation mit dem Statamic Outpost auf.',

    // Verbs and helpers
    'actions' => 'Aktion|Aktionen',  // 'Action|Actions'
    'add' => 'Hinzufügen',  // 'Add'
    'edit' => 'Bearbeiten',  // 'Edit'
    'editing' => 'Wird gerade bearbeitet',
    'view' => 'Zeigen',  // 'View'
    'remove' => 'Entfernen',  // 'Remove'
    'update' => 'Aktualisieren',  // 'Update'
    'delete' => 'Löschen',  // 'Delete'
    'uncheck_all' => 'Alles abwählen',  // 'Uncheck All'
    'duplicate' => 'Duplizieren',  // 'Duplicate'
    'manage' => 'Verwalten',  // 'Manage'
    'create' => 'Erstelle',  // 'Create'
    'reorder' => 'Reihenfolge ändern',  // 'Reorder'
    'submit' => 'Übermitteln',  // 'Submit'
    'save' => 'Speichern',  // 'Save'
    'saving' => 'Speichere',  // 'Saving'
    'save_changes' => 'Änderungen speichern',  // 'Save Changes'
    'save_and_continue' => 'Speichern & weiter',  // 'Save and Continue'
    'save_and_another' => 'Speichern & Weitere hinzufügen', // 'Save & Add Another'
    'are_you_sure' => 'Bist du sicher?',  // 'Are you sure?'
    'yes_im_sure' => 'Ja, sicher',  // 'Yes, I\'m sure'
    'refresh' => 'Aktualisieren',  // 'Refresh'
    'cancel' => 'Abbrechen',  // 'Cancel'
    'loading' => 'Laden',  // 'Loading'
    'expand' => 'Erweitern',  // 'Expand'
    'collapse' => 'Verkleinern',  // 'Collapse'
    'show' => 'Zeige',  // 'Show'
    'hide' => 'Verberge',  // 'Hide'
    'move' => 'Verschieben',
    'edit_layout' => 'Ansicht bearbeiten',  // 'Edit Layout'
    'save_layout' => 'Ansicht speichern',  // 'Save Layout'
    'save_order' => 'Reihenfolge speichern',  // 'Save Order'
    'toggle_dropdown' => 'Auswahl umschalten',  // 'Toggle Dropdown'
    'confirm_delete_items' => 'Diese Datei wird gelöscht|Die ausgewählten Dateien werden gelöscht',  // 'This item will be deleted|The selected items will be deleted'
    'confirm_delete_page' => ' und alles Untergeordnete wird gelöscht', // ' will be deleted along with all its children'
    'confirm_delete_folder' => 'Dieser Ordner wird gelöscht',  // 'This folder will be deleted'
    'configure' => 'Konfigurieren',  // 'Configure'
    'browse' => 'Suchen',  // 'Browse'
    'select' => 'Auswählen',  // 'Select'
    'localizing' => 'Lokalisiere',  // 'Localizing'
    'add_row' => 'Reihe hinzufügen',  // 'Add Row'
    'localizable' => 'Übersetzbar',  // 'Localizable'
    'please_wait' => 'Bitte warten…',  // 'Please Wait...'
    'exporting' => 'Exportiere...',  // 'Exporting...'
    'importing' => 'Importiere...',  // 'Importing...'
    'return_to_dashboard' => 'Zurück zum Kontrollzentrum',  // 'Return to Dashboard'
    'publish_content' => 'Inhalt publizieren',  // 'Publish Content'
    'close_this_window' => 'Fenster schließen',  // 'Close this Window'
    'toggle_navigation' => 'Navigation umschalten',  // 'Toggle navigation'
    'logging_in' => 'Anmelden...',  // 'Logging in...'
    'logged_in' => 'Eingeloggt.',
    'logged_in_taking_you_to_cp' => 'Angemeldet! Ab zum Kontrollzentrum…', // 'Logged in! Taking you to the control panel...'
    'write' => 'Schreibe',  // 'Write'
    'preview' => 'Vorschau',  // 'Preview'
    'collapse_all' => 'Alles zuklappen',  // 'Collapse All'
    'expand_all' => 'Alles aufklappen',  // 'Expand All'
    'please_select' => 'Bitte wählen',  // 'Please select'
    'selected' => 'ausgewählt',  // 'selected'
    'add_another_item' => 'Weiteres Element hinzufügen', // 'Add another item'
    'show_drafts' => 'Zeige Entwürfe', // 'Show Drafts'
    'hide_drafts' => 'Verberge Entwürfe', // 'Hide Drafts'
    'count' => 'Zähler',
    'reset' => 'Zurücksetzen',
    'installed' => 'Installiert',
    'add_condition' => 'Kondition hinzufügen',
    'open' => 'Öffnen',
    'download' => 'Download',
    'locale' => 'Lokale',
    'hidden' => 'Versteckt',

    // Nouns and whatnot
    'fields' => 'Feld|Felder',  // 'Field|Fields'
    'locales' => 'Übersetzung|Übersetzungen',  // 'Locale|Locales'
    'keys' => 'Schlüssel|Schlüssel',  // 'Key|Keys'
    'values' => 'Werte|Werte',  // 'Value|Values'
    'names' => 'Name|Namen',  // 'Name|Names'
    'usernames' => 'Benutzername|Benutzernamen',  // 'Username|Usernames'
    'emails' => 'E-Mail|E-Mails',  // 'Email|Emails'
    'passwords' => 'Passwort|Passwörter',  // 'Password|Passwords'
    'confirm_password' => 'Passwortbestätigung',  // 'Confirm Password'
    'remember_me' => 'Angemeldet bleiben',  // 'Remember me'
    'title' => 'Titel',  // 'Title'
    'titles' => 'Titel|Titel',  // 'Title|Titles'
    'slug' => 'Slug',  // 'Slug'
    'slugs' => 'Slug|Slugs',  // 'Slug|Slugs'
    'rows' => 'Reihe|Reihen',  // 'Row|Rows'
    'columns' => 'Spalte|Spalten',  // 'Column|Columns'
    'folders' => 'Ordner|Ordner',  // 'Folder|Folders'
    'date' => 'Datum',  // 'Date'
    'dates' => 'Datum|Daten',  // 'Date|Dates'
    'date_and_time' => 'Datum und Zeit',  // 'Date and Time'
    'datestring' => 'Datum',  // 'Date'
    'publish_date' => 'Veröffentlichungsdatum',
    'items' => 'Objekt|Objekte',  // 'Item|Items'
    'add_date' => 'Datum hinzufügen',  // 'Add Date'
    'add_time' => 'Zeit hinzufügen',  // 'Add Time'
    'login' => 'Einloggen',  // 'Login'
    'login_with' => 'Einloggen mit :provider',  // 'Login with :provider'
    'login_to_continue' => 'Einloggen um fortzufahren', // "Login to Continue"
    'new' => 'Neu',  // 'New'
    'or' => 'oder',  // 'or'
    'order' => 'Reihenfolge',  // 'Order'
    'one_quarter' => '1/4 - Ein Viertel',  // '1/4 - One quarter'
    'three_quarters' => '3/4 - Drei Viertel',  // '3/4 - Three quarters'
    'one_third' => '1/3 - Ein Drittel',  // '1/3 - One third'
    'two_thirds' => '2/3 - Zwei Dritel',  // '2/3 - Two thirds'
    'half' => '50%',  // 'Half'
    'full_width' => 'Volle Breite',  // 'Full width'
    'width' => 'Breite',  // 'Width'
    'version' => 'Version',  // 'Version'
    'versions' => 'Version|Versionen',  // 'Version|Versions'
    'developer' => 'Entwickler',  // 'Developer'
    'developers' => 'Entwickler|Entwickler',  // 'Developer|Developers'
    'developer_mode' => 'Entwickler-Modus',  // 'Developer Mode'
    'description' => 'Beschreibung',  // 'Description'
    'descriptions' => 'Beschreibung|Beschreibungen',  // 'Description|Descriptions'
    'name' => 'Name',  // 'Name'
    'username' => 'Benutzername',  // 'Username'
    'email' =>'E-Mail',  // Email'
    'done' => 'Erledigt',  // 'Done'
    'close' => 'Schließen',  // 'Close'
    'templates' => 'Vorlage|Vorlagen',  // 'Template|Templates'
    'authors' => 'Autor|Autoren',  // 'Author|Authors'
    'installer' => 'Installer',  // 'Installer'
    'search' => 'Suche',  // 'Search'
    'search_results' => 'Suchresultate',
    'no_search_results' => 'Keine Suchresultate',
    'instructions' => 'Instruktionen',  // 'Instructions'
    'handle' => 'Handle',  // 'Handle'
    'label' => 'Label',  // 'Label'
    'type' => 'Typ',  // 'Type'
    'route' => 'Route',  // 'Route'
    'terms' => 'Begriff|Begriffe',  // 'Term|Terms'
    'progress' => 'Fortschritt',  // 'Progress'
    'variables' => 'Variable|Variablen',  // 'Variable|Variables'
    'license_key' => 'Lizenzschlüssel',  // 'License Key'
    'driver' => 'Treiber',  // 'Driver'
    'path' => 'Pfad',  // 'Path'
    'url' => 'URL',  // 'URL'
    'valid_url' => 'Gültige URL', // 'Valid URL'
    'invalid_url' => 'Ungültige URL', // 'Invalid URL'
    'bucket' => 'Bucket',  // 'Bucket'
    'region' => 'Region',  // 'Region'
    'metrics' => 'Metrik|Metriken',  // 'Metric|Metrics'
    'whats_this' => "Was ist das?",  // "What's this?"
    'first_name' => 'Vorname',  // 'First name'
    'last_name' => 'Nachname',  // 'Last name'
    'bio' => 'Bio',  // 'Bio'
    'markdown_cheatsheet' => 'Markdown-Hilfe',  // 'Markdown Cheatsheet'
    'locales_and_urls' => 'Sprachen und URLs',  // 'Locales and URLs'
    'debug_mode' => 'Debug-Modus',  // 'Debug Mode'
    'defined_in_environment' => 'Verwaltet durch externe Umgebung.',  // 'Managed externally by your environment.'
    'be_right_back' => 'Wir sind gleich wieder da.',  // 'Be right back.'
    'size' => 'Größe', // 'Size'
    'read_only' => "Nur Lesen", // 'Read only'
    'read_only_mode' => 'Nur Lesen Modus', // 'Read only mode'
    'next_step' => "Nächster Schritt", // "Next step"
    'invalid_creds' => 'These credentials are incorrect', // 'These credentials are incorrect'

    'nav_content' => 'Inhalt',  // 'Content'
    'nav_tools' => 'Werkzeuge',  // 'Tools'
    'nav_configure' => 'Konfiguration',  // 'Configure'
    'nav_addons' => 'Erweiterungen',  // 'Addons'
    'nav_fieldsets' => 'Eingabemasken',  // 'Fieldsets'
    'nav_settings' => 'Einstellungen',  // 'Settings'
    'nav_users' => 'Benutzer',  // 'Users'
    'nav_resolve_duplicate_ids' => 'Doppelte IDs', // 'Duplicate IDs'

    'mount_collection' => 'Sammlung verlinken',  // 'Mount Collection'
    'unmount_collection' => 'Sammlung entfernen',  // 'Unmount Collection'

    // Validation
    'handle_exists' => 'Ein Medien-Container mit diesem Handle existiert bereits.',  // 'A container with this handle already exists.'

    // Duplicate ID Manager
    'duplicate_id_title' => 'Doppelte IDs', // 'Duplicate IDs',
    'no_duplicate_ids' => 'Keine doppelten IDs erkannt.', // 'No duplicate IDs detected.',
    'generate_new_id' => 'Generiere neue ID.', // 'Generate new ID.',

    // Path
    'path_resolves_to'    => 'Der Pfad zeigt zu: :path', // 'Path resolves to: :path',
    'path_exists'         => 'Pfad existiert.', // 'Path exists.',
    'path_does_not_exist' => 'Pfad exisitiert nicht.', // 'Path does not exist.',

    // Bard
    'heading_1'          => 'Überschrift 1', // 'Heading 1',
    'heading_2'          => 'Überschrift 2', // 'Heading 2'
    'heading_3'          => 'Überschrift 3', // 'Heading 3'
    'heading_4'          => 'Überschrift 4', // 'Heading 4'
    'heading_5'          => 'Überschrift 5', // 'Heading 5'
    'heading_6'          => 'Überschrift 6', // 'Heading 6'
    'bold'               => 'Fett', // 'Bold'
    'italic'             => 'Kursiv', // 'Italic'
    'underline'          => 'Unterstrichen', // 'Underline'
    'strikethrough'      => 'Durchgestrichen', // 'Strikethrough'
    'remove_formatting'  => 'Formatierung entfernen', // 'Remove Formatting'
    'unordered_list'     => 'Aufzählungszeichen', // 'Unordered List'
    'ordered_list'       => 'Nummerierung', // 'Ordered List'
    'blockquote'         => 'Zitat', // 'Blockquote'
    'superscript'        => 'Hochgestellt', // 'Superscript'
    'subscript'          => 'Tiefgestellt', // 'Subscript'
    'add_link'           => 'Link hinzufügen', // 'Add Link'
    'remove_link'        => 'Link entfernen', // 'Remove Link'
    'link_to_asset'      => 'Medium verlinken', // 'Link to Asset'
    'inline_code'        => 'Code', // 'Inline Code' --> bessere Übersetzung?
    'edit_link'          => 'Link editieren', // 'Edit Link'
    'open_in_new_window' => 'In neuem Fenster öffnen', // 'Open in New Window'
];