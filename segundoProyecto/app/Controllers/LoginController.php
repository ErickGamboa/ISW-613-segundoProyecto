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
        
        $model=model('LoginModel');
        if ($user = $model->getUserLogin('email', $email)){
            if($user['password']==$password){
                if($user['typeUser']=="Administrator"){
                    $obtenerDatos = [
                        'id'=>$user['id'],
                        'name'=>$user['name'],
                    ];
                    $session->set($obtenerDatos);
                return view('CategoriesAdminView');
                }else{
                    $obtenerDatos = [
                        'id'=>$user['id'],
                        'name'=>$user['name'],
                    ];
                    $session->set($obtenerDatos);
                    print("pagina cliente");
                }
            }
        }
       
    }
    public function cerrarSesion(){
        $session = session();
        $session->destroy();
        return view('LoginView');

    }

}