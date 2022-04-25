<?php 
namespace App\Models;

use CodeIgniter\Model;

class RegisterModel extends Model{
    protected $table      = 'users';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id';
     protected $allowedFields= ['name', 'lastname','email','password','address','country','city','postalCode','phoneNumber','typeUser'];
}    