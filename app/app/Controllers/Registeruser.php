<?php


namespace App\Controllers;

use App\Models\User;

class Registeruser extends BaseController
{

    public function registrationForm()
    {
        echo view('partials/header');

        echo view('users/register');

        echo view('partials/footer');
    }

    public function register()
    {
        if(! $this->validate([
             'username' => 'required|min_length[3]|max_length[50]',
             'email' => 'required|valid_email|is_email_exist|is_unique[users.email]',
             'g-recaptcha-response' => "required|recaptcha"
         ], [
             'email' => [
                 'is_unique' => 'You cannot create an account with this email',
                 'is_email_exist' => 'The email field must contain a valid email address'
             ],
            'g-recaptcha-response' => [
                'required' => 'recaptcha is required',
            ]
        ])){
            echo view('partials/header');

            return view('users/register', [
                'errors' => $this->validator->getErrors()
            ]);
        }

        (new User())->save([
               'username' => $this->request->getVar('username'),
               'email' => $this->request->getVar('email')
           ]);

        return redirect()->to('users');
    }

}
