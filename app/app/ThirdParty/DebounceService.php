<?php


namespace App\ThirdParty;

use Config\Services;


class DebounceService
{
    public const INVALID ='Invalid';

    public static function validate(string $email): bool
    {
        try{
            $client = Services::curlrequest();
            $response = $client->request('get', env('DEBOUNCE_API_URL'),
                 ['query' =>
                     [
                         'api' => env('DEBOUNCE_API_KEY'),
                         'email' => strtolower($email)
                     ],
                     'headers' => [
                         'Accept'     => 'application/json',
                     ]
                 ]
            );

           $body =  json_decode((string)$response->getBody());

           if($body->debounce->result === self::INVALID) return FALSE;

           return TRUE;

        }catch (\Exception $e){
            log_message('error', '[ERROR] {exception}', ['exception' => $e]);

            return FALSE;
        }
    }

}
