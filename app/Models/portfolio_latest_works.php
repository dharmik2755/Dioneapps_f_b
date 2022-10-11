<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolio_latest_works extends Model
{
    use HasFactory;
    protected $table = 'portfolio_latest_works';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['special_id' , 'title' , 'color_image' , 'black_image' , 'status'];
}
