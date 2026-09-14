<?php
/**
 * Two-factor management strings.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             core
 * @since               2.7.4
 */

define('_US_2FAM_TITLE', 'Autentificare în doi pași');
define('_US_2FAM_PASSWORD', 'Parola dvs. actuală');
define('_US_2FAM_ENABLE', 'Configurează un autentificator');
define('_US_2FAM_CONFIRM', 'Confirmă autentificatorul');
define('_US_2FAM_CHOOSE', 'Alegeți cum doriți să primiți al doilea pas: o aplicație de autentificare, sau un cod prin e-mail.');
define('_US_2FAM_ENABLE_EMAIL', 'Folosește coduri prin e-mail');
define('_US_2FAM_EMAIL_HELP', 'Coduri prin e-mail: de fiecare dată când vă autentificați, se trimite un cod din șase cifre la %s. Mai puțin sigur decât o aplicație de autentificare, deoarece oricine poate citi e-mailul dvs. poate trece acest pas.');
define('_US_2FAM_EMAIL_STEP', 'Am trimis un cod din șase cifre la %s. Introduceți-l mai jos pentru a confirma. Este valabil timp de zece minute.');
define('_US_2FAM_CONFIRM_EMAIL', 'Confirmă codurile prin e-mail');
define('_US_2FAM_CODE_HELP_EMAIL', 'Codul din șase cifre din e-mailul pe care tocmai vi l-am trimis.');
define('_US_2FAM_ENABLED_EMAIL', 'Codurile prin e-mail sunt înscrise. Pentru a face o modificare, introduceți parola actuală și codul pe care vi-l trimitem prin e-mail, sau un cod de recuperare. Folosiți butonul de mai jos pentru a solicita un cod.');
define('_US_2FAM_SEND', 'Trimite-mi un cod');
define('_US_2FAM_MANUAL', 'Cheie de configurare manuală');
define('_US_2FAM_SCAN', 'Cod QR pentru aplicația dvs. de autentificare');
define('_US_2FAM_STEP_APP', 'Aveți nevoie de un autentificator: orice aplicație sau administrator de parole care generează coduri unice bazate pe timp (TOTP) va funcționa, pe telefon sau computer. Dacă nu aveți încă unul, instalați mai întâi unul la alegere (de ex. Google Authenticator, Microsoft Authenticator, Aegis sau FreeOTP).');
define('_US_2FAM_STEP_ADD', 'În aplicație, adăugați un cont: scanați acest cod QR, sau alegeți introducerea manuală și tastați cheia de configurare afișată mai jos.');
define('_US_2FAM_STEP_CODE', 'Aplicația afișează acum un cod din șase cifre care se schimbă la fiecare 30 de secunde. Introduceți codul afișat chiar acum în câmpul de mai jos și confirmați.');
define('_US_2FAM_CODE_HELP', 'Codul din șase cifre pe care aplicația dvs. de autentificare îl afișează chiar acum.');
define('_US_2FAM_HTTP', 'Această conexiune folosește HTTP simplu. Parola, sesiunea, cheia de configurare a autentificatorului și codurile de recuperare pot fi interceptate. Folosiți HTTPS ori de câte ori este posibil.');
define('_US_2FAM_CODES', 'Salvați aceste coduri de recuperare acum');
define('_US_2FAM_CODES_HELP', 'Fiecare cod funcționează o singură dată. Aceste coduri nu vor mai fi afișate din nou. Păstrați-le într-un loc sigur, separat de acest cont.');
define('_US_2FAM_DISABLE', 'Dezactivează autentificarea în doi pași');
define('_US_2FAM_REGENERATE', 'Înlocuiește codurile de recuperare');
define('_US_2FAM_ENABLED', 'Un autentificator este înscris. Introduceți parola actuală și un cod de autentificare sau de recuperare pentru a face o modificare.');
define('_US_2FAM_DISABLED', 'Autentificarea în doi pași este dezactivată.');
define('_US_2FAM_PAUSED', 'Site-ul a întrerupt provocările în doi pași. Factorul dvs. este păstrat, iar opțiunea „ține-mă minte” rămâne indisponibilă pentru conturile înscrise.');
define('_US_2FAM_UNAVAILABLE', 'Configurarea sau gestionarea autentificării în doi pași nu este disponibilă. Vă rugăm să contactați administratorul site-ului.');
define('_US_2FAM_STARTAGAIN', 'Configurarea a expirat sau contul s-a schimbat. Introduceți parola pentru a începe din nou configurarea.');
define('_US_2FAM_BADPASSWORD', 'Parola dvs. actuală nu a fost acceptată.');
define('_US_2FAM_RESET', 'Resetează autentificarea în doi pași a acestui utilizator');
define('_US_2FAM_STATUS_NONE', 'Neînscris');
define('_US_2FAM_STATUS_TOTP', 'Aplicație de autentificare înscrisă');
define('_US_2FAM_STATUS_EMAIL', 'Coduri prin e-mail înscrise');
define('_US_2FAM_STATUS_UNAVAILABLE', 'Stare indisponibilă');
define('_US_2FAM_RESET_HELP', 'Aceasta dezactivează al doilea factor al utilizatorului, indiferent de metoda înscrisă, și revocă codurile de recuperare și cookie-urile „ține-mă minte”. Sesiunile deja autentificate rămân active. Introduceți propria parolă de administrator pentru a confirma.');
define('_US_2FAM_RESET_DONE', 'Autentificarea în doi pași a utilizatorului a fost resetată.');
define('_US_2FAM_BACK', 'Înapoi la cont');
define('_US_2FAM_DONE', 'Autentificarea în doi pași este activată.');
define('_US_2FAM_REPLACED', 'Codurile de recuperare anterioare au fost revocate.');
define('_US_2FAM_NOTICE_SUBJECT', '%s: autentificarea în doi pași a fost modificată');
define('_US_2FAM_NOTICE_BODY', 'Autentificarea în doi pași sau codurile de recuperare pentru contul dvs. de la %s au fost modificate din %s. Dacă nu ați fost dvs., contactați administratorul site-ului.');
define('_US_2FAM_RESET_SUBJECT', '%s: un administrator v-a resetat autentificarea în doi pași');
define('_US_2FAM_RESET_BODY', 'Un administrator v-a dezactivat al doilea factor și a revocat codurile de recuperare la %s din %s. Sesiunile deja autentificate rămân active. Autentificați-vă și configurați din nou autentificarea în doi pași. Contactați administratorul site-ului dacă acest lucru a fost neașteptat.');
