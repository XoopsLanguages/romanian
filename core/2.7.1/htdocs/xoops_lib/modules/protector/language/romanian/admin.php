<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Permisiuni');
define('_MD_A_MYMENU_MYPREFERENCES','Preferințe');
// index.php
define('_AM_TH_DATETIME', 'Timp');
define('_AM_TH_USER', 'Utilizator');
define('_AM_TH_IP', 'IP');
define('_AM_TH_AGENT', 'AGENT');
define('_AM_TH_TYPE', 'Tip');
define('_AM_TH_DESCRIPTION', 'Descriere');
define('_AM_TH_BADIPS','IP-uri proaste<br><br><span style="font-weight:normal;">Scrieți fiecare IP o linie<br>blank înseamnă că toate IP-urile sunt permise</span>');
define('_AM_TH_GROUP1IPS','IP-uri permise pentru grup=1<br><br><span style="font-weight:normal;">Scrieți fiecare IP o linie.<br>192.168. înseamnă 192.168.*<br>blank înseamnă că toate IP-urile sunt permise</span>');
define('_AM_LABEL_COMPACTLOG', 'Jurnal compact');
define('_AM_BUTTON_COMPACTLOG', 'Compactați!');
define('_AM_JS_COMPACTLOGCONFIRM', 'Înregistrările duplicate (IP, Tip) vor fi eliminate');
define('_AM_LABEL_REMOVEALL', 'Eliminare toate înregistrările');
define('_AM_BUTTON_REMOVEALL', 'Elimină tot!');
define('_AM_JS_REMOVEALLCONFIRM', 'Toate jurnalele sunt eliminate absolut. Chiar esti bine?');
define('_AM_LABEL_REMOVE', 'Eliminați înregistrările bifate:');
define('_AM_BUTTON_REMOVE', 'Eliminați!');
define('_AM_JS_REMOVECONFIRM', 'Eliminați OK?');
define('_AM_MSG_IPFILESUPDATED', 'Fișierele pentru IP-uri au fost actualizate');
define('_AM_MSG_BADIPSCANTOPEN', 'Fișierul pentru IP rău nu poate fi deschis');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'Fișierul pentru permiterea grupului=1 nu poate fi deschis');
define('_AM_MSG_REMOVED', 'Înregistrările au fost eliminate');
define('_AM_MSG_DELFAILED', 'Nu s-au șters înregistrările');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Transformă directorul de configurații care poate fi scris: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Manager de prefix');
define('_AM_MSG_DBUPDATED', 'Baza de date actualizată cu succes!');
define('_AM_CONFIRM_DELETE', 'Toate datele vor fi eliminate. BINE?');
define('_AM_TXT_HOWTOCHANGEDB',"Dacă doriți să schimbați prefixul,<br> editați manual %s/data/secure.php.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'Nu este sigur');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Dacă puteți vedea o imagine -NG- sau linkul returnează pagina normală, XOOPS_TRUST_PATH nu este plasat corect. Cel mai bun loc pentru XOOPS_TRUST_PATH este în afara DocumentRoot. Dacă nu puteți face asta, trebuie să puneți .htaccess (DENY FROM ALL) chiar sub XOOPS_TRUST_PATH ca a doua modalitate.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Verificați dacă fișierele PHP din TRUST_PATH sunt setate doar pentru citire (trebuie să fie eroare 404,403 sau 500)');
define('_AM_ADV_REGISTERGLOBALS',"Dacă este „ACTIVAT”, această setare invită o varietate de atacuri de injectare. Dacă puteți, setați „register_globals off” în php.ini sau, dacă nu este posibil, creați sau editați .htaccess în directorul dvs. XOOPS:");
define('_AM_ADV_ALLOWURLFOPEN',"Dacă este „ACTIVAT”, această setare permite atacatorilor să execute scripturi arbitrare pe servere la distanță.<br>Numai administratorul poate schimba această opțiune.<br>Dacă sunteți administrator, editați php.ini sau httpd.conf.<br><b>Eșantion de httpd.conf:<br> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br>În caz contrar, revendicați-o administratorilor dvs.");
define('_AM_ADV_USETRANSSID',"Dacă este „ACTIVAT”, ID-ul sesiunii va fi afișat în etichete de ancorare etc.<br>Pentru a preveni declanșarea sesiunii, adăugați o linie în .htaccess în XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"Această setare invită „Injecții SQL”.<br>Nu uitați să activați „Dezinfectare forțată *” în preferințele acestui modul.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Accesați managerul de prefixe');
define('_AM_ADV_MAINUNPATCHED', 'Ar trebui să editați mainfile.php așa cum este scris în README.');
define('_AM_ADV_DBFACTORYPATCHED', 'Fabrica dumneavoastră de baze de date este pregătită pentru DBLayer Trapping anti-SQL-Injection');
define('_AM_ADV_DBFACTORYUNPATCHED', 'Fabrica dumneavoastră de baze de date nu este pregătită pentru DBLayer Trapping anti-SQL-Injection. Sunt necesare unele patch-uri.');
define('_AM_ADV_SUBTITLECHECK', 'Verificați dacă Protector funcționează bine');
define('_AM_ADV_CHECKCONTAMI', 'Contaminare');
define('_AM_ADV_CHECKISOCOM', 'Comentarii izolate');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'și plasați în el linia de mai jos:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Prefix');
define('_AM_PROTECTOR_TABLES', 'Tabele');
define('_AM_PROTECTOR_UPDATED', 'Actualizat');
define('_AM_PROTECTOR_COPY', 'Copiați');
define('_AM_PROTECTOR_ACTIONS', 'Acțiuni');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'Interziceți IP-urile pe înregistrările verificate:');
define('_AM_BUTTON_BAN_BY_IP', 'IP Ban!');
define('_AM_JS_BANCONFIRM', 'IP Bans OK?');
define('_AM_MSG_BANNEDIP', 'IP-urile sunt interzise');
define('_AM_ADMINSTATS_TITLE', 'Rezumat jurnal Protector');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'Luna trecută');
define('_AM_ADMINSTATS_LAST_WEEK', 'Săptămâna trecută');
define('_AM_ADMINSTATS_LAST_DAY', 'Ieri');
define('_AM_ADMINSTATS_LAST_HOUR', 'Ultima oră');
