<?php

// _LANGCODE: ro
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>XOOPS Upgrader</h2>

<p>
<em>Upgrade</em> va examina această instalare XOOPS și va aplica toate corecțiile necesare pentru a o face compatibilă 
cu noul cod XOOPS. Patch-urile pot include modificări ale bazei de date, adăugând setări implicite pentru noi
elemente de configurare, actualizări de fișiere și date și multe altele.
<p>
După fiecare patch, actualizatorul va raporta starea și va aștepta ca introducerea dvs. să continue. La
la sfârșitul upgrade-ului, controlul va trece la funcția de actualizare a modulului de sistem.

<div class="alert alert-warning">
Odată ce actualizarea este finalizată, nu uitați să:
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> ștergeți folderul de upgrade</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> actualizați orice module care s-au modificat</li>
</div>

EOT,
);
