<?php 
$elenco = null; // inizializza la variabile

$elenco = estraeElenco($db,$messaggio); // estrae i disponibili dal db
$output = creaElenco($elenco,false); // crea l'elenco degli stabilimenti
$text = $output['testo'];

if ($output['inlinek'] != null) $encodedMarkup = $output['inlinek'];

$data = creaMsg($chatID,$text,$encodedMarkup);	// compone il messaggio
inviaMsg($data,$url,true); // invia il messaggio
