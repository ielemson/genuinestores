<?php

namespace App\Models;

use CodeIgniter\Model;

class Product extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'products';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = ['name','slug','cprice','sprice','qty','cat_id','status','description','cover_img','title'];

    // Dates
    protected $useTimestamps        = true;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    // Validation
    protected $validationRules      = [];
     	// we need different rules for registration, account update, etc
	protected $dynamicRules = [
		'storeProducts' => [
            'name' => 'required|min_length[5]|max_length[255]',
            'title' => 'required|min_length[5]|max_length[50]',
            // 'images[]' =>'required',
            'cprice' => 'required',
            'sprice' => 'required',
            'qty' => 'required',
            'description' => 'required|min_length[3]|max_length[255]',
            'status'  => 'required',
            'cat_id'  => 'required',
		],
	
	];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks       = true;
    protected $beforeInsert         = [];
    protected $afterInsert          = [];
    protected $beforeUpdate         = [];
    protected $afterUpdate          = [];
    protected $beforeFind           = [];
    protected $afterFind            = [];
    protected $beforeDelete         = [];
    protected $afterDelete          = [];


    public function getRule(string $rule)
	{
		return $this->dynamicRules[$rule];
	}
}
