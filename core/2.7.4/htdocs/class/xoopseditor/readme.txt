xoopseditor oferă un colectiv de editori pentru XOOPS

ghid de utilizare:

1 verificați fișierele xoops_version.php din /xoopseditor/ pentru a vă asigura că sunt mai noi decât cele actuale

2 încărcați /xoopseditor/ în /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/class/xoopseditor/fckeditor
  XOOPS/class/xoopseditor/koivi
  XOOPS/class/xoopseditor/textarea
  XOOPS/class/xoopseditor/tinymce

3 configurați preferințele acolo unde este cazul
3.1 ./dhtmlext(all editors)/language/: creați fișierul în limba locală bazat pe english.php
3.3 ./dhtmlext(all editors)/editor_registry.php: setați configurațiile pentru editor: ordine - ordinea afișajului în cazul în care se folosește selecția editorului, 0 pentru dezactivat; nohtml - funcționează pentru sintaxa non-html
3.3 ./FCKeditor/module/: copiați fișierele în folderele modulelor în cazul în care sunt necesare permisiuni de încărcare specifice modulelor, opțiuni de stocare și editor
3.3.1 ./FCKeditor/module/fckeditor.config.js: pentru opțiunile editorului, de obicei nu este nevoie să-l schimbați
3.3.2 ./FCKeditor/module/fckeditor.connector.php: pentru a specifica folderul pentru navigarea fișierelor (și stocarea încărcării) => XOOPS/uploads/XOOPS_FCK_FOLDER/, folderul este necesar pentru a fi creat manual
3.3.3 ./FCKeditor/module/fckeditor.upload.php: specificați permisiunea de încărcare și stocarea de încărcare
3.4 XOOPS/uploads/fckeditor/: pentru a crea folderul dacă FCKeditor este activat, folosit pentru încărcări de unde folderul de încărcare nu este specificat
3.5 ./tinymce/tinymce/jscripts/: descărcați fișierele în limba locală din http://tinymce.moxiecode.com/language.php

4 verificați numele fișierelor: pentru sistemul care diferențiază numele fișierelor cu majuscule și minuscule, asigurați-vă că aveți numele fișierelor corecte, adică „FCKeditor” nu este identic cu „fckeditor”

5 verificați /xoopseditor/sampleform.inc.php pentru ghidul de dezvoltare
