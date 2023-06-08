<?php
    var_dump($_GET);

    $password_length = $GET['password-length'] ?? '';


    if ($password_length) {
        if (is_numeric($password_length)) {
            $is_password_valid = true;
            $message = 'Ecco la tua password!';
        } else {
            $is_email_valid = false;
            $message = 'Campo non valido, inserisci solo numeri';
        }
    };