<?php

$to = "leovisscher07@gmail.com";
$subject = stripslashes($_POST['subject']);

$body = stripslashes($_POST['beginzin']);
$body .= "\n\n-------------------------------------\n\n";

$body .= "Naam: " . $_POST['naam']  . "\n\n";
$body .= "Adres: " . $_POST['adres']  . "\n\n";
$body .= "Telefoonnummer: " . $_POST['telefoon']  . "\n\n";
$body .= "Emailadres: " . $_POST['emailadres']  . "\n\n";
$body .= "Bestelling/Omschrijving: " . $_POST['omschrijving']  . "\n\n";

$header = 'From: insitewebdesign@live.be' . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\n";
$header .= "X-Priority: 1";

if(@mail($to, $subject, $body, $header))
{
    echo "Uw bestelling werd correct verzonden.";
} else {
    echo "Er is een probleem met uw verzending. Probeer het opnieuw.";
}

?>
