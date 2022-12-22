<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolio_model extends Model
{
    use HasFactory;
    protected $table = 'portfolios';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['title' , 'description' , 'service_type' , 'playstore_link' , 'appstore_link' , 'web_link' , 'graphic' , 'status'];
}
