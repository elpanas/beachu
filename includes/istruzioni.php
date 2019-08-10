<?php
$text = '<b>***Istruzioni***</b>
🇮🇹Italiano
Questo bot controlla la disponibilità di ombrelloni degli stabilimenti balneari, solo usando:
<b>Località:</b>
inserisci il nome della località per ricevere una lista degli stabilimenti disponibili.
Esempio: "riccione" oppure "torre pedrera"
<b>Posizione:</b>
usando il bottone in basso potrai visualizzare gli stabilimenti disponibili vicini alla tua posizione attuale
--------------------------
🇬🇧English
This bot can check the availability of a bathing establishment, just using :
<b>Name of a place:</b>
insert the name of a place in order to get a list of the available bathing establishments.
Example: "riccione" oppure "torre pedrera"
<b>Your position:</b>
clicking on the down button, you will get a list of the available bathing estabilishments near your actual position.';

$encodedMarkup = creaMenuKeyboard();    // crea il menu a tastiera

$data = creaMsg($chatID,$text,$encodedMarkup);	// compone il messaggio
inviaMsg($data,$url,true);  // invia il messaggio
