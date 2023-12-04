<?php

namespace App\Validators;

use GuzzleHttp\Client;
use Config;

class ReCaptcha
{
    public function validate($attribute, $value, $parameters, $validator)
    {
        $secret   = Config::get('services.recaptcha.secret');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, [
            'secret' => $secret,
            'response' => $value,
            'remoteip' => $_SERVER['REMOTE_ADDR']
        ]);

        // use json_decode to extract json response
        $response = json_decode(curl_exec($ch));

        curl_close($ch);

        return $response->success;
    }
}
