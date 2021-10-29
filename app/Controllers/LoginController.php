<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class LoginController extends BaseController
{
    protected $username;
    protected $password;
    protected $level;
    protected $nama;
    protected $usermodel;

    public function __construct()
    {
        $this->usermodel = new UserModel();
    }

    public function index()
    {
        //
      //  echo "halaman login";
        return view('login/formlogin');
    }
    public function check(){
        $this->username = $this->request->getVar('username');
        $this->password = $this->request->getVar('password');
        $check = $this->usermodel
                ->where(
                    array(
                        'username'=>$this->username,
                        'password'=>$this->password
                        )
                    )
                    ->first();
        if($check>0){
            //login berhasil
            $data = [
                'SUDAH_LOGIN'   => true,
                'id_user'       => $check['id_user'],
                'level'         => $check['level'],
                'pesan'         => 'Login Berhasil'
            ];
            session()->set($data);
            //echo session()->get('id_user');
            return $this->response->setJSON($data);
        }else{
            //Login Gagal
            $msg = [
                'SUDAH_LOGIN'   => false,
                'pesan'         => 'Login Gagal'
            ];
            return $this->response->setJSON($msg);
        }
    }
    public function logout(){
        session()->destroy();
    }
}
