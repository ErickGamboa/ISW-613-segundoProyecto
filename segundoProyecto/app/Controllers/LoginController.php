<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LoginModel;
class LoginController extends Controller{

    public function index()
    {
        return view('LoginView');
    }
    public function authentication(){
        
        $email = trim($this->request->getVar('EmailLogin'));
        $password = trim($this->request->getVar('PasswordLogin'));

        $model=model('LoginModel');
        if ($user = $model->getUserLogin('email', $email)){
            if($user['password']==$password){
                print("entrooo");
            }
        }
       // print_r($user['password']);
       // print_r($user['email']);

        //if($user = $model->getUserLogin('email', $email)){
            
       // }
    }

}