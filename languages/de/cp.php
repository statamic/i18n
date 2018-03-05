<?php

return [

    // General CP
    'dashboard' => 'Kontrollzentrum',  // 'Dashboard'
    'nav_dashboard' => 'Kontrollzentrum',  // 'Dashboard'
    'sneak_peek' => 'Vorschau',  // 'Sneak Peek'
    'sneak_peeking' => 'Vorschau',  // 'Sneaking a Peek'
    'view_site' => 'Seite anzeigen',  // 'View Site'
    'visit_url' => 'URL anzeigen',  // 'Visit URL'
    'search_for_anything' => 'Globale Suche',  // 'Search for anything'

    // Pages
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
    'collections' => 'Kollektion|Kollektionen',  // 'Collection|Collections'
    'nav_collections' => 'Kollektionen',  // 'Collections'
    'manage_collections' => 'Kollektionen verwalten',  // 'Manage Collections'
    'create_collection_button' => 'Kollektion erstellen',  // 'Create Collection'
    'create_collection' => 'Neue Kollektion erstellen',  // 'Create a New Collection'
    'collection_created' => ':title erstellt',  // ':title Created'
    'editing_collection' => 'Bearbeite :collection',  // 'Editing :collection'
    'collection_updated' => ':title aktualisiert',  // ':title Updated'
    'collections_empty' => 'Kollektionen sind Container für Gruppen von Einträgen, die ähnliche Inhalte haben und die gleiche URL-Logik verwenden.',  // 'Collections are containers that hold groups of similar entries all following the same URL pattern.'
    'collection_title_instructions' => 'Kollektion-Name.',  // 'The proper name of your collection.'
    'collection_handle_instructions' => "Die Variable der Kollektion wird intern für Einstellungen und Vorlagen verwendet.",  // "The collection's variable name used in settings and templates."
    'collection_order_instructions' => "Definiere die Standard-Sortierungsmethode für Einträge in diese Kollektion.",  // "Set the default sorting method for entries in this collection."
    'collection_route_instructions' => "Die Route kontrolliert die URL-Logik für alle Einträge dieser Kollektion.",  // "The route controls the URL pattern all entries in the collection will follow."

    // Entries
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
    'taxonomies' => 'Kategorie|Kategorien',  // 'Taxonomy|Taxonomies'
    'nav_taxonomies' => 'Kategorien',  // 'Taxonomies'
    'create_taxonomy' => 'Neue Kategorie erstellen',  // 'Create New Taxonomy'
    'create_taxonomy_button' => 'Kategorie erstellen',  // 'Create Taxonomy'
    'manage_taxonomies' => 'Verwalte Kategorie',  // 'Manage Taxonomies'
    'editing_taxonomy' => 'Bearbeite Kategorie',  // 'Editing taxonomy'
    'taxonomy_updated' => 'Kategorie aktualisiert',  // 'Taxonomy Updated'
    'taxonomy_created' => 'Kategorie erstellt',  // 'Taxonomy Created'
    'taxonomies_empty_heading' => 'Kategorien',  // 'Taxonomies'
    'taxonomies_empty' => 'Eine Kategorie verbindet Daten logisch miteinander: z.B. als Farben, Kategorien, Grössen, Eigenschaften, etc.',  // 'A Taxonomy is a system of classifying data around a set of unique characteristics, such as category or color.'
    'taxonomies_title_instructions' => 'Name der Kategorie.',  // 'The name of your taxonomy.'
    'taxonomies_slug_instructions' => 'Dieser Name wird intern gebraucht und in den Vorlagen verwendet.',  // 'This is how the taxonomy will be referenced in templates.'
    'taxonomies_fieldset_instructions' => 'Der Anzeigename der Kategorie.',  // 'The fields that should be displayed when editing terms in this taxonomy.'
    'taxonomies_route_instructions' => 'Die Route kontrolliert die URL-Logik für alle Begriffe dieser Kategorie.',  // 'The terms in this taxonomy will have URLs that follow this routing scheme.'

    'taxonomy_terms' => 'Begriff|Begriffe',  // 'Term|Terms'
    'create_taxonomy_term_button' => 'Erstelle :term',  // 'Create :term'
    'create_taxonomy_term' => 'Neuen :term erstellen',  // 'Create a New :term'
    'taxonomy_term_created' => 'Kategorie Begriff erstellt',  // 'Taxonomy term created'
    'taxonomy_terms_empty_heading' => 'Liste der :term',  // 'Terms in :term'
    'taxonomy_terms_empty' => 'Wenn Daten über Kategorien verbunden sind, ist der Begriff das eigentliche Etikett für einen Datensatz. Z.b. Rot wäre ein Begriff in der Kategorie Farben.',  // 'Where a Taxonomy is the grouping, a Term is the actual label applied to a piece of content. For example, "Red" would be a term in "Colors".'

    // Globals
    'globals' => 'Global|Globale',  // 'Global|Globals'
    'nav_globals' => 'Globale',  // 'Globals'
    'manage_global_sets' => 'Verwalte globale Sets',  // 'Manage Global Sets'
    'create_global_set_button' => 'Globale Sets erstellen',  // 'Create Global Set'
    'create_global_set' => 'Neues globales Set erstellen',  // 'Create New Global Set'
    'global_set_created' => ':type erstellt',  // ':type created'
    'editing_globals' => 'Globale bearbeiten',  // 'Editing Globals'
    'globals_updated' => 'Globale aktualisiert',  // 'Globals Updated'
    'globals_empty_heading' => 'Globale Sets',  // 'Global Sets'
    'globals_empty' => 'Globale Daten sind Daten, die nicht an eine URL gebunden und allgemeiner und seitenübergreifender Natur sind: z.B. Firmen-Daten, Adressen, allgemeine Einstellungen für Vorlagen wie Schalter, Limiten, Farben, Zeige/Verberge, Vorgaben, etc.',  // 'Global sets are groups of variables that represent content that isn\'t tied to a URL, such as company name, address, contact info, or even template level settings like limits, offsets, and show/hide toggles.'
    'general_globals' => 'Generell',  // 'General'
    'globals_title_instructions' => "Der einzigartige Name für ein globales Set: z.B. Fusszeilen Inhalt, Seiteleiste Einstellungen, etc.",  // "The proper name of your global set. For example: Footer Content, or Sidebar Settings."
    'globals_slug_instructions' => "Der interne Variablen-Name für ein globales Set. Z.B.: <code>footer_content</code> oder <code>sidebar_settings</code>.",  // "This is the variable used in your templates. For example: <code>footer_content</code> or <code>sidebar_settings</code>."
    'globals_fieldset_instructions' => "Wähle die gewünschte Eingabemaske, Deine globalen Daten.",  // "Pick which group of fields you want to use to manage this fieldset."

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
    'drop_to_upload' => 'Hereinziehen zum hochladen',  // 'Drop to Upload'
    'upload_asset' => 'Medium hochladen',  // 'Upload Asset'
    'sync_assets' => 'Medien synchronisieren',  // 'Sync assets'
    'syncing_assets' => 'Synchronisiere Medien',  // 'Syncing assets'
    'new_folder' => 'Neuer Ordner',  // 'New Folder'
    'upload' => 'Hochladen',  // 'Upload'
    'uploads' => 'Hochladen|Hochgeladene',  // 'Upload|Uploads'
    'filename' => 'Dateiname',  // 'Filename'
    'filesize' => 'Dateigrösse',  // 'File size'
    'date_modified' => 'Modifikationsdatum',  // 'Date modified'
    'parent_folder' => 'Übergeordneter Ordner',  // 'Parent folder'
    'asset_folder_empty_heading' => 'Leerer Ordner.',  // 'Empty folder.'
    'asset_folder_empty' => 'Du kannst neue Medien in diesen Ordner hochladen indem du Dateien in den oben markierten Bereich ziehst.',  // 'You may upload new assets into this folder by dragging and dropping files into the outlined area above.'
    'focal_point' => 'Fokus-Punkt',  // 'Focal point'
    'focal_point_label' => 'Auf Bild gewünschten Fokus-Punkt anklicken um diesen zu ändern',  // 'Click image to adjust the focal point'
    'focal_point_instructions' => 'Der Fokus-Punkt wird für Bildauschnitte verwendet und definiert den wichtigen sichtbaren Bereich.',  // 'The focal point is used when cropping so the most important part of the image is not removed.'
    'or_drag_and_drop_files' => 'oder Medien hier reinziehen.',  // 'or drag and drop files.'
    'no_asset_container_specified' => 'Der Medien-Container ist undefiniert.',  // 'No asset container specified.'
    'rename_file' => 'Datei umbenennen',  // 'Rename File'
    'rename_file_warning' => 'Wird eine Datei umbenannt, werden die Referenzen zu ihr nicht angepasst. Dies _kann_ zu kaputten Links in deiner Seite führen.',  // 'Renaming a file will not update any references to it, which _may_ result in broken links in your site.'
    'move_file' => 'Datei verschieben',  // 'Move file'
    'dimensions' => 'Dimensionen',  // 'Dimensions'
    'last_modified' => 'Änderungsdatum',  // 'Last Modified'


    // Folder
    'folder_title_instructions' => 'Der angezeigte Name des Ordners.',  // 'The display name of the folder.'
    'folder_directory_instructions' => 'Der interne System-Name des Ordner',  // 'The filesystem directory name'

    // Asset Containers
    'asset_containers' => 'Medien-Container|Medien-Container',  // 'Asset Container|Asset Containers'
    'manage_asset_containers' => 'Verwalte Medien-Container',  // 'Manage Asset Containers'
    'new_asset_container' => 'Neuer Medien-Container',  // 'New Asset Container'
    'creating_asset_container' => 'Erstelle Medien-Container',  // 'Creating Asset Container'
    'asset_container_created' => 'Medien-Container erstellt',  // 'Asset Container created'
    'editing_asset_container' => 'Bearbeite Medien-Container',  // 'Editing Asset Container'
    'asset_container_updated' => 'Medien-Container aktualisiert',  // 'Asset Container updated'
    'asset_containers_empty_heading' => 'Es sind keine Medien-Container konfiguriert.',  // 'There are no configured asset containers.'
    'asset_containers_empty' => 'Jeder Medien-Container ist ein Ort im Dateisystem und kann entweder öffentlich verfügbar oder geschützt vor Neugierigen Blicken geschützt werden.',  // 'Each asset container can be a location on your file system, which can either be publicly accessible or protected from prying eyes.'
    'select_asset_container' => 'Medien-Container auswählen.',  // 'Select an asset container.'

    // Asset Folders
    'create_folder' => 'Ordner erstellen',  // 'Create Folder'
    'edit_folder' => 'Ordner bearbeiten',  // 'Edit Folder'
    'asset_name_instructions' => 'Der angezeigte Ordner Name',  // 'The display name of the container.'
    'asset_handle_instructions' => 'Eine eindeutige Zeichenfolge als Referenz für den Container. <b>Kann nach dem erstellen nicht mehr geändert werden.</b>',  // 'A unique string that you can use to reference your container. <b>This cannot be changed after creation.</b>'
    'asset_fieldset_instructions' => 'Die Eingabemaske für die Medien.',  // 'The fieldset to be used by assets in this container.'
    'asset_driver_instructions' => 'Wo sollen die Medien gespeichert und abgerufen werden?',  // 'Where will the assets be stored and accessed?'
    'asset_path_instructions' => 'Ablageort des Ordners im internen System.',  // 'Location of the folder on the filesystem.'
    'asset_url_instructions' => 'URL des Ordners.',  // 'URL of the folder.'
    'asset_folder_basename' => 'Ordnername',  // 'Folder name'

    // Set Builder
    'add_set' => 'Set hinzufügen',  // 'Add Set'
    'edit_set' => 'Set bearbeiten',  // 'Edit Set'
    'delete_set' => 'Set löschen',  // 'Delete Set'
    'set_fields_instructions' => "Wähle die Eingabefelder für dieses Set",  // "Choose this set's fields"

    // Amazon S3
    'access_key_id' => 'Zugriffsschlüssel ID',  // 'Access Key ID'
    'secret_access_key' => 'Geheimer Zugriffsschlüssel',  // 'Secret Access Key'

    // Users
    'users' => 'Benutzer|Benutzer',  // 'User|Users'
    'nav_users' => 'Benutzer',  // 'Users'
    'create_user_button' => 'Benutzer erstellen',  // 'Create User'
    'create_user' => 'Erstelle Benutzer',  // 'Create User'
    'create_a_user' => 'Einen Benutzer erstellen',  // 'Create a User'
    'user_created' => 'Benutzer erstellt',  // 'User created'
    'editing_user' => 'Benutzer bearbeiten',  // 'Editing User'
    'user_updated' => 'Benutzer aktualisiert',  // 'User updated'
    'reset_password' => 'Passwort zurücksetzten',
    'send_email' => 'E-Mail senden',
    'send_activation_email' => 'Aktivierungs-Mail senden',  // 'Send activation email'
    'send_password_reset_email' => 'Passwortzurücksetzen-Mail senden',  // 'Send password reset email'
    'copy_activation_link' => 'Aktivierungs-Link kopieren',  // 'Copy activation link'
    'copy_password_reset_link' => 'Passwortzurücksetzen-Link kopieren',  // 'Copy password reset link'
    'password_reset_sent' => 'Passwortzurücksetzen-E-Mail versendet',
    'account' => 'Konto',  // 'Account'
    'my_account' => 'Mein Konto',  // 'My Account'
    'logout' => 'Ausloggen',  // 'Logout'
    'user_options' => 'Benutzer Optionen',  // 'User Options'
    'user_bio_instructions' => 'Etwas über Dich, wenn Du möchtest',  // 'A little bit about you, if you like.'
    'user_account_created' => 'Benutzer-Konto erstellt.',  // 'A user account has been created.'
    'forgot_password' => 'Passwort vergessen?',
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
    'roles_empty' => 'Benutzerrollen erlauben es Ihnen Berechtigungen zu gruppieren. Als Beispiel Redakteur und Admin',  // 'User Roles allow you to group a number of permissions under a single label. For example, editor, publisher, and admin.'

    // Permissions
    'permissions' => 'Berechtigung|Berechtigungen',  // 'Permission|Permissions'
    'access' => 'Zugriff',  // 'Access'
    'checking_folder_permissions' => 'Überprüfe Ordner-Berechtigung, bitte warten…',  // 'Checking folder permissions, please wait...'
    'folders_permission_valid' => 'Datei und Ordner Berechtigungen sehen gut aus!',  // 'File and folder permissions look great!'
    'folders_unwritable' => 'Folgende Ordner brauchen Schreibberechtigung:',  // 'The following directories need to be writable:'

    // Error Pages
    'error' => 'Fehler',
    'permission_denied' => 'Zugriff verweigert',  // 'Permission Denied'
    'permission_denied_instructions' => "Du hast keinen Zugriff, diese Seite anzuzeigen.",  // "You don't have permission to view this page."
    'page_not_found' => 'Seite nicht gefunden',  // 'Page not found'
    'page_not_found_instructions' => 'Die angeforderte Seite wurde nicht gefunden.',  // 'The page you requested does not exist.'
    'session_expired' => 'Deine Sitzung ist abgelaufen.',  // 'Your session has expired.'


    // User Groups
    'usergroups' => 'Benutzergruppe|Benutzergruppen',  // 'User Group|User Groups'
    'nav_user-groups' => 'Benutzergruppen',  // 'User Groups'
    'create_usergroup_button' => 'Benutzergruppe erstellen',  // 'Create Group'
    'creating_usergroup' => 'Erstelle Benutzergruppe',  // 'Creating User Group'
    'usergroup_created' => 'Benutzergruppe erstellt',  // 'User Group created'
    'editing_usergroup' => 'Benutzergruppe bearbeiten',  // 'Editing User Group'
    'usergroup_updated' => 'Benutzergruppe aktualisiert',  // 'User Group updated'
    'usergroups_empty_heading' => 'Benutzergruppen',  // 'User Groups'
    'usergroups_empty' => 'Benutzergruppen erlauben es Ihnen unterschiedliche Rollen und Benutzer in einer Gruppe zu vereinen.',  // 'User Groups allow you mix and match different roles and users together into a single group.'

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
    'settings_locales_instructions' => "Erstelle einen Sprache für jede Übersetzung. Sie können dies auch zu einem späteren Zeitpunkt erfassen.",  // "Create a locale for each language translation. You can skip this for now and do it later if you'd prefer."
    'settings_debug_mode_instructions' => "Bei aktiviertem Debug Modus werden vollständige Fehlermeldungen angezeigt. Dies ist sehr hilfreich während der Entwicklung aber deaktivieren Sie dies nach der Aufschaltung.",  // "Enabling Debug Mode will display all errors on screen. It's a great tool while a site is development, but remember to disable it in production."

    // Addons
    'addons' => 'Erweiterung|Erweiterungen',  // 'Addon|Addons'
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

    'fieldsets_empty' => 'Fieldsets let you create and manage reusable groups of fieldtypes that in turn mange your content. This is where content modeling happens.',  // 'Fieldsets let you create and manage reusable groups of fieldtypes that in turn mange your content. This is where content modeling happens.'
    'fieldset_title_instructions' => 'The proper name of the fieldset. Usually a singular noun.',  // 'The proper name of the fieldset. Usually a singular noun.'
    'fieldset_handle_instructions' => "The fieldset's variable name used in settings and templates.",  // "The fieldset's variable name used in settings and templates."
    'fieldset_create_title_instructions' => "Optional, customizable title shown when creating new content with this fieldset.",  // "Optional, customizable title shown when creating new content with this fieldset."
    'fieldset_hide_instructions' => "Hide this fieldset from selection dialogs?",  // "Hide this fieldset from selection dialogs?"
    'fieldset_fields_instructions' => 'Assign and customize the fields and fieldtypes in this fieldset.',  // 'Assign and customize the fields and fieldtypes in this fieldset.'
    'fieldset_taxonomies_instructions' => 'Show, hide, and configure the taxonomies that should be displayed in this fieldset.',  // 'Show, hide, and configure the taxonomies that should be displayed in this fieldset.'

    'fieldsets_empty' => 'Fieldsets let you create and manage reusable groups of fieldtypes that in turn mange your content. This is where content modeling happens.',  // 'Fieldsets let you create and manage reusable groups of fieldtypes that in turn mange your content. This is where content modeling happens.'
    'fieldset_title_instructions' => 'The proper name of the fieldset. Usually a singular noun.',  // 'The proper name of the fieldset. Usually a singular noun.'
    'fieldset_handle_instructions' => "The fieldset's variable name used in settings and templates.",  // "The fieldset's variable name used in settings and templates."
    'fieldset_create_title_instructions' => "Optional, customizable title shown when creating new content with this fieldset.",  // "Optional, customizable title shown when creating new content with this fieldset."
    'fieldset_hide_instructions' => "Hide this fieldset from selection dialogs?",  // "Hide this fieldset from selection dialogs?"
    'fieldset_fields_instructions' => 'Assign and customize the fields and fieldtypes in this fieldset.',  // 'Assign and customize the fields and fieldtypes in this fieldset.'
    'fieldset_taxonomies_instructions' => 'Show, hide, and configure the taxonomies that should be displayed in this fieldset.',  // 'Show, hide, and configure the taxonomies that should be displayed in this fieldset.'

    'create_title' => 'Titel erstellen',  // 'Create Title'
    'display_name' => "Anzeige-Name",  // "Display Name"
    'display_name_instructions' => "Der im Kontrollzentrum angezeigte Name",  // "The field's label shown in the Control Panel."
    'display_text' => 'Anzeige-Text',  // 'Display Text'
    'display_text_instructions' => "Feld-Beschreibung",  // "The field's label"
    'field_name' => 'Feld Name',  // 'Field Name'
    'field_name_instructions' => 'Feld Variable',  // 'The field variable'
    'field_required' => 'Pflicht',  // 'Required'
    'field_required_instructions' => 'Das ist ein Pflichtfeld',  // 'This field is required'
    'field_variable' => "Feld Variable",  // "Field Variable"
    'field_variable_instructions' => "Feld Vorlage-Variable.",  // "The field's template variable."
    'field_instructions_instructions' => "Einfaches Markdown ist hier möglich.",  // "Basic Markdown is allowed. Encouraged, even."
    'field_width_instructions' => 'Feldgrösse in Eingabemaske.',  // 'The size of the field in the fieldset layout.'
    'validation_rules' => "Validierungs-Regeln",  // "Validation Rules"
    'validation_instructions' => "Alle Laravel Validierungs-Regeln sind hier möglich",  // "Has access to all of Laravel's"
    'validation_instructions_link_text' => 'Validierungs-Regeln',  // 'validation rules'
    'validation_rules_instructions' => 'Gebe eine mit senkrechten Strichen getrennte Liste von <a href=":url" target="_blank">Validations-Regeln</a> an.',  // 'Enter a pipe delimited string of <a href=":url" target="_blank">validation rules</a>.'
    'default_value' => 'Standardwert',  // 'Default Value'
    'field_default_value_instructions' => 'Gib den Standardwert für das Textfeld ein.',  // 'Enter the default value for string-type fields.'
    'edit_field' => 'Feld bearbeiten',  // 'Edit Field'
    'choose_field_to_edit' => "Wählte ein Feld um die Einstellungen zu bearbeiten.",  // "Choose a field to edit its settings."


    // Forms
    'form' => 'Formular',  // 'Form'
    'forms' => 'Formular|Formulare',  // 'Form|Forms'
    'nav_forms' => 'Formulare',  // 'Forms'
    'forms_empty' => 'Formulare sammeln, rapportieren und zeigen Benutzer-Einsendungen an.',  // 'Forms collect, display, and report user submitted reponses.'
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
    'export' => 'Exportieren',  // 'Export'
    'export_csv' => 'Exportiere als CSV',  // 'Export as CSV'
    'export_json' => 'Exportiere als JSON',  // 'Export as JSON'

    // Formset Builder
    'formset_title_instructions' => "Bezeichnung des Formularset.",  // "Your formset's proper label."
    'formset_slug_instructions' => 'Wie das Formularset referenziert wird.',  // 'How the formset will be referenced.'
    'formset_metrics_instructions' => 'Definiere Metriken die angezeigt werden sollen.',  // 'Specify any metrics you would like displayed.'
    'formset_emails_instructions' => 'Füge E-Mails hinzu die versendet werden sollen.',  // 'Add any emails you want to be sent upon submission.'
    'formset_honeypot_field' => 'Honeypot-Feld',  // 'Honeypot Field'
    'formset_honeypot_instructions' => 'Der Name des Honeypot-Feld.',  // 'The field name to be used for the honeypot.'
    'formset_honeypot_link' => "Was ist ein Honeypot?",  // "What's a honeypot?"
    'formset_fields_instructions' => 'Wähle und bearbeite die Felder für das Formular.',  // 'Choose and customize the fields in this form.'

    // Updater
    'nav_updater' => 'Aktualisierung',  // 'Updater'
    'updates'     => 'Aktualisierungen',  // 'Updates'
    'upgrade_to_latest' => 'Auf letzte Version aktualisieren',  // 'Upgrade to Latest'
    'upgrade_to_version' => 'Aktualisiere auf :version',  // 'Upgrade to :version'
    'downgrade_to_version' => 'Zurücksetzen auf :version',  // 'Downgrade to :version'
    'update_available' => 'Aktualisierung vorhanden',  // 'Update Available'
    'update_complete' => 'Aktualisierung ist fertig.',  // 'Update complete.'
    'up_to_date' => 'Aktuell!',  // 'Up to date!'
    'on_latest' => 'Du hast die letzte Version von Statamic',  // 'You are running the latest version of Statamic'
    'current_version' => 'Aktuelle Version',  // 'Current Version'
    'released_on_date' => 'Freigegeben am :date',  // 'Released on :date'
    'updates_available' => 'Es gibt eine Aktualisierung|Es gibt :updates Aktualisierungen',  // 'There is an update available|There are :updates updates available'
    'backup_failed' => 'Sicherung gescheitert',  // 'Backup Failed'
    'backup' => 'Sicherung',  // 'Backup'
    'backed_up' => 'Gesichert',  // 'Backed up'
    'backing_up' => 'Sichere…',  // 'Backing up...'
    'backing_up_instructions' => "Wir haben Deinen vorigen <code>statamic</code> Ordner gezippt und abgelegt – falls etwas schief gelaufen ist.",  // "We're zipping up your <code>statamic</code> folder, just in case you need to roll back."
    'backup_reminder' => 'Dies ist ein sicherer Prozess. Wir sichern alles während der Aktualisierung, du kannst die letzte Version unter  <code>local/temp</code> finden, falls etwas schief laufen sollte.',  // 'This is a safe process. We back up everything during running the update so you can always find your most recent version in <code>local/temp</code> if something goes wrong.'

    // Download
    'downloading' => 'Lade herunter …',  // 'Downloading...'
    'downloaded' => 'Heruntergeladen.',  // 'Downloaded.'
    'download_failed' => 'Herunterladen fehlgeschlagen',  // 'Download Failed'
    'downloading_latest' => 'Wir besorgen Dir jetzt die neuste grossartige Statamic Version.',  // 'Getting the latest and greatest version of Statamic for you.'
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
    'unzipping_files' => 'Entpacke Dateien …',  // 'Unzipping files...'
    'unzipping_files_instructions' => 'Platziere die Dateien aus der Statamic ZIP-Datei an einem temporären Ort.',  // 'Placing the files from the Statamic zip in a temporary location.'
    'unzipped_files' => 'Dateien sind entpackt.',  // 'Files unzipped.'

    // Dependencies
    'installing_dependencies' => 'Installiere Abhängigkeiten …',  // 'Installing Dependencies...'
    'installing_dependencies_instructions' => 'Alle Abhängigkeiten von Erweiterungen werden heruntergeladen. Dies kann einen Moment dauern.',  // 'Any addons with dependencies will need to be fetched. This may take a moment.'
    'dependencies_installed' => 'Abhängigkeiten wurden installiert.',  // 'Dependencies installed.'

    // Swap Release
    'swapping_files' => 'Tausche Dateien aus …',  // 'Swapping files...'
    'swapping_files_instructions' => 'Die alten Statamic Dateien werden mit den neuen ausgetauscht.',  // 'Your smelly old Statamic files are being swapped for sparkly clean new ones.'
    'files_swapped' => 'Dateien wurden ausgetauscht.',  // 'Files swapped.'

    // Clean Up
    'cleaning_up' => 'Aufräumen …',  // 'Cleaning up...'
    'cleaning_up_instructions' => "Die während des Aktualisierung erstellten temporären Dateien werden gelöscht.",  // "We're deleting the temporary files created during the update."

    // Importers
    'nav_import' => 'Import',  // 'Import'
    'site_url' => 'Seiten URL',  // 'Site URL'
    'import_from_version' => 'Importiere Inhalt von Statamic :version',  // 'Import content from Statamic :version'
    'import_complete' => 'Import abgeschlossen',  // 'Import Complete'
    'import_has_completed' => 'Der Import wurde abgeschlossen.',  // 'The import has completed.'
    'import_summary' => 'Import Zusammenfassung',  // 'Import Summary'
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

    // Statuses
    'statuses' => 'Status|Status',  // 'Status|Statuses'
    'status_pending' => 'Hängig',  // 'Pending'
    'status_active' => 'Aktiv',  // 'Active'
    'published' => 'Publiziert',  // 'Published'

    // Shortcuts
    'keyboard_shortcuts' => 'Tastatur Kurzbefehle',  // 'Keyboard Shortcuts'
    'show_keyboard_shortcuts' => 'Tastatur Kurzbefehle zeigen',  // 'Show Keyboard Shortcuts'

    // License
    'license_wrong_domain' => 'Diese Lizenz gehört zu :domain. Besuche <a href=":url" target="_blank">dein Konto</a> um diese zu ändern.',
    'license_no_domain' => 'Diese Lizenz ist keiner Domain zugewiesen. Besuche <a href=":url" target="_blank">dein Konto</a> um dies zu ändern.',
    'checking_license_key' => 'Überprüfe den Lizenzschlüssel, bitte warten …',  // 'Checking your license key, please wait...'
    'license_valid' => 'Du hast einen gültigen Lizenzschlüssel.',  // 'You have a valid license key.'
    'license_invalid' => 'Der Lizenzschlüssel ist ungültig..',  // 'This key is invalid.'
    'license_key_instructions' => 'Bitte gebe deinen Lizenzschlüssel ein. Du findest ihn in deinem <a href=":licenses">Statamic-Konto</a> oder du kannst <a href=":buy_license">eine neue Lizenz kaufen</a>.',  // 'Please enter your license key. You can find yours in your <a href=":licenses">Statamic Account</a> or you can <a href=":buy_license">buy a new license</a> if you need to.'
    'enter_license_key' => 'Bitte gebe deinen Lizenzschlüssel ein um das Kontrollzentrum auf einer öffentlichen Domain zu verwenden.',  // 'Please enter your license key to access to the control panel on a public domain.'

    'continue_in_trial_mode' => 'Kostenlose Testversion weiterhin verwenden',  // 'Continue in Trial Mode'
    'unlicensed' => 'Nicht lizensiert',
    'on_trial_with_invalid_license' => 'Kostenlose Testversion mit ungültiger Lizenz.',
    'on_trial_without_license' => 'Kostenlose Testversion. Vergiss nicht einen Lizenzschlüssel hinzuzufügen bevor die Seite aufgeschaltet wird.',
    'invalid_statamic_license' => 'Die Statamic Lizenz ist ungültig.',
    'couldnt_connect_to_outpost' => 'Es trat ein Problem bei der Kommunikation mit dem Statamic Outpost auf.',

    // Verbs and helpers
    'actions' => 'Aktion|Aktionen',  // 'Action|Actions'
    'add' => 'Hinzufügen',  // 'Add'
    'edit' => 'Bearbeiten',  // 'Edit'
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
    'save_and_continue' => 'Speichern und weiter',  // 'Save and Continue'
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
    'confirm_delete_items' => 'Diese File wird gelöscht|Die ausgewählten Files werden gelöscht',  // 'This item will be deleted|The selected items will be deleted'
    'confirm_delete_folder' => 'Dieser Ordner wird gelöscht',  // 'This folder will be deleted'
    'configure' => 'Konfigurieren',  // 'Configure'
    'browse' => 'Anzeigen',  // 'Browse'
    'select' => 'Auswählen',  // 'Select'
    'localizing' => 'Lokalisiere',  // 'Localizing'
    'add_row' => 'Reihe hinzufügen',  // 'Add Row'
    'localizable' => 'Übersetzbar',  // 'Localizable'
    'date_col_header' => 'Datum',  // 'Date'
    'please_wait' => 'Bitte warten…',  // 'Please Wait...'
    'exporting' => 'Exportiere …',  // 'Exporting...'
    'importing' => 'Importiere …',  // 'Importing...'
    'return_to_dashboard' => 'Zurück zum Kontrollzentrum',  // 'Return to Dashboard'
    'publish_content' => 'Inhalt publizieren',  // 'Publish Content'
    'close_this_window' => 'Fenster schliessen',  // 'Close this Window'
    'toggle_navigation' => 'Navigation umschalten',  // 'Toggle navigation'
    'logging_in' => 'Anmelden …',  // 'Logging in...'
    'logged_in' => 'Angemeldet! Ab zum Kontrollzentrum …',  // 'Logged in! Taking you to the control panel...'
    'write' => 'Schreibe',  // 'Write'
    'preview' => 'Vorschau',  // 'Preview'
    'collapse_all' => 'Alles zuklappen',  // 'Collapse All'
    'expand_all' => 'Alles aufklappen',  // 'Expand All'
    'please_select' => 'Bitte wählen',  // 'Please select'
    'selected' => 'ausgewählt',  // 'selected'

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
    'items' => 'Objekt|Objekte',  // 'Item|Items'
    'add_date' => 'Datum hinzufügen',  // 'Add date'
    'add_time' => 'Zeit hinzufügen',  // 'Add time'
    'login' => 'Einloggen',  // 'Login'
    'login_with' => 'Einloggen mit :provider',  // 'Login with :provider'
    'new' => 'Neu',  // 'New'
    'or' => 'oder',  // 'or'
    'order' => 'Reihenfolge',  // 'Order'
    'one_quarter' => '1/4',  // '1/4 - One quarter'
    'three_quarters' => '3/4',  // '3/4 - Three quarters'
    'one_third' => '1/3',  // '1/3 - One third'
    'two_thirds' => '2/3',  // '2/3 - Two thirds'
    'half' => '50%',  // 'Half'
    'full_width' => 'Volle Breite',  // 'Full width'
    'width' => 'Breite',  // 'Width'
    'version' => 'Version',  // 'Version'
    'versions' => 'Version|Versions',  // 'Version|Versions'
    'developer' => 'Entwickler',  // 'Developer'
    'developers' => 'Entwickler|Entwickler',  // 'Developer|Developers'
    'developer_mode' => 'Entwickler Modus',  // 'Developer Mode'
    'description' => 'Beschreibung',  // 'Description'
    'descriptions' => 'Beschreibung|Beschreibungen',  // 'Description|Descriptions'
    'name' => 'Name',  // 'Name'
    'username' => 'Benutzername',  // 'Username'
    'email' =>'E-Mail',  // Email'
    'done' => 'Erledigt',  // 'Done'
    'close' => 'Schliessen',  // 'Close'
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
    'bucket' => 'Bucket',  // 'Bucket'
    'region' => 'Region',  // 'Region'
    'metrics' => 'Metrik|Metrik',  // 'Metric|Metrics'
    'whats_this' => "Was ist das?",  // "What's this?"
    'first_name' => 'Vorname',  // 'First name'
    'last_name' => 'Nachname',  // 'Last name'
    'bio' => 'Bio',  // 'Bio'
    'markdown_cheatsheet' => 'Markdown Hilfe',  // 'Markdown Cheatsheet'
    'locales_and_urls' => 'Sprachen und URLs',  // 'Locales and URLs'
    'debug_mode' => 'Debug Modus',  // 'Debug Mode'
    'defined_in_environment' => 'Verwaltet durch externe Umgebung.',  // 'Managed externally by your environment.'
    'be_right_back' => 'Wir sind gleich wieder da.',  // 'Be right back.'
    'size' => 'Grösse',
    'attribute_field_name' => ':attribute Feld',

    'nav_content' => 'Inhalt',  // 'Content'
    'nav_tools' => 'Werkzeuge',  // 'Tools'
    'nav_configure' => 'Konfiguration',  // 'Configure'
    'nav_addons' => 'Erweiterungen',  // 'Addons'
    'nav_fieldsets' => 'Eingabemasken',  // 'Fieldsets'
    'nav_settings' => 'Einstellungen',  // 'Settings'
    'nav_users' => 'Benutzer',  // 'Users'

    'mount_collection' => 'Kollektion verlinken',  // 'Mount Collection'
    'unmount_collection' => 'Kollektion entfernen',  // 'Unmount Collection'

    'trial_mode' => 'Testmodus',  // 'Trial Mode'
    'trial_mode_badge' => 'Kostenlose Testversion',  // 'FREE TRIAL'

    // Validation
    'handle_exists' => 'Ein Medien container mit diesem Handle besteht bereits.',  // 'A container with this handle already exists.'
];
