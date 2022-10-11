<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company_project extends Model
{
    use HasFactory;
    protected $table = 'company_projects';
    protected $id = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['special_id','title' , 'sub_title' ,'description','image'];
}
