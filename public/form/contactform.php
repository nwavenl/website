<?php

if (isset($_POST['submit'])) {
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $telefoon = $_POST['telefoon'];
    $bericht = $_POST['bericht'];

    $mailNaar = "contact@nwave.nl";
    $headers = "From " . $email;
    $txt = "Contact gevraagd door: " . $voornaam . " " . $achternaam . ".\n\n" . $bericht;

    mail($mailNaar, "Contact form bericht", $txt, $headers);
    header("location: nwave.nl/contact");
}
