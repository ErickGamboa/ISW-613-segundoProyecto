<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RegisterModel;
class RegisterController extends Controller{


    public function index()
    {
        $name = session('name');
        if($name===''){
            return view('LoginView');
        }else{
            return view('RegisterView');
        }
    }

    public function saveUser()
    {
        $user = new RegisterModel();



        $name = $this->request->getVar('name');
        $lastName = $this->request->getVar('lastName');
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $address = $this->request->getVar('address');
        $country = $this->request->getVar('country');
        $city = $this->request->getVar('city');
        $postalCode = $this->request->getVar('postalCode');
        $phoneNumber = $this->request->getVar('phoneNumber');
        $typeUser = $this->request->getVar('typeUser');

        if(empty($name) or empty($lastName) or empty($email) or empty($password) or empty($address) 
        or empty($country) or empty($city) or empty($postalCode) or empty($phoneNumber) or empty($typeUser)){

            session_start();
                $_SESSION['message'] = "YOU HAVE TO PUT ALL INFORMATION";
                return view('RegisterView');

        }else{

            $data=[
                'id'=>NULL , 'name'=> $name , 'lastname'=> $lastName , 'email'=> $email , 'password'=> $password , 'address'=> $address ,
                 'country'=> $country ,'city'=> $city ,'postalCode'=> $postalCode , 'phoneNumber'=> $phoneNumber , 'typeUser'=> $typeUser
            ];
    
            $user->insert($data);
    
            return redirect()->to('/login');

        }



        
        
    }
    
}