<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'c_id';
    public $timestamps = true;
    protected $dateFormat = 'U';
}
