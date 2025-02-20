<?php
function sanitize_value($value)
{
    $value = trim($value);
    $value = strip_tags($value);
    $value = html_entity_decode($value);
    return $value;
}
echo "metodo ricevuto : " . $_SERVER["REQUEST_METHOD"];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ? sanitize_value($_POST['nome']) : '';
    $cognome = $_POST['cognome'] ? sanitize_value($_POST['cognome']) : '';
    $mail = $_POST['mail'] ? sanitize_value($_POST['mail']) : '';
    $azienda = $_POST['azienda'] ? sanitize_value($_POST['azienda']) : '';
    $ruolo = $_POST['ruolo'] ? sanitize_value($_POST['ruolo']) : '';

    // Process the data (e.g., save to a database, send an email, etc.)
    echo "Form data received successfully!\n";
    echo realpath('formdata.csv');


    $openCsv=fopen('formdata.csv','a');
    if (!$openCsv) { echo "Errore apertura file"; }

    fputcsv($openCsv,[$nome,$cognome,$mail,$azienda,$ruolo ]);
    fclose($openCsv);
    header('location:http://127.0.0.1:5500/index.html?success=1',true,301);
    exit();


} else {
    echo "Invalid request method.";
}
