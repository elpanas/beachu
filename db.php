<?php
// connessione al database
$db = mysqli_init();
if (!$db)
    die('Errore di inizializzazione');

$db->ssl_set(PATH_TO_SSL_CLIENT_KEY_FILE, 
             PATH_TO_SSL_CLIENT_CERT_FILE,
             PATH_TO_CA_CERT_FILE, null, null);
             
if(!$db->real_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE_NAME,3306,null,MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT))
        die('Errore di connessione ('.$db->connect_errno.') '.$db->connect_error);
