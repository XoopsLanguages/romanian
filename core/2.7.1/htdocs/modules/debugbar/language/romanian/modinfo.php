<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: ro

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'Raportare erori și analiză performanță cu PHP DebugBar');

define('_MI_DEBUGBAR_ENABLE', 'Afișare DebugBar');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Activare Smarty Debug');
define('_MI_DEBUGBAR_FILESDEBUG', 'Activare filă fișiere incluse');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'Afișați toate fișierele PHP încărcate în timpul cererii');
define('_MI_DEBUGBAR_SLOWQUERY', 'Pragul interogărilor lente (secunde)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'Interogările mai lente decât aceasta sunt evidențiate cu roșu (ex. 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      'Jurnalizare interogări');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  'Toate interogările sau numai cele lente și erorile');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  'Toate interogările');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', 'Numai lente și erori');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Activare integrare Ray');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Trimiteți datele de depanare la aplicația Ray');

define('_MI_DEBUGBAR_ADMENU1', 'Acasă');
define('_MI_DEBUGBAR_MENU_ABOUT', 'Despre');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', 'Înapoi la administrare ');
\define('_MI_DEBUGBAR_OVERVIEW', 'Prezentare generală');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', 'Declinare responsabilitate');
\define('_MI_DEBUGBAR_LICENSE', 'Licență');
\define('_MI_DEBUGBAR_SUPPORT', 'Asistență');
