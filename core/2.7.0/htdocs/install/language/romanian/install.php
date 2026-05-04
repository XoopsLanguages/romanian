<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: ro
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'Arată/ascunde textul de ajutor');
// License
//define('LICENSE_NOT_WRITEABLE', 'Fișierul de licență „%s” NU poate fi scris!');
//define('LICENSE_IS_WRITEABLE', '%s Licența poate fi scrisă.');
// Configuration check page
define('SERVER_API', 'API server');
define('PHP_EXTENSION', '%s extensie');
define('CHAR_ENCODING', 'Codificare caractere');
define('XML_PARSING', 'Parsare XML');
define('REQUIREMENTS', 'Cerințe');
define('_PHP_VERSION', 'Versiune PHP');
define('RECOMMENDED_SETTINGS', 'Setări recomandate');
define('RECOMMENDED_EXTENSIONS', 'Extensii recomandate');
define('SETTING_NAME', 'Nume setare');
define('RECOMMENDED', 'Recomandat');
define('CURRENT', 'Curent');
define('RECOMMENDED_EXTENSIONS_MSG', 'Aceste extensii nu sunt necesare pentru utilizarea normală, dar pot fi necesare pentru a explora
 unele caracteristici specifice (cum ar fi suportul pentru mai multe limbi sau RSS). Prin urmare, este recomandat să le instalați.');
define('NONE', 'Niciunul');
define('SUCCESS', 'Succes');
define('WARNING', 'Avertisment');
define('FAILED', 'Eșuat');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'Expert instalare XOOPS');
define('LANGUAGE_SELECTION', 'Selectarea limbii');
define('LANGUAGE_SELECTION_TITLE', 'Selectați limba dvs.');        // L128
define('INTRODUCTION', 'Introducere');
define('INTRODUCTION_TITLE', 'Bun venit la Expertul de instalare XOOPS');        // L0
define('CONFIGURATION_CHECK', 'Verificare configurație');
define('CONFIGURATION_CHECK_TITLE', 'Verificarea configurației serverului');
define('PATHS_SETTINGS', 'Setări căi');
define('PATHS_SETTINGS_TITLE', 'Setări căi');
define('DATABASE_CONNECTION', 'Conexiune baza de date');
define('DATABASE_CONNECTION_TITLE', 'Conexiune baza de date');
define('DATABASE_CONFIG', 'Configurare baza de date');
define('DATABASE_CONFIG_TITLE', 'Configurare baza de date');
define('CONFIG_SAVE', 'Salvare configurație');
define('CONFIG_SAVE_TITLE', 'Salvarea configurației sistemului');
define('TABLES_CREATION', 'Creare tabele');
define('TABLES_CREATION_TITLE', 'Creare tabele bază de date');
define('INITIAL_SETTINGS', 'Setări inițiale');
define('INITIAL_SETTINGS_TITLE', 'Vă rugăm să introduceți setările inițiale');
define('DATA_INSERTION', 'Inserare date');
define('DATA_INSERTION_TITLE', 'Salvarea setărilor în baza de date');
define('WELCOME', 'Bun venit');
define('WELCOME_TITLE', 'Bine ați venit pe site-ul dvs. XOOPS');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'Căi fizice XOOPS');
define('XOOPS_URLS', 'Locații web');
define('XOOPS_ROOT_PATH_LABEL', 'XOOPS documentează calea fizică rădăcină');
define('XOOPS_ROOT_PATH_HELP', 'Calea fizică către directorul documentelor XOOPS (servite) FĂRĂ bară oblică finală');
define('XOOPS_LIB_PATH_LABEL', 'XOOPS directorul bibliotecii');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS director de fișiere de date');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS data files (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_URL_LABEL', 'Locația site-ului web (URL)'); // L56
define('XOOPS_URL_HELP', 'Principala URL care va fi folosită pentru a accesa instalația dvs. XOOPS'); // L58
define('LEGEND_CONNECTION', 'Conexiune server');
define('LEGEND_DATABASE', 'Bază de date'); // L51
define('DB_HOST_LABEL', 'Numele gazdă server');    // L27
define('DB_HOST_HELP', 'Numele de gazdă al serverului bazei de date. Dacă nu sunteți sigur, <em>localhost</em> funcționează în majoritatea cazurilor'); // L67
define('DB_USER_LABEL', 'Nume utilizator');    // L28
define('DB_USER_HELP', 'Numele contului de utilizator care va fi utilizat pentru conectarea la serverul bazei de date'); // L65
define('DB_PASS_LABEL', 'Parolă');    // L52
define('DB_PASS_HELP', 'Parola contului de utilizator al bazei de date'); // L68
define('DB_NAME_LABEL', 'Nume bază de date');    // L29
define('DB_NAME_HELP', 'Numele bazei de date de pe gazdă. Programul de instalare va încerca să creeze baza de date dacă nu există'); // L64
define('DB_CHARSET_LABEL', 'Set caractere bază de date');
define('DB_CHARSET_HELP', 'MySQL include suport pentru seturi de caractere care vă permite să stocați date utilizând o varietate de seturi de caractere și să efectuați comparații în funcție de o varietate de colaționări.');
define('DB_COLLATION_LABEL', 'Colație bază de date');
define('DB_COLLATION_HELP', 'O colaţionare este un set de reguli pentru compararea caracterelor dintr-un set de caractere.');
define('DB_PREFIX_LABEL', 'Prefix tabel');    // L30
define('DB_PREFIX_HELP', 'Acest prefix va fi adăugat la toate tabelele noi create pentru a evita conflictele de nume în baza de date. Dacă nu sunteți sigur, păstrați doar valoarea implicită'); // L63
define('DB_PCONNECT_LABEL', 'Folosiți conexiune persistentă');    // L54
define('DB_PCONNECT_HELP', "Implicit este „Nu”. Lăsați necompletat dacă nu sunteți sigur"); // L69
define('DB_DATABASE_LABEL', 'Bază de date');
define('LEGEND_ADMIN_ACCOUNT', 'Cont administrator');
define('ADMIN_LOGIN_LABEL', 'Autentificare administrator'); // L37
define('ADMIN_EMAIL_LABEL', 'E-mail administrator'); // L38
define('ADMIN_PASS_LABEL', 'Parolă administrator'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'Confirmați parola'); // L74
// Buttons
define('BUTTON_PREVIOUS', 'Anterior'); // L42
define('BUTTON_NEXT', 'Continuare'); // L47
// Messages
define('XOOPS_FOUND', '%s găsit');
define('CHECKING_PERMISSIONS', 'Se verifică permisiunile pentru fișiere și director...'); // L82
define('IS_NOT_WRITABLE', '%s NU se poate scrie.'); // L83
define('IS_WRITABLE', '%s poate fi scris.'); // L84
define('XOOPS_PATH_FOUND', 'Calea găsită.');
//define('READY_CREATE_TABLES', 'Nu au fost detectate tabele XOOPS.<br>Programul de instalare este acum gata să creeze tabelele de sistem XOOPS.');
define('XOOPS_TABLES_FOUND', 'Tabelele de sistem XOOPS există deja în baza ta de date.'); // L131
define('XOOPS_TABLES_CREATED', 'XOOPS au fost create tabelele de sistem.');
//define('READY_INSERT_DATA', 'Instalatorul este acum gata să insereze datele inițiale în baza de date.');
//define('READY_SAVE_MAINFILE', 'Instalatorul este acum gata să salveze setările specificate în <em>mainfile.php</em>.');
define('SAVED_MAINFILE', 'Setări salvate');
define('SAVED_MAINFILE_MSG', 'Instalatorul a salvat setările specificate în <em>mainfile.php</em> și <em>secure.php</em>.');
define('DATA_ALREADY_INSERTED', 'XOOPS date găsite în baza de date.');
define('DATA_INSERTED', 'Datele inițiale au fost inserate în baza de date.');
// %s is database name
define('DATABASE_CREATED', 'Bază de date %s creată!'); // L43
// %s is table name
define('TABLE_NOT_CREATED', 'Nu se poate crea tabelul %s'); // L118
define('TABLE_CREATED', 'Tabelul %s a fost creat.'); // L45
define('ROWS_INSERTED', '%d intrări introduse în tabelul %s.'); // L119
define('ROWS_FAILED', 'Nu s-a inserat intrările %d în tabelul %s.'); // L120
define('TABLE_ALTERED', 'Tabelul %s a fost actualizat.'); // L133
define('TABLE_NOT_ALTERED', 'Nu s-a reușit actualizarea tabelului %s.'); // L134
define('TABLE_DROPPED', 'Tabelul %s a fost eliminat.'); // L163
define('TABLE_NOT_DROPPED', 'Nu s-a șters tabelul %s.'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', 'Nu s-a putut accesa folderul specificat. Vă rugăm să verificați dacă acesta există și că poate fi citit de server.');
define('ERR_NO_XOOPS_FOUND', 'Nu a putut fi găsită nicio instalare XOOPS în folderul specificat.');
define('ERR_INVALID_EMAIL', 'E-mail invalid'); // L73
define('ERR_REQUIRED', 'Informația este necesară.'); // L41
define('ERR_PASSWORD_MATCH', 'Cele două parole nu se potrivesc');
define('ERR_NEED_WRITE_ACCESS', 'Serverul trebuie să aibă acces de scriere la următoarele fișiere și foldere<br>(adică <em>chmod 775 directory_name</em> pe un server UNIX/LINUX)<br>Dacă acestea nu sunt disponibile sau nu sunt create corect, vă rugăm să creați manual și să setați permisiunile corespunzătoare.');
define('ERR_NO_DATABASE', 'Nu s-a putut crea baza de date. Contactați administratorul serverului pentru detalii.'); // L31
define('ERR_NO_DBCONNECTION', 'Nu s-a putut conecta la serverul bazei de date.'); // L106
define('ERR_WRITING_CONSTANT', 'Constanta de scriere eșuată %s.'); // L122
define('ERR_COPY_MAINFILE', 'Nu s-a putut copia fișierul de distribuție în %s');
define('ERR_WRITE_MAINFILE', 'Nu s-a putut scrie în %s. Verificați permisiunea fișierului și încercați din nou.');
define('ERR_READ_MAINFILE', 'Nu s-a putut deschide %s pentru citire');
define('ERR_INVALID_DBCHARSET', "Setul de caractere „%s” nu este acceptat.");
define('ERR_INVALID_DBCOLLATION', "Colaţionarea „%s” nu este acceptată.");
define('ERR_CHARSET_NOT_SET', 'Setul de caractere implicit nu este setat pentru baza de date XOOPS.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'Suport');
define('LOGIN', 'Autentificare');
define('LOGIN_TITLE', 'Autentificare');
define('USER_LOGIN', 'Autentificare administrator');
define('USERNAME', 'Nume utilizator:');
define('PASSWORD', 'Parolă :');
define('ICONV_CONVERSION', 'Conversie set caractere');
define('ZLIB_COMPRESSION', 'Compresie Zlib');
define('IMAGE_FUNCTIONS', 'Funcții imagini');
define('IMAGE_METAS', 'Metadate ale imaginii (exif)');
define('FILTER_FUNCTIONS', 'Funcții filtre');
define('ADMIN_EXIST', 'Contul de administrator există deja.');
define('CONFIG_SITE', 'Configurare site');
define('CONFIG_SITE_TITLE', 'Configurare site');
define('MODULES', 'Instalare module');
define('MODULES_TITLE', 'Instalare module');
define('THEME', 'Selectați tema');
define('THEME_TITLE', 'Selectați tema implicită');
define('INSTALLED_MODULES', 'Următoarele module au fost instalate.');
define('NO_MODULES_FOUND', 'Nu s-au găsit module.');
define('NO_INSTALLED_MODULES', 'Niciun modul instalat.');
define('THEME_NO_SCREENSHOT', 'Nicio captură de ecran găsită');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', 'Puterea parolei');
define('PASSWORD_DESC', 'Parola nu a fost introdusă');
define('PASSWORD_GENERATOR', 'Generator de parolă');
define('PASSWORD_GENERATE', 'Generați');
define('PASSWORD_COPY', 'Copiați');
define('PASSWORD_VERY_WEAK', 'Foarte slabă');
define('PASSWORD_WEAK', 'Slabă');
define('PASSWORD_BETTER', 'Mai bine');
define('PASSWORD_MEDIUM', 'Mediu');
define('PASSWORD_STRONG', 'Puternică');
define('PASSWORD_STRONGEST', 'Cea mai puternică');
//2.5.7
define('WRITTEN_LICENSE', 'A scris XOOPS %s Cheia de licență: <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'Reîncercați');
define('CHMOD_CHGRP_IGNORE', 'Folosiți oricum');
define('CHMOD_CHGRP_ERROR', 'Este posibil ca programul de instalare să nu poată scrie fișierul de configurare %1$s.<p>PHP scrie fișiere sub utilizatorul %2$s și grupul %3$s.<p>Directorul %4$s/ are utilizatorul %5$s și grupul %6$s');
//2.5.9
define("CURL_HTTP", "Client URL Biblioteca (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', 'Domeniul cookie pentru site-ul web');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Domeniu pentru a seta module cookie. Poate fi necompletat, gazda completă din URL (www.example.com) sau domeniul înregistrat fără subdomenii (example.com) pentru a partaja subdomeniile (www.example.com și blog.example.com.)');
define('INTL_SUPPORT', 'Funcții de internaționalizare');
define('XOOPS_SOURCE_CODE', "XOOPS pe GitHub");
define('XOOPS_INSTALLING', 'Se instalează');
define('XOOPS_ERROR_ENCOUNTERED', 'Eroare');
define('XOOPS_ERROR_SEE_BELOW', 'Vedeți mai jos mesajele.');
define('MODULES_AVAILABLE', 'Module disponibile');
define('INSTALL_THIS_MODULE', 'Adăugare %s');
//2.5.11
define('ERR_COPY_CONFIG_FILE', 'Nu s-a putut copia fișierul de configurare %s');
//2.7.0
// website name and slogan
define('_WEBSITE_NAME', 'XOOPS Site');
define('_WEBSITE_SLOGAN', 'Folosește-l!');
define('_WEBSITE_META_KEYWORDS', 'xoops, cadru de aplicații web, cms, sistem de management al conținutului');
define('_WEBSITE_FOOTER', "Produs de XOOPS © 2001-{X_YEAR} <a href='https://xoops.org' rel='external' title='The XOOPS Project'>Proiectul XOOPS</a>");
define('_WEBSITE_COPYRIGHT', 'Copyright © 2001-{X_YEAR}');
define('_WEBSITE_DESCRIPTION', 'XOOPS este un script de portal open source, dinamic, bazat pe orientare obiecte, scris în PHP.');
define('_WEBSITE_CENSOR_REPLACE', 'OOP');
