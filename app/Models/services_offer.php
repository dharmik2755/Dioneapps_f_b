<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services_offer extends Model
{
    use HasFactory;
    protected $tabel = "services_offers";
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['title' , 'description' , 'sub_title' , 'sub_description' , 'image' , 'status'];
}
