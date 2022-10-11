<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class app_develop_title extends Model
{
    use HasFactory;
    protected $table = 'app_develop_titles';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['special_id','title' , 'des' , 'ios' , 'ios_des', 'android' , 'android_des'];
}
