<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company_work_features extends Model
{
    use HasFactory;
    protected $table = 'company_work_features';
    protected $id = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['special_id','title','description','image'];
}
