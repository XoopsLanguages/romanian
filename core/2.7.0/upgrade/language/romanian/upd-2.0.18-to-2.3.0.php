<?php
// _LANGCODE: ro
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'Căi fizice XOOPS');
define('LEGEND_DATABASE', 'Setul de caractere din baza de date');

define('XOOPS_LIB_PATH_LABEL', 'XOOPS directorul bibliotecii');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS directorul fișierelor de date');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS datafiles (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');

define('DB_COLLATION_LABEL', 'Setul de caractere și colaţionarea bazei de date');
define('DB_COLLATION_HELP', "Începând cu 4.12 MySQL acceptă setul de caractere personalizat și colaţionare. Cu toate acestea, este mai complex decât se aștepta, așa că NU faceți nicio modificare decât dacă sunteți încrezător în alegerea dvs.");
define('DB_COLLATION_NOCHANGE', 'Nu schimbați');

define('XOOPS_PATH_FOUND', 'Calea găsită.');
define('ERR_COULD_NOT_ACCESS', 'Nu s-a putut accesa folderul specificat. Vă rugăm să verificați dacă acesta există și că poate fi citit de server.');
define('CHECKING_PERMISSIONS', 'Se verifică permisiunile pentru fișiere și director...');
define('ERR_NEED_WRITE_ACCESS', 'Serverul trebuie să aibă acces de scriere la următoarele fișiere și folder<br> (adică <em>chmod 777 directory_name</em> pe un server UNIX/LINUX)');
define('IS_NOT_WRITABLE', '%s NU se poate scrie.');
define('IS_WRITABLE', '%s poate fi scris.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'Eroare la scrierea conținutului în mainfile.php, scrieți manual conținutul în mainfile.php.');
