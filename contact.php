<?php
declare(strict_types=1);
// contact.php

// Für Debugging (Fehlermeldungen sichtbar machen)
// ini_set('display_errors', '1');
// error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method Not Allowed');
}

// Eingaben validieren & säubern
$firstName = filter_input(INPUT_POST, 'first-name', FILTER_SANITIZE_STRING) ?? '';
$lastName  = filter_input(INPUT_POST, 'last-name',  FILTER_SANITIZE_STRING) ?? '';
$email     = filter_input(INPUT_POST, 'email',      FILTER_VALIDATE_EMAIL)
             or exit('Ungültige E-Mail-Adresse');
$message   = filter_input(INPUT_POST, 'message',    FILTER_SANITIZE_SPECIAL_CHARS) ?? '';

// Mail zusammenbauen
$to      = 'ordination@praxismuster.at';
$subject = 'Kontaktformular: Terminvereinbarung';
$body    = <<<EOT
Name:   {$firstName} {$lastName}
E-Mail: {$email}

Nachricht:
{$message}
EOT;

$headers = [
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
    "From: {$firstName} {$lastName} <{$email}>"
];

// Mail senden & weiterleiten
if ( mail($to, $subject, $body, implode("\r\n", $headers)) ) {
    http_response_code(200);
    exit;
} else {
    http_response_code(500);
    exit('Fehler beim Versenden der Nachricht.');
}
