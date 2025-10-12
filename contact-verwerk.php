<?php
// Alleen POST toegestaan
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die('Method Not Allowed');
}

// Input ophalen en valideren
$naam = trim($_POST['naam'] ?? '');
$email = trim($_POST['email'] ?? '');
$telefoon = trim($_POST['telefoon'] ?? '');
$dienst = trim($_POST['dienst'] ?? '');
$bericht = trim($_POST['bericht'] ?? '');

if (!$naam || !filter_var($email, FILTER_VALIDATE_EMAIL) || !$bericht) {
    die("Vul alle verplichte velden correct in.");
}

// PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'sandbox.smtp.mailtrap.io'; // Jouw SMTP-server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'aae89191939311'; // Jouw e-mailadres
    $mail->Password   = 'c103bfc91934c8'; // Jouw wachtwoord
    $mail->SMTPSecure = 'TLS';
    $mail->Port       = 2525;

    $mail->setFrom('info@rijschoolparaat.nl', "Loodgieter Paraat");
    $mail->addAddress('info@rijschoolparaat.nl');
    $mail->addReplyTo($email, $naam);

    $mail->isHTML(true);
    $mail->Subject = 'Nieuwe contactaanvraag via de website';
    $mail->Body    = "
        <h2>Nieuwe contactaanvraag</h2>
        <p><strong>Naam:</strong> " . htmlspecialchars($naam) . "</p>
        <p><strong>E-mail:</strong> " . htmlspecialchars($email) . "</p>
        <p><strong>Telefoon:</strong> " . htmlspecialchars($telefoon) . "</p>
        <p><strong>Dienst:</strong> " . htmlspecialchars($dienst) . "</p>
        <p><strong>Bericht:</strong><br>" . nl2br(htmlspecialchars($bericht)) . "</p>
    ";

    // Afbeeldingen verwerken
    $heicBijlagen = [];
    if (!empty($_FILES['afbeelding']['name'][0])) {
        $allowedTypes = [
            'image/jpeg',
            'image/png',
            'image/gif',
            'image/webp',
            'image/bmp',
            'image/tiff',
            'image/svg+xml',
            'image/heic',
            'image/heif'
        ];
        $maxFileSize = 5 * 1024 * 1024; // 5MB per bestand

        foreach ($_FILES['afbeelding']['tmp_name'] as $key => $tmpName) {
            if (!is_uploaded_file($tmpName)) continue;

            $fileName = $_FILES['afbeelding']['name'][$key];
            $fileSize = $_FILES['afbeelding']['size'][$key];
            $fileType = mime_content_type($tmpName);

            if ($fileSize > $maxFileSize) continue;
            if (!in_array($fileType, $allowedTypes)) continue;

            $mail->addAttachment($tmpName, $fileName);

            // Zet melding in de mail als het een HEIC is
            if ($fileType === 'image/heic' || $fileType === 'image/heif') {
                $heicBijlagen[] = $fileName;
            }
        }
    }

    // Extra melding als er HEIC-bestanden zijn
    if (count($heicBijlagen) > 0) {
        $mail->Body .= "<p style='color:red'><em>Let op: De volgende bijlagen zijn HEIC-bestanden (iPhone):<br>"
            . implode('<br>', array_map('htmlspecialchars', $heicBijlagen)) .
            "<br>Deze zijn mogelijk niet zichtbaar op alle apparaten.</em></p>";
    }

    $mail->send();
    header('Location: ./bedankt.html'); // Of jouw bedankpagina
    exit;
} catch (Exception $e) {
    error_log("E-mail verzenden mislukt. Fout: {$mail->ErrorInfo}");
    die("Er is een probleem opgetreden bij het verzenden van de e-mail. Foutmelding: " . $mail->ErrorInfo);
}
