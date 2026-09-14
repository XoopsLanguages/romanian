<?php
/**
 * Second-factor challenge strings.
 *
 * A file of their own, apart from user.php: xoops_loadLanguage() falls back
 * to English for a missing file but never fills gaps in a present one, so
 * a language pack that predates the challenge renders it in English rather
 * than failing on an undefined constant.
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

// XOOPS 2.7.4: two-factor challenge
define('_US_2FA_TITLE', 'Al doilea pas');
define('_US_2FA_PROMPT', 'Introduceți codul din aplicația dvs. de autentificare');
define('_US_2FA_CODE', 'Cod de autentificare');
define('_US_2FA_PROMPT_EMAIL', 'Am trimis un cod din șase cifre la %s. Introduceți-l mai jos.');
define('_US_2FA_CODE_EMAIL', 'Codul din e-mailul dvs.');
define('_US_2FA_SEND', 'Trimite un cod nou');
define('_US_2FA_SENT', 'Un cod nou a fost trimis la %s. Este valabil timp de zece minute.');
define('_US_2FA_SEND_WAIT', 'Un cod a fost trimis acum mai puțin de un minut. Verificați căsuța de e-mail și folderul de spam înainte de a solicita altul.');
define('_US_2FA_SEND_FAILED', 'Codul nu a putut fi trimis chiar acum. Încercați din nou peste puțin timp sau folosiți un cod de recuperare.');
define('_US_2FA_EMAIL_SUBJECT', '%s: codul dvs. de autentificare');
define('_US_2FA_EMAIL_BODY', 'Codul dvs. de autentificare pentru %s este:

%s

Este valabil timp de %d minute și funcționează o singură dată. Dacă nu l-ați solicitat, ignorați acest mesaj și luați în considerare schimbarea parolei.');
define('_US_2FA_RECOVERY', 'Folosește un cod de recuperare în schimb');
define('_US_2FA_RECOVERY_HINT', 'Fiecare cod de recuperare funcționează o singură dată. Folosirea unuia vă trimite un e-mail.');
define('_US_2FA_SUBMIT', 'Continuă');
define('_US_2FA_STARTAGAIN', 'Această autentificare a expirat sau a fost întreruptă. Vă rugăm să reîncepeți.');
define('_US_2FA_BACKTOLOGIN', 'Înapoi la formularul de autentificare');
define('_US_2FA_BADCODE', 'Acel cod nu a fost acceptat.');
define('_US_2FA_LOCKED', 'Prea multe încercări. Al doilea pas este blocat timp de cincisprezece minute; un cod de recuperare încă funcționează.');
define('_US_2FA_UNAVAILABLE', 'Al doilea pas nu este disponibil momentan. Un cod de recuperare încă funcționează, sau contactați administratorul site-ului.');
define('_US_2FA_REQUIRED', 'Acest cont are autentificarea în doi pași activată. Vă rugăm să vă autentificați prin pagina de autentificare a site-ului.');
define('_US_2FA_HTTP_LOGIN', 'Această fereastră pop-up nu poate finaliza o autentificare în doi pași prin HTTP deoarece parola dvs. ar fi trimisă necriptată. Folosiți autentificarea site-ului, sau cereți administratorului să activeze HTTPS pentru site.');
define('_US_2FA_LOCKED_MAIL_SUBJECT', '%s: al doilea pas blocat');
define('_US_2FA_LOCKED_MAIL_BODY', 'Au fost introduse cinci coduri greșite pentru al doilea pas pentru contul dvs. de la %s din %s. Al doilea pas este blocat timp de cincisprezece minute. Dacă nu ați fost dvs., schimbați parola.');
define('_US_2FA_RECOVERY_MAIL_SUBJECT', '%s: a fost folosit un cod de recuperare');
define('_US_2FA_RECOVERY_MAIL_BODY', 'Un cod de recuperare a fost folosit pentru a vă autentifica în contul de la %s din %s. Acel cod nu mai funcționează. Dacă nu ați fost dvs., schimbați parola și resetați codurile de recuperare.');
