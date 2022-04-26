<?php 
namespace App\Models;

use CodeIgniter\Model;

class CategoriesAdminModel extends Model{
    protected $table      = 'category';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id';
     protected $allowedFields= ['nameCategory'];
}