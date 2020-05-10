<?php
namespace  App\ThirdParty;

use Config\Services;

class GoogleRecaptchaService
{
    public static function validate(String $recaptcha): bool
    {
        try {
            $client = (new Services())::curlrequest();

            $response  = $client->request('post', env('GOOGLE_RECAPTCHA_SITE_VERIFY'),
                  [
                      'form_params' =>
                          [
                              'secret' => env('GOOGLE_RECAPTCHA_SECRET'),
                              'response' => $recaptcha
                          ],
                      'headers' => [
                          'Accept'     => 'application/json',
                      ]
                  ]
            );

            return json_decode((string)$response->getBody())->success;

        }catch(\Exception $e)
        {
            log_message('error', '[ERROR] {exception}', ['exception' => $e]);
            return FALSE;
        }
    }
}
