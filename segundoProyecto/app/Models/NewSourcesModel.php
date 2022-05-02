<?php 
namespace App\Models;

use CodeIgniter\Model;

class NewSourcesModel extends Model{
    protected $table      = 'newssources';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields= ['nameSource', 'url','categorySource'];
}