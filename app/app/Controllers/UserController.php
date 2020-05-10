<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends BaseController
{
    public function index()
    {
        $user = new User();

        $data = [
            'users' => $user->paginate(10),
            'pager' => $user->pager
        ];

        echo view('partials/header');

        echo view('users/index', $data);

        echo view('partials/footer');
    }
}
