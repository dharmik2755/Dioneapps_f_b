<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class footer_fifth extends Model
{
    use HasFactory;
    protected $table = 'footer_fifths';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['link' , 'image' , 'status'];
}
