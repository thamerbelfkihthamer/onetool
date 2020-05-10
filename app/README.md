# TASK 2

First of all, I want to thank you for your Time.

## Installation & updates

1 - `git clone ..`

2 - `composer install`

3 - `docker-compose up -d`

4 - ` sudo docker exec -it onetool_php_1 bash`

5 - `php spark migrate`

6 -  open `localhost:85`

## What i have done?

Register Feature:

- Create `Registeruser` Controller.
- Create `create_users_migration` to create the user table.
- Create `ThirdParty\GoogleRecaptchaService` to check recaptcha with google recaptcha service.
- Create `ThirdParty\DebounceService` to check the validation of the email with debounce service.
- Create `Validation\RecaptchaRule` as  new rule for the recaptcha field & within it, I just used `GoogleRecaptchaService@validate` method.
- Create `Validation\CheckFalsiFiedEmail` as new rule for check email field & within it, I just used `DebounceService@validate` method.
- Within `Registeruser` Controller there is 2 method, `registrationForm` to show the form, `register` to handle the form.


Users List Feature:

- `localhost:85/users` will show the list of the users.



Thank you again for your time.
