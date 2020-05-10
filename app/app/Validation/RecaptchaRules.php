<?php

namespace  App\Validation;

use App\ThirdParty\GoogleRecaptchaService;

class RecaptchaRules
{
    public function recaptcha(string $recaptcha, string &$error = null): bool
    {
        return GoogleRecaptchaService::validate($recaptcha);
    }
}
