<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home_slider extends Model
{
    use HasFactory;
    protected $table = 'home_sliders';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['title' , 'description' , 'image' , 'status'];
}
