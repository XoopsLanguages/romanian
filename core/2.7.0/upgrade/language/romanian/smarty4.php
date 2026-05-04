<?php

// _LANGCODE: ro
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'XOOPS Migrare Smarty4');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'Rezultate scaner');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'Rulați Scanarea');
define('_XOOPS_SMARTY4_SCANNER_END', 'Ieșiți din scaner');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'Regula');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'Se potrivește');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'Fișier');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'Număr de remedieri');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'Este necesară examinarea manuală');
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', 'Poate fi remediat automat: pentru fiecare variabilă de articol va fi redenumită prin adăugarea „_item” (de exemplu, „foo” devine „foo_item”).');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'Nu se poate scrie');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Opțiuni de rescanare');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Faceți clic pe caseta de selectare „Da” de mai jos, apoi faceți clic pe butonul Run Scan pentru a încerca să remediați automat orice probleme găsite.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Marcați finalizat');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Director de șabloane (opțional)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Extensie șablon (opțional)');


define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.7.0 introduce o schimbare semnificativă: Smarty 4</h3>

<p>Din păcate, această modificare poate perturba unele teme mai vechi. Prin urmare, înainte de a continua cu upgrade-ul, asigurați-vă că urmați acești pași:

<li>Rulați preflight.php pentru a verifica dacă există teme învechite sau șabloane de module.</li>
<li>Dacă sunt identificate probleme, consultați acest document pentru a înțelege modificările necesare înainte de a continua cu upgrade-ul.</li>
<li>După efectuarea modificărilor necesare, rulați din nou preflight.php.</li>
<li>Dacă nu mai există probleme, puteți începe procesul de actualizare.</li>
</p>
EOT,
);
