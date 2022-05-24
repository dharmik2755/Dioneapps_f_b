<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about_experts extends Model
{
    use HasFactory;
    protected $table = 'about_experts';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['title'  , 'description' , 'sub_title'];
}
