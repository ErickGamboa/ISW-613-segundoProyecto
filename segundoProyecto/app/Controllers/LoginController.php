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
        $session = session();
        $email = trim($this->request->getVar('EmailLogin'));
        $password = trim($this->request->getVar('PasswordLogin'));

        if(empty($email) or empty($password) ){
            session_start();
            $_SESSION['message'] = "YOU HAVE TO PUT ALL INFORMATION";
            return view('LoginView');
        }else{
        
            $model=model('LoginModel');
            if ($user = $model->getUserLogin('email', $email)){
                if($user['password']==$password){
                    if($user['typeUser']=="Administrator"){
                        $obtenerDatos = [
                            'id'=>$user['id'],
                            'name'=>$user['name'],
                        ];
                        $session->set($obtenerDatos);
                        return redirect()->to('/CategoriesAdminView');
                    
                    }else{
                        $obtenerDatos = [
                            'id'=>$user['id'],
                            'name'=>$user['name'],
                        ];
                        $session->set($obtenerDatos);
                        return redirect()->to('/dashboard');
                    }
                }else {
                    session_start();
                    $_SESSION['message'] = "INVALID CREDENTIALS";
                    return view('LoginView');
                }
            }else {
                session_start();
                $_SESSION['message'] = "INVALID CREDENTIALS";
                return view('LoginView');
            }

        }
       
    }

}