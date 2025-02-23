<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Ezarpenak',
    'settings_save' => 'Gorde aldaketak',
    'settings_save_success' => 'Aldaketak gordeta',
    'system_version' => 'Sistema bertsioa',
    'categories' => 'Kategoriak',

    // App Settings
    'app_customization' => 'Pertsonalizazioa',
    'app_features_security' => 'Ezaugarriak eta Segurtasuna',
    'app_name' => 'Aplikazioaren izena',
    'app_name_desc' => 'Izen hau goiburuan eta bidaltzen diren emailetan agertuko da.',
    'app_name_header' => 'Erakutsi izena goiburuan',
    'app_public_access' => 'Sarbide publikoa',
    'app_public_access_desc' => 'Aukera honen bitartez, bisitariek, saioa hasita ez dutenek, edukiak eskuratu ahal izango dituzte zure BookStacken instantzian.',
    'app_public_access_desc_guest' => 'Bisitarien sarrera "Guest" erabiltzeile bidez kontrola daiteke.',
    'app_public_access_toggle' => 'Baimendu sarbide publikoa',
    'app_public_viewing' => 'Publikoki ikustea baimendu?',
    'app_secure_images' => 'Goi Segurtasuneko irudiak',
    'app_secure_images_toggle' => 'Goi Segurtasuneko irudiak aktibatu',
    'app_secure_images_desc' => 'Antzezpen arrazoiengatik, irudi guztiak publikoak dira. Aukera honek ausazko lokarri bat gehitzen du irudiaren aurrean. Segurtasun-indizeek ezin dute sarrera erraza eragotzi.',
    'app_default_editor' => 'Default Page Editor',
    'app_default_editor_desc' => 'Select which editor will be used by default when editing new pages. This can be overridden at a page level where permissions allow.',
    'app_custom_html' => 'HTML pertsonalizatuko goiburu edukia',
    'app_custom_html_desc' => 'Hemen sarturiko edozein eduki <head> eremuko behekaldean sartuko da orrialde guztietan. Honek estiloak gainditzeko edo analitika-kodea gehitzeko balio du.',
    'app_custom_html_disabled_notice' => 'HTML edukiera desgaituta dago konfigurazio-orri honetan, edozein aldaketa eten daitekeela bermatzeko.',
    'app_logo' => 'Aplikazioaren logoa',
    'app_logo_desc' => 'Irudi honek 43px izan behar du altueran.<br>Irudi handiagoak txikitu egingo dira.',
    'app_primary_color' => 'Aplikazioaren kolore lehenetsia',
    'app_primary_color_desc' => 'Konfiguratu aplikaziorako kolore nagusia, botoi, banner eta estekak barne.',
    'app_homepage' => 'Aplikazioko hasiera orria',
    'app_homepage_desc' => 'Aukeratu hasierako orriko bista, defektuzkoa beharrean. Orrialde baimenak ez dira kontutan hartuko aukeratutako orrialdeentzat.',
    'app_homepage_select' => 'Aukeratu Orria',
    'app_footer_links' => 'Beheko aldeko estekak',
    'app_footer_links_desc' => 'Add links to show within the site footer. These will be displayed at the bottom of most pages, including those that do not require login. You can use a label of "trans::<key>" to use system-defined translations. For example: Using "trans::common.privacy_policy" will provide the translated text "Privacy Policy" and "trans::common.terms_of_service" will provide the translated text "Terms of Service".',
    'app_footer_links_label' => 'Loturaren etiketa',
    'app_footer_links_url' => 'Estekaren URLa',
    'app_footer_links_add' => 'Gehitu oineko esteka',
    'app_disable_comments' => 'Ezgaitu Iruzkinak',
    'app_disable_comments_toggle' => 'Ezgaitu iruzkinak',
    'app_disable_comments_desc' => 'Disables comments across all pages in the application. <br> Existing comments are not shown.',

    // Color settings
    'content_colors' => 'Eduki koloreak',
    'content_colors_desc' => 'Sets colors for all elements in the page organisation hierarchy. Choosing colors with a similar brightness to the default colors is recommended for readability.',
    'bookshelf_color' => 'Apal kolorea',
    'book_color' => 'Liburu kolorea',
    'chapter_color' => 'Kapitulu kolorea',
    'page_color' => 'Orrialde kolorea',
    'page_draft_color' => 'Zirriborro orrien kolorea',

    // Registration Settings
    'reg_settings' => 'Izen-ematea',
    'reg_enable' => 'Baimendu izen ematea',
    'reg_enable_toggle' => 'Baimendu izen ematea',
    'reg_enable_desc' => 'When registration is enabled user will be able to sign themselves up as an application user. Upon registration they are given a single, default user role.',
    'reg_default_role' => 'Default user role after registration',
    'reg_enable_external_warning' => 'The option above is ignored while external LDAP or SAML authentication is active. User accounts for non-existing members will be auto-created if authentication, against the external system in use, is successful.',
    'reg_email_confirmation' => 'Email baieztapena',
    'reg_email_confirmation_toggle' => 'Emain baieztapena behar du',
    'reg_confirm_email_desc' => 'If domain restriction is used then email confirmation will be required and this option will be ignored.',
    'reg_confirm_restrict_domain' => 'Domeinu mugaketa',
    'reg_confirm_restrict_domain_desc' => 'Enter a comma separated list of email domains you would like to restrict registration to. Users will be sent an email to confirm their address before being allowed to interact with the application. <br> Note that users will be able to change their email addresses after successful registration.',
    'reg_confirm_restrict_domain_placeholder' => 'Mugarik gabe',

    // Maintenance settings
    'maint' => 'Mantentze-lanak',
    'maint_image_cleanup' => 'Garbitu irudiak',
    'maint_image_cleanup_desc' => 'Scans page & revision content to check which images and drawings are currently in use and which images are redundant. Ensure you create a full database and image backup before running this.',
    'maint_delete_images_only_in_revisions' => 'Also delete images that only exist in old page revisions',
    'maint_image_cleanup_run' => 'Exekutatu garbiketa',
    'maint_image_cleanup_warning' => ':count potentially unused images were found. Are you sure you want to delete these images?',
    'maint_image_cleanup_success' => ':count potentially unused images found and deleted!',
    'maint_image_cleanup_nothing_found' => 'Ez da erabili gabeko irudirik aurkitu, ez da ezer ezabatuko!',
    'maint_send_test_email' => 'Frogako mezua bidali',
    'maint_send_test_email_desc' => 'This sends a test email to your email address specified in your profile.',
    'maint_send_test_email_run' => 'Frogako mezua bidali',
    'maint_send_test_email_success' => 'Emaila bidali da :address helbidera',
    'maint_send_test_email_mail_subject' => 'Email test-a',
    'maint_send_test_email_mail_greeting' => 'Email delivery seems to work!',
    'maint_send_test_email_mail_text' => 'Congratulations! As you received this email notification, your email settings seem to be configured properly.',
    'maint_recycle_bin_desc' => 'Deleted shelves, books, chapters & pages are sent to the recycle bin so they can be restored or permanently deleted. Older items in the recycle bin may be automatically removed after a while depending on system configuration.',
    'maint_recycle_bin_open' => 'Ireki zakarrontzia',
    'maint_regen_references' => 'Regenerate References',
    'maint_regen_references_desc' => 'This action will rebuild the cross-item reference index within the database. This is usually handled automatically but this action can be useful to index old content or content added via unofficial methods.',
    'maint_regen_references_success' => 'Reference index has been regenerated!',
    'maint_timeout_command_note' => 'Note: This action can take time to run, which can lead to timeout issues in some web environments. As an alternative, this action be performed using a terminal command.',

    // Recycle Bin
    'recycle_bin' => 'Zakarrontzia',
    'recycle_bin_desc' => 'Here you can restore items that have been deleted or choose to permanently remove them from the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'recycle_bin_deleted_item' => 'Ezabatutako edukiak',
    'recycle_bin_deleted_parent' => 'Nagusia',
    'recycle_bin_deleted_by' => 'Nork ezabatua',
    'recycle_bin_deleted_at' => 'Ezabatutako unea',
    'recycle_bin_permanently_delete' => 'Ezabatu betiko',
    'recycle_bin_restore' => 'Berreskuratu',
    'recycle_bin_contents_empty' => 'Zakarrontzia hutsik dago',
    'recycle_bin_empty' => 'Hustu Zakarrontzia',
    'recycle_bin_empty_confirm' => 'This will permanently destroy all items in the recycle bin including content contained within each item. Are you sure you want to empty the recycle bin?',
    'recycle_bin_destroy_confirm' => 'This action will permanently delete this item, along with any child elements listed below, from the system and you will not be able to restore this content. Are you sure you want to permanently delete this item?',
    'recycle_bin_destroy_list' => 'Ezabatuko diren elementuak',
    'recycle_bin_restore_list' => 'Berrezarriko diren elementuak',
    'recycle_bin_restore_confirm' => 'This action will restore the deleted item, including any child elements, to their original location. If the original location has since been deleted, and is now in the recycle bin, the parent item will also need to be restored.',
    'recycle_bin_restore_deleted_parent' => 'The parent of this item has also been deleted. These will remain deleted until that parent is also restored.',
    'recycle_bin_restore_parent' => 'Aita berrezarri',
    'recycle_bin_destroy_notification' => 'Deleted :count total items from the recycle bin.',
    'recycle_bin_restore_notification' => 'Restored :count total items from the recycle bin.',

    // Audit Log
    'audit' => 'Auditoretza erregistroak',
    'audit_desc' => 'This audit log displays a list of activities tracked in the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'audit_event_filter' => 'Gertakari filtroa',
    'audit_event_filter_no_filter' => 'Filtrorik ez',
    'audit_deleted_item' => 'Ezabatutako edukiak',
    'audit_deleted_item_name' => 'Izena :name',
    'audit_table_user' => 'Erabiltzailea',
    'audit_table_event' => 'Gertaera',
    'audit_table_related' => 'Related Item or Detail',
    'audit_table_ip' => 'IP helbidea',
    'audit_table_date' => 'Azken aktibitate data',
    'audit_date_from' => 'Data tartea',
    'audit_date_to' => 'Data tartea',

    // Role Settings
    'roles' => 'Rolak',
    'role_user_roles' => 'Erabiltzailearen rola',
    'role_create' => 'Rol berria sortu',
    'role_create_success' => 'Rola ondo sortu da',
    'role_delete' => 'Ezabatu Rol-a',
    'role_delete_confirm' => 'This will delete the role with the name \':roleName\'.',
    'role_delete_users_assigned' => 'This role has :userCount users assigned to it. If you would like to migrate the users from this role select a new role below.',
    'role_delete_no_migration' => "Ez migratu erabiltzaileak",
    'role_delete_sure' => 'Ziur zaude rol hau ezabatu nahi duzula?',
    'role_delete_success' => 'Rola ezabatua',
    'role_edit' => 'Editatu rola',
    'role_details' => 'Ireki xehetasunak',
    'role_name' => 'Rol izena',
    'role_desc' => 'Short Description of Role',
    'role_mfa_enforced' => 'Requires Multi-Factor Authentication',
    'role_external_auth_id' => 'External Authentication IDs',
    'role_system' => 'System Permissions',
    'role_manage_users' => 'Erabiltzaileak kudeatu',
    'role_manage_roles' => 'Manage roles & role permissions',
    'role_manage_entity_permissions' => 'Manage all book, chapter & page permissions',
    'role_manage_own_entity_permissions' => 'Manage permissions on own book, chapter & pages',
    'role_manage_page_templates' => 'Kudeatu orrien txantiloiak',
    'role_access_api' => 'Sistemako APIra sarrera',
    'role_manage_settings' => 'Kudeatu aplikazio ezarpenak',
    'role_export_content' => 'Exportatu edukia',
    'role_editor_change' => 'Change page editor',
    'role_asset' => 'Fitxategi baimenak',
    'roles_system_warning' => 'Be aware that access to any of the above three permissions can allow a user to alter their own privileges or the privileges of others in the system. Only assign roles with these permissions to trusted users.',
    'role_asset_desc' => 'These permissions control default access to the assets within the system. Permissions on Books, Chapters and Pages will override these permissions.',
    'role_asset_admins' => 'Admins are automatically given access to all content but these options may show or hide UI options.',
    'role_asset_image_view_note' => 'This relates to visibility within the image manager. Actual access of uploaded image files will be dependant upon system image storage option.',
    'role_all' => 'Guztiak',
    'role_own' => 'Norberarenak',
    'role_controlled_by_asset' => 'Controlled by the asset they are uploaded to',
    'role_save' => 'Gorde rol-a',
    'role_update_success' => 'Rola ondo eguneratu da',
    'role_users' => 'Rol honetako erabiltzaileak',
    'role_users_none' => 'No users are currently assigned to this role',

    // Users
    'users' => 'Erabiltzaileak',
    'user_profile' => 'Erabiltzailearen profila',
    'users_add_new' => 'Erabiltzaile berri bat gehitu',
    'users_search' => 'Erabiltzaileak bilatu',
    'users_latest_activity' => 'Duela gutxiko Jarduera',
    'users_details' => 'Erabiltzaile xehetasunak',
    'users_details_desc' => 'Set a display name and an email address for this user. The email address will be used for logging into the application.',
    'users_details_desc_no_email' => 'Set a display name for this user so others can recognise them.',
    'users_role' => 'Erabiltzailearen rola',
    'users_role_desc' => 'Select which roles this user will be assigned to. If a user is assigned to multiple roles the permissions from those roles will stack and they will receive all abilities of the assigned roles.',
    'users_password' => 'Erabiltzaile pasahitza',
    'users_password_desc' => 'Set a password used to log-in to the application. This must be at least 8 characters long.',
    'users_send_invite_text' => 'You can choose to send this user an invitation email which allows them to set their own password otherwise you can set their password yourself.',
    'users_send_invite_option' => 'Erabiltzailea gonbidatzeko emaila bidali',
    'users_external_auth_id' => 'Kanpo autentikazioa IDa',
    'users_external_auth_id_desc' => 'This is the ID used to match this user when communicating with your external authentication system.',
    'users_password_warning' => 'Only fill the below if you would like to change your password.',
    'users_system_public' => 'This user represents any guest users that visit your instance. It cannot be used to log in but is assigned automatically.',
    'users_delete' => 'Ezabatu erabiltzailea',
    'users_delete_named' => ':userName erabiltzailea ezabatu',
    'users_delete_warning' => 'This will fully delete this user with the name \':userName\' from the system.',
    'users_delete_confirm' => 'Are you sure you want to delete this user?',
    'users_migrate_ownership' => 'Migrate Ownership',
    'users_migrate_ownership_desc' => 'Select a user here if you want another user to become the owner of all items currently owned by this user.',
    'users_none_selected' => 'Erabiltzailerik ez duzu aukeratu',
    'users_edit' => 'Erabiltzaile editatu',
    'users_edit_profile' => 'Editatu profila',
    'users_avatar' => 'Erabiltzaile avatarra',
    'users_avatar_desc' => 'Select an image to represent this user. This should be approx 256px square.',
    'users_preferred_language' => 'Hobetsitako hizkuntza',
    'users_preferred_language_desc' => 'This option will change the language used for the user-interface of the application. This will not affect any user-created content.',
    'users_social_accounts' => 'Social Accounts',
    'users_social_accounts_info' => 'Here you can connect your other accounts for quicker and easier login. Disconnecting an account here does not revoke previously authorized access. Revoke access from your profile settings on the connected social account.',
    'users_social_connect' => 'Kontua Konektatu',
    'users_social_disconnect' => 'Deskonektatu kontua',
    'users_social_connected' => ':socialAccount account was successfully attached to your profile.',
    'users_social_disconnected' => ':socialAccount account was successfully disconnected from your profile.',
    'users_api_tokens' => 'API tokenak',
    'users_api_tokens_none' => 'No API tokens have been created for this user',
    'users_api_tokens_create' => 'Sortu Tokena',
    'users_api_tokens_expires' => 'Iraungita',
    'users_api_tokens_docs' => 'API dokumentazioa',
    'users_mfa' => 'Multi-Factor Authentication',
    'users_mfa_desc' => 'Setup multi-factor authentication as an extra layer of security for your user account.',
    'users_mfa_x_methods' => ':count method configured|:count methods configured',
    'users_mfa_configure' => 'Configure Methods',

    // API Tokens
    'user_api_token_create' => 'Sortu Tokena',
    'user_api_token_name' => 'Izena',
    'user_api_token_name_desc' => 'Give your token a readable name as a future reminder of its intended purpose.',
    'user_api_token_expiry' => 'Iraungitze data',
    'user_api_token_expiry_desc' => 'Set a date at which this token expires. After this date, requests made using this token will no longer work. Leaving this field blank will set an expiry 100 years into the future.',
    'user_api_token_create_secret_message' => 'Immediately after creating this token a "Token ID" & "Token Secret" will be generated and displayed. The secret will only be shown a single time so be sure to copy the value to somewhere safe and secure before proceeding.',
    'user_api_token_create_success' => 'API token successfully created',
    'user_api_token_update_success' => 'API token successfully updated',
    'user_api_token' => 'API Token',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'This is a non-editable system generated identifier for this token which will need to be provided in API requests.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'This is a system generated secret for this token which will need to be provided in API requests. This will only be displayed this one time so copy this value to somewhere safe and secure.',
    'user_api_token_created' => 'Token created :timeAgo',
    'user_api_token_updated' => 'Token updated :timeAgo',
    'user_api_token_delete' => 'Delete Token',
    'user_api_token_delete_warning' => 'This will fully delete this API token with the name \':tokenName\' from the system.',
    'user_api_token_delete_confirm' => 'Are you sure you want to delete this API token?',
    'user_api_token_delete_success' => 'API token successfully deleted',

    // Webhooks
    'webhooks' => 'Webhooks',
    'webhooks_create' => 'Create New Webhook',
    'webhooks_none_created' => 'No webhooks have yet been created.',
    'webhooks_edit' => 'Edit Webhook',
    'webhooks_save' => 'Save Webhook',
    'webhooks_details' => 'Webhook Details',
    'webhooks_details_desc' => 'Provide a user friendly name and a POST endpoint as a location for the webhook data to be sent to.',
    'webhooks_events' => 'Webhook Events',
    'webhooks_events_desc' => 'Select all the events that should trigger this webhook to be called.',
    'webhooks_events_warning' => 'Keep in mind that these events will be triggered for all selected events, even if custom permissions are applied. Ensure that use of this webhook won\'t expose confidential content.',
    'webhooks_events_all' => 'All system events',
    'webhooks_name' => 'Webhook Name',
    'webhooks_timeout' => 'Webhook Request Timeout (Seconds)',
    'webhooks_endpoint' => 'Webhook Endpoint',
    'webhooks_active' => 'Webhook Active',
    'webhook_events_table_header' => 'Gertaerak',
    'webhooks_delete' => 'Delete Webhook',
    'webhooks_delete_warning' => 'This will fully delete this webhook, with the name \':webhookName\', from the system.',
    'webhooks_delete_confirm' => 'Ziur zaude hau ezabatu nahi duzula?',
    'webhooks_format_example' => 'Webhook Format Example',
    'webhooks_format_example_desc' => 'Webhook data is sent as a POST request to the configured endpoint as JSON following the format below. The "related_item" and "url" properties are optional and will depend on the type of event triggered.',
    'webhooks_status' => 'Webhook Status',
    'webhooks_last_called' => 'Last Called:',
    'webhooks_last_errored' => 'Last Errored:',
    'webhooks_last_error_message' => 'Last Error Message:',


    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Català',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'el' => 'ελληνικά',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'eu' => 'Euskara',
        'fa' => 'فارسی',
        'fr' => 'Français',
        'he' => 'עברית',
        'hr' => 'Hrvatski',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lt' => 'Lietuvių Kalba',
        'lv' => 'Latviešu Valoda',
        'nl' => 'Nederlands',
        'nb' => 'Norsk (Bokmål)',
        'pl' => 'Polski',
        'pt' => 'Português',
        'pt_BR' => 'Português do Brasil',
        'ro' => 'Română',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];
