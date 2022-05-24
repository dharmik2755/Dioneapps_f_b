<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class renowned extends Model
{
    use HasFactory;
    protected $tabel = "renowneds";
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['title' , 'description' , 'sub_title' , 'sub_description' ];
}
