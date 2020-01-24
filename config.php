<?php

require 'paypal/autoload.php';

define('URL_SITIO', 'http://127.0.0.1/paypal/paypal');

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(

        //Correo de paypal -> sb-xjrjs546939@personal.example.com
        //Cliente id
        'AUxUFAocG3ojVgZ0o-7YJ4NoK8qQicwaIScxmRg-iVfq1C02gs16cES8FdLJsqVffaUBB6MWIXi0_R5-',
        //Secret
        'ELmgw3h5e85dr85p8VoxlznRZ0xDCE3NUHjev6uGkPToI6j08kdaDJIRcX-SR3GK3nBNqVW-G7jjj_WT'
    )
);
