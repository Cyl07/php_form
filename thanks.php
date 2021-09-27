<?php

$nameErr = $lastnameErr = $emailErr = $languageErr = $messageErr = '';
$name = $lastname = $email = $language = $message = '';
$phone = $phoneErr = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['user_name'])) {
        $nameErr = 'Name required';
    } else {
        $name = test_input($_POST['user_name']);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = '[Name] Only letters and white space allowed';
        }
    }

    if (empty($_POST['user_lastname'])) {
        $lastnameErr = 'Lastname required';
    } else {
        $lastname = test_input($_POST['user_lastname']);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $lastnameErr = '[Lastname] Only letters and white space allowed';
        }
    }

    if (empty($_POST['user_email'])) {
        $emailErr = 'Email required';
    } else {
        $email = test_input($_POST['user_email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = '[Email] Invalid email format';
        }
    }

    if (empty($_POST['user_phone'])) {
        $phoneErr = 'phone required';
    } else {
        $phone = test_input($_POST['user_phone']);
        if (!preg_match("/^((\+)33|0)[1-9](\d{2}){4}$/", $phone)) {
            $phoneErr = '[Phone] Invalide phone format';
        }
    }

    if (empty($_POST['user_language'])) {
        $languageErr = 'language required';
    } else {
        $language = test_input($_POST['user_language']);
    }

    if (empty($_POST['user_message'])) {
        $messageErr = 'Message required';
    } else {
        $message = test_input($_POST['user_message']);
    }

    if ($messageErr || $nameErr || $lastnameErr || $phoneErr || $emailErr || $languageErr) {
        echo "$nameErr $lastnameErr $phoneErr $emailErr $languageErr $messageErr";
    } else {
        echo "Merci $name $lastname de nous avoir contacté à propos de $language. Un de nos conseiller vous contactera soit à l’adresse $email ou par téléphone au $phone dans les plus brefs délais pour traiter votre demande : $message";
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}
