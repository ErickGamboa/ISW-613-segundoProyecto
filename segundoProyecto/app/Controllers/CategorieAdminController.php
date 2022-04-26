<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CategoriesAdminModel;
class CategorieAdminController extends Controller{

    public function index()
    {
        
        $name = session('name');
            if ($name!='') {
                //$category = new CategoriesAdminModel();
                //$dato['category']=$category->findAll();
                print("si paso por aca");
                //print_r($dato);
                return view('CategoriesAdminView');
                
            }else{
                return view('LoginView');
                
            }
        
    }
    public function saveCategory()
    {
        $category = new CategoriesAdminModel();

        $name = $this->request->getVar('nameCategorie');

        $data=[
            'id'=>NULL , 'nameCategory'=> $name
        ];

        $category->insert($data);

        return view('CategoriesAdminView');
        
    }
    

}