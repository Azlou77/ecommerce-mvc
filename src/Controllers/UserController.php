<?php

namespace Ecommerce\Controllers;
use Ecommerce\Controllers\Controller;
use Ecommerce\Models\UserModel;

class UserController extends Controller{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function registerUser($email, $username, $password){
        $user = $this->userModel->register($email, $username, $password);
        $this->render('register', compact('user'));
    }

    public function loginUser($email, $password){
        $user = $this->userModel->login($email, $password);
        $this->render('login', compact('user'));
    }
}
