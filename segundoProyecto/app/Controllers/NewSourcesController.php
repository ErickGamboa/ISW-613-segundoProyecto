<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\NewSourcesModel;
use App\Models\CategoriesAdminModel;
class NewSourcesController extends Controller{

    public function index()
    {
        
        $name = session('name');
            if ($name!='') {
                $category = new CategoriesAdminModel();
                $source = new NewSourcesModel();
                $dato1['category']=$category->findAll();
                $dato2['source']=$source->findAll();
                $datoFinal['info']=[$dato1,$dato2];

                return view('NewSourcesView',$datoFinal);
                
            }else{
                return view('LoginView');
                
            }
        
    }

    public function saveNewsSources()
    {
        $source = new NewSourcesModel();

        $name = $this->request->getVar('nameSource');
        $url = $this->request->getVar('url');
        $category = $this->request->getVar('category');

        if(!empty($name) AND !empty($url) AND !empty($category)){

            $data=[
                'id'=>NULL , 'nameSource'=> $name , 'url'=> $url , 'categorySource'=> $category
            ];
    
            $source->insert($data);
            return redirect()->to('/refreshNewSource');

            

        }else {
            return redirect()->to('/refreshNewSource');
            }


        
    }
    public function deleteSource($id = NULL)
    {
        $source = new NewSourcesModel();
        $source->where('id',$id)->delete($id);
        return redirect()->to('/refreshNewSource');
    }

    public function editSource($id = NULL)
    {

        $category = new CategoriesAdminModel();
        $source = new NewSourcesModel();
        $dato1['source']=$source->where('id',$id)->first();
        $dato2['category']=$category->findAll();
        $datoFinal['info']=[$dato1,$dato2];
        
        return view('/EditSourceView',$datoFinal);

    }

    public function updateSource()
    {
        $source = new NewSourcesModel();

        $name = $this->request->getVar('nameNewsSource');

        if(!empty($name)){

            $id=$this->request->getVar('idEditSource');
            $data =[
                'nameSource'=>$this->request->getVar('nameNewsSource'),
                'categorySource'=>$this->request->getVar('categoryNewsSource')
            ];
            $source->update($id,$data);
            return redirect()->to('/refreshNewSource');
            }else {
                return redirect()->to('/refreshNewSource');
                }



    

    }

}