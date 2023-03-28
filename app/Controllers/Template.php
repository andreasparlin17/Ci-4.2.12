<?php

namespace App\Controllers;

use App\Models\UserModel;

class Template extends BaseController
{
    protected $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }
    public function halamanlogin()
    {
        $data = [
            'users' => $this->userModel->where(['updated_at' => NULL])->find()
        ];
        return view('kelas', $data);
    }

    public function halamanclass() {
        return view('tes');
    }

    public function login() {
        if(empty($this->request->getPost())) {
            return redirect()->to('/');
        }

        
    }
}
