<?php
#http://localhost/lovemark-landing-page/php/save_form.php
// if ($_SERVER['REQUEST_METHOD'] === 'POST'&& $_POST['informativa']) {
//     $nome = $_POST['nome'] ? sanitize_value($_POST['nome']) : '';
//     $cognome = $_POST['cognome'] ? sanitize_value($_POST['cognome']) : '';
//     $mail = $_POST['mail'] ? sanitize_value($_POST['mail']) : '';
//     $azienda = $_POST['azienda'] ? sanitize_value($_POST['azienda']) : '';
//     $ruolo = $_POST['ruolo'] ? sanitize_value($_POST['ruolo']) : '';

//     echo "Form data received successfully!\n";
//     echo realpath('formdata.csv');


//     $openCsv=fopen('formdata.csv','a');
//     if (!$openCsv) { echo "Errore apertura file"; }

//     fputcsv($openCsv,[$nome,$cognome,$mail,$azienda,$ruolo ]);
//     fclose($openCsv);
//     header('location:http://127.0.0.1:5500/index.html?success=1',true,301);
//     exit();


// } else {
//     echo "Invalid request method.";
//     header('location:http://127.0.0.1:5500/index.html?success=0',true,301);

// }
