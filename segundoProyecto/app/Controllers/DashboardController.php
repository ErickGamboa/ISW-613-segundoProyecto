<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DashboardInfoModel;
class DashboardController extends Controller{


    public function index()
    {
        $name = session('name');
        if ($name!='') {
        $info = new DashboardInfoModel();
        $dato['info']=$info->findAll();
        return view('DashboardNewsView',$dato);
        }else{
            return view('LoginView');
        }
    

    }



}