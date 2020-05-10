<?php


namespace App\Validation;

use App\ThirdParty\DebounceService;

class CheckFalsifiedEmail
{
    public function is_email_exist(string $email): bool
    {
        return DebounceService::validate($email);
    }
}
