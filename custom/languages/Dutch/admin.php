<?php
/*
 *	Gemaakt door Samerton
 *  en vertaald en bijgewerkt door Sander Lambrechts, Jesse Geerts en Derkades
 *
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr2
 *
 *  License: MIT
 *
 *  Nederlandse taal - Admin
 */

$language = array(
	/*
	 *  Admin controle paneel
	 */
	// Login
	're-authenticate' => 'Gelieve opnieuw te verifiëren',

	// Navigatiebalk
	'admin_cp' => 'Controle Paneel',
	'administration' => 'Administratie',
	'overview' => 'Overzicht',
	'core' => 'Kern',
	'minecraft' => 'Minecraft',
	'modules' => 'Modules',
	'security' => 'Beveiliging',
	'styles' => 'Stijlen',
	'users_and_groups' => 'Gebruikers en groepen',

	// Overzicht
	'running_nameless_version' => 'Website versie: <strong>{x}</strong>', // Verander "{x}" niet
	'running_php_version' => 'PHP versie: <strong>{x}</strong>', // Verander "{x}" niet
	'statistics' => 'Statistieken',
	'notices' => 'Notices',
	'no_notices' => 'No notices.',
	'email_errors_logged' => 'Email fouten zijn vastgesteld. Klik <a href="{x}">hier</a> om ze te bekijken.', // Verander "{x}" niet

	// Kern
	'settings' => 'Instellingen',
	'general_settings' => 'Algemene Instellingen',
	'sitename' => 'Site naam',
	'default_language' => 'Standaard taal',
	'default_language_help' => 'Gebruikers kunnen kiezen uit alle geinstalleerde talen.',
	'installed_languages' => 'Alle nieuwe talen zijn toegevoegd.',
	'default_timezone' => 'Standaard tijdzone',
	'registration' => 'Registratie',
	'enable_registration' => 'Schakel registratie in?',
	'verify_with_mcassoc' => 'Verifieer gebruiker accounts met MCAssoc?',
	'email_verification' => 'Schakel email verificatie in?',
	'homepage_type' => 'Beginpagina type',
	'post_formatting_type' => 'Bericht opmaak soort',
	'portal' => 'Portaal',
	'missing_sitename' => 'Graag een site naam invullen van 2 tot 64 karakters lang.',
	'use_friendly_urls' => 'Vriendelijke URLs',
	'use_friendly_urls_help' => 'BELANGRIJK: Je webserver/webhosting moet geconfigureerd zijn om gebruik te maken van mod_rewrite en .htaccess om dit in werking te laten treden.',
	'config_not_writable' => 'Uw <strong>core/config.php</strong> bestand is niet herschrijfbaar.',
	'social_media' => 'Sociale Media',
	'youtube_url' => 'Youtube URL',
	'discord_id' => 'Discord Server ID',
	'twitter_url' => 'Twitter URL',
	'twitter_dark_theme' => 'Gebruik het donkere thema voor Twitter?',
	'google_plus_url' => 'Google Plus URL',
	'facebook_url' => 'Facebook URL',
	'successfully_updated' => 'Succesvol bijgewerkt',
	'debugging_and_maintenance' => 'Debugging en beheer',
	'enable_debug_mode' => 'Wil je debug modus inschakelen?',
	'force_https' => 'Forceer https?',
	'force_https_help' => 'Als het aanstaat, worden alle verzoeken naar deze website doorgestuurd naar https. Je moet een geldig SSL certificaat die actief is hebben om dit te laten werken.',
	'contact_email_address' => 'Emailadres voor contact',
	'emails' => 'Emails',
	'email_errors' => 'Email fouten',
	'registration_email' => 'Registratie email',
	'contact_email' => 'Contact email',
    'forgot_password_email' => 'Forgot Password Email',
	'unknown' => 'Onbekend',
	'delete_email_error' => 'Fout verwijderen',
	'confirm_email_error_deletion' => 'Weet je zeker dat je deze fout wilt verwijderen?',
	'viewing_email_error' => 'Fout aan het bekijken',
	'unable_to_write_email_config' => 'Kon niet naar het bestand <strong>core/email.php</core> schrijven. Graag de bestands toestemmingen bekijken.',
	'enable_mailer' => 'PHPMailer inschakelen?',
	'enable_mailer_help' => 'Zet dit aan als de emails standaard niet worden verzonden. Als je gebruik wilt maken van PHPMailer heb je een email dienst nodig waarmee je emails kan verzenden, zoals Gmail of een SMTP provider (outlook/hotmail).',
	'outgoing_email' => 'Uitgaand Emailadres',
	'outgoing_email_info' => 'Dit is het email adres waarmee NamelessMC emails gaat verzenden.',
	'mailer_settings_info' => 'De volgende velden zijn nodig als je PHPMailer aan hebt gezet. Voor meer informatie hoe je deze velden moet invullen, bekijk dan <a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-Gmail-or-SMTP-with-Nameless" target="_blank">de wiki</a>.',
	'host' => 'Host',
	'email_port' => 'Port',
	'email_password_hidden' => 'Het wachtwoord wordt om veiligheidsredenen niet getoond.',
	'send_test_email' => 'Vezend test email',
	'send_test_email_info' => 'Deze knop zorgt ervoor dat er een email naar het email addres, <strong>{x}</strong> wordt verzonden. Eventuele fouten tijdens het versturen van die e-mail, worden weergegeven.', // Verander {x} niet
	'send' => 'Verzend',
	'test_email_error' => 'Test email fout:',
	'test_email_success' => 'Test email succesvol verzonden!',
	'terms_error' => 'Zorg ervoor dat je algemene voorwaarden niet meer dan 2048 karakters bevat.',
	'terms_updated' => 'Algemene voorwaarden succesvol bijgewerkt.',
    'avatars' => 'Avatars',
    'allow_custom_avatars' => 'Allow custom user avatars?',
    'default_avatar' => 'Default avatar',
    'custom_avatar' => 'Custom avatar',
    'minecraft_avatar' => 'Minecraft avatar',
    'minecraft_avatar_source' => 'Minecraft avatar source',
    'built_in_avatars' => 'Built-in avatar service',
    'minecraft_avatar_perspective' => 'Minecraft avatar perspective',
    'face' => 'Face',
    'head' => 'Head',
    'select_default_avatar' => 'Select a new default avatar:',
    'no_avatars_available' => 'No avatars available. Please upload a new image above first.',
    'avatar_settings_updated_successfully' => 'Avatar settings updated successfully.',

	// Reacties
	'icon' => 'Icoon',
	'type' => 'Type',
	'positive' => 'Positief',
	'neutral' => 'Neutraal',
	'negative' => 'Negatief',
	'editing_reaction' => 'Reactie veranderen',
	'html' => 'HTML',
	'new_reaction' => '<i class="fa fa-plus-circle"></i> Nieuwe reactie',
	'creating_reaction' => 'Reactie maken',

	// Aangepaste profiel velden
	'custom_fields' => 'Aangepaste profiel velden',
	'new_field' => '<i class="fa fa-plus-circle"></i> Nieuw veld',
	'required' => 'Verplicht',
	'public' => 'Openbaar',
	'text' => 'Tekst',
	'textarea' => 'Tekst gebied',
	'date' => 'Datum',
	'creating_profile_field' => 'Maak een profiel veld',
	'editing_profile_field' => 'Profiel veld bewerken',
	'field_name' => 'Veld naam',
	'profile_field_required_help' => 'Verplichte velden moeten door de gebruiker worden ingevuld, en ze verschijnen tijden de registratie.',
	'profile_field_public_help' => 'Openbare velden kunnen alle gebruikers zien, als dit uit staat kunnen alleen beheerders het zien.',
	'profile_field_error' => 'Graag een veld naam invullen tussen de 2 en 16 karakters lang.',
	'description' => 'Beschrijving',
	'display_field_on_forum' => 'Veld laten zien in het forum?',
	'profile_field_forum_help' => 'Als aan staat, wordt het veld weergegeven bij de gebruiker naast de forum berichten.',

	// Minecraft
	'enable_minecraft_integration' => 'Minecraft integratie aan?',
	'mc_service_status' => 'Minecraft Dienst Status',
	'service_query_error' => 'Kon de dienst status niet verkrijgen.',
	'authme_integration' => 'AuthMe integratie',
	'authme_integration_info' => 'Wanneer AuthMe integratie aanstaat, kunnen de gebruikers alleen in-game een account maken.',
	'enable_authme' => 'AuthMe integratie aanzetten?',
	'authme_db_address' => 'AuthMe Database Adres',
	'authme_db_port' => 'AuthMe Database Poort',
	'authme_db_name' => 'AuthMe Database Naam',
	'authme_db_user' => 'AuthMe Database Gebruikersnaam',
	'authme_db_password' => 'AuthMe Database Wachtwoord',
	'authme_hash_algorithm' => 'AuthMe Hashing Algoritme',
	'authme_db_table' => 'AuthMe User Table',
	'enter_authme_db_details' => 'Vul geldige database gegevens in.',
	'authme_password_sync' => 'Synchroniseer AuthMe wachtwoord?',
	'authme_password_sync_help' => 'Als het aanstaat, veranderd het wachtwoord op de website, wanneer hij of zij het in-game verandert.',
	'minecraft_servers' => 'Minecraft Servers',
	'account_verification' => 'Minecraft Account Verificatie',
	'server_banners' => 'Server Banners',
	'query_errors' => 'Query Fouten',
	'add_server' => '<i class="fa fa-plus-circle"></i> Server toevoegen',
	'no_servers_defined' => 'Er zijn geen servers gedefinieerd',
	'query_settings' => 'Query instellingen',
	'default_server' => 'Standaard server',
	'no_default_server' => 'Geen standaard server',
	'external_query' => 'Gebruike externe query?',
	'external_query_help' => 'Als de standaard server query niet werkt, gebruik dan deze optie.',
	'adding_server' => 'Server toevoegen',
	'server_name' => 'Server naam',
	'server_address' => 'Server adres',
	'server_address_help' => 'Dit is het IP adres of domein dat wordt gebruikt door de spelers om met de server te verbinden.',
	'server_port' => 'Server poort',
	'parent_server' => 'Hoofd server',
	'parent_server_help' => 'Een hoofd server is gewoonlijk de BungeeCord server waarmee de website is verbonden, als deze er is.',
	'no_parent_server' => 'Geen hoofd server',
	'bungee_instance' => 'BungeeCord Server?',
	'bungee_instance_help' => 'Zet dit aan als de server een BungeeCord server is.',
	'server_query_information' => 'Om een lijst met spelers te laten zien, <strong>moet</strong> je server de optie \'enable-query\' aanzetten in de server\'s <strong>server.properties</strong> bestand',
	'enable_status_query' => 'Status query aanzetten?',
	'status_query_help' => 'Als dit aan staat, zal er op de status pagina staan of de server online is.',
	'enable_player_list' => 'Spelers lijst aanzetten?',
	'pre_1.7' => 'Is de server ouder dan Minecraft versie 1.7?',
	'player_list_help' => 'Als dit aanstaat, wordt er op de status pagina een lijst van online spelers weergegeven.',
	'server_query_port' => 'Server Query poort',
	'server_query_port_help' => 'Dit is de query.port optie in je server\'s server.properties bestand, zorg er ook voor dat de enable-query optie in hetzelfde bestaand aanstaat (true).',
	'server_name_required' => 'Vul een server naam in.',
	'server_name_minimum' => 'Zorg dat de server naam uit minimaal 1 karakter bestaat.',
	'server_name_maximum' => 'Zorg dat de server naam uit maximaal 20 karakters bestaat.',
	'server_address_required' => 'Vul een server adres in.',
	'server_address_minimum' => 'Zorg dat het server adres uit minimaal 1 karakter bestaat.',
	'server_address_maximum' => 'Zorg dat het server adres uit maximaal 64 karakters bestaat.',
	'server_port_required' => 'Vul een server poort in.',
	'server_port_minimum' => 'Zorg ervoor dat je server port minimaal uit 2 karakters bestaat',
	'server_port_maximum' => 'Zorg ervoor dat je server port is a maximum of 5 karakters bestaat',
	'server_parent_required' => 'Graag een hoofd server selecteren',
	'query_port_maximum' => 'Zorg ervoor dat je query poort maximaal uit 5 karakters bestaat',
	'server_created' => 'Server succesvol aangemaakt.',
	'confirm_delete_server' => 'Weet je zeker dat je deze server wilt verwijderen?',
	'server_updated' => 'Server succesvol bijgewerkt.',
	'editing_server' => 'Server bewerken',
	'server_deleted' => 'Server succesvol verwijderd',
	'unable_to_delete_server' => 'Deze server kan niet worden verwijderd.',
	'viewing_query_error' => 'Query fout aan het bekijken',
	'confirm_query_error_deletion' => 'Weet je zeker dat je deze query fout wilt verwijderen?',
	'no_query_errors' => 'Geen query fouten vastgesteld.',
	'new_banner' => '<i class="fa fa-plus-circle"></i> Nieuwe banner',
	'purge_errors' => 'Verwijder fouten',
	'confirm_purge_errors' => 'Weet je zeker dat je alle fouten wilt verwijderen?',
	'mcassoc_help' => 'mcassoc is een externe dienst die gebruikt kan worden om te controleren of gebruikers het Minecraft account hebben gekocht waarmee zij zich hebben geregistreerd. Om deze functie te gebruiken, dien je je aan te melden voor een "shared key". Je kan deze krijgen op de <a href="https://mcassoc.lukegb.com/" target="_blank">mcassoc website</a>.',
	'mcassoc_key' => 'mcassoc Shared Key',
	'mcassoc_instance' => 'mcassoc Instance Key',
	'mcassoc_instance_help' => '<a href="#" onclick="generateInstance();">Klik om een "instance key" te genereren</a>',
	'mcassoc_error' => 'Zorg ervoor dat je je "shared key" correct hebt ingevuld, en dat je een "instance key" correct hebt gegenereerd.',
	'updated_mcassoc_successfully' => 'mcassoc instellingen succesvol bijgewerkt.',
	'force_premium_accounts' => 'Forceer betaalde Minecraft accounts?',
	'banner_background' => 'Banner background',
	'query_interval' => 'Query interval (in minutes, must be between 5 and 60)',
	'player_graphs' => 'Player Graphs',
	'player_count_cronjob_info' => 'You can set up a cron job to query your servers every {x} minutes with the following command:',

	// Modulen
	'modules_installed_successfully' => 'Alle nieuwe modules zijn succesvol toegevoegd.',
	'enabled' => 'Ingeschakeld',
	'disabled' => 'Uitgeschakeld',
	'enable' => 'Inschakelen',
	'disable' => 'Uitschakelen',
	'module_enabled' => 'Module ingeschakeld.',
	'module_disabled' => 'Module uitgeschakeld.',
	'author' => 'Author:',

	// Stijlen
	'templates' => 'Sjablonen',
	'template_outdated' => 'We hebben ontdekt dat dit sjabloon voor versie {x} is, maar je gebruikt versie {y}', // Verander "{x}" of "{y}" niet
	'active' => 'Actief',
	'deactivate' => 'Deactiveer',
	'activate' => 'Activeer',
	'warning_editing_default_template' => 'Waarschuwing! Het wordt niet aanbevolen om het standaard sjabloon te bewerken.',
	'images' => 'Afbeeldingen',
	'upload_new_image' => 'Upload nieuwe afbeelding',
	'reset_background' => 'Herstel achtergrond naar standaard',
	'install' => '<i class="fa fa-plus-circle"></i> Installeren',
	'template_updated' => 'Sjabloon succesvol bijgewerkt.',
	'default' => 'Standaard',
	'make_default' => 'Maak standaard',
	'default_template_set' => 'Standaard sjabloon verzet naar {x} succesvol.', // Verander "{x}" niet
	'template_deactivated' => 'Sjabloon gedeactiveerd.',
	'template_activated' => 'Sjabloon geactiveerd.',
	'permissions' => 'Toestemmingen',
	'setting_perms_for_x' => 'Setting permissions for template {x}', // Don't replace {x}
	'templates_installed_successfully' => 'Any new templates have been installed successfully.',
	'confirm_delete_template' => 'Are you sure you want to delete this template?',
	'delete' => 'Delete',
	'template_deleted_successfully' => 'Template deleted successfully.',

	// Gebruikers & groepen
	'users' => 'Gebruikers',
	'groups' => 'Groepen',
	'group' => 'Groep',
	'new_user' => '<i class="fa fa-plus-circle"></i> Nieuwe gebruiker',
	'creating_new_user' => 'Maak een nieuwe gebruiker',
	'registered' => 'Aangemeld',
	'user_created' => 'Gebruiker succesvol aangemaakt.',
	'cant_delete_root_user' => 'Kan niet de hoofdgebruiker verwijderen!',
	'cant_modify_root_user' => 'Kan niet de groep van de hoofdgebruiker wijzigen!',
	'user_deleted' => 'Gebruiker succesvol verwijderd.',
	'confirm_user_deletion' => 'Weet je zeker dat je <strong>{x}</strong> wilt verwijderen?', // Verander "{x}" niet
	'validate_user' => 'Valideer gebruiker',
	'update_uuid' => 'UUID bijwerken',
	'update_mc_name' => 'Minecraft naam bijwerken',
	'reset_password' => 'Herstel wachtwoord',
	'punish_user' => 'Straf gebruiker',
	'delete_user' => 'Verwijder gebruiker',
	'minecraft_uuid' => 'Minecraft UUID',
	'other_actions' => 'Andere acties',
	'disable_avatar' => 'Avatar uitschakelen',
	'select_user_group' => 'Je moet een groep slecteren.',
	'uuid_max_32' => 'De UUID mag maar uit 32 karakters bestaan.',
	'title_max_64' => 'De gebruikers titel mag maar uit 64 karakters bestaan.',
	'minecraft_uuid' => 'Minecraft UUID',
	'group_id' => 'Groep ID',
	'name' => 'Naam groep',
	'title' => 'Gebruikers titel',
	'new_group' => '<i class="fa fa-plus-circle"></i> Nieuwe groep',
	'group_name_required' => 'Graag een groepsnaam invoeren.',
	'group_name_minimum' => 'Zorg ervoor dat de groepsnaam minimaal uit 2 karakters bestaat.',
	'group_name_maximum' => 'Zorg ervoor dat de groepsnaam maximaal uit 20 karakters bestaat.',
	'creating_group' => 'Nieuwe groep maken',
	'group_html_maximum' => 'Zorg ervoor dat je groeps HTML code niet langer is dan 1024 karakters.',
	'group_html' => 'Groeps HTML code',
	'group_html_lg' => 'Groeps langere HTML code',
	'group_username_colour' => 'Groep gebruikersnaam kleur',
	'group_staff' => 'Is de groep voor personeel?',
	'group_modcp' => 'Mag deze groep het beheer paneel zien?',
	'group_admincp' => 'Mag deze groep het controle paneel zien?',
	'delete_group' => 'Verwijder groep',
	'confirm_group_deletion' => 'Weet je zeker dat je de groep {x} wilt verwijderen?', // Verander "{x}" niet
	'group_not_exist' => 'Die groep bestaat niet.',
	'secondary_groups' => 'Secondary Groups',
	'secondary_groups_info' => 'The user will gain any additional permissions from these groups',

	// Algemene admin taal
	'task_successful' => 'Taak succesvol.',
	'invalid_action' => 'Ongeldige actie.',
	'enable_night_mode' => 'Zet nachtmodus aan',
	'disable_night_mode' => 'Zet nachtmodus uit',
	'view_site' => 'Terug naar de website',
	'signed_in_as_x' => 'Ingelogd als {x}', // Verander "{x}" niet
	'warning' => 'Waarschuwing',

	// Onderhoud
	'maintenance_mode' => 'Onderhoud modus',
	'maintenance_enabled' => 'Onderhoud modus staat nu aan.',
	'enable_maintenance_mode' => 'Wil je onderhoud modus inschakelen?',
	'maintenance_mode_message' => 'Onderhoud modus bericht',
	'maintenance_message_max_1024' => 'Zorg ervoor dat je onderhoud bericht maximaal uit 1024 karakters bestaat.',

	// Beveiliging
	'acp_logins' => 'Controle paneel aanmeldingen',
	'please_select_logs' => 'Welk logboek wil je bekijken?',
	'ip_address' => 'IP Adres',
	'template_changes' => 'Sjabloon veranderingen',
	'file_changed' => 'Veranderde bestanden',

	// Updates
	'update' => 'Bijwerken',
	'current_version_x' => 'Huidige versie: <strong>{x}</strong>', // Verander "{x}" niet
	'new_version_x' => 'Nieuwe versie: <strong>{x}</strong>', // Verander "{x}" niet
	'new_update_available' => 'Er is een nieuwe versie beschikbaar',
	'up_to_date' => 'Deze website draait al de nieuwste versie!',
	'urgent' => 'Je moet je website dringend bijwerken',
	'changelog' => 'Lijst van veranderingen',
	'update_check_error' => 'Er was een fout met het zoeken naar nieuwe versies:',
	'instructions' => 'Instructies',
	'download' => 'Download',
	'install_confirm' => 'Zorg ervoor dat je het bestand hebt gedownload en de bestanden hebt geupload voordat je verder gaat!',

	 // Widgets
	'widgets' => 'Widgets',
	'widget_enabled' => 'Widget ingeschakeld.',
	'widget_disabled' => 'Widget uitgeschakeld.',
	'editing_widget_x' => 'Widget {x} bewerken', // Don't replace {x}

	// Bestand uploads
	'drag_files_here' => 'Sleep bestand(en) hier naartoe om te uploaden.',
	'invalid_file_type' => 'Bestands type is incorrect',
	'file_too_big' => 'Het bestand dat je wilt uploaden is te groot! Je bestand is {{filesize}} en het limiet is {{maxFilesize}} .' // Verander {{filesize}} of {{maxFilesize}} niet
);
