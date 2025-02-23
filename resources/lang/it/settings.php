<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Impostazioni',
    'settings_save' => 'Salva Impostazioni',
    'settings_save_success' => 'Impostazioni salvate',
    'system_version' => 'Versione Del Sistema',
    'categories' => 'Categorie',

    // App Settings
    'app_customization' => 'Personalizzazione',
    'app_features_security' => 'Funzioni & Sicurezza',
    'app_name' => 'Nome applicazione',
    'app_name_desc' => 'Questo nome è mostrato nell\'header e in tutte le mail.',
    'app_name_header' => 'Mostrare il nome nell\'header',
    'app_public_access' => 'Accesso Pubblico',
    'app_public_access_desc' => 'Abilitando questa opzione, i visitatori, che non sono loggati, potranno accedere ai contenuti nella tua istanza BookStack.',
    'app_public_access_desc_guest' => 'L\'accesso ai visitatori pubblici può essere controllato attraverso l\'utente "Guest".',
    'app_public_access_toggle' => 'Permetti accesso pubblico',
    'app_public_viewing' => 'Consentire la visione pubblica?',
    'app_secure_images' => 'Abilitare una sicurezza maggiore per le immagini caricate?',
    'app_secure_images_toggle' => 'Abilita sicurezza aggiuntiva negli upload delle immagini',
    'app_secure_images_desc' => 'Per una ragione di prestazioni, tutte le immagini sono pubbliche. Questa opzione aaggiunge una stringa, difficile da indovinare, random negli url delle immagini. Assicurati che il listing delle cartelle non sia abilitato per prevenire un accesso semplice.',
    'app_default_editor' => 'Editor Di Pagina Predefinito',
    'app_default_editor_desc' => 'Seleziona quale editor sarà usato per impostazione predefinita quando modifichi nuove pagine. Questa impostazione potrà essere sovrascritta a livello di pagina dove i permessi lo permettano.',
    'app_custom_html' => 'Contenuto Head HTML Custom',
    'app_custom_html_desc' => 'Qualsiasi contenuto aggiunto qui verrà inserito alla fine della sezione <head> di tutte le pagine. Questo è utile per sovrascrivere lo stile o aggiungere il codice per gli analytics.',
    'app_custom_html_disabled_notice' => 'Il contenuto HTML personalizzato è disabilitato su questa pagina impostazioni per garantire che eventuali modifiche possano essere ripristinate.',
    'app_logo' => 'Logo applicazione',
    'app_logo_desc' => 'Questa immagine dovrebbe essere 43px in altezza. <br>Immagini più grandi verranno scalate.',
    'app_primary_color' => 'Colore primario applicazione',
    'app_primary_color_desc' => 'Deve essere un valore hex. <br>Lascia vuoto per reimpostare il colore di default.',
    'app_homepage' => 'Homepage Applicazione',
    'app_homepage_desc' => 'Seleziona una pagina da mostrare nella home anzichè quella di default. I permessi della pagina sono ignorati per quella selezionata.',
    'app_homepage_select' => 'Seleziona una pagina',
    'app_footer_links' => 'Link in basso',
    'app_footer_links_desc' => 'Aggiungi link da mostrare in basso nel sito. Questi saranno visibili in fondo alla maggior parte delle pagine, incluse quelle che non richiedono un autenticazione. Puoi usare l\'etichetta "trans::<chiave>" per utilizzare le traduzioni implementate nella piattaforma. Esempio: usando "trans::common.privacy_policy" mostrerà il testo tradotto "Norme sulla privacy" e "trans::common.terms_of_service" mostrerà il testo tradotto "Condizioni del Servizio".',
    'app_footer_links_label' => 'Etichetta del Link',
    'app_footer_links_url' => 'URL del Link',
    'app_footer_links_add' => 'Aggiungi Link in basso',
    'app_disable_comments' => 'Disattiva commenti',
    'app_disable_comments_toggle' => 'Disabilita commenti',
    'app_disable_comments_desc' => 'Disabilita i commenti su tutte le pagine nell\'applicazione. I commenti esistenti non sono mostrati. ',

    // Color settings
    'content_colors' => 'Colori del contenuto',
    'content_colors_desc' => 'Imposta i colori per tutti gli elementi nella gerarchia della pagina. È raccomandato scegliere colori con una luminosità simile a quelli di default per una maggiore leggibilità.',
    'bookshelf_color' => 'Colore della libreria',
    'book_color' => 'Colore del libro',
    'chapter_color' => 'Colore del capitolo',
    'page_color' => 'Colore della Pagina',
    'page_draft_color' => 'Colore della bozza',

    // Registration Settings
    'reg_settings' => 'Impostazioni Registrazione',
    'reg_enable' => 'Abilita Registrazione',
    'reg_enable_toggle' => 'Abilita registrazione',
    'reg_enable_desc' => 'Quando la registrazione è abilitata, l\utente sarà in grado di registrarsi all\'applicazione. Al momento della registrazione gli verrà associato un ruolo utente predefinito.',
    'reg_default_role' => 'Ruolo predefinito dopo la registrazione',
    'reg_enable_external_warning' => 'L\'opzione precedente viene ignorata se l\'autenticazione esterna tramite LDAP o SAML è attiva. Se l\'autenticazione (effettuata sul sistema esterno) sarà valida, gli account di eventuali membri non registrati saranno creati in automatico.',
    'reg_email_confirmation' => 'Conferma Email',
    'reg_email_confirmation_toggle' => 'Richiedi conferma email',
    'reg_confirm_email_desc' => 'Se la restrizione per dominio è usata la conferma della mail sarà richiesta e la scelta ignorata.',
    'reg_confirm_restrict_domain' => 'Restringi la registrazione al dominio',
    'reg_confirm_restrict_domain_desc' => 'Inserisci una lista separata da virgola di domini di email a cui vorresti restringere la registrazione. Agli utenti verrà inviata una mail per confermare il loro indirizzo prima che possano interagire con l\'applicazione. <br> Nota che gli utenti saranno in grado di cambiare il loro indirizzo dopo aver completato la registrazione.',
    'reg_confirm_restrict_domain_placeholder' => 'Nessuna restrizione impostata',

    // Maintenance settings
    'maint' => 'Manutenzione',
    'maint_image_cleanup' => 'Pulizia Immagini',
    'maint_image_cleanup_desc' => 'Esegue la scansione del contenuto delle pagine e delle revisioni per verificare quali immagini e disegni sono attualmente in uso e quali immagini sono ridondanti. Assicurati di creare backup completo del database e delle immagini prima di eseguire la pulizia.',
    'maint_delete_images_only_in_revisions' => 'Elimina anche le immagini che esistono solo nelle vecchie revisioni della pagina',
    'maint_image_cleanup_run' => 'Esegui Pulizia',
    'maint_image_cleanup_warning' => ':count immagini potenzialmente inutilizzate sono state trovate. Sei sicuro di voler eliminare queste immagini?',
    'maint_image_cleanup_success' => ':count immagini potenzialmente inutilizzate trovate e eliminate!',
    'maint_image_cleanup_nothing_found' => 'Nessuna immagine non utilizzata trovata, Nulla è stato cancellato!',
    'maint_send_test_email' => 'Invia un Email di Test',
    'maint_send_test_email_desc' => 'Questo invia un\'email di prova al tuo indirizzo email specificato nel tuo profilo.',
    'maint_send_test_email_run' => 'Invia email di test',
    'maint_send_test_email_success' => 'Email inviata a :address',
    'maint_send_test_email_mail_subject' => 'Email di Test',
    'maint_send_test_email_mail_greeting' => 'L\'invio delle email sembra funzionare!',
    'maint_send_test_email_mail_text' => 'Congratulazioni! Siccome hai ricevuto questa notifica email, le tue impostazioni sembrano essere configurate correttamente.',
    'maint_recycle_bin_desc' => 'Le librerie, i libri, i capitoli e le pagine cancellati vengono inviati al cestino in modo che possano essere ripristinati o eliminati definitivamente. Gli elementi più vecchi nel cestino possono essere automaticamente rimossi dopo un certo periodo, a seconda della configurazione del sistema.',
    'maint_recycle_bin_open' => 'Apri il Cestino',
    'maint_regen_references' => 'Rigenera Riferimenti',
    'maint_regen_references_desc' => 'Questa azione ricostruirà l\'indice dei riferimenti incrociati all\'interno del database. Di solito questa operazione è gestita automaticamente, ma può essere utile per indicizzare contenuti vecchi o aggiunti con metodi non ufficiali.',
    'maint_regen_references_success' => 'L\'indice di riferimento è stato rigenerato!',
    'maint_timeout_command_note' => 'Nota: Questa azione può richiedere del tempo per essere eseguita e può causare problemi di timeout in alcuni ambienti Web. In alternativa, questa azione può essere eseguita usando un comando da terminale.',

    // Recycle Bin
    'recycle_bin' => 'Cestino',
    'recycle_bin_desc' => 'Qui è possibile ripristinare gli elementi che sono stati eliminati o scegliere di rimuoverli definitivamente dal sistema. Questo elenco non è filtrato a differenza di elenchi di attività simili nel sistema in cui vengono applicati i filtri autorizzazioni.',
    'recycle_bin_deleted_item' => 'Elimina Elemento',
    'recycle_bin_deleted_parent' => 'Superiore',
    'recycle_bin_deleted_by' => 'Cancellato da',
    'recycle_bin_deleted_at' => 'Orario Cancellazione',
    'recycle_bin_permanently_delete' => 'Elimina Definitivamente',
    'recycle_bin_restore' => 'Ripristina',
    'recycle_bin_contents_empty' => 'Al momento il cestino è vuoto',
    'recycle_bin_empty' => 'Svuota Cestino',
    'recycle_bin_empty_confirm' => 'Questa operazione cancellerà definitivamente tutti gli elementi presenti nel cestino, inclusi i contenuti relativi a ciascun elemento. Sei sicuro di voler svuotare il cestino?',
    'recycle_bin_destroy_confirm' => 'Questa operazione eliminerà permanentemente questo elemento (insieme a tutti i relativi elementi elencati qui sotto) dal sistema e non sarà più possibile recuperarlo. Sei sicuro di voler eliminare permanentemente questo elemento?',
    'recycle_bin_destroy_list' => 'Elementi da Eliminare definitivamente',
    'recycle_bin_restore_list' => 'Elementi da Ripristinare',
    'recycle_bin_restore_confirm' => 'Questa azione ripristinerà l\'elemento eliminato, compresi gli elementi figli, nella loro posizione originale. Se la posizione originale è stata eliminata, ed è ora nel cestino, anche l\'elemento padre dovrà essere ripristinato.',
    'recycle_bin_restore_deleted_parent' => 'L\'elemento padre di questo elemento è stato eliminato. Questo elemento rimarrà eliminato fino a che l\'elemento padre non sarà ripristinato.',
    'recycle_bin_restore_parent' => 'Ripristina Superiore',
    'recycle_bin_destroy_notification' => 'Eliminati :count elementi dal cestino.',
    'recycle_bin_restore_notification' => 'Ripristinati :count elementi dal cestino.',

    // Audit Log
    'audit' => 'Registro di Controllo',
    'audit_desc' => 'Questo registro di controllo mostra la lista delle attività registrate dal sistema. Questa lista, a differenza di altre liste del sistema a cui vengono applicate dei filtri, è integrale.',
    'audit_event_filter' => 'Filtra Eventi',
    'audit_event_filter_no_filter' => 'Nessun Filtro',
    'audit_deleted_item' => 'Elimina Elemento',
    'audit_deleted_item_name' => 'Nome: :name',
    'audit_table_user' => 'Utente',
    'audit_table_event' => 'Evento',
    'audit_table_related' => 'Elemento o Dettaglio correlato',
    'audit_table_ip' => 'Indirizzo IP',
    'audit_table_date' => 'Data attività',
    'audit_date_from' => 'Dalla data',
    'audit_date_to' => 'Alla data',

    // Role Settings
    'roles' => 'Ruoli',
    'role_user_roles' => 'Ruoli Utente',
    'role_create' => 'Crea Nuovo Ruolo',
    'role_create_success' => 'Ruolo creato correttamente',
    'role_delete' => 'Elimina Ruolo',
    'role_delete_confirm' => 'Questo eliminerà il ruolo con il nome \':roleName\'.',
    'role_delete_users_assigned' => 'Questo ruolo ha :userCount utenti assegnati. Se vuoi migrare gli utenti da questo ruolo selezionane uno nuovo sotto.',
    'role_delete_no_migration' => "Non migrare gli utenti",
    'role_delete_sure' => 'Sei sicuro di voler eliminare questo ruolo?',
    'role_delete_success' => 'Ruolo eliminato correttamente',
    'role_edit' => 'Modifica Ruolo',
    'role_details' => 'Dettagli Ruolo',
    'role_name' => 'Nome Ruolo',
    'role_desc' => 'Breve Descrizione del Ruolo',
    'role_mfa_enforced' => 'Richiesta autenticazione multi-fattore',
    'role_external_auth_id' => 'ID Autenticazione Esterna',
    'role_system' => 'Permessi di Sistema',
    'role_manage_users' => 'Gestire gli utenti',
    'role_manage_roles' => 'Gestire ruoli e permessi di essi',
    'role_manage_entity_permissions' => 'Gestire tutti i permessi di libri, capitoli e pagine',
    'role_manage_own_entity_permissions' => 'Gestire i permessi sui propri libri, capitoli e pagine',
    'role_manage_page_templates' => 'Gestisci template pagine',
    'role_access_api' => 'API sistema d\'accesso',
    'role_manage_settings' => 'Gestire impostazioni app',
    'role_export_content' => 'Esporta contenuto',
    'role_editor_change' => 'Cambia editor di pagina',
    'role_asset' => 'Permessi Entità',
    'roles_system_warning' => 'Siate consapevoli che l\'accesso a uno dei tre permessi qui sopra, può consentire a un utente di modificare i propri privilegi o i privilegi di altri nel sistema. Assegna ruoli con questi permessi solo ad utenti fidati.',
    'role_asset_desc' => 'Questi permessi controllano l\'accesso di default alle entità. I permessi nei Libri, Capitoli e Pagine sovrascriveranno questi.',
    'role_asset_admins' => 'Gli amministratori hanno automaticamente accesso a tutti i contenuti ma queste opzioni possono mostrare o nascondere le opzioni della UI.',
    'role_asset_image_view_note' => 'Questo si riferisce alla visibilità all\'interno del gestore di immagini. L\'accesso effettivo ai file di immagine caricati dipenderà dall\'opzione di archiviazione delle immagini di sistema.',
    'role_all' => 'Tutti',
    'role_own' => 'Propri',
    'role_controlled_by_asset' => 'Controllato dall\'entità in cui sono caricati',
    'role_save' => 'Salva Ruolo',
    'role_update_success' => 'Ruolo aggiornato correttamente',
    'role_users' => 'Utenti in questo ruolo',
    'role_users_none' => 'Nessun utente assegnato a questo ruolo',

    // Users
    'users' => 'Utenti',
    'user_profile' => 'Profilo Utente',
    'users_add_new' => 'Aggiungi Nuovo Utente',
    'users_search' => 'Cerca Utenti',
    'users_latest_activity' => 'Ultima Attività',
    'users_details' => 'Dettagli Utente',
    'users_details_desc' => 'Imposta un nome e un indirizzo email per questo utente. L\'indirizzo email verrà utilizzato per accedere all\'applicazione.',
    'users_details_desc_no_email' => 'Imposta un nome per questo utente così gli altri possono riconoscerlo.',
    'users_role' => 'Ruoli Utente',
    'users_role_desc' => 'Seleziona a quali ruoli verrà assegnato questo utente. Se un utente è assegnato a più ruoli riceverà tutte le abilità dei ruoli assegnati.',
    'users_password' => 'Password Utente',
    'users_password_desc' => 'Imposta una password usata per accedere all\'applicazione. Deve essere lunga almeno 8 caratteri.',
    'users_send_invite_text' => 'Puoi scegliere di inviare a questo utente un\'email di invito che permette loro di impostare la propria password altrimenti puoi impostare la password tu stesso.',
    'users_send_invite_option' => 'Invia email di invito',
    'users_external_auth_id' => 'ID Autenticazioni Esterna',
    'users_external_auth_id_desc' => 'Questo è l\'ID usato per abbinare questo utente quando si comunica con il sistema di autenticazione esterno.',
    'users_password_warning' => 'Riempi solo se desideri cambiare la tua password:',
    'users_system_public' => 'Questo utente rappresente qualsiasi ospite che visita il sito. Non può essere usato per effettuare il login ma è assegnato automaticamente.',
    'users_delete' => 'Elimina Utente',
    'users_delete_named' => 'Elimina l\'utente :userName',
    'users_delete_warning' => 'Questo eliminerà completamente l\'utente \':userName\' dal sistema.',
    'users_delete_confirm' => 'Sei sicuro di voler eliminare questo utente?',
    'users_migrate_ownership' => 'Cambia Proprietario',
    'users_migrate_ownership_desc' => 'Seleziona qui un utente se vuoi che un altro utente diventi il proprietario di tutti gli elementi attualmente di proprietà di questo utente.',
    'users_none_selected' => 'Nessun utente selezionato',
    'users_edit' => 'Modifica Utente',
    'users_edit_profile' => 'Modifica Profilo',
    'users_avatar' => 'Avatar Utente',
    'users_avatar_desc' => 'Quest\'immagine dovrebbe essere approssimativamente 256px quadrata.',
    'users_preferred_language' => 'Lingua Preferita',
    'users_preferred_language_desc' => 'Questa opzione cambierà la lingua utilizzata per l\'interfaccia utente dell\'applicazione. Questo non influirà su alcun contenuto creato dall\'utente.',
    'users_social_accounts' => 'Account Social',
    'users_social_accounts_info' => 'Qui puoi connettere gli altri account per un accesso più veloce e semplice. Disconnettere un account qui non rimuoverà le altre sessioni. Revoca l\'accesso dal tuo profilo negli account social connessi.',
    'users_social_connect' => 'Connetti Account',
    'users_social_disconnect' => 'Disconnetti Account',
    'users_social_connected' => 'L\'account :socialAccount è stato connesso correttamente al tuo profilo.',
    'users_social_disconnected' => 'L\'account :socialAccount è stato disconnesso correttamente dal tuo profilo.',
    'users_api_tokens' => 'Token API',
    'users_api_tokens_none' => 'Nessun token API è stato creato per questo utente',
    'users_api_tokens_create' => 'Crea Token',
    'users_api_tokens_expires' => 'Scade',
    'users_api_tokens_docs' => 'Documentazione API',
    'users_mfa' => 'Autenticazione multi-fattore',
    'users_mfa_desc' => 'Imposta l\'autenticazione multi-fattore come misura di sicurezza aggiuntiva per il tuo account.',
    'users_mfa_x_methods' => ':count metodo configurato|:count metodi configurati',
    'users_mfa_configure' => 'Configura metodi',

    // API Tokens
    'user_api_token_create' => 'Crea Token API',
    'user_api_token_name' => 'Nome',
    'user_api_token_name_desc' => 'Assegna al tuo token un nome leggibile per ricordarne la funzionalità in futuro.',
    'user_api_token_expiry' => 'Data di scadenza',
    'user_api_token_expiry_desc' => 'Imposta una data di scadenza per questo token. Dopo questa data, le richieste che utilizzeranno questo token non funzioneranno più. Lasciando questo campo vuoto si imposterà la scadenza tra 100 anni.',
    'user_api_token_create_secret_message' => 'Immediatamente dopo aver creato questo token, un "Token ID" e un "Segreto Token" saranno generati e mostrati. Il segreto verrà mostrato unicamente questa volta, assicurati, quindi, di copiare il valore in un posto sicuro prima di procedere.',
    'user_api_token_create_success' => 'Token API creato correttamente',
    'user_api_token_update_success' => 'Token API aggiornato correttamente',
    'user_api_token' => 'Token API',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'Questo è un identificativo non modificabile generato dal sistema per questo token e che sarà necessario fornire per le richieste tramite API.',
    'user_api_token_secret' => 'Token Segreto',
    'user_api_token_secret_desc' => 'Questo è un segreto generato dal sistema per questo token che sarà necessario fornire per le richieste via API. Questo valore sarà visibile unicamente in questo momento pertanto copialo in un posto sicuro.',
    'user_api_token_created' => 'Token Aggiornato :timeAgo',
    'user_api_token_updated' => 'Token Aggiornato :timeAgo',
    'user_api_token_delete' => 'Elimina Token',
    'user_api_token_delete_warning' => 'Questa operazione eliminerà irreversibilmente dal sistema il token API denominato \':tokenName\'.',
    'user_api_token_delete_confirm' => 'Sei sicuri di voler eliminare questo token API?',
    'user_api_token_delete_success' => 'Token API eliminato correttamente',

    // Webhooks
    'webhooks' => 'Webhooks',
    'webhooks_create' => 'Crea Nuovo Webhook',
    'webhooks_none_created' => 'Nessun webhook è stato creato.',
    'webhooks_edit' => 'Modifica Webhook',
    'webhooks_save' => 'Salva Webhook',
    'webhooks_details' => 'Dettagli Webhook',
    'webhooks_details_desc' => 'Fornire un nome di facile utilizzo e un endpoint POST come posizione per i dati del webhook da inviare.',
    'webhooks_events' => 'Eventi Webhook',
    'webhooks_events_desc' => 'Seleziona tutti gli eventi che dovrebbero attivare questo webhook da chiamare.',
    'webhooks_events_warning' => 'Tieni presente che questi eventi saranno attivati per tutti gli eventi selezionati, anche se vengono applicati permessi personalizzati. Assicurarsi che l\'uso di questo webhook non esporrà contenuti riservati.',
    'webhooks_events_all' => 'Tutti gli eventi di sistema',
    'webhooks_name' => 'Nome Webhook',
    'webhooks_timeout' => 'Timeout Richiesta Webhook (Secondi)',
    'webhooks_endpoint' => 'Endpoint Webhook',
    'webhooks_active' => 'Webhook Attivo',
    'webhook_events_table_header' => 'Eventi',
    'webhooks_delete' => 'Elimina Webhook',
    'webhooks_delete_warning' => 'Questo eliminerà completamente questo webhook, con il nome \':webhookName\', dal sistema.',
    'webhooks_delete_confirm' => 'Sei sicuro di voler eliminare questo webhook?',
    'webhooks_format_example' => 'Esempio Di Formato Webhook',
    'webhooks_format_example_desc' => 'I dati Webhook vengono inviati come richiesta POST all\'endpoint configurato come JSON seguendo il formato sottostante. Le proprietà "related_item" e "url" sono opzionali e dipenderanno dal tipo di evento attivato.',
    'webhooks_status' => 'Stato Webhook',
    'webhooks_last_called' => 'Ultima Chiamata:',
    'webhooks_last_errored' => 'Ultimo Errore:',
    'webhooks_last_error_message' => 'Ultimo Messaggio Di Errore:',


    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'Inglese',
        'ar' => 'Arabo',
        'bg' => 'Bulgaro',
        'bs' => 'Bosniaco',
        'ca' => 'Catalano',
        'cs' => 'Ceco',
        'da' => 'Danese',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'el' => 'ελληνικά',
        'es' => 'Spagnolo',
        'es_AR' => 'Spagnolo d\'Argentina',
        'et' => 'Estone',
        'eu' => 'Euskara',
        'fa' => 'فارسی',
        'fr' => 'Francese',
        'he' => 'Ebraico',
        'hr' => 'Croato',
        'hu' => 'Ungherese',
        'id' => 'Indonesiano',
        'it' => 'Italiano',
        'ja' => 'Giapponese',
        'ko' => 'Coreano',
        'lt' => 'Lituano',
        'lv' => 'Lettone',
        'nl' => 'Olandese',
        'nb' => 'Norvegese (Bokmål)',
        'pl' => 'Polacco',
        'pt' => 'Portoghese',
        'pt_BR' => 'Portoghese Brasiliano',
        'ro' => 'Română',
        'ru' => 'Russo',
        'sk' => 'Sloveno',
        'sl' => 'Sloveno',
        'sv' => 'Svedese',
        'tr' => 'Turco',
        'uk' => 'Ucraino',
        'vi' => 'Vietnamita',
        'zh_CN' => 'Cinese semplificato',
        'zh_TW' => 'Cinese tradizionale',
    ],
    //!////////////////////////////////
];
