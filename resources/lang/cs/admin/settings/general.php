<?php

return [
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Doména služby Active Directory',
    'ad_domain_help'			=> 'Toto je někdy stejné jako vaše emailová doména, ale ne vždy.',
    'ad_append_domain_label'    => 'Uveďte název domény',
    'ad_append_domain'          => 'Připojit doménu k uživatelskému jménu',
    'ad_append_domain_help'     => 'Uživatel není povinen psát "uzivatel@domena.local", může pouze napsat "uzivatel".',
    'admin_cc_email'            => 'Ve skryté kopii',
    'admin_cc_email_help'       => 'Chcete-li poslat kopii e-mailů pro check-in / checkout, které jsou uživatelům zaslány na další e-mailový účet, zadejte je zde. V opačném případě nechte toto pole prázdné.',
    'is_ad'				        => 'Toto je server služby Active Directory',
    'alerts'                	=> 'Výstrahy',
    'alert_title'               => 'Aktualizace nastavení oznámení',
    'alert_email'				=> 'Zasílat upozornění na',
    'alert_email_help'    => 'E-mailové adresy nebo distribuční seznamy kterým chcete odesílat výstrahy, oddělené čárkou',
    'alerts_enabled'			=> 'Upozornění zapnutá',
    'alert_interval'			=> 'Mez upozornění na vypršení (ve dnech)',
    'alert_inv_threshold'		=> 'Mez upozornění skladu',
    'allow_user_skin'           => 'Povolit vzhled uživatele',
    'allow_user_skin_help_text' => 'Zaškrtnutí tohoto políčka umožní uživateli přepsat vzhled uživatelského rozhraní jiným.',
    'asset_ids'					=> 'ID majetku',
    'audit_interval'            => 'Interval auditu',
    'audit_interval_help'       => 'Pokud máte povinnost provádět pravidelný fyzický audit svých aktiv, zadejte interval v měsících, které používáte. Pokud tuto hodnotu aktualizujete, všechna „další data auditu“ pro aktiva s nadcházejícím datem auditu budou aktualizována.',
    'audit_warning_days'        => 'Prah výstrahy auditu',
    'audit_warning_days_help'   => 'Kolik dní předem bychom vás měli varovat, když jsou aktiva splatná pro audit?',
    'auto_increment_assets'		=> 'Generovat automatické inventární číslo položek',
    'auto_increment_prefix'		=> 'Předpona (volitnelná)',
    'auto_incrementing_help'    => 'Pro nastavení musíte nejdřív povolit automatickou generaci inventárních čísel',
    'backups'					=> 'Zálohy',
    'backups_help'              => 'Vytvořit, stáhnout a obnovit zálohy ',
    'backups_restoring'         => 'Obnovit ze zálohy',
    'backups_upload'            => 'Nahrát zálohu',
    'backups_path'              => 'Zálohy jsou uloženy v <code>:path</code>',
    'backups_restore_warning'   => 'Use the restore button <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> to restore from a previous backup. (This does not currently work with S3 file storage or Docker.)<br><br>Your <strong>entire :app_name database and any uploaded files will be completely replaced</strong> by what\'s in the backup file.  ',
    'backups_logged_out'         => 'Všichni stávající uživatelé, včetně vás, budou odhlášeni po dokončení obnovy.',
    'backups_large'             => 'Velmi velké zálohy mohou při obnovování způsobit time out chybu a možná budou muset být spuštěny přes příkazový řádek. ',
    'barcode_settings'			=> 'Nastavení čárového kódu',
    'confirm_purge'			    => 'Potvrdit vyčištění',
    'confirm_purge_help'		=> 'Zadejte text "DELETE" do pole níže pro odstranění odstraněných záznamů. Tato akce nemůže být vrácena zpět a TRVALE smaže všechny položky a uživatele. (Měli byste nejdříve vytvořit zálohu, pro jistotu.)',
    'custom_css'				=> 'Vlastní CSS',
    'custom_css_help'			=> 'Zadejte libovolné vlastní CSS, které chcete použít. Nezahrnujte &lt;style&gt;&lt;/style&gt; tagy.',
    'custom_forgot_pass_url'	=> 'Uživatelem určená URL adresa pro resetování hesla',
    'custom_forgot_pass_url_help'	=> 'Nahrazuje vestavěnou URL pro změnu zapomenutého hesla na přihlašovací obrazovce, slouží k přesměrování uživatelů na interní nebo hostované funkce obnovení hesla LDAP. Zablokuje přístup k funkci změny hesla lokálního uživatele.',
    'dashboard_message'			=> 'Hlášení na nástěnce',
    'dashboard_message_help'	=> 'Tento text se objeví na nástěnce každému, kdo má oprávnění k zobrazení nástěnky.',
    'default_currency'  		=> 'Výchozí měna',
    'default_eula_text'			=> 'Výchozí EULA',
    'default_language'			=> 'Výchozí jazyk',
    'default_eula_help_text'	=> 'Můžete také spojit vlastní EULA se specifickými kategoriemi majetku.',
    'display_asset_name'        => 'Zobrazit název majetku',
    'display_checkout_date'     => 'Zobrazit den převzetí',
    'display_eol'               => 'Zobrazit EOL v tabulkovém zobrazení',
    'display_qr'                => 'Zobrazit kódy',
    'display_alt_barcode'		=> 'Zobrazit 1D čárový kód',
    'email_logo'                => 'Email logo',
    'barcode_type'				=> 'Typ 2D čárového kódu',
    'alt_barcode_type'			=> 'Typ 1D čárového kódu',
    'email_logo_size'       => 'Čtvercová loga vypadají na mailu nejlépe. ',
    'enabled'                   => 'Povoleno',
    'eula_settings'				=> 'Nastavení EULA',
    'eula_markdown'				=> 'Tato EULA umožňuje <a href="https://help.github.com/articles/github-flavored-markdown/">Github markdown</a>.',
    'favicon'                   => 'Favicona',
    'favicon_format'            => 'Povolené typy souborů jsou ico, png a gif. Ostatní formáty obrázků nemusí fungovat ve všech prohlížečích.',
    'favicon_size'          => 'Favikony by měly být čtvercové obrázky, 16 x 16 pixelů.',
    'footer_text'               => 'Další text do zápatí ',
    'footer_text_help'          => 'Tento text se zobrazí v pravém zápatí. Odkazy jsou povoleny pomocí <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. Zalamování řádků, záhlaví, obrázky atd. mohou mít za následek nepředvídatelné výsledky.',
    'general_settings'			=> 'Obecné nastavení',
    'general_settings_keywords' => 'technická podpora, podpis, přijetí, e-mailový formát, formát uživatelského jména, obrázky, na stránce, náhled, eula, licenční podmínky, hlavní stránka, soukromí',
    'general_settings_help'     => 'Výchozí EULA a další',
    'generate_backup'			=> 'Vytvořit zálohu',
    'header_color'              => 'Barva záhlaví',
    'info'                      => 'Tato nastavení umožňují zvolit určité prvky instalace.',
    'label_logo'                => 'Logo štítku',
    'label_logo_size'           => 'Čtvercová loga vypadají nejlépe - zobrazí se vpravo nahoře v každém inventárním číslem. ',
    'laravel'                   => 'Verze Laravel',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Výchozí skupina oprávnění',
    'ldap_default_group_info'   => 'Vyberte skupinu, kterou chcete přiřadit novým uživatelům. Nezapomeňte, že uživatel přebírá oprávnění skupiny, která je mu přiřazena.',
    'no_default_group'          => 'Žádná výchozí skupina',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP Client TLS Key',
    'ldap_client_tls_cert'      => 'LDAP Client-Side TLS Certificate',
    'ldap_enabled'              => 'LDAP povoleno',
    'ldap_integration'          => 'LDAP integrace',
    'ldap_settings'             => 'Nastavení LDAP',
    'ldap_client_tls_cert_help' => 'Client-Side TLS Certificate a klíč pro LDAP jsou obvykle užitečné pouze v konfiguracích Google Workspace společně s "Secure LDAP." Oba jsou vyžadovány.',
     'ldap_client_tls_key'       => 'LDAP Client-Side TLS key',
    'ldap_location'             => 'LDAP Location',
'ldap_location_help'             => 'The Ldap Location field should be used if <strong>an OU is not being used in the Base Bind DN.</strong> Leave this blank if an OU search is being used.',
    'ldap_login_test_help'      => 'Zadejte platné LDAP uživatelské jméno a heslo ze základu rozlišeného názvu který jste určili výše a vyzkoušejte zda je LDAP přihlašování správně nastavené. NEJPRVE JE TŘEBA ULOŽIT ZMĚNĚNÉ NASTAVENÍ LDAP.',
    'ldap_login_sync_help'      => 'Otestujte, že LDAP může správně synchronizovat. Pokud ověřovací LDAP dotaz není správný, uživatelé se nemusí být schopni přihlásit. JE NUTNÉ NEJPRVE NEJDŘÍVE ULOŽIT NASTAVENÍ LDAP POKUD BYLO ZMĚNĚNO.',
    'ldap_manager'              => 'LDAP Manager',
    'ldap_server'               => 'LDAP server',
    'ldap_server_help'          => 'Toto by mělo začít s ldap: // (pro nešifrované nebo TLS) nebo ldaps: // (pro SSL)',
    'ldap_server_cert'			=> 'Validace certifikátů LDAP SSL',
    'ldap_server_cert_ignore'	=> 'Povolit neplatný certifikát SSL',
    'ldap_server_cert_help'		=> 'Zaškrtněte toto políčko, pokud používáte SSL certifikát s vlastním podpisem a chcete přijmout neplatný certifikát SSL.',
    'ldap_tls'                  => 'Použít TLS',
    'ldap_tls_help'             => 'Tuto možnost byste měli zkontrolovat pouze v případě, že používáte STARTTLS na serveru LDAP. ',
    'ldap_uname'                => 'LDAP uživatelské jméno připojení',
    'ldap_dept'                 => 'LDAP oddělení',
    'ldap_phone'                => 'LDAP telefonní číslo',
    'ldap_jobtitle'             => 'LDAP pracovní pozice',
    'ldap_country'              => 'LDAP země',
    'ldap_pword'                => 'LDAP heslo připojení',
    'ldap_basedn'               => 'Základní svázání DN',
    'ldap_filter'               => 'LDAP filtr',
    'ldap_pw_sync'              => 'LDAP heslo synchronizace',
    'ldap_pw_sync_help'         => 'Zrušte zaškrtnutí tohoto políčka, pokud si nepřejete zachovat hesla LDAP synchronizovaná s lokálními hesly. Pokud to zakážete znamená to, že se uživatelé nemusí přihlásit, pokud je váš LDAP server z nějakého důvodu nedostupný.',
    'ldap_username_field'       => 'Pole uživatelského jména',
    'ldap_lname_field'          => 'Příjmení',
    'ldap_fname_field'          => 'LDAP jméno',
    'ldap_auth_filter_query'    => 'LDAP ověřovací dotaz',
    'ldap_version'              => 'Verze LDAP',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_activated_flag_help'  => 'This value is used to determine whether a synced user can login to Snipe-IT. <strong>It does not affect the ability to check items in or out to them</strong>, and should be the <strong>attribute name</strong> within your AD/LDAP, <strong>not the value</strong>. <br><br>If this field is set to a field name that does not exist in your AD/LDAP, or the value in the AD/LDAP field is set to <code>0</code> or <code>false</code>, <strong>user login will be disabled</strong>. If the value in the AD/LDAP field is set to <code>1</code> or <code>true</code> or <em>any other text</em> means the user can log in. When the field is blank in your AD, we respect the <code>userAccountControl</code> attribute, which usually allows non-suspended users to log in.',
    'ldap_emp_num'              => 'LDAP číslo zaměstnance',
    'ldap_email'                => 'LDAP email',
    'ldap_test'                 => 'Test LDAP',
    'ldap_test_sync'            => 'Test LDAP synchronizace',
    'license'                   => 'Softwarová licence',
    'load_remote_text'          => 'Vzdálené skripty',
    'load_remote_help_text'		=> 'Tato instalace Snipe-IT může nahrávat skripty z vnějšího světa.',
    'login'                     => 'Pokusů o přihlášení',
    'login_attempt'             => 'Pokus o přihlášení',
    'login_ip'                  => 'IP adresa',
    'login_success'             => 'Hotovo?',
    'login_user_agent'          => 'User Agent',
    'login_help'                => 'Seznam pokusů o přihlášení',
    'login_note'                => 'Přihlásit se Poznámka',
    'login_note_help'           => 'Volitelně můžete na obrazovce přihlášení zadat několik vět, například pomoci lidem, kteří nalezli ztracené nebo ukradené zařízení. Toto pole akceptuje značku <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavedmarkdown</a>',
    'login_remote_user_text'    => 'Volby vzdáleného přihlašování uživatele',
    'login_remote_user_enabled_text' => 'Zapnout přihlašování s hlavičkou vzdálený uživatel',
    'login_remote_user_enabled_help' => 'Tato volba zapne ověřování prostřednictvím hlavičky REMOTE_USER v souladu s „ommon Gateway Interface (norma rfc3875)“',
    'login_common_disabled_text' => 'Vypnout ostatní způsoby ověřování',
    'login_common_disabled_help' => 'Tato volba vypne ostatní způsoby ověřování. Použijte ji pouze pokud jste si jistí, že už funguje přihlašování REMOTE_USER',
    'login_remote_user_custom_logout_url_text' => 'Uživatelsky určená URL adresa odhlašování',
    'login_remote_user_custom_logout_url_help' => 'Pokud je zde uvedena adresa URL, uživatelé budou po odhlášení ze Snipe-IT přesměrování na tuto URL. To je užitečné pro správné ukončení relací Authentication providera.',
    'login_remote_user_header_name_text' => 'Záhlaví uživatelského jména',
    'login_remote_user_header_name_help' => 'Použít zadané záhlaví místo REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Použijte v tisku',
    'logo_print_assets_help'    => 'Používat branding na seznamech k tisku ',
    'full_multiple_companies_support_help_text' => 'Omezení uživatelů (včetně správců) jsou přiřazená ke společnostem s majetkem společnosti.',
    'full_multiple_companies_support_text' => 'Plná podpora více společností',
    'show_in_model_list'   => 'Zobrazit v rozbalovacích nabídkách modelu',
    'optional'					=> 'volitelný',
    'per_page'                  => 'Výsledků na stránku',
    'php'                       => 'Verze PHP',
    'php_info'                  => 'PHP Info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, systém, info',
    'php_overview_help'         => 'PHP System info',
    'php_gd_info'               => 'Je nutné nainstalovat php-gd pro zobrazení QR kódů. Více v instalační příručce.',
    'php_gd_warning'            => 'PHP pluginy pro zpracování obrazu a GD nejsou nainstalovány.',
    'pwd_secure_complexity'     => 'Složitost hesla',
    'pwd_secure_complexity_help' => 'Zvolte pravidla složitosti hesla, která chcete vynutit.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Heslo nemůže být stejné jako křestní jméno, příjmení, e-mail nebo uživatelské jméno',
    'pwd_secure_complexity_letters' => 'Vyžaduje alespoň jedno písmeno',
    'pwd_secure_complexity_numbers' => 'Vyžaduje alespoň jedno číslo',
    'pwd_secure_complexity_symbols' => 'Vyžaduje alespoň jeden symbol',
    'pwd_secure_complexity_case_diff' => 'Vyžaduje alespoň jedno velké písmeno a jedno malé písmeno',
    'pwd_secure_min'            => 'Minimální znaky hesla',
    'pwd_secure_min_help'       => 'Minimální povolená hodnota je 8',
    'pwd_secure_uncommon'       => 'Zabraňte běžným heslům',
    'pwd_secure_uncommon_help'  => 'To uživatelům zakáže používání běžných hesel z nejvyšších 10 000 hesel hlášených v porušení.',
    'qr_help'                   => 'Nejprve povolte QR kódy',
    'qr_text'                   => 'Text QR kódu',
    'saml'                      => 'SAML',
    'saml_title'                => 'Upravit nastavení SAML',
    'saml_help'                 => 'Nastavení SAML',
    'saml_enabled'              => 'SAML povolen',
    'saml_integration'          => 'Integrace SAML',
    'saml_sp_entityid'          => 'ID entity',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Veřejný certifikát',
    'saml_sp_metadata_url'      => 'URL metadat',
    'saml_idp_metadata'         => 'SAML IdP metadata',
    'saml_idp_metadata_help'    => 'Můžete zadat IdP metadata pomocí URL nebo XML souboru.',
    'saml_attr_mapping_username' => 'Mapování atributů - uživatelské jméno',
    'saml_attr_mapping_username_help' => 'NameID bude použito, pokud není specifikováno nebo není zadané přiřazování atributů.',
    'saml_forcelogin_label'     => 'SAML vynucené přihlášení',
    'saml_forcelogin'           => 'Nastavit SAML jako primární přihlášení',
    'saml_forcelogin_help'      => 'Můžete použít \'/login?nosaml\', abyste se dostali na normální přihlašovací stránku.',
    'saml_slo_label'            => 'Single Log Out (SLO) SAML',
    'saml_slo'                  => 'Odeslat LogoutRequest na idP při odhlášení',
    'saml_slo_help'             => 'Toto způsobí, že uživatel bude při odhlášení nejprve přesměrován na IdP. Nechte nezaškrtnuto, pokud IdP nepodporuje SP SAML SLO.',
    'saml_custom_settings'      => 'Vlastní nastavení SAML',
    'saml_custom_settings_help' => 'Můžete zadat vlastní nastavení do knihovny onelogin/php-saml. Na vlastní riziko.',
    'saml_download'             => 'Stáhnout metadata',
    'setting'                   => 'Nastavení',
    'settings'                  => 'Nastavení',
    'show_alerts_in_menu'       => 'Zobrazovat upozornění v horní nabídce',
    'show_archived_in_list'     => 'Archivovaný majetek',
    'show_archived_in_list_text'     => 'Zobrazit archivovaný majetek ve výpisu „veškerý majetek“',
    'show_assigned_assets'      => 'Zobrazit aktiva přiřazená k aktivům',
    'show_assigned_assets_help' => 'Zobrazí položky, které byly přiřazeny k ostatním položkám v Zobrazit uživatele -> Aktiva, Zobrazit uživatele -> Info -> Vytisknout všechny přiřazené a v účtu -> Zobrazit přiřazené aktiva.',
    'show_images_in_email'     => 'Zobrazovat obrázky v e-mailech',
    'show_images_in_email_help'   => 'Zrušte zaškrtnutí této kolonky, pokud je instalace Snipe-IT za VPN nebo uzavřenou sítí a uživatelé mimo síť nebudou moci do svých e-mailů načíst obrázky z této instalace.',
    'site_name'                 => 'Název stránky',
    'integrations'               => 'Integrations',
    'slack'                     => 'Slack',
    'general_webhook'           => 'General Webhook',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Test to Save',
    'webhook_title'               => 'Update Webhook Settings',
    'webhook_help'                => 'Integration settings',
    'webhook_botname'             => ':app Botname',
    'webhook_channel'             => ':app Channel',
    'webhook_endpoint'            => ':app Endpoint',
    'webhook_integration'         => ':app Settings',
    'webhook_test'                 =>'Test :app integration',
    'webhook_integration_help'    => ':app integration is optional, however the endpoint and channel are required if you wish to use it. To configure :app integration, you must first <a href=":webhook_link" target="_new" rel="noopener">create an incoming webhook</a> on your :app account. Click on the <strong>Test :app Integration</strong> button to confirm your settings are correct before saving. ',
    'webhook_integration_help_button'    => 'Once you have saved your :app information, a test button will appear.',
    'webhook_test_help'           => 'Test whether your :app integration is configured correctly. YOU MUST SAVE YOUR UPDATED :app SETTINGS FIRST.',
    'snipe_version'  			=> 'Verze Snipe-IT',
    'support_footer'            => 'Odkazy v zápatí na podporu ',
    'support_footer_help'       => 'Určete, kdo uvidí odkazy na Snipe-IT podporu a uživatelskou příručku',
    'version_footer'            => 'Verze v zápatí ',
    'version_footer_help'       => 'Určete kdo uvidí verzi Snipe-IT a číslo sestavení.',
    'system'                    => 'Systémové informace',
    'update'                    => 'Upravit nastavení',
    'value'                     => 'Hodnota',
    'brand'                     => 'Opatřit značkou',
    'brand_keywords'            => 'zápatí, logo, tisk, motiv, skin, záhlaví, barvy, css',
    'brand_help'                => 'Logo, název webu',
    'web_brand'                 => 'Typ webového brandingu',
    'about_settings_title'      => 'O nastavení',
    'about_settings_text'       => 'Tato nastavení umožňují zvolit určité prvky instalace.',
    'labels_per_page'           => 'Štítků na stránku',
    'label_dimensions'          => 'Rozměry štítku (palce)',
    'next_auto_tag_base'        => 'Další auto přírůstek',
    'page_padding'              => 'Okraje stránky (palce)',
    'privacy_policy_link'       => 'Odkaz na zásady osobních údajů',
    'privacy_policy'            => 'Zásady ochrany soukromí',
    'privacy_policy_link_help'  => 'Pokud je zde zahrnuta URL adresa, odkaz na zásady ochrany osobních údajů budou obsaženy do zápatí aplikace a pokud bude zahrnuto ve všech e-mailech, které systém odešle, díky čemuž bude odpovídat požadavkům předpisu GDPR. ',
    'purge'                     => 'Vyčištění odstraněných záznamů',
    'purge_deleted'             => 'Vymazat smazané ',
    'labels_display_bgutter'    => 'Spodní okraj štítku',
    'labels_display_sgutter'    => 'Boční okraj štítku',
    'labels_fontsize'           => 'Velikost písma štítku',
    'labels_pagewidth'          => 'Šířka listu štítku',
    'labels_pageheight'         => 'Výška listu štítku',
    'label_gutters'        => 'Mezery štítku (palce)',
    'page_dimensions'        => 'Rozměry stránky (palce)',
    'label_fields'          => 'Viditelná pole štítku',
    'inches'        => 'palce',
    'width_w'        => 'š',
    'height_h'        => 'v',
    'show_url_in_emails'                => 'Odkaz na Snipe-IT v e-mailech',
    'show_url_in_emails_help_text'      => 'Zrušte zaškrtnutí tohoto políčka, pokud nechcete odkazovat zpět na instalaci Snipe-IT do vašich emailových patek. Užitečné, pokud se většina vašich uživatelů nikdy nepřihlásí.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Maximální výška miniatur',
    'thumbnail_max_h_help'   => 'Maximální výška v pixelech, která se v zobrazení seznamu zobrazí miniaturám. Min 25, max 500.',
    'two_factor'        => 'Dvoufaktorové ověření',
    'two_factor_secret'        => 'Dvojfaktorový kód',
    'two_factor_enrollment'        => 'Dvojfaktorový zápis',
    'two_factor_enabled_text'        => 'Povolit Dvoufaktorové ověření',
    'two_factor_reset'        => 'Resetovat dvou faktorové tajemství',
    'two_factor_reset_help'        => 'Tímto bude uživatel přinucen, aby znovu zaregistroval své zařízení pomocí aplikace Google Authenticator. To může být užitečné, pokud ztratil nebo mu bylo odcizeno jeho aktuálně zapsané zařízení. ',
    'two_factor_reset_success'          => 'Resetování dvoufaktorového zařízení bylo úspěšné',
    'two_factor_reset_error'          => 'Resetování dvoufaktorového zařízení selhalo',
    'two_factor_enabled_warning'        => 'Povolení dvoufaktorového zabezpečení, pokud již není v současné době povoleno vás okamžitě donutí k ověření pomocí zařízení zapsaného v Google Auth. Pokud není v současné době žádné registrován. Budete mít možnost zapsat svoje zařízení.',
    'two_factor_enabled_help'        => 'Toto zapne dvoufaktorovou autentizaci pomocí služby Google Authenticator.',
    'two_factor_optional'        => 'Selektivní (Uživatelé mohou povolit nebo zakázat, je-li povolen)',
    'two_factor_required'        => 'Požadováno pro všechny uživatele',
    'two_factor_disabled'        => 'Zakázáno',
    'two_factor_enter_code'	=> 'Zadejte dvoufaktorový kód',
    'two_factor_config_complete'	=> 'Odeslat kód',
    'two_factor_enabled_edit_not_allowed' => 'Váš administrátor vám nedovolil upravit toto nastavení.',
    'two_factor_enrollment_text'	=> "Je vyžadováno dvoufaktorové ověření, nicméně vaše zařízení ještě nebylo zaregistrováno. Otevřete aplikaci Google Authenticator a oskenujte níže uvedený QR kód pro registraci vašeho zařízení. Jakmile zaregistrujete své zařízení, zadejte níže uvedený kód",
    'require_accept_signature'      => 'Požadovat podpis',
    'require_accept_signature_help_text'      => 'Aktivace této funkce bude vyžadovat, aby se uživatelé fyzicky přihlásili k přijetí určitého materiálu.',
    'left'        => 'vlevo',
    'right'        => 'vpravo',
    'top'        => 'nahoře',
    'bottom'        => 'dole',
    'vertical'        => 'svislé',
    'horizontal'        => 'vodorovné',
    'unique_serial'                => 'Neopakující se sériová čísla',
    'unique_serial_help_text'                => 'Zaškrtnutím tohoto políčka bude vynucena jedinečnost seriových čísel položek majetku',
    'zerofill_count'        => 'Délka značek majetku včetně zerofill',
    'username_format_help'   => 'Toto nastavení bude použito pouze v případě, že není zadáno uživatelské jméno a my pro vás musíme vygenerovat uživatelské jméno.',
    'oauth_title' => 'Nastavení OAuth API',
    'oauth' => 'OAuth',
    'oauth_help' => 'Nastavení koncových bodů Oauth',
    'asset_tag_title' => 'Aktualizovat nastavení inventárních čísel',
    'barcode_title' => 'Aktualizovat nastavení čárového kódu',
    'barcodes' => 'Čárové kódy',
    'barcodes_help_overview' => 'Čárový kód &amp; nastavení QR',
    'barcodes_help' => 'Toto se pokusí odstranit čárové kódy v mezipaměti. Obvykle se používá v případě, kdy došlo ke změně nastavení čárového kódu nebo v případě, že se změnila URL adresa Snipe-IT. Kódy budou vygenerovány znovu.',
    'barcodes_spinner' => 'Pokouším se odstranit soubory...',
    'barcode_delete_cache' => 'Odstranit mezipaměť čárových kódů',
    'branding_title' => 'Aktualizovat nastavení brandingu',
    'general_title' => 'Aktualizovat obecné nastavení',
    'mail_test' => 'Odeslat test',
    'mail_test_help' => 'Pokusím se odeslat testovací e-mail na :replyto.',
    'filter_by_keyword' => 'Filtrovat podle klíčového slova',
    'security' => 'Zabezpečení',
    'security_title' => 'Aktualizovat nastavení zabezpečení',
    'security_keywords' => 'heslo, hesla, požadavky, dvou fázové, dvou-fázové, běžná hesla, vzdálené přihlášení, odhlášení, autentifikace',
    'security_help' => 'Dvou-faktorové, Omezení hesel',
    'groups_keywords' => 'oprávnění, skupiny oprávnění, autorizace',
    'groups_help' => 'Skupiny oprávnění k účtu',
    'localization' => 'Lokalizace',
    'localization_title' => 'Aktualizovat nastavení lokalizace',
    'localization_keywords' => 'lokalizace, měna, místní, místní, časové pásmo, mezinárodní, internatinalizace, jazyk, jazyky, překlad',
    'localization_help' => 'Jazyk, zobrazení data',
    'notifications' => 'Oznámení',
    'notifications_help' => 'E-mailová oznámení a inventura',
    'asset_tags_help' => 'Nárůst a prefixy',
    'labels' => 'Štítky',
    'labels_title' => 'Upravit nastavení štítků',
    'labels_help' => 'Velikost štítků &amp; nastavení',
    'purge' => 'Smazat',
    'purge_keywords' => 'trvale odstranit',
    'purge_help' => 'Vymazat smazané záznamy',
    'ldap_extension_warning' => 'Nevypadá to, že LDAP rozšíření je nainstalováno nebo povoleno na tomto serveru. Stále můžete uložit vaše nastavení, ale budete muset povolit LDAP rozšíření pro PHP, než bude fungovat LDAP synchronizace nebo přihlášení.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Osobní číslo',
    'create_admin_user' => 'Vytvořit uživatele ::',
    'create_admin_success' => 'Úspěch! Administrátorský účet byl přidán!',
    'create_admin_redirect' => 'Klikněte zde pro přihlášení do aplikace!',
    'setup_migrations' => 'Migrace databáze ::',
    'setup_no_migrations' => 'Nebylo co migrovat. Databázové tabulky již byly nastaveny!',
    'setup_successful_migrations' => 'Vaše databázové tabulky byly vytvořeny',
    'setup_migration_output' => 'Výstup migrace:',
    'setup_migration_create_user' => 'Další: Vytvořit uživatele',
    'ldap_settings_link' => 'Nastavení LDAP',
    'slack_test' => 'Test <i class="fab fa-slack"></i> Integrace',
    'google_callback_help' => 'This should be entered as the callback URL in your Google OAuth app settings in your organization&apos;s <strong><a href="https://console.cloud.google.com/" target="_blank">Google developer console <i class="fa fa-external-link" aria-hidden="true"></i></a></strong>.',
    'google_login'      => 'Google Workspace Login Settings',
    'enable_google_login'  => 'Enable users to login with Google Workspace',
    'enable_google_login_help'  => 'Users will not be automatically provisioned. They must have an existing account here AND in Google Workspace, and their username here must match their Google Workspace email address. ',

];
