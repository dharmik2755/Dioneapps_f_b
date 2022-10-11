<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class web_develop_title extends Model
{
    use HasFactory;
    protected $table = 'web_develop_titles';
    protected $PrimaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['title','description']; 
}
