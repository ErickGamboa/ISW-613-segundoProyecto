<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CategoriesAdminModel;
class CategorieAdminController extends Controller{

    public function index()
    {
        
        $name = session('name');
            if ($name!='') {
                $category = new CategoriesAdminModel();
                $dato['category']=$category->findAll();
                return view('CategoriesAdminView',$dato);
                
            }else{
                return view('LoginView');
                
            }
        
    }
    public function saveCategory()
    {
        $category = new CategoriesAdminModel();

        $name = $this->request->getVar('nameCategorie');

        if(!empty($name)){
            
        $data=[
            'id'=>NULL , 'nameCategory'=> $name
        ];

        $category->insert($data);

        return redirect()->to('/CategoriesAdminView');

        }else {
        return redirect()->to('/CategoriesAdminView');
        }

        
    }
    public function deleteCategory($id = NULL)
    {

        $category = new CategoriesAdminModel();

        $category->where('id',$id)->delete($id);

        return redirect()->to('/CategoriesAdminView');
    }

    public function editCategory($id = NULL)
    {

        $category = new CategoriesAdminModel();
        $var['category']=$category->where('id',$id)->first();
        
        return view('/EditCategoryView',$var);

    }

    public function updateCategory()
    {
        $category = new CategoriesAdminModel();

        $name = $this->request->getVar('nameCategorieEdit');

        if(!empty($name)){

            $id=$this->request->getVar('id');
            $data =[
                'nameCategory'=>$this->request->getVar('nameCategorieEdit')
            ];
            $category->update($id,$data);
            return redirect()->to('/CategoriesAdminView');
            }else {
                return redirect()->to('/CategoriesAdminView');
                }



    

    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }

    

}