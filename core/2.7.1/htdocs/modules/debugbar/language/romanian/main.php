<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: ro

define('_MD_DEBUGBAR_DEBUG', 'Depanare');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'Fișiere incluse');
define('_MD_DEBUGBAR_PHP_VERSION', 'Versiune PHP');
define('_MD_DEBUGBAR_NONE', 'Niciunul');
define('_MD_DEBUGBAR_ERRORS', 'Erori');
define('_MD_DEBUGBAR_DEPRECATED', 'Depășit');
define('_MD_DEBUGBAR_QUERIES', 'Interogări');
define('_MD_DEBUGBAR_BLOCKS', 'Blocuri');
define('_MD_DEBUGBAR_EXTRA', 'Suplimentar');
define('_MD_DEBUGBAR_TIMERS', 'Temporizatoare');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s a durat %s secunde să se încarce.');
define('_MD_DEBUGBAR_TOTAL', 'Total');
define('_MD_DEBUGBAR_NOT_CACHED', 'Nestocate în cache');
define('_MD_DEBUGBAR_CACHED', 'Stocate în cache (se regenerează la fiecare %s secunde)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(șir gol)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'bool TRUE');
define('_MD_DEBUGBAR_BOOL_FALSE', 'bool FALSE');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'Interogări bază de date');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'Utilizare memorie');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d interogări');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d duplicate)');
define('_MD_DEBUGBAR_BYTES', '%s octeți');
define('_MD_DEBUGBAR_DB_VERSION', '%s versiune');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- Număr eroare: %s Mesaj de eroare: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- Eroare #%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', 'Excepție');
define('_MD_DEBUGBAR_RAY_QUERY', 'Interogare #%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', 'LENT');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'Blocare (cache %ds)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'Blocare (nu este stocată în cache)');
define('_MD_DEBUGBAR_RAY_DUMP', 'Export');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'Context șablon');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(fără variabile de șablon)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d vars)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', 'Directorul „module/debugbar/%s” nu a fost creat');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'Nu s-a putut crea directorul „%s” în timpul copierii materialului');
