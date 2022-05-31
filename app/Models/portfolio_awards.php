<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolio_awards extends Model
{
    use HasFactory;
    protected $table = 'portfolio_awards';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['title' , 'description' , 'image' , 'status'];
}
