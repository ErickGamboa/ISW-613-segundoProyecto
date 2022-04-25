<?php 
namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model{
    protected $table      = 'users';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id';
     protected $allowedFields= ['email','password','typeUser'];

    public function getUserLogin(string $column, string $value ){
        return $this->where($column, $value)->first();
        

    }


}
